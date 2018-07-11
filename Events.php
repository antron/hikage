<?php

namespace humhub\modules\hikage;

use Yii;

class Events
{

    /**
     * Handles cron run event to send mail summaries to the users
     *
     * @param \yii\base\ActionEvent $event
     */
    public static function onCronRun()
    {
        if (Yii::$app->controller->action->id == 'daily') {
            $kako = date('Y-m-d', strtotime('-2 week', time()));

            $posts = \humhub\modules\post\models\Post::find()
                    ->where(['<', 'created_at', $kako])
                    ->all();

            foreach ($posts as $post) {
                $post->delete();
            }
        }
    }
}
