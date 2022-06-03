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
	<center>
		<h3>
			TOKO SEMBAKO<br>SUMBER MAKMUR
		</h3>
			<h5>Jl Sukorejo No 15 Desa Sidomulyo Kec. Sukohadi 65153 Malang Jawa Timur</h5> <hr size="5px" color="black">
			<br>
		<h3>Data Transaksi</h3>
		<table border="1">
            <thead>
                <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="5%"><center>Tanggal</center></th>
                    <th width="15%"><center>Nama Suplier</center></th>
                    <th width="15%"><center>Barang</center></th>
                    <th width="15%"><center>Jumlah Pembayaran</center></th>
                </tr>
            </thead>
            <?php 
				include 'koneksi.php';
				$sql = "SELECT * FROM tb_transaksi ORDER BY id_transaksi ASC";
				$result = mysqli_query($koneksi, $sql);
				$no = 1;
				while($data = mysqli_fetch_assoc($result))
		      	{
		     ?>
            <tbody>
                <tr>
		       		<td><center><?php echo $no; ?></center></td>
		       		<td><center><?php echo $data['tgl']; ?></center></td>
			       	<td><center><?php echo $data['nama']; ?></center></td>
			       	<td><center><?php echo $data['barang']; ?></center></td>
			       	<td><center><?php echo $data['total']; ?></center></td>
		      	</tr>
            </tbody>
            <?php
		        $no++; //untuk nomor urut terus bertambah 1
		      	}
		     ?>
        </table>
	</center>
	<script>
		window.print()
	</script>
</body>
</html>
