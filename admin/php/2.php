<?php
// tas

// $nama = array();
// $nama =[];

// array index
$nama = array('reza', 'ibrahim', 'rudi', 'wawan');
//0 1 2 3
//$nama = "reza, rudi, bambang";
print_r($nama);
echo "<br>";
echo $nama[3];
echo "<br>";
echo $nama[0];
echo "<br>";
echo $nama[1];
echo "<br>";
echo $nama[2];
echo "<br>";
echo $nama[3];
echo "<br>";

$buah = [" Nanas |", " Semangka |", " Pepaya |", " Pir |"];
print_r($buah);
echo "<br>";
foreach ($buah as $b) {
    echo "Nama-nama buah =" . $b . "<br>";
}

//array assosiatif : key nya menggunakan string
$kelas_web = [
    "nama" => "Budi",
    "umur" => 25,
    "Jurusan" => "Junior Web Prog"
];

echo "Nama Siswa = " . $kelas_web["nama"] . "<br>" . "Umur = " . $kelas_web['umur'] . "<br>" . "Jurusan = " . $kelas_web['Jurusan'];
echo "<br>";
echo "<br>";

$siswa = [
    [
        "nama" => "Rey",
        "umur" => 20,
        "jurusan" => "Junior Web Prog",
    ],
    [
        "nama" => "Tono",
        "umur" => 100,
        "jurusan" => "Tua Web Prog",
    ],
];

print_r($siswa);
echo "<br>";
echo $siswa[0]['nama'];
echo "<br>";
foreach ($siswa as $key => $sw) {
    echo "key" . $key . "<br>";
    echo "Nama : " . $sw['nama'] . "<br>";
    echo "Umur : " . $sw['umur'] . "<br>";
    echo "Jurusan : " . $sw['jurusan'] . "<br>";
    echo "<br>";
}
//$siswa = array(
//    array(),
//    array()
//)