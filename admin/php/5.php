<!-- if : percabangan dan logika untuk menjalankan code berdasarkan kondisi yang dicari -->

<?php
// = memberikan nilai
// == membandingkan
// ==membandingkan tapi dengan tipe datanya
// !:tidak
// !empty
// empty : kosong
// isset : tidak kosong
//  >: lebih besar, <lebih kecil, >=: lebih besar sama dengan, <= lebih kecil sama dengan

// ini notasi sesuai "$nama = "bambang"; if ($nama == "bambang")"
$nama = "bambang";
if ($nama == "bambang") {
    echo "Iya";
} else {
    echo "Tidak";
}

echo "<br>";
// ini notasi tidak sesuai "$nama = "bambang";" if ($nama == "tio")
$nama = "bambang";
if ($nama == "tio") {
    echo "Iya";
} else {
    echo "Tidak";
}

echo "<br>";

// empty tanpa menyebut ! notasi kosong akan menyebut tidak)
if (empty($nama)) {
    echo "iya";
} else {
    echo "tidak";
}

echo "<br>";

// empty menyebut ! notasi kosong akan menyebut iya)
if (!empty($nama)) {
    echo "iya";
} else {
    echo "tidak";
}

echo "<br>";

// ini notasi isset akan menyebut kata iya
if (isset($nama)) {
    echo "iya";
} else {
    echo "tidak";
}

echo "<br>";

// ini notasi isset dengan tanda ! akan menyebutkan kata tidak
if (!isset($nama)) {
    echo "iya";
} else {
    echo "tidak";
}

echo "<br>";

// ini notasi sesuai dengan arahan suhu nya
$suhu = 35;
if ($suhu > 37) {
    echo "Demam";
} else if ($suhu >= 35) {
    echo "Normal";
} else {
    echo "Kediginan";
}

echo "<br>";
echo "<br>";

?>

<!-- 
Nama Peserta : Nama kalian
Nilai : 85
grade : B
Status : Lulus

peserta dinyatakan lulus jika nilainya lebih dari 70 dan tidak lulus jika nilai kurang dari 70.
nilai juga dikategorikan ke dalam grade dengan huruf apa
A: 90-100
b: 80-89
C: 70-79
D: 60-69
E: dibawah 60
-->

<?php
$nama = "rey";
$nilai = 80;
$grade = "";
$status = "";

if ($nilai > 70) {
    $status = "Lulus";
} else {
    $status = "tidak lulus";
}

if ($nilai >= 90) {
    $grade = "A";
} else if ($nilai >= 80) {
    $grade = "B";
} else if ($nilai >= 70) {
    $grade = "C";
} else if ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "Nama Peserta : " . $nama . "<br> Nilai : " . $nilai . "<br> Grade : " . $grade . "<br> Status : " . $status;
echo "<br>";
echo "<br>";

// operator logika
// AND, &&, OR , ||, !

$username = "admin";
$password = "admin";

if ($username == "admin" && $password == "admin") {
    echo "login berhasil";
} else {
    echo "login gagal";
}
