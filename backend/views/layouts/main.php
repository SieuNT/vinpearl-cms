<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\helpers\Url;

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
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<aside class="left-panel">
    <!-- brand -->
    <div class="logo">
        <a href="<?= Url::to(['site/index']); ?>" class="logo-expanded">
            <i class="ion-ionic"></i>
            <span class="nav-label">VinPearl</span>
        </a>
    </div>
    <!-- / brand -->
    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="active"><a href="<?= Url::to(['site/index']); ?>"><i class="ion-home"></i> <span
                            class="nav-label">Bảng điều khiển</span></a></li>
            <li class="has-submenu">
                <a href="<?= Url::to(['post/index']); ?>">
                    <i class="ion-android-apps"></i>
                    <span class="nav-label">Tin tức</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="<?= Url::to(['testimonial/index']); ?>">
                    <i class="ion-settings"></i>
                    <span class="nav-label">Câu chuyên khách hàng</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="<?= Url::to(['project/index']); ?>"><i class="ion-compose"></i>
                    <span class="nav-label">Dự án tiêu biểu</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="<?= Url::to(['fqa/index']); ?>">
                    <i class="ion-grid"></i>
                    <span class="nav-label">Câu hỏi thường gặp</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="<?= Url::to(['video/index']); ?>">
                    <i class="ion-stats-bars"></i>
                    <span class="nav-label">Video</span>
                </a>
            </li>

            <li class="has-submenu">
                <a href="<?= Url::to(['banner/index']); ?>">
                    <i class="ion-email"></i>
                    <span class="nav-label">Quảng cáo</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
<section class="content">
    <header class="top-head container-fluid">
        <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class=" navbar-default" role="navigation">
            <ul class="nav navbar-nav navbar-right top-menu top-right-menu">
                <li class="dropdown text-center">
                    <?php if (!Yii::$app->user->isGuest): ?>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                        <span class="username"><?= Yii::$app->user->identity->username; ?> </span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                        <li><a href="profile.html"><i class="fa fa-briefcase"></i>Trang cá nhân</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Đổi mật khẩu</a></li>
                        <li>
                            <?=Html::beginForm(['/site/logout'], 'post'); ?>
                            <?=Html::submitButton('<i class="fa fa-sign-out"></i> Thoát', ['class' => 'btn btn-link logout', 'style' => 'padding-left: 20px']); ?>
                            <?=Html::endForm(); ?>
                        </li>
                    </ul>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>
    <div class="wraper container-fluid">
        <div class="page-title">
            <h3 class="title">Blank Page</h3>
        </div>
        <?= Alert::widget() ?>
        <div class="row">
            <div class="panel panel-purple">
                <div class="panel-body">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        2017@VinPearl CMS
    </footer>
</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
