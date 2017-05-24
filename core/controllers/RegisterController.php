<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 18.05.2017
 * Time: 22:55
 */

namespace core\controllers;

/**
 * @class RegisterController
 * выполнение всех операций с доступом к сайту
 * и регистрации.
 */

use core\controllers\AbsController\MomController;
use core\models\AccessModel;

class RegisterController extends MomController
{
    //Отрисовка формы регистрации
    public function init ()
    {
        static::$view->render ( "register" );
    }

    // Метод регистрации и занесение в  БД
    public function register ()
    {
        $pass = crypt ( $_POST["pass"] , "CRYPT_SHA256" );
        $sessId = crypt ( $_POST["login"] . $pass , "CRYPT_SHA256" );

        static::$model = new AccessModel();
        static::$model->begin ( "insert" ,
            [
                ":Login" => $_POST["login"] ,
                ":created" => date ( "Y-m-d H:i:s" ) ,
                ":Pass" => $pass ,
                ":email" => $_POST["email"] ,
                ":birth" => $_POST["birth"] ,
                ":male" => $_POST["male"]] );

        static::$model->begin ( "insertSess" , [":hash" => $sessId , ":status" => FALSE] );
        header ( "Location:/auth" );
    }

    //Отрисовка формы входа
    public function auth ()
    {
        static::$view->render ( "authForm" );
    }

    //Метод входа на сайт
    public function setAuth ()
    {
        $pass = crypt ( $_POST["Pass"] , "CRYPT_SHA256" );
        $sessId = crypt ( $_POST["Login"] . $pass , "CRYPT_SHA256" );
        static::$model = new AccessModel();
        $_POST['authStatus'] = static::$model->begin ( "select" , [":Login" => $_POST["Login"] , ":Pass" => $pass] );
        if (!empty( $_POST["authStatus"][0]["id"] )) {
            static::$model->begin ( "updateSess" , [":status" => TRUE , ":hash" => $sessId] );
            setcookie ( "status" , $sessId , 0 , "" , "" , false , true );
            header ( "Location:/feeds" );
            return;
        }
        header ( "Location:/home" );
    }

    //Выход с сайта(уничтожение куки)
    public function logout ()
    {
        if ($_COOKIE['status']) {
            static::$model = new AccessModel();
            static::$model->begin ( "updateSess" , [":status" => FALSE , ":hash" => $_COOKIE['status']] );
            setcookie ( 'status' , NULL );
            header ( "Location:/home" );
        }
    }


}