<?php 
	include "koneksi.php";
	$id_transaksi= $_GET['id_transaksi'];
	$sql = "DELETE FROM tb_transaksi WHERE id_transaksi ='$id_transaksi'";
	$exec = mysqli_query($koneksi, $sql);
	if ($exec)
	 {
		echo "
    				<script>
    					alert('Hapus data transaksi berhasil');
    					window.location = 'transaksi-hal.php';
    				</script>
    			";
	}
	else
	{
		echo "Proses hapus gagal";
	}
?>
<?php
            include 'footer.php';
        ?>
		</div>
		</div>
		</div>
		</div>
    </div>
</html>