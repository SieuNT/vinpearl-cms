<?php
use yii\helpers\Html;
use yii\web\View;

$this->title = $model->title . ' | Biệt thự biển VinPearl';
$this->registerJsFile(
    '@web/js/smoothscroll.js',
    [
        'depends' => [
            \yii\web\YiiAsset::className(),
            \yii\bootstrap\BootstrapPluginAsset::className(),
        ],
        'position' => \yii\web\View::POS_END
    ]
);
$this->registerJsFile(
    '@web/js/vinpearl.js',
    [
        'depends' => [
            \yii\web\YiiAsset::className(),
            \yii\bootstrap\BootstrapPluginAsset::className(),
        ],
        'position' => \yii\web\View::POS_END
    ]
);

$this->registerCssFile('@web/css/baidai.css', [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()],
]);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <ul class="list-unstyled baidai-menu">
                <li><a href="javascript:;" class="js-next-price">Giá VinPearl Bãi Dài</a></li>
                <li><a href="javascript:;" class="js-next-uudai">Chính sách ưu đãi</a></li>
                <li><a href="javascript:;" class="js-next-vitri">Vị trí</a></li>
                <li><a href="javascript:;" class="js-next-matbang">Mặt bằng</a></li>
                <li><a href="javascript:;" class="js-next-nhamau">Biệt thự mẫu</a></li>
            </ul>
        </div>
    </div>
    <div class="section-price">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="section-price--title">Bảng tính đầu tư biển thự biển VinPearl Bãi Dài</h3>
            </div>
        </div>
        <div class="section-price--desc">
            <table class="table table-bordered table-responsive">
                <tr>
                    <td>Khách hàng nhận ngay 25% từ cam kết cho thuê trong 3 năm</td>
                    <td>18 x 25% = 4,5 tỷ</td>
                </tr>
                <tr>
                    <td>Giá sau ưu đãi đã có VAT (10%)</td>
                    <td>18 - 4,5 = 13,5 x 110% = 14,8 tỷ</td>
                </tr>
                <tr>
                    <td>Khách hàng cần có tài chính = 35% giá biệt thự, 65% còn lại ngân hàng hỗ trợ</td>
                    <td>14,8 x 35% = 5,1 tỷ</td>
                </tr>
            </table>

            <hr class="hr-blank"/>
            <div class="row">
                <div class="col-xs-4">
                    <strong class="pull-right">Để đầu tư căn biệt thự</strong>
                </div>
                <div class="col-xs-7 col-xs-offset-1">
                    <p><?= Html::img('/img/icon-arrow.png') ?>&nbsp;&nbsp;&nbsp;<strong>18 Tỷ khách hàng chỉ cần bỏ ra
                            từ 5,1 Tỷ</strong></p>
                    <p><?= Html::img('/img/icon-arrow.png') ?>&nbsp;&nbsp;&nbsp;<strong>20 Tỷ khách hàng chỉ cần bỏ ra
                            từ 5.7 Tỷ</strong></p>
                </div>
            </div>
            <hr class="hr-blank"/>
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center center-block">
                        <a href="javascript:;"
                           class="js-next-lienhe"><?= Html::img('/img/btn-register-counsult.png') ?></a>
                    </div>
                </div>
            </div>
            <hr class="hr-blank"/>
        </div>
    </div>
</div>
<!--section tongquan-->
<div class="section-tongquan">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-6">
                <div class="tongquan-wrap">
                    <div class="text-center center-block">
                        <?= Html::img('/img/logo-white.png') ?>
                    </div>
                    <p class="text-center center-block section-tongquan--title">Tổng quan</p>
                    <div class="section-tongquan--desc">
                        <ul class="section-tongquang-list">
                            <li><strong>Tên dự án:</strong> VinPearl Bãi Dài (VinPearl Long Beach Villas)</li>
                            <li><strong>Chủ đầu tư:</strong> Tập đoàn VinGroup</li>
                            <li><strong>Vị trị dự án:</strong> Lô D6b2 và D7A1 thuộc khu 2, khu du lịch bắc bán đảo Cam
                                Ranh, huyện Cam Ranh, Khánh Hòa. Nơi đây là "Mảnh đất vàng" tại khu vực trung tâm vịnh
                                Cam Ranh.
                            </li>
                            <li><strong>Tổng diện tích đất:</strong> 261.948m2</li>
                            <li><strong>Tổng diện tích xây dựng:</strong> 48.045m2</li>
                            <li><strong>Tổng diện tích sàn xây dựng:</strong> 64.120m2</li>
                            <li><strong>Mật độ xây dựng:</strong> 18%</li>
                            <li><strong>Đơn vị thiết kế:</strong> Dự án được tư vấn và thiết kế bởi tập đoàn tư vấn
                                thiết kế hàng đầu về cảnh quan và resort trên thế giới FSC & EDSA (Mỹ)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Section uudai-->
<div class="section-uudai">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center center-block">
                    <?= Html::img('/img/uudai-title.png') ?>
                </div>
            </div>
        </div>
        <hr class="hr-blank"/>
        <hr class="hr-blank"/>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3"><?= Html::img('/img/vinpearl-uudai/1.png', ['class' => 'img-responsive text-center center-block']) ?></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3"><?= Html::img('/img/vinpearl-uudai/2.png', ['class' => 'img-responsive text-center center-block']) ?></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3"><?= Html::img('/img/vinpearl-uudai/3.png', ['class' => 'img-responsive text-center center-block']) ?></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3"><?= Html::img('/img/vinpearl-uudai/4.png', ['class' => 'img-responsive text-center center-block']) ?></div>
        </div>
    </div>
</div>
<!--Section vitri-->
<div class="section-vitri">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8"><?= Html::img('/img/ban-do.jpg', ['class' => 'img-responsive']) ?></div>
            <div class="col-sm-12 col-md-4">
                <p class="text-center center-block section-vitri--title">Vị trí</p>
                <div class="section-vitri--desc">
                    <p>Dự án Vinpearl Bãi Dài Khánh Hòa tọa lạc tại Lô D6b2 và D7A1 thuộc khu 2, khu du lịch bắc bán đảo
                        Cam Ranh, xã Cam Hải Đông, huyện Cam Lâm, tỉnh Khánh Hòa. Nơi đây có thiên thời, địa lợi, nhân
                        hòa, cạnh thành phố Nha Trang, cảng biển Nha Trang, cảng hàng không quốc tế Cam Ranh…</p>
                    <hr class="hr-blank"/>
                    <p>Dự án thừa hưởng lợi thế từ bờ biển đẹp nhất Việt Nam, khí hậu trong lành, giao thông thuận lợi,
                        cạnh sân bay Quốc tế Cam Ranh, Bãi Dài bãi cát dài và mịn màng đến xinh đẹp đến ngỡ ngàng.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Section matbang-->
<div class="section-matbang">
    <?= Html::img('/img/matbang.jpg', ['class' => 'img-responsive text-center center-block']) ?>
</div>
<!--Section bietthumau-->
<div class="section-nhamau">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p class="text-center center-block section-nhamau--title">Biệt thự mẫu</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="nhamau-item">
                    <div class="nhamau-item--image">
                        <?= Html::img('/img/bietthumau/1.jpg', ['class' => 'img-responsive']) ?>
                    </div>
                    <div class="nhamau-item--desc">
                        <p class="nhamau-item--desc-title">Biệt Thự Bãi dài 2 tầng 4 phòng ngủ</p>
                        <p>Số lượng: 29 căn</p>
                        <p>Diện tích sàn xây dựng: 330m2</p>
                        <p>Hướng: hướng hồ</p>
                        <p>Giá bán: từ 15 – 17 tỷ VNĐ (chưa VAT)</p>
                    </div>
                </div>
                <hr class="hr-blank"/>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="nhamau-item">
                    <div class="nhamau-item--image">
                        <?= Html::img('/img/bietthumau/2.jpg', ['class' => 'img-responsive']) ?>
                    </div>
                    <div class="nhamau-item--desc">
                        <p class="nhamau-item--desc-title">Biệt Thự Bãi dài 1 tầng 3 phòng ngủ</p>
                        <p>Số lượng: 28 căn</p>
                        <p>Diện tích sàn xây dựng: 270m2</p>
                        <p>Hướng: mặt biển</p>
                        <p>Giá bán: từ 19 – 21 tỷ VNĐ (chưa VAT)</p>
                    </div>
                </div>
                <hr class="hr-blank"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="nhamau-item">
                    <div class="nhamau-item--image">
                        <?= Html::img('/img/bietthumau/3.jpg', ['class' => 'img-responsive']) ?>
                    </div>
                    <div class="nhamau-item--desc">
                        <p class="nhamau-item--desc-title">Biệt Thự Bãi dài 1 tầng 2 phòng ngủ</p>
                        <p>Số lượng: 25 căn</p>
                        <p>Diện tích sàn xây dựng: 220m2</p>
                        <p>Hướng: vườn hoa</p>
                        <p>Giá bán: từ 10 – 12 tỷ VNĐ (chưa VAT)</p>
                    </div>
                </div>
                <hr class="hr-blank"/>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="nhamau-item">
                    <div class="nhamau-item--image">
                        <?= Html::img('/img/bietthumau/4.jpg', ['class' => 'img-responsive']) ?>
                    </div>
                    <div class="nhamau-item--desc">
                        <p class="nhamau-item--desc-title">Biệt Thự Bãi dài 2 tầng 3 phòng ngủ</p>
                        <p>Số lượng: 118 căn</p>
                        <p>Diện tích sàn xây dựng: 300m2</p>
                        <p>Hướng: vườn hoa, hướng hồ, hướng biển</p>
                        <p>Giá bán: từ 15 – 19 tỷ VNĐ (chưa VAT)</p>
                    </div>
                </div>
                <hr class="hr-blank"/>
            </div>
        </div>
    </div>
</div>
<hr class="hr-blank"/>
<!--Hoi dap-->
<div class="section-hoidap">
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
                $fqas = (new \yii\db\Query())
                    ->select(['title', 'slug'])
                    ->from('fqa')
                    ->where(['project_id' => 1])
                    ->limit(5)
                    ->all();
                ?>
                <div class="testimonial">
                    <h3 class="question--title">Những câu hỏi thường gặp</h3>
                    <div class="question--content">
                        <ul class="list-unstyled question-list">
                            <?php foreach ($fqas as $fqa): ?>
                                <li>
                                    <p><?= Html::img('/img/icon-qa.png', ['class' => 'img-responsive']) ?> <?= Html::a($fqa['title'], ['fqa/view', 'slug' => $fqa['slug']]); ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="hr-blank"/>
<!--Ly do chon-->
<div class="section-lydo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="center-block text-center">
                    <?= Html::img('/img/logo-white.png', ['class' => 'img-responsive text-center center-block']) ?>
                </div>
            </div>
            <hr class="hr-blank"/>
            <div class="col-xs-12">
                <div class="center-block text-center">
                    <p class="section-lydo--title">Lý do chọn đầu tư</p>
                    <p class="section-lydo--title">VinPearl Bãi Dài</p>
                </div>
            </div>
            <hr class="hr-blank"/>
        </div>
        <div class="section-lydo--desc">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="pull-right">
                    <p class="section-lydo--desc-title">Sở hữu Vĩnh viễn</p>
                    <p class="section-lydo--desc-title">Sinh lời Trọn đời</p>

                    <ul>
                        <li>Chia sẻ lợi nhuận 85% trọn đời</li>
                        <li>Hoàn vốn 100% sau 10 năm</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <p class="section-lydo--desc-title">Chương trình bán hàng siêu việt</p>
                <ul>
                    <li>Hỗ trợ vay tới 65% với lãi suất 0%/24 tháng, năm thứ 3 cố định lãi suất 8%</li>
                    <li>Nhận ngay CKLN 3 năm, tương đương mức chiết khấu 25%</li>
                    <li>Tặng 15 đêm nghỉ/năm/50 năm trên toàn hệ thống VinPearl</li>
                    <li>Tặng ngay 2 đêm nghỉ tại biệt thự VinPearl sau khi đặt cọc</li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</div>