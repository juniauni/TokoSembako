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
                        $id_hutang = $_GET['id_hutang'];
                        if (!isset($_GET['id_hutang'])) {
                            echo "
                                <script>
                                    alert('Data tidak ditemukan');
                                    window.location = 'hutang-hal.php';
                                </script>
                            ";
                        }
                        $sql = "SELECT * FROM tb_hutang WHERE id_hutang = '$id_hutang'";
                        $result = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_assoc($result);
                    ?>
                    <div class="card-header">
                        <center><h4> Edit Data Hutang </h4></center>
                        <div class="card card-login mx-auto mt-3">
                            <div class="card-body">
                                <form action="hutang-proses.php" method="POST">
                                    <div class="form-group">
                                        ID Hutang <input type="text" name="id_hutang" class="form-control" value="<?php echo $id_hutang ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        Nama <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']?>">
                                    </div>
                                    <div class="form-group">
                                        Rincian <input type="text" name="rincian" class="form-control" value="<?php echo $data['rincian'] ?>">
                                    </div>
                                    <div class="form-group">
                                        Total <input type="text" name="total" class="form-control" value="<?php echo $data['total'] ?>">
                                    </div>
                                    <div class="form-group">
                                        Status <input type="text" name="status" class="form-control" value="<?php echo $data['status'] ?>">
                                    </div>
                                    <input type="submit" name="edit" value="SIMPAN" class="btn btn-primary btn-block">
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