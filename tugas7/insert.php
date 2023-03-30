<?php

$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$rumus = $_POST['rumus'];

$rumus_segitiga = 1/2 * ($nilai1 * $nilai2);
$rumus_pj = $nilai1 * $nilai2;
if($rumus === 'segitiga'){
    echo '<h3>Hasil Hitung Rumus</h3>';
    echo 'Nilai 1 : '.$nilai1.'<br/>';
    echo 'Nilai 2 : '.$nilai2.'<br/>';
    echo 'Rumus : Segitigas <br/>';
    echo 'Hasil Perhitungan Rumus : '. $rumus_segitiga;


}else{
    echo '<h3>Hasil Hitung Rumus</h3>';
    echo 'Nilai 1 : '.$nilai1 .'<br>';
    echo 'Nilai 2 : '.$nilai2 .'<br>';
    echo 'Rumus : Persegi Panjang <br/>';
    echo 'Hasil Perhitungan Rumus : '. $rumus_pj;
}
?>