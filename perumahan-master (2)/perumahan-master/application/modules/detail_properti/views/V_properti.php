<section id="header-page" class="header-margin-base">
    <div class="skyline">
        <span class="cover"><img src="img/banner.png" alt=""></span>
        <div class="container header-text">
            <div>
                <h1 class="title">Details</h1>
            </div>
            <div>
                <h2 class="sub-title">Lorem ipsum dolor consectetur ats adipiscing elit</h2>
            </div>
        </div>
    </div>
    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Property</a></li>
                <li class="active">Details</li>
            </ol>
        </div>
    </div><!-- /#breadcrumb -->
    <span class="cover"></span>
</section><!-- /#header -->

<section id="property-content">

    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <!-- 2. Price -->
                <span class="large-price"><?= number_format($variabel['harga_properti'],  0, ',', '.'); ?></span>

                <!-- 1. Images gallery -->
                <div class="fotorama" data-width="100%" data-fit="cover" data-max-width="100%" data-nav="thumbs" data-transition="crossfade">
                    <img src="<?= base_url('assets/imgproperti/' . $variabel['foto1_properti']); ?>" alt="Image Sample">
                    <img src="<?= base_url('assets/imgproperti/' . $variabel['foto2_properti']); ?>" alt="Image Sample">
                    <img src="<?= base_url('assets/imgproperti/' . $variabel['foto3_properti']); ?>" alt="Image Sample">
                </div>

                <!-- /.Secondo Row -->
                <div class="row">
                    <div class="col-md-4">

                        <!-- 7. Rating -->
                        <div class="section-title line-style">
                            <h3 class="title">Rating</h3>
                        </div>

                        <ul class="rating">
                            <li class="value">
                                <span class="name">Luar Biasa</span>
                                <span class="graphic"><span class="percent" style="width: 88%"></span></span>
                                <span class="count">1231</span>
                            </li>
                            <li class="value">
                                <span class="name">Baik Sekali</span>
                                <span class="graphic"><span class="percent" style="width: 5%"></span></span>
                                <span class="count">76</span>
                            </li>
                            <li class="value">
                                <span class="name">Rata Rata</span>
                                <span class="graphic"><span class="percent" style="width: 4%"></span></span>
                                <span class="count">40</span>
                            </li>
                            <li class="value">
                                <span class="name">Buruk</span>
                                <span class="graphic"><span class="percent" style="width: 2%"></span></span>
                                <span class="count">13</span>
                            </li>
                            <li class="value">
                                <span class="name">Buruk Sekali</span>
                                <span class="graphic"><span class="percent" style="width: 1%"></span></span>
                                <span class="count">7</span>
                            </li>
                        </ul>

                        <!-- 9. Mortage -->


                        <!-- 8. Feedback -->
                        <div class="section-title line-style">
                            <h3 class="title">Umpan Balik</h3>
                        </div>
                        <div class="feedback">
                            <div class="user-feedback">
                                <span class="avatar image-fill">
                                    <img src="img/profil.png" alt="Image Sample" />
                                </span>
                                <span class="name">Adinda</span>
                                <span class="text">Rumah ini baik dan tidak mengecewakan.</span>
                                <span class="vote">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </div><!-- /.user-feedback -->
                            <div class="user-feedback">
                                <span class="avatar image-fill">
                                    <img src="img/profil.png" alt="Image Sample" />
                                </span>
                                <span class="name">Citra</span>
                                <span class="text">menurut saya rumah ini sangat bagus dan nyaman,harganya juga
                                    sesuai.</span>
                                <span class="vote">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div><!-- /.user-feedback -->
                            <div class="user-feedback">
                                <span class="avatar image-fill">
                                    <img src="img/profil.png" alt="Image Sample" />
                                </span>
                                <span class="name">Kirana</span>
                                <span class="text">Rumah ini kurang bagus.</span>
                                <span class="vote">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </div><!-- /.user-feedback -->
                        </div><!-- /.feedback -->

                    </div>
                    <div class="col-md-8">

                        <!-- 6. Description -->
                        <div class="section-title line-style">
                            <h3 class="title">Deskripsi</h3>
                        </div>
                        <div class="description">
                            <!-- 7. project image -->
                            <img src="<?= base_url('assets/imgproperti/' . $variabel['foto1_properti']); ?>" class="img-responsive" alt="project image" /><br />
                            <h3><?= $variabel['nama_properti']; ?></h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias cupiditate ea error a quisquam possimus eaque, esse vero ipsa impedit nulla sed aut perspiciatis libero magni commodi fugiat, architecto dignissimos!
                            </p>
                        </div>
                        <section class="shortcode-box" id="shortcode-tabs">
                            <div class="section-title line-style no-margin">
                                <h3 class="title">Tabs</h3>
                            </div>
                            <div class="row">
                                <div class="col-md">

                                    <div class="tabs" id="tab">
                                        <ul class="tab-button">
                                            <li class="active"><a href="#" data-target="tab-a">Umperdiet</a></li>
                                            <li><a href="#" data-target="tab-b">Neque</a></li>
                                            <li><a href="#" data-target="tab-c">Tempus</a></li>
                                        </ul><!-- /.tab-button -->

                                        <div class="tab-text">
                                            <div id="tab-a" class="tab active">
                                                <h2>content goes here!</h2>
                                                <div class="row">
                                                    <div class="details">
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>loteng</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>panas gas</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>balkon</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square"></i>gudang anggur</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square"></i>lapangan basket </span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>pemadat sampah</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>perapian</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square"></i>kolam</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square"></i>pemandangan danau</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>panas matahari</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>Shower terpisah</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>batang basah</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square"></i>direnovasi</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square"></i>jendela loteng</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>permukaan batu</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square"></i>lapangan golf</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square"></i>club kesehatan</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>halaman belakang</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>diizinkan membawa hewaan
                                                                peliharaan</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>kantor/ruang kerja</span>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-6">
                                                            <span class="detail"><i class="fa fa-square-o"></i>cucian</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tab-b" class="tab">
                                                <h2>content goes here!</h2>
                                                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia
                                                    ullamcorper nibh; quis imperdiet velit eleifend Aliquam tellus orci,
                                                    iaculis vel.</p>
                                            </div>

                                            <div id="tab-c" class="tab">
                                                <h2>content goes here!</h2>
                                                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia
                                                    ullamcorper nibh; quis mauris eget aliquet lacinia! Donec pulvinar
                                                    massa interdum ri.</p>
                                            </div>
                                        </div><!-- /.tab-text -->
                                    </div><!-- /.tabs -->
                                </div>
                            </div>
                        </section>
                        <!-- 7. Details -->

                        <!-- 8. Maps -->
                        <div class="section-title line-style">
                            <h3 class="title">Temukan properti ini di peta</h3>
                        </div>
                        <div class="map-container" id="map-canvas"></div>

                        <div class="section-title line-style">
                            <h3 class="title">Temukan dena perumahan</h3>
                        </div>
                        <div class="row" id="images-container">
                            <div class="col-xs-12 col-sm-4 col-md-3" data-groups='["refinance"]'>
                                <a href="http://placehold.it/1280x850/bbbbbb/ffffff" class="galleryItem hover-effect image-fill" data-collection="group-one"></a>
                                <img src="img/dena.jpg" width="500" height="400" alt="" />
                                <span class="cover"></span>
                                </a>
                            </div>
                        </div>
                        <a href="rincian.html" class="btn btn-default col-lg-12">Tambah ke keranjang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <!-- . Agent Box -->
                <div class="agent-box-card grey hidden-xs hidden-sm fixed-top">
                    <div class="image-content">
                        <div class="image image-fill">
                            <img alt="Image Sample" src="img/profil.png">
                        </div>
                    </div>
                    <div class="info-agent">
                        <span class="name">Diane Hayes</span>
                        <div class="text">embarrassing hidden in the middle of tex generators on the tend to
                            repeat predefined chunks as necessary, making this the first true </div>
                        <ul class="contact">
                            <li><a class="icon" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="icon" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="icon" href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a class="icon" href="agent-detail.html"><i class="fa fa-info-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- . Agent Form -->
                <div class="contact-agent">
                    <form method="post" action="contact.php" role="form" data-toggle="validator">
                        <div class="form-group">
                            <input type="text" placeholder="Nama Kamu *" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email Kamu *" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Pesan  *" rows="5" class="form-control" name="text-message" id="text-message" required name="text-message"></textarea>
                        </div>
                        <button class="btn btn-default" type="submit">Mengirim pesan</button>
                    </form>
                </div>

                <!-- 5. Search -->
                <!--  -->

                <!-- Other property -->
                <div class="section-title line-style line-style">
                    <h3 class="title">Properti Lainnya</h3>
                </div>

                <div class="box-ads box-grid mini">
                    <a class="hover-effect image image-fill" href="property-detail.html">
                        <span class="cover"></span>
                        <img alt="Sample images" src="img/14.jpg">
                        <h3 class="title">59 Paterson Ave</h3>
                    </a>
                    <span class="price">Rp 745.500,00</span>
                    <span class="address"><i class="fa fa-map-marker"></i> Golden Valley, MN 55427</span>
                    <span class="description">There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by insages of Lorem Ipsum
                        available, but the majority have suffered alteratiojected humour.</span>
                    <dl class="detail">
                        <dt class="status">Status:</dt>
                        <dd><span>Penjualan</span></dd>
                        <dt class="bed">Tempat tidur:</dt>
                        <dd><span>4</span></dd>
                        <dt class="bath">Mandi:</dt>
                        <dd><span>2</span></dd>
                    </dl>
                    <div class="footer">
                        <a class="btn btn-default" href="property-detail.html">Baca sekarang</a>
                    </div>
                </div><!-- /.box-ads -->

                <div class="box-ads box-grid mini">
                    <a class="hover-effect image image-fill" href="property-detail.html">
                        <span class="cover"></span>
                        <img alt="Sample images" src="img/13.jpeg">
                        <h3 class="title">403 Bloomfield St</h3>
                    </a>
                    <span class="price">Rp 233.500,00</span>
                    <span class="address"><i class="fa fa-map-marker"></i> Golden Valley, MN 55427</span>
                    <span class="description">There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by insages of Lorem Ipsum
                        available, but the majority have suffered alteratiojected humour.</span>
                    <dl class="detail">
                        <dt class="status">Status:</dt>
                        <dd><span>Sale</span></dd>
                        <dt class="bed">Beds:</dt>
                        <dd><span>2</span></dd>
                        <dt class="bath">Baths:</dt>
                        <dd><span>1</span></dd>
                    </dl>
                    <div class="footer">
                        <a class="btn btn-default" href="property-detail.html">Read now</a>
                    </div>
                </div><!-- /.box-ads -->

            </div>
        </div>
    </div>
</section>