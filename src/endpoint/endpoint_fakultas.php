<?php
require 'src/vendor/autoload.php';

// namespace
EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
EasyRdf\RdfNamespace::set('fns', 'https://www.fake_namespace/');

// query
$query = new \EasyRdf\Graph("https://kevinsinagaa.github.io/fakultas/fakultas.rdf");
$query->load();

$fakultas = ["kedokteran", "ilmubudaya", "pertanian", "hukum", "teknik", "feb", "fkg", "fmipa", "fisip", "fkm", "farmasi", "psikologi", "keperawatan", "fasilkomti", "hutan"];

$i = 0;

while ($i < count($fakultas)) {
    $namaFakultas[$i] = $query->get('https://www.usu.ac.id/id/fakultas/'.$fakultas[$i], 'rdfs:label');
    $gambarFakultas[$i] = $query->get('https://www.usu.ac.id/id/fakultas/'.$fakultas[$i], 'foaf:depiction');
    $i++;
}
?>
