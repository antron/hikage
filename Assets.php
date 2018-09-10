<?php
/**
 * Assets.
 */

namespace humhub\modules\hikage;

use yii\web\AssetBundle;

/**
 * Assets.
 * 
 * @version 0.0.1
 */
class Assets extends AssetBundle
{
    public $css = [
        'hikage.css',
    ];

    /**
     * init.
     * assetsフォルダのパスを指定する。
     */
    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';

        parent::init();
    }
}
