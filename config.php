<?php

use humhub\widgets\TopMenu;
use humhub\commands\CronController;

return [
    'id' => 'hikage',
    'class' => 'humhub\modules\hikage\Module',
    'namespace' => 'humhub\modules\hikage',
    'urlManagerRules' => [
        '/page' => '/hikage/page/view',
    ],
    'events' => [
        [
            'class' => TopMenu::className(),
            'event' => TopMenu::EVENT_INIT,
            'callback' => array('humhub\modules\hikage\Module', 'onTopMenuInit')
        ],
        [
            'class' => CronController::className(),
            'event' => CronController::EVENT_ON_DAILY_RUN,
            'callback' => [
                'humhub\modules\hikage\Events',
                'onCronRun'
            ]
        ],
    ],
];
?>