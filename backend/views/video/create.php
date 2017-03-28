<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = Yii::t('app', 'Quản lý Video - Thêm mới');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Videos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
