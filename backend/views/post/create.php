<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = Yii::t('app', 'Quản lý tin tức - Thêm mới');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
