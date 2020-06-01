<section id="header-page" class="header-margin-base" style="margin-bottom: 50px;">
    <div class="skyline">
        <span class="cover"><img src="img/banner.png" alt=""></span>
        <div class="container header-text">
            <div>
                <h1 class="title"><?= $menu; ?></h1>
            </div>
            <div>
                <h2 class="sub-title"><?= $submenu; ?></h2>
            </div>
        </div>
    </div>
    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?= base_url('perumahan'); ?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?= base_url($menu); ?>"><?= $menu; ?></a></li>
                <li class="active"><?= $submenu; ?></li>
            </ol>
        </div>
    </div><!-- /#breadcrumb -->
</section><!-- /#header -->
<div class="container">
    <!-- <?= $data['nama_user']; ?> -->
    <?php foreach ($perum as $p) : ?>
        <div class="col-md-12">
            <div class="box-ads box-list">
                <span class="cover"></span>
                <img alt="Sample images" class="image image-fill" src="http://placehold.it/1240x745/bbbbbb/ffffff">
                <h3 class="title"><?= $p->nama_perum; ?></h3>
                <span class="price">$ 236.500,00</span>
                <span class="address"><i class="fa fa-map-marker"></i> Hoboken, NJ 07030,
                    USA</span>
                <span class="description">There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in some form, by
                    insages of Lorem Ipsum available, but the majority have suffered
                    alteratiojected humour.</span>
                <dl class="detail">
                    <dt class="status">Status:</dt>
                    <dd><span>Sale</span></dd>
                    <dt class="bed">Beds:</dt>
                    <dd><span>5</span></dd>
                    <dt class="bath">Baths:</dt>
                    <dd><span>3</span></dd>
                </dl>
                <div class="footer">
                    Lorem Ipsum available
                    <a class="btn btn-default" href="property-detail.html">Read now</a>
                </div>
            </div><!-- /.box-ads -->
        </div>
    <?php endforeach; ?>
</div>