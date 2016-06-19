<?php
namespace frontend\models;
use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%host}}".
 *
 * @property integer $h_id
 * @property string $h_name
 * @property string $h_tel
 * @property string $h_message
 * @property string $imageFile
 */
class Host extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%host}}';
    }

    /**
     * @inheritdoc
     */
	 public $imageFiles;

    public function rules()
    {
        return [
            [['h_name', 'h_tel', 'h_message', 'imageFile'], 'string', 'max' => 255],
			//[['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
		[['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'h_id' => 'H ID',
            'h_name' => 'H Name',
            'h_tel' => 'H Tel',
            'h_message' => 'H Message',
            'imageFiles' => '',
        ];
    }
	//处理上传
	public function upload()
    {
        
            foreach ($this->imageFiles as $file) {
                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;

         
    }

}
