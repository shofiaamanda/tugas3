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
                <li><a class="faq-button" href="#fiturs"><i class="icon fa fa-picture-o"></i> Fitur utama</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-9">
            <form action="<?= base_url('c_perum'); ?>" method="post">
                <input type="hidden" name="id_user" value="<?= $data['id_user']; ?>">
                <div class="info-block" id="basic">
                    <div class="section-title line-style no-margin">
                        <h3 class="title">Informasi</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 space-form">
                            <input id="title" class="form-control" type="text" placeholder="Nama Perumahan" name="nama_perum" value="<?= set_value('nama_perum'); ?>">
                            <?= form_error('nama_perum', '<small class="text-danger pl-3 ">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 space-form">
                            <select class="dropdown" class="form-control" name="kota_perum" required data-settings='{"cutOff": 5}' value="<?= set_value('kota_perum'); ?>">
                                <option value="<?= set_value('kota_perum'); ?>">Pilih Kota</option>
                                <option value="malang">Malang</option>
                                <option value="jakarta">Jakarta</option>
                                <option value="jember">Jember</option>
                                <option value="banyuwangi">Banyuwangi</option>
                                <option value="probolinggo">Probolinggo</option>
                                <option value="trenggalek">Trenggalek</option>
                                <option value="bojonegoro">Bojonegoro</option>
                            </select>
                        </div>
                        <!-- <div class="input-group col-md-10" style="margin-left: 60px;">
                            <span class="input-group-addon" id="basic-addon1">Logo</span>
                            <input class="form-control" type="file" name="foto_perum" aria-describedby="basic-addon1">
                        </div>
                        <br> -->
                        <div class="col-md-12" style="margin-top: -10px; ">
                            <input type="text" name="alamat_perum" value="<?= set_value('alamat_perum'); ?>" style="height: 50px;" class="form-control">
                            <?= form_error('alamat_perum', '<small class="text-danger pl-3 ">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="info-block" id="fiturs">
                    <div class="section-title line-style">
                        <h3 class="title">Fitur</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 10px;">
                            <label for="text-message">Fitur utama</label>
                            <textarea class="margin-bottom form-control" rows="4" id="text-message" class="form-control" name="fitur1"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="text-message">Fitur kedua</label>
                            <textarea class="margin-bottom form-control" rows="4" id="text-message" class="form-control" name="fitur2"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="text-message">Fitur ketiga</label>
                            <textarea class="margin-bottom form-control" rows="4" id="text-message" class="form-control" name="fitur3"></textarea>
                        </div>
                    </div>
                </div>
                <!-- <div class="info-block" id="images">
                    <div class="section-title line-style">
                        <h3 class="title">Tempat sekitar</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 10px;">
                            <label for="text-message">Tempat</label>
                            <textarea class="margin-bottom form-control" rows="4" id="text-message" name="tempat1" required></textarea>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 10px;">
                            <label for="text-message">Tempat</label>
                            <textarea class="margin-bottom form-control" rows="4" id="text-message" name="tempat2" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="text-message">Tempat</label>
                            <textarea class="margin-bottom form-control" rows="4" id="text-message" name="tempat3" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="text-message">Tempat</label>
                            <textarea class="margin-bottom form-control" rows="4" id="text-message" name="tempat4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="info-block" id="summary">
                    <div class="section-title line-style">
                        <h3 class="title">Fasilitas</h3>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
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
                    <div class="row" style="margin-bottom: 10px;">
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
                </div> -->
                <button type="submit" class="btn btn-success btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>