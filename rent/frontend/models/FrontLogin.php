<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "front_login".
 *
 * @property integer $front_id
 * @property string $front_tel
 * @property string $front_sex
 * @property string $front_pwd
 * @property string $front_score
 */
class FrontLogin extends \yii\db\ActiveRecord
{
    public $front_tel;
    public $front_sex;
    public $front_pwd;
    public $front_score;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'front_login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['front_tel', 'front_sex', 'front_pwd', 'front_score'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'front_id' => 'Front ID',
            'front_tel' => 'Front Tel',
            'front_sex' => 'Front Sex',
            'front_pwd' => 'Front Pwd',
            'front_score' => 'Front Score',
        ];
    }
}
