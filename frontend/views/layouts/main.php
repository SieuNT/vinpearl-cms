<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script type="text/javascript">
        WebFontConfig = {
            google: {families: ['Roboto:400,700&amp;subset=latin-ext,vietnamese']}
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('/img/logo.jpg'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Trang chủ', 'url' => ['/site/index']],
        ['label' => 'VinPearl Bãi Dài', 'url' => ['/site/index']],
        ['label' => 'VinPearl Nha Trang', 'url' => ['/site/index']],
        ['label' => 'VinPearl Phú Quốc', 'url' => ['/site/index']],
        ['label' => 'Tin tức', 'url' => ['/site/index']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <div class="slideshow">
        <?php
        $banners = (new \yii\db\Query())
            ->select(['image_path', 'image_url', 'link'])
            ->from('banner')
            ->where(['position' => 'slide_show'])
            ->limit(5)
            ->all();
        ?>
        <ul class="rslides">
            <?php foreach ($banners as $banner): ?>
                <li><?= Html::a(Html::img($banner['image_url'] . '/' . $banner['image_path'], ['class' => 'img-responsive']), $banner['link']); ?></li>
            <?php endforeach; ?>
        </ul>
        <?php
        $js = <<<JS
   $(function() {
    $(".rslides").responsiveSlides();
  });
JS;
        $this->registerJs($js, View::POS_END);
        ?>
    </div>
    <?= $content ?>
</div>

<footer class="footer">
    <div class="footer-hotline">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="f-hotline">HOTLINE 0888 12 99 12</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-contactus">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="f-contactus-text">ĐĂNG KÝ NGAY ĐỂ ĐƯỢC TƯ VẤN TRỰC TIẾP</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <input type="text" class="form-control" placeholder="HỌ VÀ TÊN"/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <input type="text" class="form-control" placeholder="SỐ ĐIỆN THOẠI"/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <input type="email" class="form-control" placeholder="EMAIL"/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <button type="submit" class="btn-register"><?= Html::img('/img/btn-register.png') ?></button>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
