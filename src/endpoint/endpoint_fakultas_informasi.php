<?php
require '../vendor/autoload.php';

// namespace
EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
EasyRdf\RdfNamespace::set('fns', 'https://www.fake_namespace/');

// query
$query = new \EasyRdf\Graph("https://kevinsinagaa.github.io/fakultas/fakultas.rdf");
$query->load();

$ambilFakultas = $_GET['fakultas'];
$ambilFakultas = $query->resourcesMatching('rdfs:label', $ambilFakultas);

foreach($ambilFakultas as $row) {
    $namaFakultas = $query->get("$row", 'rdfs:label');
    $gambarFakultas = $query->get("$row", 'foaf:depiction');
    $latarBelakang = $query->get("$row", 'fns:latarBelakang');
    $visi = $query->get("$row", 'fns:visi');
    $misi = $query->all("$row", 'fns:misi');
    $pstudi = $query->all("$row", 'fns:pstudi');
    $alamat = $query->get("$row", 'fns:alamat');
}
?>
