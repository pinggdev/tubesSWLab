<?php 
require '../endpoint/endpoint_fakultas_informasi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $namaFakultas; ?></title>
    <link rel="shortcut icon" href="../../assets/usuSolo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="../../index.php">
        <img src="../../assets/USU_Logo2.png" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../../index.php">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="rumahsakit.php">Rumah Sakit USU</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">Tentang Kami</a>
        </li>
        </ul>
    </div>
    </nav>

    <div class="container informasiFakultas">
        <h1 class="informasiNamaFakultas"><?= $namaFakultas; ?></h1>
        <div class="row">
            <div class="col-sm-12">
                <img src="<?= $gambarFakultas; ?>" alt="gambar" class="informasiGambarFakultas">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3>Latar Belakang</h3>
                <p class="informasiLatarBelakang"><?= $latarBelakang; ?></p>
            </div>            
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3 class="informasiVisiFakultas">Visi</h3>
                <p><?= $visi; ?></p>
            </div>
            <div class="col-sm-6">
                <h3 class="informasiMisiFakultas">Misi</h3>
                <?php for ($i = 0; $i < count($misi); $i++) : ?>
                    <p><?= $misi[$i]; ?></p>
                <?php endfor; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="informasiPstudiFakultas">Program Studi</h3>
                    <?php for($j = 0; $j < count($pstudi); $j++) : ?>
                        <p><?= $pstudi[$j]; ?></p>
                    <?php endfor; ?>
            </div>
            <div class="col-sm-12">
                <p class="informasiAlamatFakultas">Alamat : <?= $alamat; ?></p>
            </div>
        </div>
    </div>



<div class="footer">
    UAS LAB SEMANTIC WEB
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>