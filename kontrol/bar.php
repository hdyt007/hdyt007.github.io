<?php 
session_start();

if ( !isset($_SESSION["login"])) {
  echo "<script>
          alert('Maaf Anda Harus Login Terlebih Dahulu');
          document.location.href = '../utama/login.php';
        </script>";
}

require 'function.php';
$pemesan = query("SELECT * FROM pesanan");
$sql = "SELECT * FROM pesanan";
$result = mysqli_query($conn, $sql);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    
 </head>
 <body>
 <table id="hasil" border="1" cellspacing="0" cellpadding="10">
   <tr>
      <th>No</th>
      <th>Info</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>No.Telp</th>
      <th>Jumlah Pesanan</th>
      <th>Harga</th>
   </tr>
   <?php $n = 1;
   // $nilai = $n;
   // if (mysqli_affected_rows($conn) ) {
   //    echo "<script>
   //             alert('wkwk');
   //          </script>";
   // }


   foreach ($pemesan as $pesan): ?>
   <tr>
      <td><?= $n; ?></td>
      <td><a href="selesai.php?ID=<?php echo $pesan["id"]; ?>">Selesai</a></td>
      <td><?= $pesan["nama"];?></td>
      <td><?= $pesan["alamat"];?></td>
      <td><?= $pesan["telpon"];?></td>
      <td><?= $pesan["jumlah"];?></td>
      <td>Rp.<?= $pesan["harga"];?></td>
   </tr>x
<?php $n++;
endforeach; ?>
</table><br>
 </body>
 </html>