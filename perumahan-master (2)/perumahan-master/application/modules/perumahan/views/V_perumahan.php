<section id="home-slide" class="header-margin-base">
    <div class="home-slider carousel" data-navigation=".home-slider-nav">
        <div class="crsl-wrap">
            <?php foreach ($variabel as $row) : ?>
                <figure class="crsl-item" data-image="<?= base_url('assets/imgslider/' . $row->foto_slider); ?>">
                    <div class="container slider-box">
                        <div class="content">
                            <h2><?= $row->mini_judul; ?></h2>
                        </div>
                        <div class="content">
                            <h1><?= $row->judul; ?></h1>
                        </div>
                        <div class="content">
                            <h3><?= $row->sub_judul; ?></h3>
                        </div>
                    </div>
                </figure>
            <?php endforeach; ?>
        </div>
        <p class="home-slider-nav previus">
            <a href="#" class="previous">previous</a>
        </p>
        <p class="home-slider-nav next">
            <a href="#" class="next">next</a>
        </p>
    </div>
</section>

<form action="perumahan" method="post">
    <section id="search-box" class="no-margin">
        <div class="container search-container fixed-map">
            <div class="search-options sample-page">
                <span class="botton-options"><i class="fa fa-chevron-down"></i>Pencarian</span>
                <div class="searcher">
                    <div class="row margin-div">
                        <div class="col-sm-6 col-md-3 margin-bottom">
                            <input class="form-control" type="text" name="nama_properti" id="keywords" placeholder="Nama properti" />
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <select class="dropdown" name="kota_properti" data-settings='{"cutOff": 4}'>
                                <option value="">Semua kota</option>
                                <option value="jakarta">Jakarta</option>
                                <option value="surabaya">Surabaya</option>
                                <option value="malang">Malang</option>
                                <option value="makassar">Makassar</option>
                                <option value="depok">Depok</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <select class="dropdown" name="tipe_properti" data-settings='{"cutOff": 3}'>
                                <option value="">Tipe perumahan</option>
                                <option value="21">21</option>
                                <option value="36">36</option>
                                <option value="45">45</option>
                                <option value="54">54</option>
                                <option value="60">60</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3 margin-bottom">
                            <input type="number" class="form-control" placeholder="Harga properti" name="harga_properti">
                        </div>
                    </div><!-- ./row 1 -->
                    <div class="row margin-div sercher-margin-bottom">
                        <div class="col-sm-6 col-md-2 margin-bottom">
                            <input class="form-control" type="number" name="tempat_mandi" placeholder="Tempat mandi" />
                        </div>
                        <div class="col-sm-6 col-md-2 margin-bottom">
                            <input class="form-control" type="number" name="tempat_tidur" placeholder="Tempat tidur" />
                        </div>
                        <div class="col-sm-6 col-md-2 margin-bottom">
                            <input class="form-control" type="number" placeholder="Luas properti" name="luas_properti">
                        </div>
                    </div><!-- ./row 2 -->
                    <div class="margin-div footer">
                        <button class="btn btn-default btn-lg" type="submit" style="float:right; padding-left:20px; padding-right:20px;">Cari</button>
                    </div><!-- ./footer -->
                </div><!-- ./searcher -->
            </div><!-- search-options -->
        </div><!-- search-container fixed-map -->
    </section>
</form>


<div class="container">
    <br><br>
    <div class="list-box-title">
        <span><i class="icon fa fa-home"></i>Terpopuler</span>
    </div>
    <div class="row">
        <?php foreach ($properti as $row) : ?>
            <div class="col-md-3">
                <div class="box-ads box-home">
                    <a class="hover-effect image image-fill" href="property-detail.html">
                        <span class="cover"></span>
                        <img alt="Sample images" src="<?= base_url('assets/imgproperti/') . $row->foto1_properti; ?>" width="250" height="250">
                        <!-- <h3 class="title">Diskon 10%</h3> -->
                    </a><!-- END HOVER EFFECT -->
                    <span class="price">Rp. <?= number_format($row->harga_properti, 0, ',', '.') ?></span>
                    <span class="address"><i class="fa fa-home"></i> <?= $row->nama_properti; ?></span>
                    <dl class="detail">
                        <dt class="status">Tipe :</dt>
                        <dd><span><?= $row->tipe_properti; ?></span></dd>
                        <dt class="area">Ukuran:</dt>
                        <dd><span><?= $row->luas_properti; ?> m2</span></dd>
                        <dt class="bed">Tempat tidur:</dt>
                        <dd><span><?= $row->tempat_tidur; ?></span></dd>
                        <dt class="bath">Tempat mandi:</dt>
                        <dd><span><?= $row->tempat_mandi; ?></span></dd>
                    </dl><!-- /.detail -->
                    <div class="footer">
                        <a class="btn btn-reverse" href="<?= base_url('detail_properti/index/' . $row->id_properti); ?>">Detail</a>
                    </div>
                </div><!-- END BOX-HOME-->
            </div><!-- END COL MD-3 -->
        <?php endforeach; ?>
    </div><!-- END ROW -->

</div>