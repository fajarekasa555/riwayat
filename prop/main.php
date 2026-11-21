<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>JANKEN</title>
        <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
          <script type="text/javascript">
            $(document).ready(function(){
              $('a.close').click(function(eve){
                
                eve.preventDefault();
                $(this).parents('div.popup').fadeOut('slow');
              });
            });
          </script>
          <link rel="stylesheet" href="feed.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');
            body {
                padding-top: 10PX;
                font-family: 'Segoe UI', sans-serif;
                background: url(foto/wallpaperbetter.jpg);
                background-size: cover;
            }

            .latar{
                padding-top: 10px;
                padding-bottom: 10px;
            }
            h1 , p , form {
                text-align: center;
            }
            p {
                padding-bottom: 10px;
            }

            input{
                width: 50%;
                height: 5%;            
            }

            button {
                height: 5%;
                background-color: #77DD77;
                color: white;
                border: none;
                cursor: pointer;
            }

            button:hover{
                background-color: #68BF88;
            }

            .konten{
                text-align: center;
                
                padding-top: 20px;
            }

            .konten .tombol{
                border-radius: 9px;
                color: #f9f3f4;
                text-decoration: none;
                font-family: 'Segoe UI',sans-serif;
                border: 3px solid;
                padding: 7px 13px;
                font-weight: bold;
                transition:  0.3s ease;
            }
            .tombol:hover{
                color: #2196f3;
                cursor: pointer;
                box-shadow:  0 0 5px #2196f3,
                             0 0 20px #2196f3,
                             0 0 60px #2196f3;
            }
            div.popup{
                position:fixed;
                top:0;
                bottom:0;
                left:0;
                right:0;
                width:100%;
                height:100%;
                background: rgba(0,0,0,.8);
            }
            
            div#box{
                margin:5% auto;
                background:#1e81b0;
                width:50%;
                height:50%;
                -webkit-box-shadow:0 0 15px #000;
                -moz-box-shadow:0 0 15px #000;
                box-shadow:0 0 15px #000;
            }
            
            a.close{
                text-decoration:none;
                color:#f9f3f4;
                margin:10px 15px 0 0;
                float:right;
                font-family:tahoma;
                font-size:20px;
            }
            .text{
              text-align: center;
              padding-top: 10%;
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              color: #f9f3f4;
              padding-left: 5%;
              padding-right: 5%;
            }

        </style>
    <head>
    <body>
    <input type="radio" name="r" id="open" />
  <input type="radio" name="r" id="close" />
  <div class="f-button"><label for="open">Feedback</label></div>
    <div id="form-area">
      <div class="form-in">
        <div class="close1"><label for="close">x</label></div>
    <form action="database.php" method="post">
      <input type="text" required placeholder="Input Your Name" class="in" name="nama"/><br />
      <input type="email" required placeholder="Input Your Email" class="in" name="email"/><br />
        <textarea placeholder="Your Comment" required class="text1" name="komentar"></textarea><br />
      <input type="submit" value="Submit" class="sb" />
    </form>
      </div>
    </div>
        <div class="popup">
              <div id="box">
                  <a class="close" href="#">X</a>
                  <div class="text">
                    <h3 class="title">CARA BERMAIN</h3>
                    <p class="paragraf">masukkan pilihan pada input box yang tersedia,klik tombol "GO!" untuk melanjutkan</p>
                  </div>
              </div>		
        </div>
                <!---------------------------------- LOGIC KOMPUTER ------------------------------------>
                <?php 
                $com = rand();
                    if ($com > 100000000 && $com < 800000000 ){
                    $com = 'BATU';
                    }elseif ($com > 800000000 && $com < 1250000000){
                        $com = 'KERTAS';
                    }else {
                        $com = 'GUNTING';
                    }
                
                ?>

            <!--------------------- INPUTAN PEMAIAN ------------------------------->
                <form action="" method="POST">
                    <h1>JANKEN</h1> <p>MASUKAN : BATU / KERTAS / GUNTING ( Note : Jangan Ada Sepasi )</p>
                    <input onkeyup="this.value = this.value.toUpperCase()" type="text" name="nama" placeholder="Masukan Sesuatu. . . "  required autofocus>
                    <button type="submit" name="sumbit"> GO! </button>
                </form>
            <br>

            <!--------------------------------- LOGIC GAMES --------------------------------------->

            <?php if ( isset($_POST["sumbit"]) ) : ?>
                <h1><?php 
                $hasil = '';
                if ( $_POST["nama"] == $com){
                    $hasil = 'HASILNYA SERI !';
                }elseif ( $_POST["nama"] == 'BATU'){
                    if ( $com == 'GUNTING'){
                        $hasil ='KAMU MENANG !';
                    }else{
                        $hasil ='KAMU KALAH !';
                    }
                }elseif ( $_POST["nama"] == 'GUNTING'){
                    if ( $com == 'KERTAS'){
                        $hasil ='KAMU MENANG !';
                    }else{
                        $hasil ='KAMU KALAH !';
                    }
                }elseif ( $_POST["nama"] == 'KERTAS'){
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
            <?php  endif; ?>
                </h1>
        <div class="konten">
            <a class="tombol" href="list.php">Keluar</a>
        </div>
    </body>


</html>