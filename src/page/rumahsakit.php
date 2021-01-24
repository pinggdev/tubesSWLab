<?php 
require '../endpoint/endpoint_rumahsakit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit USU</title>
    <link rel="shortcut icon" href="../../assets/usuSolo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/rs.css">
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

    <div class="container">
        <div class="headerLogo">
            <div class="row">
                <div class="col-sm-12">
                    <img src="../../assets/logo_rs.jpg" alt="logo">
                </div>
            </div>
        </div>

        <div class="bodySatu">
            <div class="row">
                <div class="col-sm-9">
                    <div class="visiMisiRS">
                        <h3>Visi</h3>
                        <p><?= $visi[0]; ?></p>
                        <p></p>
                        <h3>Misi</h3>
                        <?php for ($j = 0; $j < 2; $j++) { ?>
                            <p><?= $misi[0][$j]; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-sm-3 gambar">
                     <img src="<?= $gambar[0]; ?>" alt="gambar">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 moto">
                    <h3>Motto</h3>
                    <p><?= $motto[0]; ?></p>
                </div>
            </div>

            <div class="row sejarah">
                <div class="col-sm-12">
                <h3><?= $judul[1]; ?></h3>
                    <img src="<?= $gambar[1]; ?>" alt="gambar">
                </div>
                <div class="col-sm-12">
                    <p><?= $teksSejarah[1]; ?></p>
                </div>
            </div>

            <div class="row alamat">
                <div class="col-sm-12">
                    <p>Alamat : <?= $alamat[2]; ?>, <?= $kodepos[2]; ?></p>
                </div>
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