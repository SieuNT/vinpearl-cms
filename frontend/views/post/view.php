<?php
use yii\helpers\Html;

$this->title = $model->title;
/* @var $this yii\web\View */
?>
<p>&nbsp;</p>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-9 hidden-sm">
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
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <h4 class="post-detail--title"><?=$model->title?></h4>
            <div class="post-detail--content">
                <?=$model->content ?>
            </div>
        </div>
    </div>
</div>
