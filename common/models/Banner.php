<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $position
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $link
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Banner extends \yii\db\ActiveRecord
{

    public $image;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
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
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'position'], 'required'],
            [['position'], 'string'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['title', 'slug', 'image_path','image_url', 'link'], 'string', 'max' => 255],
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
            'position' => Yii::t('app', 'Vị trí hiện thị'),
            'title' => Yii::t('app', 'Tiêu đề'),
            'slug' => Yii::t('app', 'Đường dẫn thân thiện'),
            'image' => Yii::t('app', 'Hình ảnh'),
            'link' => Yii::t('app', 'Liên kết'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @inheritdoc
     * @return BannerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BannerQuery(get_called_class());
    }
}
