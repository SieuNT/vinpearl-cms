<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Fqa */

$this->title = Yii::t('app', 'Câu hỏi thường gặp - Thêm mới');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fqas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fqa-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
