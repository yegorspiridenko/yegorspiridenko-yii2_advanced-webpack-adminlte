<?php

namespace frontend\controllers;

use yii\captcha\CaptchaAction;
use yii\console\Response;
use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
            'captcha' => [
                'class' => CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Отображает главную страницу
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}