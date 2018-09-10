<?php

namespace humhub\modules\hikage\models;

class deletepostsConfigureForm extends \yii\base\Model
{

    public $days;

    public function rules()
    {
        return array(
            array('days', 'required'),
            array('days', 'integer', 'min' => 0, 'max' => 1000),
        );
    }

    public function attributeLabels()
    {
        return array(
            'days' => '保存日数',
        );
    }
}
