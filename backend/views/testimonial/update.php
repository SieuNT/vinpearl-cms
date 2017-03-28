<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Testimonial',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Testimonials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="testimonial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
