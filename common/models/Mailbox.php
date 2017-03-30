<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "mailbox".
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $source
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $secret_key
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Project $project
 */
class Mailbox extends \yii\db\ActiveRecord
{
    public $secret_key = '';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mailbox';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id'], 'integer'],
            [['content'], 'string'],
            [['created_at', 'updated_at', 'secret_key'], 'safe'],
            [['source', 'secret_key', 'name', 'email', 'phone'], 'string', 'max' => 255],
            [['name', 'email', 'phone'], 'required'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'project_id' => Yii::t('app', 'Dự Án'),
            'secret_key' => Yii::t('app', 'Mã bí mật'),
            'source' => Yii::t('app', 'Nguồn'),
            'name' => Yii::t('app', 'Họ và Tên'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Số điện thoại'),
            'content' => Yii::t('app', 'Nội dung'),
            'created_at' => Yii::t('app', 'Ngày liên hệ'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * @inheritdoc
     * @return MailboxQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MailboxQuery(get_called_class());
    }
}
