<?php
/**
 * Module.
 */
namespace humhub\modules\hikage;

use Yii;
use yii\helpers\Url;

/**
 * Module.
 */
class Module extends \humhub\components\Module
{

    public function getConfigUrl()
    {
        return Url::to(['/hikage/config/index']);
    }

    public static function onTopMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => 'About',
            'url' => Url::to(['/hikage/page/view', 'id' => 'about']),
            'icon' => '<i class="fa fa-info-circle"></i>',
            'isActive' => self::isActive(),
            'sortOrder' => 800,
        ));
    }

    private static function isActive()
    {
        if (!Yii::$app->controller->module) {
            return false;
        }

        if (Yii::$app->controller->module->id <> 'hikage') {
            return false;
        }

        if (Yii::$app->controller->id <> 'page') {
            return false;
        }

        if (Yii::$app->request->get('id') <> 'about') {
            return false;
        }

        return true;
    }
}

?>