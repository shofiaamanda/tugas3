<br><br><br><br><br><br><br><br><br><br><br>


<div class="container">

    <div class="row">
        <div class="col-md-9">
            <a href="index.html" class="btn btn-primary">Kembali</a>
        </div>
        <form method="post" action="<?= site_url('r_user/cari') ?>">
            <div class="col-md-2">
                <input type="text" name="cari" class="form-control" placeholder="Search">
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-default">Cari</button>
            </div>
        </form>
    </div>


    <br><br>
    <div class="row">
        <?php foreach ($variabel as $row) : ?>

            <!-- . Agent Box -->
            <div class="col-md-3">
                <div class="agent-box-card">
                    <div class="image-content">
                        <div class="image image-fill">
                            <img alt="Image Sample" src="<?= base_url('assets/imgprofile/') . $row->foto_user; ?>">
                        </div>
                    </div>
                    <div class="info-agent">
                        <span class="name"><?= $row->nama_user ?></span>
                        <ul class="contact">
                            <li><a class="icon" href="profile-user-admin.html"><i class="fa fa-info-circle"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-trash"></i></a></li>
                            <li><a class="icon" href="<?= base_url('u_user/index/' . $row->id_user); ?>"><i class="fa fa-edit"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>