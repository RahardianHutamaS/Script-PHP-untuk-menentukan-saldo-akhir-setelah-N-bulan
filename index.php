<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <table>
        <tr>
            <td><label for="saldo_awal">Saldo Awal</label></td>
            <td>:</td>
            <td><input type="number" id="saldo_awal" name="saldo_awal"><br></td>
        </tr>
        <tr>
            <td><label for="jangka_waktu">Jangka Waktu (bulan)</label></td>
            <td>:</td>
            <td><input type="number" id="jangka_waktu" name="jangka_waktu"><br></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Hitung">

    </form>
    <?php
        if(isset($_POST['submit'])) {
        $saldo_awal = $_POST['saldo_awal'];
        $jangka_waktu = $_POST['jangka_waktu'];
        $saldo_akhir = $saldo_awal;
            for($i = 1; $i <= $jangka_waktu; $i++) {
            // hitung bunga
                if($saldo_akhir < 1100000) {
                    $bunga = $saldo_akhir * 0.03;
            } else {
                    $bunga = $saldo_akhir * 0.04;
            }
                $saldo_akhir += $bunga - 9000;
            }

                echo "Saldo akhir setelah $jangka_waktu bulan adalah: Rp. " . number_format($saldo_akhir, 0, ',', '.');
            }
?>
</body>
</html>
