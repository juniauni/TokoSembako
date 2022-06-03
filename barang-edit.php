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
                        <?php 
                            include 'koneksi.php';
                            $id_barang = $_GET['id_barang'];
                            if (!isset($_GET['id_barang'])) {
                                echo "
                                <script>
                                    alert('Tidak ada ID yang Terdeteksi');
                                    window.location = 'hal-barang.php';
                                </script>
                                ";
                            }
                            $sql = "SELECT * FROM tb_barang WHERE id_barang = '$id_barang'";
                            $result = mysqli_query($koneksi, $sql);
                            $data = mysqli_fetch_assoc($result);
                        ?>
                        <center><h4> Edit Data Barang </h4></center>
                        <div class="card card-login mx-auto mt-3">
                            <div class="card-body">
                                <form action="barang-proses.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        ID <input class="form-control" type="text" name="id_barang" value="<?php echo $id_barang ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        Kode Barang <input class="form-control" type="text" name="kode_barang" value="<?php echo $data['kode_barang'] ?>">
                                    </div>
                                    <div class="form-group">
                                        Nama Barang <input class="form-control" type="text" name="nama" value="<?php echo $data['nama'] ?>">
                                    </div>
                                    <div class="form-group">
                                        Harga Barang <input class="form-control" type="text" name="harga" value="<?php echo $data['harga'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?= $data['id_barang'] ?>">
                                        <input type="hidden" name="gambarLama" value="<?= $data['gambar'] ?>">
                                        Foto 
                                        <input 
                                        class="form-control" 
                                        type="file" 
                                        name="gambar" 
                                        id="gambar">
                                    </div>
                                    <input type="submit" name="edit" value="UBAH" class="btn btn-primary btn-block">
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