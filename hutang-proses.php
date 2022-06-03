<?php
include 'koneksi.php';
if (isset($_POST['tambah'])) {
	$nama       = $_POST['nama'];
	$rincian	= $_POST['rincian'];
	$total	    = $_POST['total'];
	$status	    = $_POST['status'];


	$sql = "INSERT INTO tb_hutang VALUES (
				'',
				'$nama',
				'$rincian',
				'$total',
                '$status'
			)";
	if (empty($nama) || empty($rincian) || empty($total) || empty($status)){
		echo "
			<script>
				alert('Pastikan anda mengisi semua data hutang');
				window.location = 'hutang-entry.php';
			</script>
    	";
	}
	elseif (mysqli_query($koneksi, $sql)){
		echo "
			<script>
				alert('Data hutang berhasil ditambahkan');
				window.location = 'hutang-hal.php';
			</script>
    	";
	}
	else{
		echo "
			<script>
				alert('Terjadi Kesalahan');
				window.location = 'hutang-entry.php';
			</script>
    	";
	}
}

elseif (isset($_POST['edit'])) {
	$id_hutang	= $_POST['id_hutang'];
	$nama	    = $_POST['nama'];
	$rincian    = $_POST['rincian'];
	$total	    = $_POST['total'];
	$status	    = $_POST['status'];
        
        $sql = "UPDATE tb_hutang SET nama = '$nama' , rincian = '$rincian' , total = '$total', status = '$status' WHERE id_hutang = '$id_hutang'";
            
        if (mysqli_query($koneksi, $sql)){
            echo "
                <script>
                    alert('Ubah data hutang berhasil');
                    window.location = 'hutang-hal.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Gagal !');
                    window.location = 'hutang-edit.php?id_hutang=$id_hutang';
                </script>
            ";
        }
    }else{
        header('location:hal-hutang.php');
    }
?>