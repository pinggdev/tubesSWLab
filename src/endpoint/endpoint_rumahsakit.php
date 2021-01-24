<?php
require '../vendor/autoload.php';

// namespace
EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
EasyRdf\RdfNamespace::set('coba', 'http://www.cobanamespace/');

// query
$query = new \EasyRdf\Graph("https://tenpoless.github.io/tubes-sw/rsusu.rdf");
$query->load();

$rsusu = ["profilnorganisasi", "sejarah", "pesan"];
$i = 0;
while ($i < count($rsusu)) {
    $judul[$i] = $query->get('http://www.tubeslab/sw2/2/rsusu/profil/'.$rsusu[$i], 'rdfs:label');
    $visi[$i] = $query->get('http://www.tubeslab/sw2/2/rsusu/profil/'.$rsusu[$i], 'coba:visi');
    for ($j = 0; $j < 5; $j++) {
        $misi[$i] = $query->all('http://www.tubeslab/sw2/2/rsusu/profil/'.$rsusu[$i], 'coba:misi');
    }
    $gambar[$i] = $query->get('http://www.tubeslab/sw2/2/rsusu/profil/'.$rsusu[$i], 'coba:img');
    $motto[$i] = $query->get('http://www.tubeslab/sw2/2/rsusu/profil/'.$rsusu[$i], 'coba:motto');
    $teksSejarah[$i] = $query->get('http://www.tubeslab/sw2/2/rsusu/profil/'.$rsusu[$i], 'coba:teks');
    $alamat[$i] = $query->get('http://www.tubeslab/sw2/2/rsusu/profil/'.$rsusu[$i], 'coba:alamat');
    $kodepos[$i] = $query->get('http://www.tubeslab/sw2/2/rsusu/profil/'.$rsusu[$i], 'coba:kodepos');
    $i++;
}
?>