<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TestimonialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Câu chuyện khách hàng');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonial-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= Html::a(Yii::t('app', 'Thêm mới'), ['create'], ['class' => 'btn btn-info m-b-15']) ?>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'project.title',
                'label' => 'Dự án'
            ],
            [
                'attribute' => 'content',
                'format' => 'html',
                'label' => 'Nội dung',
                'value' => function ($model) {
                    return \yii\helpers\StringHelper::truncateWords(strip_tags($model->content), 50);
                }
            ],
            'full_name',
            'company',
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
