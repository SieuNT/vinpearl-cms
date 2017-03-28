<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Tin tức biệt thự biển VinPearl';
?>
<p>&nbsp;</p>
<div class="container">
    <div class="row">
        <div class="col-xs-3">
            <?php
            $banners = (new \yii\db\Query())
                ->select(['image_path', 'image_url', 'link'])
                ->from('banner')
                ->where(['position' => 'banner_left'])
                ->limit(3)
                ->all();
            ?>
            <?php foreach ($banners as $banner): ?>
                <?= Html::a(Html::img($banner['image_url'] . '/' . $banner['image_path'], ['class' => 'img-responsive']), $banner['link']); ?>
                <p>&nbsp;</p>
            <?php endforeach; ?>
        </div>
        <div class="col-xs-9">
            <?php foreach ($models as $model): ?>
            <div class="row">
                <div class="col-xs-4">
                    <?=Html::a(Html::img($model['image_url'] . '/' . $model['image_path'], ['class' => 'img-responsive']), ['post/view', 'slug' => $model['slug']])?>
                </div>
                <div class="col-xs-8">
                    <h4 class="post-item--title">
                        <?= Html::a($model['title'], ['post/view', 'slug' => $model['slug']]); ?>
                    </h4>
                    <div class="post-item--desc">
                        <?= \yii\helpers\StringHelper::truncateWords(strip_tags($model['content']), 90) ?>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
            <?php endforeach; ?>
            <?php
            echo LinkPager::widget([
                'pagination' => $pages,
            ]);
            ?>
        </div>
    </div>
</div>
