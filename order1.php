<?php
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga_paket = $_POST['harga_paket'];
$total = $jumlah * $harga_paket;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <img src="gambar/Pizzaeb.png" alt="" style="height: 250px; width: 250px;">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
          <h1>STRUK PEMBELIAN</h1>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <h5>Juanda (R256) Jl. Ir. H. Juanda No.13, RT. 14/RW. 4, Kb. KLP, Kec.Gambir, Kota Jakarta Pusat, Daerah Khusus Ibu Kota Jakarta.</h5>
                <table class="table-borde : 0 text-center">
                    <tr>
                        <td><strong>Waktu</strong></td>
                        <td>:<?= date('d F Y h:i:s')?></td>
                    </tr>
                </table>
                <p class="text-center">--------------------------------------------------------------------------------------------------------------------------------------------------------------
                </p>
            </div>
        </div>

        
        <div class="row text-center">
            <div class="col"></div>
            <div class="col justify-content-center">
                <table class="table-borde : 0">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $nama ?></td>
                    </tr>
                    <tr>
                        <td>Paket </td>
                        <td>:</td>
                        <td><?php echo $kode ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td><?php echo $jumlah ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><?php echo $harga_paket ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td><?php echo $total?></td>
                    </tr>
                </table>
            </div>
            <div class="col"></div>
            </div>
        <!-- End Table -->
         <div class="row">
            <div class="col">
                <p class="text-center">--------------------------------------------------------------------------------------------------------------------</p>
            </div>
         </div>
    </div>
</body>
</html>