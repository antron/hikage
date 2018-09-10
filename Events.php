<?php
/**
 * Events.
 * 
 * @version 0.0.1
 */

namespace humhub\modules\hikage;

use Yii;

/**
 * Events.
 * 
 * @version 0.0.1
 */
class Events
{

    /**
     * クーロン実行.
     */
    public static function onCronRun($event)
    {
        $controller = $event->sender;

        $controller->stdout("Deleting old Posts... ");

        if (Yii::$app->controller->action->id == 'daily') {

            $days = '-' . Setting::Get('daysOfStore', 'deleteposts') . ' days';

            $kako = date('Y-m-d', strtotime($days, time()));

            $posts = \humhub\modules\post\models\Post::find()
                    ->where(['<', 'created_at', $kako])
                    ->all();

            foreach ($posts as $post) {
                $post->delete();
            }
        }

        $controller->stdout('done.' . PHP_EOL, \yii\helpers\Console::FG_GREEN);
    }
}
