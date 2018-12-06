<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        \Yii::$app->apiResponse->ok(1, 'Welcome to Awok R&D and Development Center');
    }

    public function actionError()
    {
        \Yii::$app->apiResponse->error(-1, 'Not Found', 404);
    }
}
