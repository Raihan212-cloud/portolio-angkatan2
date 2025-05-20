<!-- variable sytem : var yg dibuat oleh php 
 $_POST, $_GET, $_SESSION, $_SERVER, $_FILES, $REQUEST
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable System | Superglobal var</title>
</head>

<body>
    <!-- 
    $data = ["nama"=> "rey"]
    -->
    <form action="" method="post">
        <div class="form-grup">
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Masukan Nama Anda">
        </div>
        <br>
        <div class="form-grup">
            <label for="">Nilai</label>
            <input type="number" name="nilai" placeholder="Masukan Nilai Anda">
        </div>
        <br>
        <div class="form-grup">
            <button type="submit">Kirim</button>
        </div>
    </form>

    <?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];

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
    }
    // // shorthand / ternery
    // $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    // echo "Selamat Siang " . $nama;

    ?>
</body>

</html>