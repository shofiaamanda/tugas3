<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="col-md-6">
        <?= form_error('menu', '<div class="alert with-icon alert-danger" role="alert"><i class="icon fa fa-info"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>', '
        .</strong></h4></div>'); ?>
        <?= $this->session->flashdata('pesan'); ?>
        <a href="" class="btn btn-primary " style="margin-bottom: 10px" data-toggle="modal" data-target="#newStatus-modal"><i class="fa fa-folder-o"></i> Tambah data</a>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($status as $s) : ?>
                    <tr>
                        <td scope="row" class="text-info"><?= $no; ?></td>
                        <td><?= $s['status']; ?></td>
                        <td>
                            <a href="<?= base_url('akses/index/') . $s['id_status']; ?>" class="label label-info">Akses</a>
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


<div class="modal fade" id="newStatus-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

        <div class="form-container full-fixed">
            <form method="post" action="status">
                <div id="form-modal-contact" class="box active modal-contact">
                    <h2 class="title">Ada ingin menambah data status</h2>
                    <div class="field">
                        <input id="short-summary" class="form-control" type="text" name="status" placeholder="Nama status">
                        <i class="fa fa-folder"></i>
                    </div>
                    <div class="field footer-form text-right">
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
                        <button type="submit" class="btn btn-default">Simpan</button>
                    </div>
                </div>
            </form>
        </div>


    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->