<?php 
    include "koneksi.php";
    $id_member = $_GET['id_member'];
    $sql = "DELETE FROM tb_member WHERE id_member ='$id_member'";
    $exec = mysqli_query($koneksi, $sql);
    if ($exec)
     {
        echo "
                    <script>
                        alert('Hapus data member berhasil');
                        window.location = 'member-hal.php';
                    </script>
                ";
    }
    else
    {
        echo "Proses hapus gagal";
    }
?>