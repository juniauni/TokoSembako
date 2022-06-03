<?php 
    include "koneksi.php";
    $id_hutang = $_GET['id_hutang'];
    $sql = "DELETE FROM tb_hutang WHERE id_hutang ='$id_hutang'";
    $exec = mysqli_query($koneksi, $sql);
    if ($exec)
     {
        echo "
                    <script>
                        alert('Hapus data hutang berhasil');
                        window.location = 'hutang-hal.php';
                    </script>
                ";
    }
    else
    {
        echo "Proses hapus gagal";
    }
?>