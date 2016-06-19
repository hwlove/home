<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "goods_city".
 *
 * @property integer $goods_id
 * @property string $goods_name
 * @property string $goods_sort
 * @property string $goods_price
 * @property integer $goods_num
 * @property string $goods_pic
 */
class GoodsCity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $goods_pic;
    public static function tableName()
    {
        return 'goods_city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			[['goods_pic'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],

            [['goods_num'], 'integer'],
            [['goods_name', 'goods_sort', 'goods_price', 'goods_pic'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'goods_name' => 'Goods Name',
            'goods_sort' => 'Goods Sort',
            'goods_price' => 'Goods Price',
            'goods_num' => 'Goods Num',
            'goods_pic' => '',
        ];
    }
	 public function upload()
    {
		$this->goods_pic->saveAs('../../../laravel/public/goods/' . md5($this->goods_pic->baseName) . '.' . $this->goods_pic->extension);
		$a=md5($this->goods_pic->baseName) . '.' . $this->goods_pic->extension;
		return $a;
    }

}
