<?php 
require 'function.php';
$id = $_GET["ID"];


if (delete($id) > 0) {
	echo "<script>
				alert('Kerja yang bagus :v');
				document.location.href='cek.php';
			</script>";
} else {
	echo "<script>
		alert('Gagal dihapus');
		document.location.href='cek.php';
	</script>"; 
}
 ?>

