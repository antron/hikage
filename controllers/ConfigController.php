<?php

namespace humhub\modules\hikage\controllers;

use humhub\modules\user\models\ProfileField;

class ConfigController extends \humhub\modules\admin\components\Controller
{

    public function actionIndex()
    {

        $kako = date('Y-m-d', strtotime('-2 week', time()));

        $posts = \humhub\modules\post\models\Post::find()->where(['<', 'created_at', $kako])->all();

        foreach ($posts as $post) {
            $post->delete();
        }

        return $this->render('index', []);
    }
}
