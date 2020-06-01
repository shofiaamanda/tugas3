<section id="home-slide" class="header-margin-base">
    <div class="home-slider carousel" data-navigation=".home-slider-nav">
        <div class="crsl-wrap">
            <?php foreach ($variabel as $row) : ?>
                <figure class="crsl-item" data-image="<?= base_url('assets/imgslider/' . $row->foto_slider); ?>">
                    <div class="container slider-box">
                        <div class="content">
                            <h2><?= $row->mini_judul ?></h2>
                        </div>
                        <div class="content">
                            <h1><?= $row->judul; ?></h1>
                        </div>
                        <div class="content">
                            <h3><?= $row->sub_judul; ?>
                            </h3>
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
<br><br><br>
<div class="container">
    <button class="btn btn-success" data-target="#modal-tambah" data-toggle="modal">Tambah</button>
    <br><br>
    <div class="row">
        <?php foreach ($variabel as $row) : ?>
            <div class="col">
                <div class="box-ads box-grid mini">
                    <a class="hover-effect image image-fill" href="property-detail.html">
                        <span class="cover"></span>
                        <img alt="Sample images" src="<?= base_url('assets/imgslider/') . $row->foto_slider; ?>">
                        <h3 class="title"><?= $row->judul; ?></h3>
                    </a>
                    <span class="price pb-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Aktif</label>
                            <Button class="btn btn-warning" style="float: right;" type="submit" data-target="#modal-edit<?= $row->id_slider; ?>" data-toggle="modal">Edit</Button>
                            <Button class="btn btn-danger" style="float: right; margin-right: 10px" type="submit" data-target="#modal-hapus<?= $row->id_slider; ?>" data-toggle="modal">Hapus</Button>
                        </div>
                    </span>
                </div><!-- /.box-ads -->
            </div>
        <?php endforeach; ?>
    </div>
</div>
<br><br>

<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
        <div class="form-container full-fixed">
            <form method="post" action="<?= base_url('slider/tambah'); ?>" enctype="multipart/form-data">
                <div id="form-modal-contact" class="box active modal-contact">
                    <div class="field">
                        <input id="email-help" class="form-control" type="text" name="judul" placeholder="Judul">
                        <i class="fa fa-tag"></i>
                    </div>
                    <div class="field">
                        <input id="email-help" class="form-control" type="text" name="mini_judul" placeholder="Deskripsi">
                        <i class="fa fa-tag"></i>
                    </div>
                    <div class="field">
                        <input id="email-help" class="form-control" type="text" name="sub_judul" placeholder="Deskripsi">
                        <i class="fa fa-tag"></i>
                    </div>
                    <div class="field">
                        <input id="short-summary" class="form-control" type="file" name="foto_slider" placeholder="Your image">
                        <i class="fa fa-tag"></i>
                    </div>
                    <div class="field footer-form text-right">
                        <button type="submit" class="btn btn-reverse button-form">Batal</button>
                        <button type="submit" class="btn btn-default button-form">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php foreach ($variabel as $row) : ?>
    <div class="modal fade" id="modal-edit<?= $row->id_slider; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
            <div class="form-container full-fixed">
                <form method="post" action="<?= base_url('slider/edit'); ?>" enctype="multipart/form-data">
                    <div id="form-modal-contact" class="box active modal-contact">
                        <div class="field">
                            <input id="email-help" class="form-control" type="text" name="mini_judul" placeholder="Deskripsi" value="<?= $row->mini_judul ?>">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="field">
                            <input type="hidden" name="id_slider" value="<?= $row->id_slider; ?>">
                            <input id="email-help" class="form-control" type="text" name="judul" placeholder="Judul" value="<?= $row->judul ?>">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="field">
                            <input id="email-help" class="form-control" type="text" name="sub_judul" placeholder="Deskripsi" value="<?= $row->sub_judul ?>">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="field">
                            <img src="<?= base_url('assets/imgslider/') . $row->foto_slider; ?>" width="50" height="50" alt="Foto">
                            <input id="short-summary" class="form-control" type="file" name="foto_slider" placeholder="Your image">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <button type="submit" class="btn btn-reverse button-form">Batal</button>
                            <button type="submit" class="btn btn-default button-form">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php endforeach; ?>

<?php foreach ($variabel as $row) : ?>
    <div class="modal fade" id="modal-hapus<?= $row->id_slider; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
            <div class="form-container full-fixed">
                <form method="post" action="<?= base_url('slider/hapus/' . $row->id_slider); ?>" enctype="multipart/form-data">
                    <div id="form-modal-contact" class="box active modal-contact">
                        <h3>Apakah anda yakin ingin menghapus?</h3>
                        <input type="hidden" name="id" value="<?= $row->id_slider; ?>">
                        <div class="field footer-form text-right">
                            <button type="submit" class="btn btn-reverse button-form">Batal</button>
                            <button type="submit" class="btn btn-default button-form">Ya</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php endforeach; ?>