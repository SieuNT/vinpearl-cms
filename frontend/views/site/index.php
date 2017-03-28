<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Biệt thự biển VinPearl';
?>
<p>&nbsp;</p>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <?php
            $video = (new \yii\db\Query())
                ->select(['video_link'])
                ->from('video')
                ->where(['project_id' => 1])
                ->one();
            ?>
            <div class="videoWrapper">
                <iframe width="585" height="329"
                        src="<?php echo str_replace('watch?v=', 'embed/', $video['video_link']) ?>" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <?php
            $testimonials = (new \yii\db\Query())
                ->select(['content', 'full_name', 'company'])
                ->from('testimonial')
                ->limit(3)
                ->all();
            ?>
            <div class="testimonial">
                <h3 class="testimonial--title">Câu chuyện khách hàng</h3>
                <div class="testimonial--content">
                    <ul class="rslides1">
                        <?php foreach ($testimonials as $testimonial): ?>
                            <li>
                                <div class="testimonial--content-text">
                                    <?= \yii\helpers\StringHelper::truncateWords($testimonial['content'], 120) ?>
                                    <p>&nbsp;</p>
                                    <p><strong><?= $testimonial['full_name'] ?></strong></p>
                                    <p><i><?= $testimonial['company'] ?> đã chia sẻ</i></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php
            $js = <<<JS
   $(function() {
    $(".rslides1").responsiveSlides({
        speed: 500,
        timeout: 3000,
        pause: true
    });
  });
JS;
            $this->registerJs($js, View::POS_END);
            ?>
        </div>
    </div>
    <!--Du an tieu bieu-->
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="project--title">Dự án tiêu biểu</h3>
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="row">
        <?php
        $projects = (new \yii\db\Query())
            ->select(['title', 'slug', 'image_path', 'image_url'])
            ->from('project')
            ->limit(3)
            ->all();
        ?>
        <?php foreach ($projects as $project): ?>
            <div class="col-xs-4">
                <div class="project-item">
                    <div class="project-item--image">
                        <?= Html::a(Html::img($project['image_url'] . '/' . $project['image_path'], ['class' => 'img-responsive']), ['project/view', 'slug' => $project['slug']]); ?>
                    </div>
                    <div class="project-item--title">
                        <h4 class="project-item-title-text">
                            <?= Html::a($project['title'], ['project/view', 'slug' => $project['slug']]); ?>
                        </h4>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!--Tin tức-->
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="project--title">Tin tức</h3>
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="row">
        <?php
        $posts = (new \yii\db\Query())
            ->select(['title', 'slug', 'image_path', 'image_url', 'content'])
            ->from('post')
            ->limit(4)
            ->orderBy(['created_at' => SORT_DESC])
            ->all();
        ?>
        <?php $i = 0;
        foreach ($posts as $post): ?>
            <?php if ($i != 0 && $i%2 == 0): ?>
                </div><p>&nbsp;</p><div class="row">
            <?php endif; ?>
            <div class="col-sm-12 col-md-6">

                <div class="post-item">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="post-item--image">
                                <?= Html::a(Html::img($post['image_url'] . '/' . $post['image_path'], ['class' => 'img-responsive']), ['post/view', 'slug' => $post['slug']]); ?>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <h4 class="post-item--title">
                                <?= Html::a($post['title'], ['post/view', 'slug' => $post['slug']]); ?>
                            </h4>
                            <div class="post-item--desc">
                                <?= \yii\helpers\StringHelper::truncateWords($testimonial['content'], 30) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $i++; endforeach; ?>
    </div>
    <p>&nbsp;</p>
</div>