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
                        <center><h4> Tambah Data Barang </h4></center>
                        <div class="card card-login mx-auto mt-3">
                            <div class="card-body">
                                <form action="barang-proses.php" method="POST" enctype="multipart/form-data">                                  
                                    <div class="form-group">
                                        Kode Barang <input type="text" name="kode_barang" id="kode_barang" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        Nama Barang <input type="text" name="nama" id="nama" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        Harga Barang <input type="text" name="harga" id="harga" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        Foto <input type="file" name="gambar" id="gambar" class="form-control required="required">
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