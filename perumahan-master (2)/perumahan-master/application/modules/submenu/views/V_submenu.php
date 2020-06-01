<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="col-md">
        <?= form_error('title', '<div class="alert with-icon alert-danger" role="alert"><i class="icon fa fa-info"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>', '
        .</strong></h4></div>'); ?>
        <?= form_error('menu', '<div class="alert with-icon alert-danger" role="alert"><i class="icon fa fa-info"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>', '
        .</strong></h4></div>'); ?>
        <?= form_error('url', '<div class="alert with-icon alert-danger" role="alert"><i class="icon fa fa-info"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>', '
        .</strong></h4></div>'); ?>
        <?= $this->session->flashdata('pesan'); ?>
        <a href="" class="btn btn-primary " style="margin-bottom: 10px" data-toggle="modal" data-target="#newMenu-modal"><i class="fa fa-folder-o"></i> Tambah data</a>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Submenu</th>
                    <th>Menu</th>
                    <th>Url</th>
                    <th>Aktif</th>
                    <th>Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($submenu as $sm) : ?>
                    <tr>
                        <td scope="row" class="text-info"><?= $no; ?></td>
                        <td><?= $sm['sub_menu']; ?></td>
                        <td><?= $sm['menu']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td>
                            <input class="labelauty" type="checkbox" data-labelauty="Aktif" <?= check_aktif(); ?> />
                        </td>
                        <td>
                            <a href="#" class="label label-warning"> <i class="fa fa-edit"></i> Edit</a>
                            <a href="#" class="label label-danger"><i class="fa fa-trash-o"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="newMenu-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

        <div class="form-container full-fixed">
            <form method="post" action="submenu">
                <div id="form-modal-contact" class="box active modal-contact">
                    <h2 class="title">Ada ingin menambah data menu</h2>
                    <div class="field">
                        <input id="short-summary" class="form-control" type="text" name="submenu" placeholder="Submenu">
                        <i class="fa fa-folder"></i>
                    </div>
                    <div class="field">
                        <select name="menu" id="menu" class="form-control">
                            <option value="">Pilih menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id_user_menu'] ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="field">
                        <input id="short-summary" class="form-control" type="text" name="url" placeholder="Url">
                        <i class="fa fa-folder"></i>
                    </div>
                    <div class="field">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="aktif_menu" id="aktif_menu" value="1" checked>
                                Aktif ?
                            </label>
                        </div>
                    </div>
                    <div class="field footer-form text-right">
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>


    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->