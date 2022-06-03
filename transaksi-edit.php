<?php 
    include 'navbar.php';
?>
<html>
    <div id="wrapper">
        <?php
            include 'sidebar.php';
        ?>
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="card mb-2">
                    <?php 
                        include 'koneksi.php';
                        $id_transaksi = $_GET['id_transaksi'];
                        if (!isset($_GET['id_transaksi'])) {
                            echo "
                                <script>
                                    alert('Data transaksi tidak ditemukan');
                                    window.location = 'transaksi-hal.php';
                                </script>
                            ";
                        }
                        $sql = "SELECT * FROM tb_transaksi WHERE id_transaksi = '$id_transaksi'";
                        $result = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_assoc($result);
                    ?>
                    <div class="card-header">
                        <center><h4> Edit Data transaksi </h4></center>
                        <div class="card card-login mx-auto mt-3">
                            <div class="card-body">
                                <form action="transaksi-proses.php" method="POST">
                                <div class="form-group">
                                        ID <input type="text" name="id_transaksi" class="form-control" value="<?php echo $id_transaksi ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        Tanggal <input type="text" name="tgl" class="form-control" value="<?php echo $data['tgl']?>">
                                    </div>
                                    <div class="form-group">
                                        Nama Suplier <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']?>">
                                    </div>
                                    <div class="form-group">
                                        Barang <input type="text" name="barang" class="form-control" value="<?php echo $data['barang']?>">
                                    </div>
                                    <div class="form-group">
                                        Jumlah Pembayaran <input type="text" name="total" class="form-control" value="<?php echo $data['total']?>">
                                    </div>
                                    <input type="submit" name="edit" value="Simpan" class="btn btn-primary btn-block">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <?php
            include 'footer.php';
        ?>
    </div>
</html>