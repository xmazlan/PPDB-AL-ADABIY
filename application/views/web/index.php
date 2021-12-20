<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online |
        <?php echo $user['nama_lengkap']; ?>
    </title>
    <base href="<?php echo base_url(); ?>" />

    <!-- yg hijau ini adalah komentar : komentar tidak akan di eksekusi oleh browser -->

    <!-- ikon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/faa.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-bg_header.jpg-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="img/logo1.png" alt="Logo" width="40" style="position:absolute;margin-top:-10px;"> <span style="margin-left:45px;">PPDB Online</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-info-circle"></i> Informasi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#prosedur"><i class="fa fa-tasks"></i> Alur PPDB</a>
                    </li>
                    <!-- <li class="page-scroll">
                        <a href="#portfolio"><i class="fa fa-video-camera"></i> Tutorial Pendaftaran</a>
                    </li> -->
                    <li class="page-scroll">
                        <a href="#visimisi"><i class="fa fa-list"></i> Visi Misi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#gallery"><i class="fa fa-picture"></i> Gallery</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-phone-square"></i> Kontak Kami</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <?php
        if (strtolower($this->uri->segment(1)) == 'logcs') {
            $this->load->view('web/login');
        } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo1.png" style="
                    margin-top:10px; /* jarak logo dari atas */
                    margin-bottom:10px; /* jarak dari logo ke tulisan */
                    " width="100">
                    <br><br>
                    <div class="intro-text">
                        <span class="name shad" style="font-size:35px;
                        padding-bottom:100px /* jarak dari tombol panel calon siswa ke bawah*/
                        ">SELAMAT DATANG DI PONDOK ASUHAN<br>AL-ADABIY PONTIANAK <br>
                            <!-- <?php echo $user['nama_lengkap']; ?> -->
                        </span>

                        <br>
                        <?php if ($web_ppdb->status_ppdb == 'buka') { ?>
                            <!--<span class="skills">
                        	<a href="files/Panduan_PPDB_Online_SMAN1_Belitang.pdf" class="btn btn-danger btn-lg"><i class="fa fa-file-pdf-o faa-pulse animated"></i> &nbsp;Download Panduan PPDB Online</a>
                        </span>-->

                            <hr class="star-light">
                            <br>
                            <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online SMA NEGERI 1 Belitang</h3> -->
                            <span>
                                <a href="pendaftaran" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online</a>
                                <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;
                                    <?php if ($ceks == '') {
                                        echo "Login";
                                    } else {
                                        echo "Panel";
                                    } ?> Calon Siswa
                                </a>
                                <br>
                            </span>
                        <?php } else { ?>
                            <span class="skills">
                            </span>
                            <br> <br>
                            <hr class="star-light">
                            <br>
                            <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online SMA NEGERI 1 Belitang</h3> -->
                            <span>
                                <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online ditutup</a>
                                <br>
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->


    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi PPDB Online</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="text-align:justify">
                    <p>
                        <?php echo $user['nama_lengkap']; ?> menyediakan PPDB secara <i>online</i> diharapkan proses
                        PPDB dapat berjalan cepat
                        dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran
                        calon siswa baru tidak menggunakan formulir konvensional hanya dengan mengakses website PPDB
                        Online
                        <?php echo $user['nama_lengkap']; ?>.
                    </p>
                </div>
                <div class="col-lg-4" style="text-align:justify">
                    <p>Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai
                        dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon
                        siswa akan mendapat bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan
                        untuk proses selanjutnya.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                    <a href="#page-top" class="btn btn-md btn-outline">
                        <i class="fa fa-pencil-square-o "></i> PPDB Online
                    </a> &nbsp;&nbsp;
                    <!--<a href="#prosedur" class="btn btn-md btn-outline">
                        <i class="fa fa-tasks"></i> Alur PPDB Online
                    </a>-->
                    <a href="logcs" class="btn btn-md btn-outline">
                        <i class="fa fa-sign-in"></i>
                        <?php if ($ceks == '') {
                            echo "Login";
                        } else {
                            echo "Panel";
                        } ?> Calon Siswa
                    </a>&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>

    <section id="prosedur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Alur PPDB Online</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <img class="img-responsive" src="img/alur.jpeg" alt="">
                    </div>
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center">
                                <h4>Penjelasan Prosedur PPDB Online</h4>
                                <hr class="star-primary">
                                <ol style="font-size:18px;text-align:justify">
                                    <li>Calon Siswa mendaftarkan diri atau melakukan <b><a href="pendaftaran">Pendaftaran PPDB <i>online</i></a></b> melalui
                                        website <b><a href="">PPDB Pondok Asuhan AL-ADABIY PONTIANAK</a></b>.</li>
                                    <li>Setelah Calon Siswa berhasil melakukan pendaftaran, Calon siswa wajib melakukan
                                        <b>Print Out Pendaftaran & Mempersiapkan Kelengkapan Berkas PPDB Pondok Asuhan
                                            AL-ADABIY PONTIANAK</b>.
                                    </li>
                                    <li>Calon siswa datang ke Pondok Asuhan AL-ADABIY PONTIANAK untuk <b>VERIFIKASI</b>,
                                        membawa <b>Bukti pendaftaran & Kelengkapan Berkas PPDB Pondok Asuhan AL-ADABIY
                                            PONTIANAK</b>. </li>
                                    <li>Panitia PPDB melakukan <b>Verifikasi dan Validasi Berkas Pendaftaran</b>.</li>
                                    <li>Setelah selesai Calon Siswa Menerima <b>TANDA BUKTI VERIFIKASI dan Melaksanakan Tes Potensial</b>.</li>
                                    <li>PENGUMUMAN HASIL PPDB Online bisa dilihat di Web PPDB Pondok Asuhan AL-ADABIY
                                        PONTIANAK. Untuk <b>No. Pendaftaran</b> sesuaikan dengan <b>Formulir No.
                                            Pendaftaran</b> & <b>Passwordnya</b> yaitu <b>NISN</b> Calon Siswa tersebut.
                                    </li>
                                    <li>Jika Calon Siswa dinyatakan <b>LULUS</b> maka Calon Siswa Wajib
                                        <b>Memersiapkan diri dan melengkapi persyaratan-persyaratan untuk dibawa</b> ke <b>Pondok Asuhan AL-ADABIY PONTIANAK</b>.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tutorial Pendaftaran</h2>
                    <hr class="star-primary">

                </div>
            </div>
            <div class="row">
                <div class="video-container">
                    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/v-VKToBYsLw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                </div>

            </div>
        </div>
    </section> -->

    <section id="visimisi">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <img src="<?= base_url('x/31.jpeg') ?>" style="max-width: 800px;max-height: 400px;min-width: 800px;min-height: 400px;object-fit: cover; overflow: hidden;">
                </div>
                <hr>
                <div class="col-lg-12 text-center">
                    <h2>VISI & MISI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="col-lg-12 text-center">
                        <h3>Visi
                        </h3>
                        <ol class="mb-5">
                            <li>Beriman dengan cerdas, cerdas dengan akhlak mulia</li>
                            <li>Menjadikan ajaran-ajaran dan nilai-nilai Islam sebagai pandangan hidup, sikap hidup dan keterampilan hidup dalam kehidupan sehari-hari</li>
                            <li>Menjadikan keimanan sebagai landasan meningkatkan kecerdasan berpikir</li>
                            <li>Memiliki kecerdasan dan akhlak mulia untuk menopang kehidupan sehari-hari</li>
                            <li>Memiliki daya saing dalam prestasi USBN</li>
                            <li>Memiliki daya saing dalam prestasi olimpiade Sains Agama pada tingkat lokal, nasional dan atau internasional</li>
                            <li>Memiliki daya saing dalam prestasi seni dan olahraga</li>
                            <li>Memiliki kepedulian yang tinggi terhadap lingkungan</li>
                            <li>Memiliki kemandirian dan kemampuan beradaptasi di lingkungannya</li>
                            <li>Memiliki lingkungan Madrasah yang nyaman dan kondusif untuk belajar</li>
                        </ol>
                        <h3 class="mt-5">Misi</h3>
                        <ol>
                            <li>Memantapkan iman untuk melahirkan kecerdasan</li>
                            <li>Meningkatkan kualitas kecerdasan berbasis seni untuk melahirkan akhlak mulia</li>
                            <li>Melaksanakan pembelajaran PAIKEM dengan pendekatan Saintifik guna untuk mengembangkan daya pikir qalbu dan fisik secara optimal</li>
                            <li>Melaksanakan pengayaan untuk mempersiakan siswa yang unggul dalam kompetisi akademik</li>
                            <li>Melaksanakan ibadah dan kegiatan keagamaan lainnya sesuai dengan ketentuan syari'at Islam</li>
                            <li>Menumuhkan dan mengembangkanpola pikir dan tindakan yang mencerminkan budaya mutu dan akhlak mulia dalam kehidupan sehari-hari</li>
                            <li>Melaksanakan pembinaan olahraga sehingga siswa memiliki daya fisik yang sehat, kuat dan tangguh</li>
                            <li>Menumbuhkan dan meingkatkan minat baca dan tulis</li>
                            <li>Mengembangkan kemampuan berbahasa arab dan inggris untuk anak-anak</li>
                            <li>Meningkatkan sarana prasarana untuk meningkatkan pencapaian prestasi akademik dan non akademik</li>
                            <li>Memberdaya lingkungan madrasah sebagai sumber belajar</li>
                            <li>Menerapkan manajemen partisipatif dengan melibatkan seluruh steakhoder madrasah dan komite madrasah</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Galeri</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="col-md-12">
                        <div class="text-center row">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/1.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/2.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/3.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/4.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/5.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/6.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/7.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/8.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/9.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/10.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/11.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/12.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/13.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/14.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/15.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/16.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/17.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/18.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/19.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/20.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/21.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/22.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/23.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/24.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/25.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/26.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/27.jpeg') ?>">
                            <img class="mx-auto d-block" style="max-width: 200px;max-height: 200px;min-width: 200px;min-height: 200px;object-fit: cover; overflow: hidden;" src="<?= base_url('x/28.jpeg') ?>">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="success" id="contact">
        <!-- <div class="container"> -->
        <div class="row" style="margin-top:-100px;margin-bottom:-105px;">
            <div class="col-lg-4 text-center">
                <br><br>
                <h2>Kontak Kami</h2>
                <hr class="star-light">
                <h4>
                    <?php echo $user['alamat']; ?> <br><br>
                </h4>
                <span style="color:#222;"><b><i class="fa fa-phone-square"></i>
                        <?php echo $user['telp']; ?>
                    </b> </span>
                &nbsp;
                <span class="eml" style="color:#222;"><i class="fa fa-envelope"></i>
                    <?php echo $user['email']; ?>
                </span>
                <br>
                <a href="https://www.mr-ell.com/" target="_blank">
                    <h4 class="btn btn-success">
                        <?php echo $user['nama_lengkap']; ?>
                    </h4>
                </a>
            </div>
            <div class="col-lg-8 text-center">
                <iframe src="https://maps.google.com/maps?width=100%25&amp;q=Jalan%20Danau%20Sentarum,%20Gg%20Matraman%20No%20A1,%20Sungai%20Bangkong,%20Kec.%20Pontianak%20Kota,%20Kota%20Pontianak,%20Kalimantan%20Barat%2078113+(Pondok%20Al-Adabiy%20Pontianak)&amp;output=embed" width="100%" height="465" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- </div> -->
    </section>



    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <a href="" target="_blank">
                            <?php echo $user['nama_lengkap']; ?>
                        </a>
                        <?php echo date('Y'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/freelancer.min.js"></script>

</body>

</html>