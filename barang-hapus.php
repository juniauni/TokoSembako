<?php 
    include "koneksi.php";
    $id_barang = $_GET['id_barang'];
    $sql = "DELETE FROM tb_barang WHERE id_barang ='$id_barang'";
    $exec = mysqli_query($koneksi, $sql);
    if ($exec)
     {
        echo "
            <script>
                alert('Hapus data barang berhasil');
                window.location = 'barang-hal.php';
            </script>
        ";
    }
    else
    {
        echo "Proses hapus gagal";
    }
?>