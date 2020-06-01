<br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<?php foreach ($variabel  as $row) : ?>
    <section id="user-profile">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <!-- . Agent Box -->
                    <div class="agent-box-card grey">
                        <div class="image-content">
                            <div class="image image-fill">
                                <img src="<?php echo base_url('assets/imgprofile/') . $row->foto_user; ?>" alt="Image Sample" class="img-responsive" />
                            </div>
                        </div>
                        <div class="info-agent">
                            <span class="name"><?php echo $row->nama_user ?></span>
                            <ul class="contact">
                            </ul>
                        </div>
                    </div>
                    <br />
                    <ul class="block-menu">
                        <li><a class="faq-button active" href="profile.html"><i class="icon fa fa-user"></i>
                                Profil</a></li>
                    </ul>
                </div>
                <div class="col-sm-8 col-md-9">

                    <div class="row">
                        <div class="col-md-10">
                            <div class="section-title line-style no-margin">
                                <h3 class="title">Informasi Umum</h3>
                            </div>

                            <form method="post" class="form-vertical" enctype="multipart/form-data" action="<?php echo base_url('u_user/edit') ?>">
                                <input type="hidden" name="id_user" value="<?= $row->id_user; ?>">
                                <div class="form-group">
                                    <label for="first-name" class="col-sm-3 control-label">Nama :</label>
                                    <div class="col-sm-9 margin-form"><input id="nama_user" name="nama_user" class="form-control" type="text" placeholder="Nama" value="<?= $row->nama_user; ?>"></div>
                                </div>
                                <br></br>
                                <label for="#" class="col-sm-3 control-label">Foto :</label>
                                <input type="file" name="foto_user">
                                <br>

                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">Email :</label>
                                    <div class="col-sm-9 margin-form"><input name="email" id="email" class="form-control" type="text" placeholder="Email" value="<?= $row->email; ?>"></div>
                                </div>
                                <br></br>

                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">Password :</label>
                                    <div class="col-sm-9 margin-form"><input id="password" name="password" class="form-control" type="text" placeholder="Password" value="<?= $row->password; ?>"></div>
                                </div>
                                <br></br>

                                <div class="form-group">
                                    <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir :</label>
                                    <div class="col-sm-9 margin-form"><input id="tempat_lahir" name="tempat_lahir" class="form-control" type="text" placeholder="Tempat Lahir" value="<?= $row->tempat_lahir; ?>"></div>
                                </div>
                                <br></br>

                                <div class="form-group">
                                    <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir :</label>
                                    <div class="col-sm-9 margin-form"><input id="tanggal_lahir" name="tanggal_lahir" class="form-control" type="text" placeholder="Tanggal Lahir" value="<?= $row->tanggal_lahir; ?>"></div>
                                </div>
                                <br></br>

                                <div class="section-title line-style">
                                    <h3 class="title">Kontak Dasar</h3>
                                </div>


                                <div class="form-group">
                                    <label for="no_telepon" class="col-sm-3 control-label">No Telepon :</label>
                                    <div class="col-sm-9 margin-form"><input id="no_telepon" name="no_telepon" class="form-control" type="text" placeholder="No Telepon" value="<?= $row->no_telepon; ?>"></div>
                                </div>
                                <br></br>
                                <br>
                                <div class="form-group">
                                    <label for="no_whatsapp" class="col-sm-3 control-label">No Whatsapp :</label>
                                    <div class="col-sm-9 margin-form"><input id="no_telepon" name="no_whatsapp" class="form-control" type="text" placeholder="No whatsapp" value="<?= $row->no_whatsapp; ?>"></div>
                                </div>
                                <br></br>
                                <button type="submit" class="btn btn-success btn-lg" style="float: right;">Simpan</button>
                                <br> <br>

                        </div>
                    </div>
                    </form>


                </div>

            </div>
        </div>
    <?php endforeach; ?>
    </div>
    </section>