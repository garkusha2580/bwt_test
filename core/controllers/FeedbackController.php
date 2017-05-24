<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 18.05.2017
 * Time: 22:30
 */

namespace core\controllers;


use core\controllers\AbsController\MomController;
use core\controllers\middleware\AccessChecker;
use core\models\FeedModel;
use ReCaptcha;

class FeedbackController extends MomController
{

    public function init()
    {
        AccessChecker::auth();
        static::$model = new FeedModel();
        $_POST["feeds"] = static::$model->begin("select", [':preview' => 0, ':paginate' => 5]);
        static::$view->render("feeds");

    }

    public function viewFeed($id = null)
    {
        AccessChecker::auth();
        static::$model = new FeedModel();
        $_POST["feed"] = static::$model->begin("selectAlone", [':id' => $id]);
        static::$view->render("Singlefeed");
    }

    public function addFeed()
    {
        $status = FeedbackController::captchaChecker();
        if (!$status->success) {
            header("Location:/addform");
            return;
        }
        static::$model = new FeedModel();
        static::$model->begin(
            "insert",
            [
                ":body" => $_POST['body'],
                ":date" => date("Y-m-d H:i:s"),
                ":author" => $_POST['name'],
                ":email" => $_POST['email']]);
        header("Location:/feeds");
    }

    public static function captchaChecker()
    {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $query = $url . "?secret=" . SECRET_CAPTCHA . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER["REMOTE_ADDR"];
        $data = json_decode(file_get_contents($query));
        return $data;
    }


    public function showForm()
    {
        static::$view->render("form");
    }
}