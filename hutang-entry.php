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
                        <center><h4> Tambah Data Hutang </h4></center>
                        <div class="card card-login mx-auto mt-3">
                            <div class="card-body">
                                <form action="hutang-proses.php" method="POST">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <select class="form-control" name="nama" required>
                                            <?php
                                                include 'koneksi.php';
                                                $sql = "select * from tb_member";
                                                $hasil = mysqli_query($koneksi, $sql);
                                                $no = 0;
                                                while($data = mysqli_fetch_array($hasil)){
                                                    $no++;
                                            ?>
                                            <option value="<?php echo $data['nama']; ?>">
                                               <?php echo $data['nama']; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        Rincian <input type="text" name="rincian" class="form-control"required="required">
                                    </div>
                                    <div class="form-group">
                                        Total <input type="text" name="total" class="form-control"required="required">
                                    </div>
                                    <div class="form-group">
                                        Status <input type="text" name="status" class="form-control"required="required">
                                    </div>
                                    <input type="submit" name="tambah" value="Simpan" class="btn btn-primary btn-block">
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