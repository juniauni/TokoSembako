<?php
include 'koneksi.php';
if (isset($_POST['tambah'])) {
	$username	= $_POST['username'];
	$passsword	= $_POST['password'];
	$nama	    = $_POST['nama'];

	$sql = "INSERT INTO tb_admin VALUES (
				'',
				'$username',
				'$passsword',
				'$nama'
			)";
	if (empty($username) || empty($passsword) || empty($nama)) {
		echo "
			<script>
				alert('Pastikan anda mengisi semua data');
				window.location = 'user-entry.php';
			</script>
    	";
	}elseif (mysqli_query($koneksi, $sql)){
		echo "
			<script>
				alert('Data User Berhasil Ditambahkan');
				window.location = 'user-hal.php';
			</script>
    	";
	}else{
		echo "
			<script>
				alert('Terjadi Kesalahan');
				window.location = 'user-entry.php';
			</script>
    	";
	}
}else{
    header('location:user-hal.php');
}
?>