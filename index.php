<?php 
require 'src/endpoint/endpoint_fakultas.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas USU</title>
    <link rel="shortcut icon" href="assets/usuSolo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/styles/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.php">
        <img src="assets/USU_Logo2.png" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="src/page/rumahsakit.php">Rumah Sakit USU</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="src/page/about.php">Tentang Kami</a>
        </li>
        </ul>
    </div>
    </nav>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner mt-10">
            <div class="carousel-item active">
                <img src="assets/jumbo1.png" class="d-block w-100" alt="jumbo">
            </div>
            <div class="carousel-item">
                <img src="assets/jumbo2.png" class="d-block w-100" alt="jumbo">
            </div>
            <div class="carousel-item">
                <img src="assets/jumbo3.png" class="d-block w-100" alt="jumbo">
            </div>
            <div class="carousel-item">
                <img src="assets/jumbo4.png" class="d-block w-100" alt="jumbo">
            </div>
            <div class="carousel-item">
                <img src="assets/jumbo5.png" class="d-block w-100" alt="jumbo">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="fakultas container">
    <h1>Fakultas Universitas Sumatera Utara</h1>
        <div class="row">
            <div class="loopingFakultas">
                <?php for ($i = 0; $i < count($fakultas); $i++) : ?>
                    <div class="kotak">
                        <div class="col-sm">
                            <a class="gambarFakultas" href="src/page/informasiFakultas.php?fakultas=<?= $namaFakultas[$i]; ?>">
                                <img src="<?= $gambarFakultas[$i]; ?>" alt="gambar">
                            </a>
                            <div class="namaFakultas">
                                <a href="src/page/informasiFakultas.php?fakultas=<?= $namaFakultas[$i]; ?>" style="color: #3d8b47 !important;"><?= $namaFakultas[$i]; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
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