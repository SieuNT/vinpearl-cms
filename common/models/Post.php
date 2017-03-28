<?php

namespace common\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @var
     */
    public $image;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
                'ensureUnique' => true,
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'image',
                'pathAttribute' => 'image_path',
                'baseUrlAttribute' => 'image_url'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['title', 'slug', 'image_path', 'image_url'], 'string', 'max' => 255],
            [['image'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Tiêu đề'),
            'slug' => Yii::t('app', 'Đường dẫn thân thiện'),
            'image' => Yii::t('app', 'Ảnh đại diện'),
            'content' => Yii::t('app', 'Nội dung'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @inheritdoc
     * @return PostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PostQuery(get_called_class());
    }
}
