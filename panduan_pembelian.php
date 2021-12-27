<?php
  session_start();

	include_once("frontend/function/helper.php");
	include_once("frontend/function/koneksi.php");

	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
    $page = isset($_GET['page']) ? $_GET['page']: false;
	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id']: false;
	
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
    $keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
    $totalBarang = count($keranjang);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="frontend/libraries/boostrap/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&
    family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="frontend/styles/main.css" />
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <a href="index.html" class="navbar-brand">
                <img src="frontend/images/logo.png" alt="Logo Apotek" />
            </a>
            <button class="navbar-toggler navbar-toogler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-md-2">
                        <a href="index.html" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="berita_kesehatan.html" class="nav-link">Berita Kesehatan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="resepdokter.html" class="nav-link dropdown-toggle" id="navbardrop"
                            data-bs-toggle="dropdown">
                            Resep Dokter
                        </a>
                        <div class="dropdown-menu">
                            <a href="resepdokter.html" class="dropdown-item">Upload Resep Dokter</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="produk.php" class="nav-link dropdown-toggle" id="navbardrop" data-bs-toggle="dropdown">
                            Produk
                        </a>
                        <div class="dropdown-menu">
                            <a href="produk.php?kategori_id=1" class="dropdown-item">Obat Generik</a>
                            <a href="produk.php?kategori_id=2" class="dropdown-item">Obat Bebas</a>
                            <a href="produk.php?kategori_id=3" class="dropdown-item">Alat Kesehatan</a>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL. "keranjang.html"; ?>" id="button-keranjang">
                            <img src="<?php echo BASE_URL."frontend/images/icon-cart.png";?>" />
                            <?php
							if($totalBarang != 0){
								echo "<span class='total-barang'>$totalBarang</span>";
							}
						?>
                        </a>
                    </li>
                    <?php
						    if($user_id){
							    echo "
                                <li class='nav-item dropdown'> 
                                    <a class='nav-link dropdown-toggle' id='navbardrop' data-bs-toggle='dropdown' >
                                    Hi <b>$nama</b>
                                    </a> 
                                    <div class='dropdown-menu'>
								        <a href='".BASE_URL."my_profile.html' class='dropdown-item'>My Profile</a>	
								        <a href='".BASE_URL."logout.html' class='dropdown-item'>Logout</a>	                 
                                    </div>
                                </li>";
						    }else{
							    echo "<form action='login.html' class='form-inline my-2 my-lg-0 d-none d-sm-block'>
                  <button class='btn btn-login btn-navbar-right my-2 my-sm-0 px-4'>Masuk</button>
                  </form>";
						    }
					
					      ?>
                </ul>

                <!--Desktop button-->

            </div>
        </nav>
    </div>
    <!-- akhir Navbar -->

    <main>


        <section class="section-header-tutorial"></section>
        <section class="section-detail-tutorial">
            <div class="container">
                <div class="row">
                    <div class="col pl-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none; color: #07284e;"
                                        href="panduan.php">Panduan</a> </li>
                                <li class="breadcrumb-item active">Cara Melakukkan Pembelian Produk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <section class="tutorial-content">
            <div class="container">

                <div class="title-tutorial">
                    <h1> Cara Melakukkan Pembelian Produk</h1>
                    <hr />
                </div>
                <div class="isi-tutorial">
                    <p>
                        Silakan Login terlebih dahulu sebelum membeli produk. Jika belum memiliki akun, silakan
                        daftar yang
                        berada pada menu login.
                    </p>
                    <p>
                        <b>Langkah 1 </b> - Klik pada menu produk yang ada pada bagian navigasi bar. navigasi bar
                        terletak
                        pada bagian atas. setelah itu pilih kategori yang ada contoh nya Obat Bebas.
                    </p>
                    <div class="text-center mb-4">
                        <img src="frontend/images/menu-produk.jpg" alt="">
                    </div>
                    <p>
                        <b>Langkah 2 </b> - Pilih Produk yang tersedia. anda bisa melihat detail produk tersebut
                        atau anda
                        bisa langsung memasukkan produk ke keranjang dengan cara mengklik tombol + add to chart yang
                        berwarna biru.
                    </p>
                    <div class="text-center mb-4">
                        <img src="frontend/images/pilihan-produk.jpg" alt="">
                    </div>
                    <p>
                        <b>Langkah 3 </b> - Jika anda sudah memilih produk dan sudah memasukkan produk tersebut ke
                        keranjang, silakan klik icon keranjang pada bagian navigasi bar yang terletak di bagian
                        atas.
                    </p>
                    <div class="text-center mb-4">
                        <img src="frontend/images/tutorial-icon-keranjang.JPG" alt="">
                    </div>
                    <p><b>Langkah 4 </b> - Kemudian jika produk yang dipilih sudah benar anda dapat klik Lanjut
                        Pemesanan,
                        jika anda ingin menambahkan produk lainnya anda dapat klik Lanjut Belanja, anda juga dapat
                        menambah
                        jumlah produk yang ingin dibeli dengan cara mengganti angka yang berada pada kolom <b>Qty
                        </b> . dan anda juga dapat menghapus produk jika salah memasukkan produk dengan cara klik
                        icon tempat sampah / trash. </p>
                    <div class="text-center mb-lg-4">
                        <img src="frontend/images/tutorial-menu-keranjang.JPG" alt="">
                    </div>
                    <p>
                        <b>Langkah 5 </b> - Isi data diri penerima produk dengan lengkap.
                    </p>
                    <div class="text-center mb-lg-4">
                        <img src="frontend/images/tutorial-menu-checkout.JPG" alt="">
                    </div>
                    <p><b>Langkah 6 </b> - Klik pada bagian detail pesanan.</p>
                    <div class="text-center mb-lg-4">
                        <img src="frontend/images/tutorial-menu-MyProfile.JPG" alt="">
                    </div>
                    <p><b>Langkah 7 </b> - Pastikan Data - data yang anda masukkan sudah benar. kemudian jika anda sudah
                        melakukan pembayaran silakan lakukan
                        konfirmasi pembayaran yang berada pada bagian bawah.</p>
                    <div class="text-center mb-lg-4">
                        <img src="frontend/images/tutorial-menu-detailpesanan.JPG" alt="">
                    </div>
                    <p><b>Langkah 8 </b> - Kemudian yang terakhir isi data rekening yang melakukkan pembayaran dan
                        masukkan tanggal transfer.</p>
                    <div class="text-center mb-lg-4">
                        <img src="frontend/images/tutorial-menu-pembayaran.JPG" alt="">
                    </div>
                </div>

            </div>
        </section>
    </main>



    <footer class="section-footer mt-5 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-conten-center">
                <div class="col-12">
                    <div class="row">
                        <!-- info -->
                        <div class="col-12 col-lg-3">
                            <img src="frontend/images/logo2.png" alt="" />
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>Info</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </div>
                        <!-- info -->
                        <div class="col-12 col-lg-3">
                            <h5>Perusahaan</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Syarat & Ketentuan</a></li>
                                <li><a href="#">Kebijakan Privasi</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Bantuan Pelayanan</a></li>
                            </ul>
                        </div>
                        <!-- info -->
                        <div class="col-12 col-lg-3">
                            <h5>Kontak</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Jl. Kelapa Dua no.42</a></li>
                                <li><a href="#">Depok, Jawa Barat</a></li>
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">(021)0707070707</a></li>
                                <li><a href="#">Contact@pharmacy.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row border-top justify-content-center alignt-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light mb-0" style="color: #fff">
                    Copyright 2021 Harry. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/libraries/boostrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>