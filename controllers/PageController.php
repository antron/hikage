<?php

namespace humhub\modules\hikage\controllers;

use Yii;
use humhub\models\Setting;

class PageController extends \humhub\components\Controller
{

    public function actionView()
    {
        $page = Yii::$app->request->get('id');

        $appName = Yii::$app->name;

        $daysOfStore = Setting::Get('daysOfStore', 'hikage');

        return $this->render($page, ['appName' => $appName,'daysOfStore' => $daysOfStore]);
    }
}
