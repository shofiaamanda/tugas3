<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="col-md-6">
        <a href="<?= base_url('status'); ?>" class="btn btn-primary " style="margin-bottom: 10px"><i class="fa fa-angle-left"></i> Kembali</a>
        <h4>Status : <?= $status['status']; ?></h4>
        <?= $this->session->flashdata('pesan'); ?>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Akses</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($menu as $m) : ?>
                    <tr>
                        <td scope="row" class="text-info"><?= $no; ?></td>
                        <td><?= $m['menu']; ?></td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" <?= check_akses($status['id_status'], $m['id_user_menu']); ?> data-status="<?= $status['id_status']; ?>" data-menu="<?= $m['id_user_menu']; ?>" class="form-check-input">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>