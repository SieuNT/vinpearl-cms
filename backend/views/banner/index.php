<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Quản lý quảng cáo');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= Html::a(Yii::t('app', 'Thêm mới'), ['create'], ['class' => 'btn btn-info m-b-15']) ?>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'position',
            'title',
//            'slug',
//            'image',
            // 'link',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
