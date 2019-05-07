<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\LoginForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     * @return string
     */
    public function actionIndex()
    {
        /**@var \yii\redis\Connection $redis*/
        $redis = Yii::$app->redis;
        $redis->incr('COUNTER');
        $counter = $redis->get('COUNTER');
        return $this->render('index', ['counter'=>$counter]);
    }
    /**
     * Displays about page.
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
