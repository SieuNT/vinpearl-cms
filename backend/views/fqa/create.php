<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Fqa */

$this->title = Yii::t('app', 'Create Fqa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fqas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fqa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
