<?php
	include 'koneksi.php';
	function upload(){
		// var_dump($_FILES); die;
		$namaFile = $_FILES['gambar']['name'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];
	
		// cek apakah tidak ada gambar yang diupload
		// var_dump($error); die;
		if($error === 4) {
			echo "
				<script>
					alert('Gambar harus diisi');
					window.location = 'barang-entry.php';
				</script>
			";
			return false;
		}
		// cek apakah yang diupload adalah gambar
		$ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		// var_dump($ekstensiGambar); die;
		$ekstensiGambar = strtolower(end($ekstensiGambar));
	
		if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
			echo "
				<script>
					alert('File harus berupa gambar');
					window.location = 'barang-edit.php';
				</script>
			";
			return false;
		}
	
		// lolos pengecekan, upload gambar
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;
	
		$oke =  move_uploaded_file($tmpName, 'img_gambar/' . $namaFileBaru);
		return $namaFileBaru;
	}

	if (isset($_POST['tambah'])) {
		$kode_barang   = $_POST['kode_barang'];
		$nama   = $_POST['nama'];
		$harga  = $_POST['harga'];
		$gambar = upload();

		$sql = "INSERT INTO tb_barang VALUES('','$kode_barang', '$nama', '$harga','$gambar')";

		if(empty($kode_barang) || empty($nama)|| empty($harga) || empty($gambar)) {
			echo "
				<script>
					alert('Pastikan Anda mengisi semua data barang');
					window.location = 'barang-entry.php';
				</script>
			";
		}
		elseif(mysqli_query($koneksi, $sql)){
			echo "
				<script>
				alert('Data berhasil ditambah.'); window.location = 'barang-hal.php'
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Terjadi kesalahan');
					window.location = 'barang-entry.php'
				</script>
			";
		}
	}
	elseif (isset($_POST['edit'])){
		$id_barang = $_POST['id_barang'];
		$kode_barang = $_POST['kode_barang'];
		$nama   = $_POST['nama'];
		$harga  = $_POST['harga'];
		$gambarLama = $_POST['gambarLama'];	
	

		// cek apakah user pilih gambar atau tidak
		if($_FILES['gambar']['error']) {
			$gambar = $gambarLama;
		}else {
			$gambar = upload();
		}
	
		$sql = "UPDATE tb_barang SET 
				kode_barang = '$kode_barang',
				nama = '$nama',
				harga = '$harga',
				gambar = '$gambar'
				WHERE id_barang = $id_barang 
				";
	
		if(mysqli_query($koneksi, $sql)){
			echo "
				<script>
					alert('Data barang berhasil diubah');
					window.location = 'barang-hal.php';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Terjadi kesalahan');
					window.location = 'barang-edit.php';
				</script>
			";
		}
	}

