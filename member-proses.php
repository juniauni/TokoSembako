<?php
include 'koneksi.php';
if (isset($_POST['tambah'])) {
	$nama		= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kontak	= $_POST['kontak'];

	$sql = "INSERT INTO tb_member VALUES (
				'',
				'$nama',
				'$alamat',
				'$kontak'
			)";
	if (empty($nama) || empty($alamat) || empty($kontak)) {
		echo "
			<script>
				alert('Pastikan anda mengisi semua data memeber');
				window.location = 'member-entry.php';
			</script>
    	";
	}
	elseif (mysqli_query($koneksi, $sql)){
		echo "
			<script>
				alert('Data member berhasil ditambahkan');
				window.location = 'member-hal.php';
			</script>
    	";
	}
	else{
		echo "
			<script>
				alert('Terjadi Kesalahan');
				window.location = 'member-entry.php';
			</script>
    	";
	}
}

elseif (isset($_POST['edit'])){
        $id_member = $_POST['id_member'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kontak = $_POST['kontak'];
        
        $sql = "UPDATE tb_member SET nama = '$nama' , alamat = '$alamat' , kontak = '$kontak' WHERE id_member = '$id_member'";
            
        if (mysqli_query($koneksi, $sql)){
            echo "
                <script>
                    alert('Ubah data member berhasil');
                    window.location = 'member-hal.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Gagal!');
                    window.location = 'member-edit.php?id_member=$id_member';
                </script>
            ";
        }
    }else{
        header('location:hal-member.php');
    }
?>