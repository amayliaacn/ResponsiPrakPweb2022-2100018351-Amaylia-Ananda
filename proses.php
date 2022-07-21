<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TB. Murah Aja</title>
    <link rel="stylesheet" type="text/css" href="proses.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="logo">
                <p>TB. Murah Aja&nbsp&nbsp</p>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Product</a></li>
                    <li><a href="beli.html">Buy Now</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="isi">
        <p>Buy Now</p>
    </div>
    <div class="isi2">
       <br><br><br><br>
    </div>

<?php
    echo "<title>TB.Murah Aja</title>";
    $fp = fopen("TB.Murah Aja.txt" , "a+");
    $tanggal = date("Y - m - d");
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pesan = $_POST['pesan'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];

    fputs($fp,"
    $tanggal
        Nama        : $nama
        Alamat      : $alamat
        Pesanan     : $pesan
        Jumlah Item : $jumlah
        Pembayaran  : $bayar\n");
    fclose($fp);
?>
 <div class="footer">
        <br><br>TB. Murah Aja Copyright &copy;2022<br><br><br>
    </div>
    </body>
    </html>