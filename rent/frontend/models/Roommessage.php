<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;


/**
 * This is the model class for table "roommessage".
 *
 * @property integer $h_id
 * @property string $h_site
 * @property string $h_price
 * @property string $h_type
 * @property string $h_desc
 * @property string $h_acreage
 * @property string $h_direction
 * @property string $h_deploy
 * @property string $h_state
 * @property string $h_name
 * @property string $imageFile
 */
class Roommessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFiles;
    public static function tableName()
    {
        return 'roommessage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['h_price'], 'number'],
            [['h_site', 'h_type', 'h_desc', 'h_acreage', 'h_direction', 'h_deploy', 'h_state', 'h_name', 'imageFiles'], 'string', 'max' => 255],
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg ,gif,bmp', 'maxFiles' => 4],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'h_id' => 'H ID',
            'h_site' => 'H Site',
            'h_price' => 'H Price',
            'h_type' => 'H Type',
            'h_desc' => 'H Desc',
            'h_acreage' => 'H Acreage',
            'h_direction' => 'H Direction',
            'h_deploy' => 'H Deploy',
            'h_state' => 'H State',
            'h_name' => 'H Name',
            'imageFiles' => 'Image File',
        ];
    }

    public function upload()
    {
            foreach ($this->imageFiles as $file) {
                $file->saveAs('../../../laravel/public/uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
    }

}
