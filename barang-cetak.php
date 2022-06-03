<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto;
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }
	</style>
</head>
<body>
	<div id="halaman">
	<center>
		<h3>
			TOKO SEMBAKO<br>SUMBER MAKMUR
		</h3>
			<h5>Jl Sukorejo No 15 Desa Sidomulyo Kec. Sukohadi 65153 Malang Jawa Timur</h5> <hr size="5px" color="black">
			<br>
		<h3>Daftar Barang</h3>
		<table border="1">
            <thead>
                <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="15%"><center>Kode Barang</center></th>
                    <th width="15%"><center>Nama Barang</center></th>
                    <th width="15%"><center>Harga Barang</center></th>
                    <th width="20%"><center>Foto</center></th>
                </tr>
            </thead>
            <?php 
				include 'koneksi.php';
				$sql = "SELECT * FROM tb_barang ORDER BY id_barang ASC";
				$result = mysqli_query($koneksi, $sql);
				$no = 1;
				while($data = mysqli_fetch_assoc($result))
		      	{
		     ?>
            <tbody>
                <tr>
		       		<td><center><?php echo $no; ?></center></td>
			       	<td><center><?php echo $data['kode_barang']; ?></center></td>
			       	<td><center><?php echo $data['nama']; ?></center></td>
			       	<td><center>Rp. <?php echo $data['harga']; ?></center></td>
			       	<td style="text-align: center;"><img src="img_gambar/<?php echo $data['gambar']; ?>" style="width: 120px;"></td>
		      	</tr>
            </tbody>
            <?php
		        $no++; //untuk nomor urut terus bertambah 1
		      	}
		     ?>
        </table>
	</center>
</div>
	<script>
		window.print()
	</script>
</body>
</html>
