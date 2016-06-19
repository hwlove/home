<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "goods_sort".
 *
 * @property integer $s_id
 * @property string $s_name
 */
class GoodsSort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $s_name;
    public static function tableName()
    {
        return 'goods_sort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            's_name' => '分类名称',
        ];
    }
}
