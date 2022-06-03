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
                        $id_member = $_GET['id_member'];
                        if (!isset($_GET['id_member'])) {
                            echo "
                                <script>
                                    alert('Data tidak ditemukan');
                                    window.location = 'hal-member.php';
                                </script>
                            ";
                        }
                        $sql = "SELECT * FROM tb_member WHERE id_member = '$id_member'";
                        $result = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_assoc($result);
                    ?>
                    <div class="card-header">
                        <center><h4> Edit Data Member </h4></center>
                        <div class="card card-login mx-auto mt-3">
                            <div class="card-body">
                                <form action="member-proses.php" method="POST">
                                    <div class="form-group">
                                        ID Member <input type="text" name="id_member" class="form-control" value="<?php echo $id_member ?>">
                                    </div>
                                    <div class="form-group">
                                        Nama <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']?>">
                                    </div>
                                    <div class="form-group">
                                        Alamat <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        Kontak <input type="text" name="kontak" class="form-control" value="<?php echo $data['kontak'] ?>">
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