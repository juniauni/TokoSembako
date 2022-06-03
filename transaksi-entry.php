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
                    <div class="card-header">
                        <center><h4> Tambah Data Transaksi </h4></center>
                        <div class="card card-login mx-auto mt-3">
                            <div class="card-body">
                                <form action="transaksi-proses.php" method="POST">
                                    <div class="form-group">
                                        Tanggal <input type="text" name="tgl" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Nama Suplier <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Barang <input type="text" name="barang" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Jumlah Pembayaran <input type="text" name="total" class="form-control">
                                    </div>
                                    <input type="submit" name="tambah" value="TAMBAH" class="btn btn-primary btn-block">
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