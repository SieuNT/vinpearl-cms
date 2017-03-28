<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fqa */

$this->title = Yii::t('app', 'Câu hỏi thường gặp - Cập nhật');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fqas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="fqa-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
