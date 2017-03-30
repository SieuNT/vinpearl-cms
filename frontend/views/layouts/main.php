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
        ['label' => 'Trang chủ', 'url' => ['site/index']],
        ['label' => 'VinPearl Nha Trang', 'url' => ['project/view', 'slug' => 'vinpearl-nha-trang'], 'items' => [
            ['label' => 'VinPearl Bãi Dài', 'url' => ['project/view', 'slug' => 'vinpearl-bai-dai']],
        ]],
        ['label' => 'VinPearl Phú Quốc', 'url' => ['project/view', 'slug' => 'vinpearl-phu-quoc']],
        ['label' => 'Tin tức', 'url' => ['post/index']],
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
            <form class="register-form" data-index="1" role="form" method="post" action="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="msg_form" id="msg_form_2"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="HỌ VÀ TÊN"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="SỐ ĐIỆN THOẠI"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="EMAIL"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <button type="submit" class="btn-register"><?= Html::img('/img/btn-register.png') ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</footer>
<?php
$js = <<<JS
(function ($) {
    var baseUrl = "http://bietthubien-vinpearl.com";
    $('.register-form').submit(function () {
        //$('#complete').remove();
        var index = $(this).attr('data-index');
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: baseUrl + '/site/mail',
            data: $(this).serialize(),
            beforeSend: function () {
                $('#btn_register_' + index).attr("disabled", true);
                $('#msg_form_' + index).html('Đang gửi...').css('color:#fff');
                $('.has-error.has-danger').removeClass('has-error has-danger');
                $('.help-inline.text-danger.text-small').remove();
            },
            success: function (data) {
                if (data.constructor === String) {
                    data = JSON.parse(data);
                }
                $('#msg_form_' + index).html('');
                window.location.href = "site/thanks";
                $('#btn_register_' + index).removeAttr("disabled");
            },
            error: function (res) {
                if (res.constructor === String) {
                    var res = JSON.parse(res);
                }
                var errors = JSON.parse(res.responseText);
                var message = '';
                $.each(errors.message, function (k, v) {
                    $('input[name="Mailboxes['+k+']"]').after('<span class="help-inline text-danger text-small"><small>'+ v +'</small></span>').closest('div').addClass('has-error has-danger');
                });
                $('#msg_form_' + index).html(message);
                $('#btn_register_' + index).removeAttr("disabled");

            }
        });
        return false;
    });

})(jQuery);
JS;
$this->registerJs($js, View::POS_END);
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
