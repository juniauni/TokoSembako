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
                <br><br><br>
                <center>   
                    <h2>Selamat Datang, 
                    <?php
                    session_start();
                    echo $_SESSION['nama'];
                    if ($_SESSION['login'] != true) {
                            header('location:index.php');
                        }
                    ?></h2>
                    <?php
                        $tgl = date("d/m/y");
                        echo '<p> Tanggal ( ' . $tgl . ' ) </p>';
                    ?>
                    <br><br>
                    <marquee direction="up" scrolldelay="250">
                        <center>
                            <img src="gambar/sembako1.jpg" width="20%" height="140px">
                            <img src="gambar/sembako2.jpg" width="20%" height="140px">
                            <img src="gambar/sembako3.jpg" width="20%" height="140px">
                            <img src="gambar/sembako4.png" width="20%" height="140px">
                        </center>
                    </marquee>
                </center>
            </div>
        </div>
        <?php
            include 'footer.php';
        ?>
    </div>
</html>