<br><br><br><br><br><br><br><br>
<section id="user-profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <!-- . Agent Box -->
                <div class="agent-box-card grey">
                    <div class="image-content">
                        <div class="image image-fill">
                            <img alt="Image Sample" src="<?= base_url('assets/imgprofile/') . $data['foto_user']; ?>">
                        </div>
                    </div>
                    <div class="info-agent">
                        <span class="name"><?= $data['nama_user'] ?></span>
                        <div class="contact">
                            <li><a href="#" class="icon"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="#" data-target="#Mfoto<?= $data['id_user'] ?>" data-toggle="modal" class="icon"><i class="fa fa-edit"></i></a></li>
                        </div>
                    </div>
                </div>
                <br />
                <ul class="block-menu">
                    <li><a class="faq-button active" href="profile.html"><i class="icon fa fa-user"></i>Profil</a></li>
                </ul>
            </div>
            <div class="col-sm-8 col-md-9">
                <div class="row">
                    <div class="col-md-10">
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="section-title line-style no-margin">
                            <h3 class="title">Informasi Umum</h3>
                            <i class="icon fa fa-cog" data-toggle="modal" style="float: right" data-target="#modalEdit<?= $data['id_user'] ?>"> Edit</i>
                        </div>
                        <ul class="profile">
                            <li>
                                <span>Nama :</span><?= $data['nama_user']; ?>
                            </li>
                            <li>
                                <span>Email :</span>
                                <?= $data['email']; ?>
                                <i class="set-privacy fa fa-lock"></i>
                            </li>
                            <!-- <li>
                                <input type="password" value="<?= $row->password; ?>">
                            </li> -->
                        </ul>
                        <div class="section-title line-style">
                            <h3 class="title">Kontak Dasar</h3>
                        </div>
                        <ul class="profile">
                            <li>
                                <span>No.Telepon :</span>
                                <?= $data['no_telepon']; ?>
                            </li>
                            <li>
                                <span>No whatsapp :</span>
                                <?= $data['no_whatsapp']; ?>
                            </li>
                        </ul>
                        <div class="section-title line-style">
                            <h3 class="title">Akun</h3>
                        </div>
                        <ul class="profile">
                            <li>
                                <span>Daftar akun :</span>
                                <?= date('d F Y', $data['tanggal_daftar']); ?>
                            </li>
                        </ul>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" <?= check_aktif(); ?>>
                            </label>
                        </div>
                        <!-- <button class="btn btn-success btn-block" style="float: right;">Simpan</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="modal fade" id="modalEdit<?= $data['id_user']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

        <div class="form-container full-fixed">
            <form method="post" action="<?= base_url('user/update') ?>">
                <div id="form-modal-contact" class="box active modal-contact">
                    <h2 class="title">Apakah anda ingin mengedit?</h2>
                    <div class="field">
                        <input type="hidden" name="id_user" value="<?= $data['id_user']; ?>">
                        <input id="nama_user" class="form-control" type="text" name="nama_user" placeholder="Nama" value="<?= $data['nama_user']; ?>">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="field">
                        <input id="no_telepon" class="form-control" type="number" name="no_telepon" placeholder="Nama" value="<?= $data['no_telepon']; ?>">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="field">
                        <input id="no_whatsapp" class="form-control" type="number" name="no_whatsapp" placeholder="Nama" value="<?= $data['no_whatsapp']; ?>">
                        <i class="fa fa-whatsapp"></i>
                    </div>
                    <div class="field footer-form text-right">
                        <button type="button" class="btn btn-reverse button-form">Batal</button>
                        <button type="submit" class="btn btn-default button-form">Simpan</button>
                    </div>
                </div>
            </form>
        </div>



    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div class="modal fade" id="Mfoto<?= $data['id_user']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

        <div class="form-container full-fixed">
            <form method="post" enctype="multipart/form-data" action="<?= base_url('user/updatefoto'); ?>">
                <div id="form-modal-contact" class="box active modal-contact">
                    <h2 class="title">Apakah anda ingin mengedit?</h2>
                    <div class="field">
                        <div class="agent-box-card rounded">
                            <div class="image-content">
                                <div class="image image-fill">
                                    <img alt="Image Sample" src="<?= base_url('assets/imgprofile/' . $data['foto_user']); ?>">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center">Silahkan pilih foto!</h4>
                        <input type="hidden" name="id_user" value="<?= $data['id_user']; ?>">
                    </div>
                    <div class="field">
                        <input id="foto_user" class="form-control" type="file" name="foto_user">
                        <i class="fa fa-image"></i>
                    </div>
                    <div class="field footer-form text-right">
                        <button type="button" class="btn btn-reverse button-form">Batal</button>
                        <button type="submit" class="btn btn-default button-form">Simpan</button>
                    </div>
                </div>
            </form>
        </div>


    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->