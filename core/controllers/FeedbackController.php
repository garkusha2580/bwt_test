<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 18.05.2017
 * Time: 22:30
 */

namespace core\controllers;

/*
 * Контроллер всех действий с фидбеками
 */

use core\controllers\AbsController\MomController;
use core\controllers\middleware\AccessChecker;
use core\models\FeedModel;
use ReCaptcha;

class FeedbackController extends MomController
{

    /**
     * @method init
     * проверка прав доступа
     * Показ всех новостей
     */
    public function init ()
    {
        AccessChecker::auth ();
        static::$model = new FeedModel();
        $_POST["feeds"] = static::$model->begin ( "select" , [':preview' => 0 , ':paginate' => 5] );
        static::$view->render ( "feeds" );

    }

    /**
     *
     * @param null $id
     * @method viewFeed
     * проверка прав доступа
     * Показ Конкретной новости
     */
    public function viewFeed ( $id = null )
    {
        AccessChecker::auth ();
        static::$model = new FeedModel();
        $_POST["feed"] = static::$model->begin ( "selectAlone" , [':id' => $id] );
        static::$view->render ( "Singlefeed" );
    }

    /**
     * @method addFeed
     * Форма ввода Новостей
     * Проверка капчи - если нет обратно на форму
     * да - ввод в бд и перенаправ на страницу новостей
     */
    public function addFeed ()
    {
        $status = FeedbackController::captchaChecker ();
        if (!$status->success) {
            header ( "Location:/addform" );
            return;
        }
        static::$model = new FeedModel();
        static::$model->begin (
            "insert" ,
            [
                ":body" => $_POST['body'] ,
                ":date" => date ( "Y-m-d H:i:s" ) ,
                ":author" => $_POST['name'] ,
                ":email" => $_POST['email']] );
        header ( "Location:/feeds" );
    }

    /**
     * @method captchaChecker
     * проверка капчи Google
     * @return mixed
     */
    public static function captchaChecker ()
    {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $query = $url . "?secret=" . SECRET_CAPTCHA . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER["REMOTE_ADDR"];
        $data = json_decode ( file_get_contents ( $query ) );
        return $data;
    }


    /**
     * @method showForm
     * отрисовка формы фидбека
     */
    public function showForm ()
    {
        static::$view->render ( "form" );
    }
}