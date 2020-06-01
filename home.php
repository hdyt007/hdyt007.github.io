<?php 

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.kawalcorona.com/indonesia/provinsi/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result, true);




$provinsi =  $result[3]['attributes']['Provinsi'];
$kasus_posi = $result[3]['attributes']['Kasus_Posi'];
$kasus_semb = $result[3]['attributes']['Kasus_Semb'];
$kasus_meni = $result[3]['attributes']['Kasus_Meni'];

// echo $provinsi . $kasus_posi . $kasus_semb . $kasus_meni;


?> 

<!doctype html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

  <title>Data Covid-19 Sul-Sel</title>
  <style>
    body{
      background-color: #E7F1F5;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Covid-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Features</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>

<!-- konten -->
<div class="konten">
<section class="satu">
  <div class="container">
    <div class="row mt-5 mb-1 pb-5 align-center">
      <div class="col-md-6 col-sm-12">
        <h2 id="h-kiri" class="hd judul-head d-flex jutify-content-center">Data Covid-19</h2>
        <p id="h-kiri2" class="hd p-head"><?=  $provinsi;?></p>

        <p id="h-kiri3" class="hd p-hd">Website untuk melihat data penyebaran virus corona  yang ada di wilayah ini, selamat menggunakan website ini.</p>

        <button class="btn btn-primary rounded-pill py-2" id="lihatData">Lihat Data</button>
      </div>
      <div class="col-md-6 col-sm-12 pb-5 thumb-kanan">
        <img src="img/bg-thumb.png" class="float-right" id="bg-thumb">
        <img src="img/thumbnail.png" class="h-kanan float-right" id="thumbnail">
      </div>
    </div>
  </div>
</section>

<section class="dua bg-gray text-white">
  <div class="container">
    <div class="row pb-4 align-center">
      <div class="col-md-6 col-sm-12 d-flex justify-content-center">
        <img src="img/sumber.png" class="hd" id="img-sumber">
      </div>
      <div class="col-md-6 col-sm-12 sum font-imp">
        <h1 class="judul-sumber">Sumber Terpercaya</h1>
        <p class="p-sumber">Menggunakan api dari sumber yang terpercaya <br>
        yang sudah digunankan sejak lama, kami menggunakan api dari website kawal corona.</p>
      </div>
    </div>
  </div>
</section>

<section class="tiga mb-5 ">
  <img src="img/kiri.png" id="img-kiri">
  <img src="img/kanan.png" id="img-kanan" class="">
  <div class="container ">
    <h4 class="text-center pt-5 pb-3"><?= $provinsi?></h4>
    <div class="row mt-5 pb-5">
      <div class="col-md-4 col-sm-12">
        <div class="at card">
          <div class="card-body d-flex justify-content-center align-center">
            <img src="img/posi.png" width="150" height="165">
          </div>
          <div class="card-footer text-center">
            <h4>Positif</h4>
            <p><?= $kasus_posi;?> Orang</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="at card">
          <div class="card-body d-flex justify-content-center align-center">
            <img src="img/semb.png" width="200" height="195" style="margin-left: 50px;">
          </div>
          <div class="card-footer text-center">
            <h4>Sembuh</h4>
            <p><?= $kasus_semb;?> Orang</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="at card">
          <div class="card-body d-flex justify-content-center align-center">
            <img src="img/meni.png" class="mt-2" width="145" height="140">
          </div>
          <div class="card-footer text-center">
            <h4>Meninggal</h4>
            <p><?= $kasus_meni;?> Orang</p>
          </div>
        </div>
      </div>
    </div>
  </div> 
 

</section>

<section class="empat bg-gray text-white">
  <div class="container">
    <div class="image d-flex justify-content-center">
      <img src="img/jaga-jarak.png" class="at mt-5 jg-jarak">
    </div>
    <div class="row mt-5 pat align-center">
      <div class="col">
        <h2 id="jg-jarak" class="hd">Ayo Jaga Jarak, Dengan Menerapkan Social Distancing</h2>
      </div>
      <div class="col">
        <img src="img/Layer 2.png" id="avatar" class="h-kanan mb-5 org float-left">
      </div>
    </div>
  </div>
</section>

<section class="lima">
<h4 class="text-center pt-5">Pembuat</h4>
<div class="container">
  <div class="row pt-5">
    <div class="col text-center">
      <img src="img/akb.png" width="130" class="rounded-circle">
      <p class="lead" style="font-size: 30px; margin-top: 20px;">Muh Akbar</p>
      <p class="pt-3" style="color: rgba(0,0,0,0.5); margin-top: -30px;"><i>Programmer  |  Designer  |  Gamer</i></p>
    </div>
    <div class="col text-center">
      <img src="img/lammpu.jpg" width="120" class="rounded-circle">
      <p class="lead" style="font-size: 30px; margin-top: 20px;">Hdyt</p>
      <p class="pt-3" style="color: rgba(0,0,0,0.5); margin-top: -30px;"><i>Orang  |  Manusia  |  Human</i></p>
    </div>
  </div>
</div>  

</section>


<footer class="bg-dark text-white text-center" style="margin-bottom: -20px;">
  <p class="py-3">2020 by.timCodersMks</p>
</footer>
</div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jQuery.js"></script>
  <script src="js/japas.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>