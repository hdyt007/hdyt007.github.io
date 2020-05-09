<?php 
require 'function.php';
// session_start();

// if ( !isset($_SESSION["login"])) {
//   echo "<script>
//           alert('Maaf Anda Harus Login Terlebih Dahulu');
//           document.location.href = '../utama/login.php';
//         </script>";
// }

$pemesan = query("SELECT * FROM pesanan");


 ?>	

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Pesanan</title>
	<script>
	function tampilkan(){
			var waktu = new Date();
			var jam = waktu.getHours();
			var menit = waktu.getMinutes();
			var detik = waktu.getSeconds();
			var teksJam = new String();
			if (menit <= 9)
				menit = "0" + menit;
			if (detik <= 9)
				detik = "0" + detik;
		teksJam = jam + ":" + menit + ":" + detik;
		tempatJam.innerHTML = teksJam;
		setTimeout("tampilkan()",100);
		}
		function rel(){
			a = setTimeout("real()",100);
			hasil.innerHTML = a;
		}
		window.onload = rel;
		window.onload = tampilkan;


		// batas

	</script>
	<style>
		*{
			margin : 0;
		}
		h2{
			padding-top: 5px;
			background-color: gold;
			height: 46px;
			width: 100%;
			font-size: 32px;
			text-align: center;	
		}
		body{
			background-color: #FFDEAD;
		}
		table{
			margin-top: 40px;
		}
		p{
			font-size: 15px;
			padding-left: 15px;
			padding-right: 15px;
			margin-top: 40px;
		}
		a{
			font-family: sans-serif;
			text-decoration: none;
			font-size: 13px;
			color: black;
		}
		a:hover{
			color: white;
			text-decoration: underline;
		}
	</style>
</head>
<body>
<h2>Pesanan Yang Masuk</h2>

<script>
	function loadDoc() {
	setInterval(function(){
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("notif").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "bar.php", true);
  xhttp.send();
	},1000)
  
}
loadDoc();
	function reff(){
		setTimeout("Location: cek.php", 1000);
	}
</script>



<div id="tempatJam"></div>

<form method="post" action="">
<div class="opsi">
<center>
<div id="notif"></div>
</center>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<?php 

// if ($n) {
// 	echo "<script>
// 	alert('Ada pesanan baru !');
// 	</script>";
// }

 ?>