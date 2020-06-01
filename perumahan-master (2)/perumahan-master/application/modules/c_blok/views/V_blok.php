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
    <div class="row">
        <div class="col-sm-3 col-md-3" id="block-menu-content">
            <ul class="block-menu" data-spy="affix" data-offset-top="500" data-offset-bottom="400">
                <li><a class="faq-button active" href="#basic"><i class="icon fa fa-info"></i>Informasi</a></li>
                <li><a class="faq-button" href="#summary"><i class="icon fa fa-th-list"></i> Fasilitas </a></li>
                <li><a class="faq-button" href="#images"><i class="icon fa fa-picture-o"></i> Faselitas sekitar </a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-9">
            <form action="<?= base_url('c_blok'); ?>" method="post">
                <div class="info-block" id="basic">
                    <div class="section-title line-style no-margin">
                        <h3 class="title">Informasi</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 space-form">
                            <input id="title" class="form-control" type="text" placeholder="Nama blok" name="nama_blok" value="<?= set_value('nama_blok'); ?>">
                            <?= form_error('nama_blok', '<small class="text-danger pl-3 ">', '</small>'); ?>
                        </div>
                        <!-- <div class="col-md-6 space-form">
                            <select class="dropdown" class="form-control" name="kota_blok" data-settings='{"cutOff": 5}'>
                                <option value="">Kota</option>
                                <option value="malang">Malang</option>
                                <option value="jakarta">Jakarta</option>
                                <option value="jember">Jember</option>
                                <option value="banyuwangi">Banyuwangi</option>
                                <option value="probolinggo">Probolinggo</option>
                                <option value="trenggalek">Trenggalek</option>
                                <option value="bojonegoro">Bojonegoro</option>
                            </select>
                        </div> -->
                        <br><br>
                        <div class="col-md-12">
                            <textarea name="alamat_blok" id="description" class="form-control description" placeholder="Alamat" value="<?= set_value('alamat_blok'); ?>"></textarea>
                            <?= form_error('alamat_blok', '<small class="text-danger pl-3 ">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="info-block" id="summary">
                    <div class="section-title line-style">
                        <h3 class="title">Fasilitas</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3 margin-bottom">
                            <input class="labelauty" type="checkbox" data-labelauty="Lapangan" checked>
                        </div>
                        <div class="col-md-3 margin-bottom">
                            <input class="labelauty" type="checkbox" data-labelauty="Keamanan" checked>
                        </div>
                        <div class="col-md-3 margin-bottom">
                            <input class="labelauty" type="checkbox" data-labelauty="Pengelolahan tandon" checked>
                        </div>
                        <div class="col-md-3 margin-bottom">
                            <input class="labelauty" type="checkbox" data-labelauty="Pengelolahan sampah" checked>
                        </div>
                    </div>
                </div>
                <div class="info-block" id="images">
                    <div class="section-title line-style">
                        <h3 class="title">Fasilitas sekitar</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3 margin-bottom">
                            <input class="labelauty" type="checkbox" data-labelauty="Rumah sakit" checked>
                        </div>
                        <div class="col-md-3 margin-bottom">
                            <input class="labelauty" type="checkbox" data-labelauty="Sekolah" checked>
                        </div>
                        <div class="col-md-3 margin-bottom">
                            <input class="labelauty" type="checkbox" data-labelauty="Kantor polisi" checked>
                        </div>
                        <div class="col-md-3 margin-bottom">
                            <input class="labelauty" type="checkbox" data-labelauty="Market" checked>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>