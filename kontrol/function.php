<?php 
$conn = mysqli_connect("localhost","root","","phpdasar");


function query($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function berhasil(){
	global $conn;
	if (mysqli_affected_rows($conn) > 0) {
      echo "<script>
          alert('berhasil Memesan');
          document.location.href = '../aft_login/';
        </script>";
    }
	
}
function delete($id){
	global $conn;

mysqli_query($conn, "DELETE FROM pesanan WHERE id = $id");
return mysqli_affected_rows($conn);
}
 ?>