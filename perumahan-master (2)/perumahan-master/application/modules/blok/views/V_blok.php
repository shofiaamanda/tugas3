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
    <?= $this->session->flashdata('pesan'); ?>
    <div class="form-group">
        <a class="btn btn-success" href="<?= base_url('c_blok/'); ?>"> <i class="fa fa-home"></i> Tambah blok</a>
    </div>

    <div class="col-md">
        <div class="box-property-slide">
            <div class="form-group right-block image-fill">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-home"></i> Nama rumah:</span>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>K1</td>
                            <td>K1</td>
                            <td>K1</td>
                            <td>K1</td>
                            <td>K1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="left-block">
                <span class="title">Hoboken, NJ 07056, USA</span>
                <span class="description" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="labelauty" type="checkbox" data-labelauty="Privasi menerima" checked>
                        </div>
                        <div class="col-md-6">
                            <input class="labelauty" type="checkbox" data-labelauty="Privasi menerima" checked>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="labelauty" type="checkbox" data-labelauty="Privasi menerima" checked>
                        </div>
                        <div class="col-md-6">
                            <input class="labelauty" type="checkbox" data-labelauty="Privasi menerima" checked>
                        </div>
                    </div>
                </span>
                <div class="input-group" style="margin-top: -25px;">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-home"></i> Jumlah rumah:</span>
                    <input type="text" class="form-control" disabled aria-describedby="basic-addon1" value="1">
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="privacy">Alamat :</label>
                    <textarea class="margin-bottom form-control privacy" rows="2" name="pribadi" id="privacy" disabled>lorem.</textarea>
                </div>
                <button type="button" style="float:left; margin-top:40px;" class="btn btn-warning"><i class="fa fa-home"></i> Edit</button>
                <button type="button" style="float:left; margin-top:40px; margin-left:10px;" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                <!-- <button type="button" class="btn btn-reverse button"><i class="fa fa-search"></i> Selengkapnya</button> -->
            </div>
        </div><!-- /.box-property-slide -->
    </div><!-- /.col-md-12 -->
</div>