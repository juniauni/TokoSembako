<?php
include 'koneksi.php';
    if (isset($_POST['tambah'])) {
        $tgl = $_POST['tgl'];
        $nama = $_POST['nama'];
        $barang= $_POST['barang'];
        $total = $_POST['total'];

        $sql = "INSERT INTO tb_transaksi VALUES (
                        '', 
                        '$tgl', 
                        '$nama', 
                        '$barang', 
                        '$total'
                    )";
        if (empty($tgl) || empty($nama) || empty($barang) || empty($total)) {
            echo "
                <script>
                    alert('Pastikan semua data terisi');
                    window.location = 'transaksi-entry.php';
                </script>
            ";
        }
        elseif (mysqli_query($koneksi, $sql)){
            echo "
                <script>
                    alert('Tambah data transaksi berhasil');
                    window.location = 'transaksi-hal.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Terjadi kesalahan!');
                    window.location = 'transaksi-entry.php';
                </script>
            ";
        }
    }
    elseif (isset($_POST['edit'])){
        $id_transaksi = $_POST['id_transaksi'];
        $tgl = $_POST['tgl'];
        $nama = $_POST['nama'];
        $barang= $_POST['barang'];
        $total = $_POST['total'];
        
        $sql = "UPDATE tb_transaksi SET tgl = '$tgl', nama = '$nama' , barang = '$barang', total = '$total'  WHERE id_transaksi = '$id_transaksi'";
            
        if (mysqli_query($koneksi, $sql)){
            echo "
                <script>
                    alert('Ubah data transaksi berhasil');
                    window.location = 'transaksi-hal.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Gagal !');
                    window.location = 'transaksi edit.php?id_transaksi=$id_transaksi';
                </script>
            ";
        }
    }else{
        header('location:transaksi-hal.php');
    }
?>