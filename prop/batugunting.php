<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="batutasting.css">
    <title>tasting</title>
</head>
<body>
    
    <div id=""app>
        <div class="jawaban">
            <h1 class="judul">batu gunting</h1>
            <h1 class="hasil"></h1>
        </div>
        <div class="game">
            <div class="pilihan">👊</div>
            <div class="pilihan">🖐</div>
            <div class="pilihan">✌</div>

        </div>
    </div>
                <?php 
                $com = rand();
                    if ($com > 100000000 && $com < 800000000 ){
                    $com = '👊';
                    }elseif ($com > 800000000 && $com < 1250000000){
                        $com = '🖐';
                    }else {
                        $com = '✌';
                    }
                $batu=$_GET['pilihan'];
                
                ?>


            <!--------------------------------- LOGIC GAMES --------------------------------------->

            <?php 
                $hasil = '';
                if ( $_POST["game"] == $com){
                    $hasil = 'HASILNYA SERI !';
                }elseif ( $_POST["game"] == 'BATU'){
                    if ( $com == 'GUNTING'){
                        $hasil ='KAMU MENANG !';
                    }else{
                        $hasil ='KAMU KALAH !';
                    }
                }elseif ( $_POST["game"] == 'GUNTING'){
                    if ( $com == 'KERTAS'){
                        $hasil ='KAMU MENANG !';
                    }else{
                        $hasil ='KAMU KALAH !';
                    }
                }elseif ( $_POST["game"] == 'KERTAS'){
                    if ( $com == 'BATU'){
                        $hasil ='KAMU MENANG !';
                    }else{
                        $hasil ='KAMU KALAH !';
                    }
                }else {
                    $hasil = 'YANG ANDA MASUKAN SALAH ATAU ADA SEPASI !';
                }
            ?>
                <p>kamu memlih : <b style="text-decoration: underline" ><?= $_POST["nama"] ?></b> dan komputer memilih : <b style="text-decoration: underline" ><?= $com ?></b> <br><?= $hasil ?></p>
</body>
</html>