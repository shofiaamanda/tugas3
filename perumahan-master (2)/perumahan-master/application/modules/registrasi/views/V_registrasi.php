<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Perumahan - Jual beli perumahan</title>
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/font-awesom/css/font-awesome.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/mmenu/jquery.mmenu.all.css" /> <!-- Menu Responsive -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/animate-wow/animate.css"> <!-- Animation WOW -->

    <link rel="stylesheet prefetch" href="<?= base_url('assets/'); ?>css/vendor/dropzone/dropzone.css"> <!-- Dropzone Upload File -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/death/jquery.death.css"> <!-- edit text script -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/labelauty/labelauty.css"> <!-- Checkbox form Style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/magnific-popup/magnific-popup.css"> <!-- Gallery Effect -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/nouislider/nouislider.min.css"> <!-- Slider Price -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/easydropdown/easydropdown.css"> <!-- Select form Style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/vendor/skill-bars/skill-bars.css"> <!-- Skill Bars -->

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/menu.css"> <!-- Include Menu stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/custom.css"> <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/media-query.css"> <!-- Media Query -->

    <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url('assets/'); ?>images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/'); ?>images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/'); ?>images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/'); ?>images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/'); ?>images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/'); ?>images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/'); ?>images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/'); ?>images/favicon/apple-touch-icon-152x152.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?= base_url('assets/'); ?>script/modernizr.min.js"></script> <!-- Modernizr -->
</head>

<body class="fixed-header" id="home">
    <br><br><br><br>
    <section id="login-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-push-5 col-md-8 col-md-push-4">
                    <div class="text-desclaimer">
                        <h1>Selamat Datang</h1>
                        <h3>Akun Perumahan</h3>
                        Silahkan anda masukkan akun anda pada form kiri yang ada.<br />
                        <div class="bs-callout callout-info">
                            <h4>Visi dan Misi</h4>
                            <ul class="text">
                                <li>Menyediakan produk energi dan jasa yang berkualitas dan terjangkau secara
                                    berkelanjutan</li>
                                <li>Menjadikan kerangka Pembangunan Berkelanjutan sebagai landasan untuk semua
                                    inisiatif dan kegiatan bisnis</li>
                            </ul>
                        </div>
                        Anda butuh bantuan kami siap membantu.
                    </div>
                </div>
                <div class="col-sm-5 col-sm-pull-7 col-md-4 col-md-pull-8">
                    <div class="box" style="margin-top: -50px">
                        <form action="<?= base_url('registrasi'); ?>" method="post">
                            <h2 class="title"><?= $menu; ?></h2>
                            <?= $this->session->flashdata('pesan'); ?>
                            <!-- digunakan untuk menampilkan notif -->
                            <div class="field">
                                <input type="text" placeholder="Nama" name="nama" class="form-control" id="email" value="<?= set_value('nama'); ?>">
                                <i class="fa fa-user user"></i>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <?= form_error('email', '<small class="text-danger pl-3 ">', '</small>'); ?>
                            <!-- digunakan untuk menampilkan error -->

                            <div class="field">
                                <input type="password" placeholder="Kata Sandi" name="password1" class="form-control form-password" id="password">
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                            <?= form_error('password1', '<small class="text-danger pl-3 ">', '</small>'); ?>
                            <div class="field">
                                <input type="password" placeholder="Ulangi Kata Sandi" name="password2" class="form-control form-password" id="password">
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                            <div class="field">
                                <input type="checkbox" class="form-checkbox labelauty" data-labelauty="Tampilkan password" id="checkbox">
                            </div>
                            <div class="field footer-form text-right">
                                <span class="remember"><a href="<?= base_url('login'); ?>">Anda sudah punya akun?</a></span>
                                <button class="btn btn-default button-form" type="submit">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> <br><br><br><br>
    <footer id="footer-page" class="section-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <span class="title with-icon">
                        <img class="logo-footer" src="<?= base_url('assets/'); ?>images/mini-logo-x1.png" alt="logo" />
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?= base_url('assets/'); ?>script/jquery.min.js"></script> <!-- jQuery necessary for Bootstrap's JavaScript plugins -->
    <script src="<?= base_url('assets/'); ?>script/jquery-ui.min.js"></script> <!-- jQuery UI is a curated set of user interface interactions, effects, widgets, and themes -->
    <script src="<?= base_url('assets/'); ?>script/bootstrap.min.js"></script> <!-- Include all compiled plugins , or include individual files as needed -->

    <script src="<?= base_url('assets/'); ?>script/vendor/mmenu/mmenu.min.all.js"></script> <!-- Menu Responsive -->
    <script src="<?= base_url('assets/'); ?>script/vendor/animation-wow/wow.min.js"></script> <!-- Animate Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/labelauty/labelauty.min.js"></script> <!-- Checkbox Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/parallax/parallax.min.js"></script> <!-- Parallax Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/images-fill/imagesloaded.min.js"></script> <!-- Loaded image with ImageFill -->
    <script src="<?= base_url('assets/'); ?>script/vendor/images-fill/imagefill.min.js"></script> <!-- ImageFill Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/easydropdown/jquery.easydropdown.min.js"></script> <!-- Select list Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/carousel/responsiveCarousel.min.js"></script> <!-- Carousel Script -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Map -->
    <script src="<?= base_url('assets/'); ?>script/vendor/magnific-popup/magnific-popup.min.js"></script> <!-- LightBox Image Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/circle-diagram/circle-diagram.min.js"></script> <!-- Circle Diagram Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/countTo/countTo.min.js"></script> <!-- CountTo Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/skill-bars/custom.js"></script> <!-- Skill Bars Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/death/death.min.js"></script> <!-- Edit Textarea -->
    <script src="<?= base_url('assets/'); ?>script/vendor/noui-slider/nouislider.all.min.js"></script> <!-- Range Slider -->
    <script src="<?= base_url('assets/'); ?>script/vendor/dropzone/dropzone.min.js"></script> <!-- Dropzone Upload Image Script -->
    <script src="<?= base_url('assets/'); ?>script/vendor/dropzone/custom.js"></script> <!-- Dropzone custom Script -->

    <script src="<?= base_url('assets/'); ?>script/custom.js"></script> <!-- Custom	Script -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.form-password').attr('type', 'text');
                } else {
                    $('.form-password').attr('type', 'password');
                }
            });
        });
    </script>

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
</body>

</html>