<?php
    include "orang.php";
    include "visibility.php";
    include "nilai.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikun 2</title>
</head>
<body>
    <h1>Praktikum 2</h1>
    <div>
        <?php
            $mark = new orang();
            $mark->nama = " Mark Lee";

            $mark->ucapSalam();

            $winter = new orang();
            $winter->nama = " Winter Kim";

            $winter->ucapSalam();

            $mark = new orang();
            //$mark->nama = " Mark Lee";

            $mark->ucapSalam();

            echo "<br>";
            $visibility = new Visibility();
            $visibility->tampilkanProperty();

            echo "Ini akses diluar kelas <br>";
            echo "public :" . $visibility->public . '<br>';
            echo "Protected :" . $visibility->protected . '<br>';
            echo "Private :" . $visibility->private . '<br>';

            echo "<br> <br>";

            echo "Nilai MK Pemograman Web: <br>";
            $nilai = new nilai();
            $nilai->setTugas(79);
            $nilai->setUts(90);
            $nilai->setUas(89);

            echo "Nilai UTS : " . $nilai->getUts()."<br>";
            echo "Nilai UAS : " . $nilai->getUas()."<br>";
            echo "Nilai Tugas : " . $nilai->getUts()."<br>";
            echo "Total Nilai : " . $nilai->hitungTotal() . "<br>";

        ?>
    </div>
</body>
</html>
