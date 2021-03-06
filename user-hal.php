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
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i> Data User
                </div>
                <div class="card-body">
                    <a href="user-entry.php">
                        <i class="fas fa-plus-circle">  </i>   Tambah Data
                    </a>
                    <div class="table-responsive">
                    <div class="container">
                        <table id="usertb" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> 
                                        <center>
                                            No
                                        </center> 
                                    </th>
                                    <th> 
                                        <center>
                                            Username
                                        </center> 
                                    </th>
                                    <th> 
                                        <center>
                                            Nama
                                        </center> 
                                    </th>
                                    <th> 
                                        <center>
                                            Action
                                        </center> 
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include 'koneksi.php';
                                    $sql = "SELECT * FROM tb_admin ORDER BY id ASC";
                                    $result = mysqli_query($koneksi, $sql);
                                    $no = 1;
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td>
                                        <center>
                                            <a href="user-hapus.php?id=<?php echo $data['id']; ?>">
                                                Hapus
                                            </a>
                                        </center>
                                    </td>
                                </tr>
                                <?php
                                   $no++; //untuk nomor urut terus bertambah 1
                                   }
                                ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            $('#usertb').DataTable();
        } );
    </script>
    </div>
    <footer class="sticky-footer width-full">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright ?? Kelompok 4 </span>
        </div>
    </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</html>