<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <!-- <h1>Belajar PHP Dasar</h1>
    <p>hallo world</p>
    <h3>menggunakan variabel</h3>
    <?php
    // $nim = "312310123";
    // $nama = "Faisal Fajar";
    // echo "Nim: ". $nim. "<br>";
    // echo "Nama: ". $nama;
    // ?>
    // <?php // echo '<br><br>selamat datang '. $_GET['nama']?> -->

    <!-- <h2>From input</h2>
    <form method="post">
        <label for="">nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>
    <?php
    // echo "selamat datang" .$_POST['nama'];
    ?> -->

    <!-- <?php
    // $gaji = 1000000;
    // $pajak = 0.1;
    // $thp = $gaji - ($gaji*$pajak);
    // echo "gaji sebelum bayar pajak: Rp. $gaji <br>";
    // echo "gaji setelah bayar pajak: Rp. $thp ";
    // ?> -->

    <!-- <h3>dengan if</h3> -->
    <?php
    // $nama_hari = date('1');
    // if($nama_hari == "sunday"){
    //     echo "minggu";
    // }elseif($nama_hari == "monday"){
    //     echo "senin";
    // }else{
    //     echo "selasa";
    // }
    ?>

    <!-- <h3>dengan switcH</h3> -->
    <?php 
    // $nama_hari = date('2');
    // switch($nama_hari){
    //     case "1":
    //         echo "minggu";
    //         break;
    //     case "2":
    //         echo "senin";
    //        break;
    //    case "3":
    //        echo "selasa";
    //        break;
    //    default:
    //        echo "rabu";
    //}
    ?> 

    <?php
    echo "<h3>menggunakan for</h3>";
    for ($i = 1; $i<=10; $i++){
        echo "perilangan ke- ". $i.'<br>' ;
    }
    echo "<h3>mengunakan whilee</h3>";
    $i -= 1;
    while ($i>=1){
        echo "perulangan ke- ".$i.'<br>';
        $i--;
    }
    echo "<h3>mengunakan do while</h3>";
    do{
        echo "perulangan ke- ".$i.'<br>';
        $i++;
    }while($i<=10);
    ?>

</body>
</html>