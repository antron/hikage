<?php

namespace humhub\modules\hikage\controllers;

use Yii;
use humhub\models\Setting;

class ConfigController extends \humhub\modules\admin\components\Controller
{

    public function actionIndex()
    {
        $model = new \humhub\modules\hikage\models\deletepostsConfigureForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Setting::Set('daysOfStore', $model->days, 'hikage');
        }
        
        $model->days = Setting::Get('daysOfStore', 'hikage');

        return $this->render('index', ['model' => $model]);
    }

}
