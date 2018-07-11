<?php
/**
 * Assets.
 */

namespace humhub\modules\hikage;

use yii\web\AssetBundle;

/**
 * Assets.
 */
class Assets extends AssetBundle
{

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
