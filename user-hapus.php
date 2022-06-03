<?php 
    include "koneksi.php";
    $id_user = $_GET['id'];
    $sql = "DELETE FROM tb_admin WHERE id ='$id_user'";
    $exec = mysqli_query($koneksi, $sql);
    if ($exec)
     {
        echo "
                    <script>
                        alert('Hapus data berhasil');
                        window.location = 'user-hal.php';
                    </script>
                ";
    }
    else
    {
        echo "Proses hapus gagal";
    }
?>