<?php

namespace app\modules\v1\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public $userData;
    public $openActions = ['tracking'];

    public function actionIndex()
    {
        \Yii::$app->apiResponse->ok(1, 'Lets check');
    }
}
