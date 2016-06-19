<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $c_id
 * @property string $c_user
 * @property string $c_content
 * @property string $c_house
 */
class Comment extends \yii\db\ActiveRecord
{
    public $c_user;
    public $c_content;
    public $c_house;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_user', 'c_content', 'c_house'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'c_user' => 'C User',
            'c_content' => 'C Content',
            'c_house' => 'C House',
        ];
    }
}
