<?php

use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['site/upload'],
            'sortable' => true,
            'maxFileSize' => 10 * 1024 * 1024, // 10 MiB
            'maxNumberOfFiles' => 1,
            'acceptFileTypes' => new JsExpression('/(\.|\/)(gif|jpe?g|png)$/i'),
            'clientOptions' => [
                'disableImagePreview'=> true,
                'disableImageLoad'=> true,
            ]
        ]
    ) ?>

    <?= $form->field($model, 'content')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions([
            'elFinder',
        ],[
            'preset' => 'full',
            'inline' => false,
        ])
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Thêm mới') : Yii::t('app', 'Cập nhật'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
