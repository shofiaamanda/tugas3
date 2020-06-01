<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title><?= $title; ?></title>
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?= base_url('./assets/') ?>css/bootstrap.min.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/font-awesom/css/font-awesome.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/mmenu/jquery.mmenu.all.css" /> <!-- Menu Responsive -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/animate-wow/animate.css"> <!-- Animation WOW -->

    <link rel="stylesheet prefetch" href="<?= base_url('./assets/'); ?>css/vendor/dropzone/dropzone.css"> <!-- Dropzone Upload File -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/ui-spinner.css"> <!-- Spinner -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/fotorama/fotorama.css"> <!-- Fotorama Gallery Effect -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/death/jquery.death.css"> <!-- edit text script -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/labelauty/labelauty.css"> <!-- Checkbox form Style -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/nouislider/nouislider.min.css"> <!-- Slider Price -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/magnific-popup/magnific-popup.css"> <!-- Gallery Effect -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/easydropdown/easydropdown.css"> <!-- Select form Style -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/vendor/skill-bars/skill-bars.css"> <!-- Skill Bars -->

    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/menu.css"> <!-- Include Menu stylesheet -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/custom.css"> <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('./assets/'); ?>css/media-query.css"> <!-- Media Query -->

    <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
    <link rel="shortcut icon" href="<?= base_url('./assets/'); ?>images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url('./assets/'); ?>images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('./assets/'); ?>images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('./assets/'); ?>images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('./assets/'); ?>images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('./assets/'); ?>images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('./assets/'); ?>images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('./assets/'); ?>images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('./assets/'); ?>images/favicon/apple-touch-icon-152x152.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?= base_url('./assets/'); ?>script/modernizr.min.js"></script> <!-- Modernizr -->
</head>

<body class="fixed-header" id="home">

    <div id="page-container">
        <header class="menu-base" id="header-container-box">
            <div class="info">
                <!-- info -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#mobile-menu" id="mobile-menu-button" class="visible-xs"><i class="fa fa-bars"></i></a>
                            <a href="call:1-800-555-1234" class="hidden-xs"><i class="icon fa fa-phone"></i>
                                082230298758</a>
                            <a href="#" data-section="modal-contact" data-target="#modal-contact" data-toggle="modal" class="hidden-xs"><i class="icon fa fa-envelope-o"></i> Info</a>
                        </div>
                        <div id="login-pan" class="col-md-6 hidden-xs">
                            <a href="#" data-toggle="modal" data-target=".login-modal" data-section="sign-in"><i class="icon fa fa-pencil-square-o"></i> Sign up</a>
                            <a href="#" data-toggle="modal" data-target=".login-modal" data-section="login"><i class="icon fa fa-user user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.info -->
            <div class="logo hidden-xs">
                <a href="#"><img id="logo-header" src="<?= base_url('./assets/'); ?>images/logo.png" alt="Logo" /></a>
            </div><!-- /.logo -->
            <div class="menu-navbar">
                <div class="container" id="menu-nav">
                    <nav id="navigation">
                        <ul>
                            <!-- QUERY MENU -->
                            <a href="<?= base_url('perumahan'); ?>">Home</a>
                            <?php
                            $status = $this->session->userdata('status');

                            $queryMenu = "SELECT tb_user_menu.id_user_menu, menu
                                            FROM tb_user_menu JOIN tb_user_akses_menu
                                            ON tb_user_menu.id_user_menu = tb_user_akses_menu.menu_id
                                            WHERE tb_user_akses_menu.status = $status
                                            ORDER BY tb_user_akses_menu.menu_id ASC
                                            ";
                            $menu = $this->db->query($queryMenu)->result_array();
                            ?>

                            <!-- LOPPING MENU  -->
                            <?php foreach ($menu as $m) : ?>
                                <li class="has_submenu">
                                    <a href="#"><?= $m['menu']; ?></a>

                                    <!-- SIAPKAN SUB-MENU SESAUI MENU -->
                                    <?php
                                    $menuId = $m['id_user_menu'];
                                    $querySubMenu = "SELECT *
                                                FROM tb_user_sub_menu
                                                WHERE menu_id = $menuId
                                                AND aktif_menu = 1
                                                ";
                                    $subMenu  = $this->db->query($querySubMenu)->result_array();
                                    ?>
                                    <ul>
                                        <?php foreach ($subMenu as $sm) : ?>
                                            <li><a href="<?= base_url($sm['url']); ?>"><?= $sm['sub_menu']; ?></a></li>
                                        <?php endforeach;  ?>
                                    </ul>

                                </li>

                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div><!-- /.menu -->
            <a href="#" class="fixed-button top"><i class="fa fa-chevron-up"></i></a>
            <a href="#" class="hidden-xs fixed-button email" data-toggle="modal" data-target="#modal-contact" data-section="modal-contact"><i class="fa fa-envelope-o"></i></a>
        </header>
        <?php
        $this->load->view($controller . '/' . $view);
        ?>
        <br><br><br><br>
        <footer id="footer-page" class="section-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <span class="title with-icon">
                            <img class="logo-footer" src="<?= base_url('./assets/'); ?>images/mini-logo-x1.png" alt="logo" />
                            Tentang kami
                        </span>
                        <span class="text">
                            Website penjualan perumahan terbaik
                        </span>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <span class="title">No telepon</span>
                        <span class="phone"><i class="fa fa-phone"></i> +62822-3029-8758</span>
                        <span class="address">
                        </span>
                        No 79 <strong>karangploso</strong><br />
                        <i class="fa fa-map-marker"></i> Malang
                    </div>
                    <div class="hidden-xs hidden-sm col-md-3">
                        <span class="title">Lainnya</span>
                        <ul class="link-extra">
                            <li><a href="#">Perumahanku Mobile Apps</a></li>
                            <li><a href="#">Penjualan perumahan</a></li>
                            <li><a href="#">Perumahanku&reg; Website</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <span class="title">Our Newsletter</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu condimentum neque.
                        <div class="newsletter-box">
                            <input type="text" class="form-control" placeholder="Your email">
                            <button class="btn btn-default send" type="button"><i class="fa fa-envelope-o"></i></button>
                        </div><!-- /input-group -->
                    </div>
                </div>
            </div>
            <div class="credits">
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs col-md-6 credits-text">Copyright 2020 <b>Perumahanku</b> </div>
                        <div class="col-md-6">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                <div class="login-button-container">
                    <a href="#" data-section="login"><i class="fa fa-user"></i></a>
                    <a href="#" data-section="sign-in"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="#" data-section="recovery"><i class="fa fa-lock"></i></a>
                    <a href="#" data-section="setting"><i class="fa fa-cog"></i></a>
                </div><!-- ./login-button-container -->
                <div class="form-container">
                    <form method="post" action="index.html"></form>
                    <div id="login" class="box">
                        <h2 class="title">Masuk ke akun Anda</h2>
                        <h3 class="sub-title">Merupakan pelanggaran terhadap syarat dan ketentuan kami untuk
                            memberikan rincian nama pengguna dan kata sandi kepada pihak ketiga yang tidak
                            berwenang. Penggunaan yang tidak sah dapat menyebabkan penangguhan atau pemberhentian.
                        </h3>
                        <div class="field">
                            <input id="user-log" name="user-log" class="form-control" type="text" placeholder="Username or email">
                            <i class="fa fa-user user"></i>
                        </div>
                        <div class="field">
                            <input id="password-log" name="password-log" class="form-control" type="password" placeholder="Password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <span class="remember"><input class="labelauty" type="checkbox" data-labelauty="Keep me signed in" checked /></span>
                            <button type="submit" class="btn btn-reverse button-form">Setel ulang</button>
                            <button type="submit" class="btn btn-default button-form">Gabung</button>
                        </div>
                    </div> <!-- ./login -->
                    <div id="sign-in" class="box">
                        <h2 class="title">Masuk</h2>
                        <h3 class="sub-title">Merupakan pelanggaran terhadap syarat dan ketentuan kami untuk
                            memberikan rincian nama pengguna dan kata sandi kepada pihak ketiga yang tidak
                            berwenang. Penggunaan yang tidak sah dapat menyebabkan penangguhan atau pemberhentian.
                        </h3>
                        <div class="form-inline">
                            <div class="form-group">
                                <input id="user-sign" name="user-sign" class="form-control input-inline margin-right" type="text" placeholder="Username">
                                <i class="fa fa-user user"></i>
                            </div>
                            <div class="form-group">
                                <input id="email-sign" class="form-control input-inline" type="text" name="email-sign" placeholder="Email">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <div class="field">
                            <input id="password-sign" class="form-control" type="password" name="password-sign" placeholder="Password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field">
                            <input id="re-password-sign" class="form-control" type="password" name="re-password-sign" placeholder="Repeat password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <span class="remember"><input class="labelauty" type="checkbox" data-labelauty="I have read the privacy policy." checked /></span>
                            <button type="submit" class="btn btn-default button-form">Masuk</button>
                        </div>
                    </div><!-- ./sign-in -->
                    <div id="setting" class="box">
                        <h2 class="title">Pengaturan profil</h2>
                        <h3 class="sub-title">Harap dicatat: Anda tidak akan dapat mengubah nama Anda dalam 60 hari
                            ke depan. Pastikan Anda tidak menambahkan huruf besar, tanda baca, karakter, atau kata
                            acak yang tidak biasa. <a href="#">Belajarlah lagi</a>.</h3>
                        <div class="field">
                            <input id="username-block" class="form-control" type="text" name="username-block" value="John Doe" disabled>
                            <i class="fa fa-user user"></i>
                        </div>
                        <div class="field">
                            <input id="email-setting" class="form-control" type="text" name="email-setting" value="administrator@prohome.com">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="field">
                            <input id="update-pass" class="form-control" type="password" name="update-pass" placeholder="New password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field">
                            <input id="update-repass" class="form-control" type="password" name="update-repass" placeholder="Repeat password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <button type="submit" class="btn btn-reverse button-form">Batal</button>
                            <button type="submit" class="btn btn-default button-form">Memperbarui</button>
                        </div>
                    </div><!-- ./recovery -->
                    <div id="recovery" class="box">
                        <h2 class="title">Perlu kata sandi baru?</h2>
                        <h3 class="sub-title">Masukkan alamat email Anda, dan kami akan mengirimi Anda email
                            instruksi untuk mereset kata sandi Anda.</h3>
                        <div class="field">
                            <input id="recovery-email" class="form-control" type="text" name="recovery-email" placeholder="Your email">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <button type="submit" class="btn btn-default button-form">Pemulihan</button>
                        </div>
                    </div><!-- ./recovery -->
                    </form><!-- ./form-container -->
                </div><!-- ./login-button-container -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

                <div class="form-container full-fixed">
                    <form method="post" action="index.html">
                        <div id="form-modal-contact" class="box active modal-contact">
                            <h2 class="title">Bagaimana kami bisa membantu?</h2>
                            <h3 class="sub-title">Kirimkan pendapat Anda dengan mengisi formulir di bawah ini. Komentar
                                hanya untuk penggunaan internal. Alamat Anda tidak akan dibagikan dengan pihak luar atau
                                digunakan untuk tujuan lain apa pun selain untuk menanggapi komentar Anda.</h3>
                            <ul class="object-contact">
                                <li><a href="#"><i class="fa fa-code"></i>Saran</a></li>
                                <li><a href="#"><i class="fa fa-question"></i>Pertanyaan</a></li>
                                <li><a href="#" class="active"><i class="fa fa-bug"></i>Masalah</a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i>Umpan balik</a></li>
                            </ul>
                            <div class="field">
                                <textarea class="form-control" name="message" id="message" placeholder="Your message"></textarea>
                            </div>
                            <div class="field">
                                <input id="short-summary" class="form-control" type="text" name="short-summary" placeholder="Short summary">
                                <i class="fa fa-tag"></i>
                            </div>
                            <div class="field">
                                <input id="email-help" class="form-control" type="text" name="email-help" placeholder="Your email">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="field footer-form text-right">
                                <button type="submit" class="btn btn-reverse button-form">Batal</button>
                                <button type="submit" class="btn btn-default button-form">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div><!-- /#page-container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?= base_url('./assets/'); ?>script/jquery.min.js"></script> <!-- jQuery necessary for Bootstrap's JavaScript plugins -->
    <script src="<?= base_url('./assets/'); ?>script/jquery-ui.min.js"></script> <!-- jQuery UI is a curated set of user interface interactions, effects, widgets, and themes -->
    <script src="<?= base_url('./assets/'); ?>script/bootstrap.min.js"></script> <!-- Include all compiled plugins , or include individual files as needed -->

    <script src="<?= base_url('./assets/'); ?>script/vendor/fotorama/fotorama.min.js"></script> <!-- Fotorama Gallery Images -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/noui-slider/nouislider.all.min.js"></script> <!-- Range Slider -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/mmenu/mmenu.min.all.js"></script> <!-- Menu Responsive -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/animation-wow/wow.min.js"></script> <!-- Animate Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/labelauty/labelauty.min.js"></script> <!-- Checkbox Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/parallax/parallax.min.js"></script> <!-- Parallax Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/images-fill/imagesloaded.min.js"></script> <!-- Loaded image with ImageFill -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/images-fill/imagefill.min.js"></script> <!-- ImageFill Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/easydropdown/jquery.easydropdown.min.js"></script> <!-- Select list Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/carousel/responsiveCarousel.min.js"></script> <!-- Carousel Script -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Map -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/magnific-popup/magnific-popup.min.js"></script> <!-- LightBox Image Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/circle-diagram/circle-diagram.min.js"></script> <!-- Circle Diagram Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/countTo/countTo.min.js"></script> <!-- CountTo Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/skill-bars/custom.js"></script> <!-- Skill Bars Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/death/death.min.js"></script> <!-- Edit Textarea -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/noui-slider/nouislider.all.min.js"></script> <!-- Range Slider -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/dropzone/dropzone.min.js"></script> <!-- Dropzone Upload Image Script -->
    <script src="<?= base_url('./assets/'); ?>script/vendor/dropzone/custom.js"></script> <!-- Dropzone custom Script -->

    <script src="<?= base_url('./assets/'); ?>script/custom.js"></script> <!-- Custom	Script -->

    <script>
        "use strict";
        // COUNTER INITIALIZATION
        $('.timer').countTo();
        // TABS SCRIPT
        $(document).ready(function() {
            var $selector = $('#tab, #tab2, #tab3').selector;
            $($selector).find('a').on('click', function(e) {
                var $this = $(this);
                var $target = $this.data('target');
                var $effect = $('#' + $target).parent().data('effect');
                switch ($effect) {
                    case 'slide':
                        $('#' + $target).slideDown(200).siblings().slideUp(200);
                        break;
                    case 'fade':
                        $('#' + $target).fadeIn(400).siblings().hide();
                        break;
                    default:
                        $('#' + $target).show().siblings().hide();
                }
                $this.parent('li').addClass('active').siblings().removeClass('active');
                e.preventDefault();
                return false;
            });
        });

        // ACCORDION SCRIPT
        $(document).ready(function() {
            var $title, $content;
            var $selector = $('.accordion').selector;
            var $title = $($selector + ' .title');
            var $content = $($selector + ' .text-container');
            var $close = function() {
                $title.removeClass('active');
                $content.slideUp(500).removeClass('open');
            }
            $($selector).find('.title').on('click', function(e) {
                var $idTarget = $(this).data('target');
                var currentAttrValue = $(this).attr('href');
                if ($(e.target).is('.active')) {
                    $($idTarget).css({
                        'display': 'block'
                    });
                    $close();
                } else {
                    $($idTarget).css({
                        'display': 'none'
                    });
                    $close();
                    $(this).addClass('active');
                    $($idTarget).slideDown(400).addClass('open');
                }
                e.preventDefault();
            });
        });

        // GALLERY SCRIPT
        var groups = {};
        $('.galleryItem').each(function() {
            var id = parseInt($(this).attr('data-group'), 10);
            if (!groups[id]) {
                groups[id] = [];
            }
            groups[id].push(this);
        });
        $.each(groups, function() {
            $(this).magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                removalDelay: 300,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true
                }
            })
        });

        // CIRCULAR SKILL INITIALIZATION
        $('.diagram').circleDiagram();


        // MAPS GOOGLE
        function initialize() {
            var mapOptions = {
                zoom: 18,
                scrollwheel: false,
                center: new google.maps.LatLng(-33.890542, 151.274856)
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            var image = 'images/maps/pin-maps.png';
            var myLatLng = new google.maps.LatLng(-33.890542, 151.274856);
            var beachMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script>
        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const statusId = $(this).data('status');

            $.ajax({
                url: "<?= base_url('akses/merubahakses'); ?>",
                type: 'post',
                data: {
                    menuId: menuId,
                    statusId: statusId
                },
                success: function() {
                    document.location.href = "<?= base_url('akses/index/'); ?>" + statusId;
                }
            })
        });
    </script>
</body>

</html>