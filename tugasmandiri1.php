<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <div class="row">
        <div class="col text-center" style="width:10">
            <!--Start Now-->
            <nav class="navbar bg-light navbar-expand-lg">
                <div class="container-fluid">
                    <img src="gambar/logo pizza.png" alt="" style="width:90px; height:90px;">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tugasmandiri1.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order1.php">My Order</a>
                        </li>
                    </ul>                  
                </div>
            </nav>
         </div>
    </div>
     <!--End Progres-->

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="200">
                            <img src="gambar/ASD.png" class="d-block w-100" alt="..." style=" height:500px;">
                        </div>
                        <div class="carousel-item" data-bs-interval="200">
                            <img src="gambar/ERT.jfif" class="d-block w-100" alt="..." style="width: 90%; height:500px;">
                        </div>
                        <div class="carousel-item" data-bs-interval="200">
                            <img src="gambar/QWE.jfif" class="d-block w-100" alt="..." style="width: 90%; height:500px;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="col text-center mt-3">
        <h1>Our Most Popular Deals</h1>
        </div>
    <div class="row">
   

    <?php 
    $menupaket =
    [
        [
            'kode' => 'paket1',
            'nama' => 'L1MO PIZZA',
            'isi_paket' => 'Meat Lover, Cheesy Galore, Super Supreme, American Favourite, dan Tuna Melt.',
            'harga_paket' => 270909,
            'gambar' => '5d.jpg'
        ],
        [
            'kode' => 'paket2',
            'nama' => 'QU4RTZA',
            'isi_paket' => 'Meat Lovers, Cheese Overload, Super Supreme dan Tuna Melt.',
            'harga_paket' => 120000,
            'gambar' => 'Q4.jpg'
        ],
        [
            'kode' => 'paket3',
            'nama' => 'Double Box',
            'isi_paket' => 'jamur, Chilie Green, Super Supreme, Paperoni,',
            'harga_paket' => 152727,
            'gambar' => 'doublebox.jpg'
        ],
        [
            'kode' => 'paket4',
            'nama' => 'Big Box',
            'isi_paket' => 'Bebas pilih toping signature, dan dapat 5 varian snack asin manisnya',
            'harga_paket' => 145455,
            'gambar' => '54.jpg'
        ],
        [
            'kode' => 'paket5',
            'nama' => 'Hemat Makan!',
            'isi_paket' => 'Chicken Nanban Pizza, Melts Cheese Overload dengan Hokkaido Cheese, Chicken Nanban Donburi, Minuman Cherry Blossom.',
            'harga_paket' => 38500,
            'gambar' => 'Pkenyang.jpg'
        ],
        [
            'kode' => 'paket6',
            'nama' => 'Paket Nge-date Bareng Doi!',
            'isi_paket' => 'Chicken Nanban Pizza, Melts Cheese Overload dengan Hokkaido Cheese, Chicken Nanban Donburi, Minuman Cherry Blossom, + 1 Minuman.',
            'harga_paket' => 35000,
            'gambar' => 'Paket doi.jpg'
        ],
        [
            'kode' => 'paket7',
            'nama' => 'P45TI 45SIK!',
            'isi_paket' => '2 MyBox + 1 Lemon Tea.',
            'harga_paket' => 45000,
            'gambar' => '3.jpg'
        ],
        [
            'kode' => 'paket7',
            'nama' => 'DUO HEMAT!',
            'isi_paket' => '2 MyBox + Snack Asin Manisnya.',
            'harga_paket' => 45000,
            'gambar' => 'promo-Pizza-Hut.jpg'
        ],
    ]
    ?>


    <!--Start Card-->
        <?php
        foreach ($menupaket as $menu) {
         ?>
         <div class="col-xl-3 col-md-6 col-sm 12 ">
            <div class="card">
                <img src="gambar/<?php echo $menu['gambar'] ?>" class="card-img-top p-1" alt="" >
                <div class="card-body">
                    <h5 class="card-title"><?php echo $menu['nama'] ?></h5>
                    <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                     data-bs-target="#exampleModalToggle<?php echo $menu ['kode']?>">
                     Detail Paket
                     </button>
                     <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                     data-bs-target="#pesanModal<?php echo $menu['kode']?>">
                     Order
                     </button>
                </div>
            </div>
         </div>
         <?php } ?>
         </div>
    <!--End code-->
    <?php
        foreach ($menupaket as $menu) {
         ?>
    <!-- Modal Detail -->
    <div class="modal fade" id="exampleModalToggle<?php echo $menu ['kode']?>" tabindex="-1"
      arial-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail
                    <?php echo $menu ['nama'] ?>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <th>Isi Paket</th>
                        <td><?php echo $menu['isi_paket']; ?></td>
                    </tr>
                    <tr>
                        <th>Harga Paket</th>
                        <td><?php echo $menu['harga_paket']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
      </div>      
    </div>
    
<!-- End Modal Detail -->

<!-- Modal Pesanan -->
 <div class="modal fade" id="pesanModal<?php echo $menu['kode']?>" tabindex="-1" arial-labelledby="exampleModalLbel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $menu['nama']?> Lengkapi Data Pesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-control" action="order1.php" method="post">
                        <input type="hidden" name="kode" value="<?php echo $menu['kode']?>">
                        <input type="hidden" name="harga_paket" value="<?php echo $menu['harga_paket']; ?>"> 
                    <div class="form-group">
                        <label for="" required>Nama Pelanggan</label>
                        <input class="form-control type="text id="namapelanggan" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="" required>Jumlah Pelanggan</label>
                        <input class="form-control" type="text" id="namapelanggan" name="jumlah">
                    </div>
                   
                </div>
                <div class="moodal-footer">
                    <button type="submit justify-center" class="btn btn-danger">Pesan</button>
                </div>
                </form>
            </div>
    </div>
 </div>
 <?php } ?>

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">ABOUT US</h6>
            <p>
             Brand Story</p>
            <p>Setrifikat Halal</p>
            <p>CSR</p>
            <p>Gift Voucher</p>
            <p> Outlet Locations</p>
            <p>News Room</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">MY ACCOUNT</h6>
            <p>HUT REWARDS</p>
            <p>Sign Up</p>
            <p>My Voucher</p>
            <p>My Slice</p>
            <p>Saved Address</p>
            <p>Saved Outlet</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">SERVICE & POLICIES</h6>
            <p>Contact Us</p>
            <p>FAQS</p>
            <p>Privacy Policy</p>
            <p>Terms of use</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Indonesia, NY 10012, ID</p>
            <p><i class="fas fa-envelope mr-3"></i></p>
            <p><i class="fas fa-phone mr-3"></i>62+ 89630017576</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2024 Copyright:
      <a class="text-white">Rabbani</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>