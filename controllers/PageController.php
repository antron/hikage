<?php

namespace humhub\modules\hikage\controllers;

use Yii;

class PageController extends \humhub\components\Controller
{

    public function actionView()
    {
        $page = Yii::$app->request->get('id');

        return $this->render($page);
    }

}
