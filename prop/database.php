<?php
  include "uss.php";
  $nama  = $_POST['nama'];
  $email  = $_POST['email'];
  $komentar  = $_POST['komentar'];
  $mysqli  = "INSERT INTO tabelfeedback (namae, email, komentar) VALUES ('$nama', '$email', '$komentar')";
  $result  = mysqli_query( $db, $mysqli);
  if ($result) {
    echo "<h1>MASUKKAN BERHASIL</h1>";
  }else {   
    if ( empty ( $namae )) {   
      echo "<h1>Name must be entered<h1>" ;
    } 
    
    if ( empty ( $email )) {   
      echo "<h1>email must be entered<h1>" ;
    } 
    
    if ( empty ( $komentar )) {   
      echo "<h1>komen must be entered<h1>" ;
    } 
  }
  mysqli_close($db);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>pengajuan</title>
        <link rel="stylesheet" href="load.css">
        <style>
            body{
                background: url(foto/bckv2.jpeg);
                background-size: cover;

            }
            h1{
                text-align: center;
                padding-top: 10%;
                font-family: 'Segoe UI',sans-serif;
                color: #f9f9f9;

            }
            p {
                text-align: center;
                font-family: 'Segoe UI',sans-serif;
                color: #f9f9f9;
            }
            .konten{
                padding-top: 5ch;
                margin-top: auto;
                text-align: center;
            }

            .tombol{
                border-radius: 9px;
                color: #f9f3f4;
                text-decoration: none;
                font-family: 'Segoe UI',sans-serif;
                border: 3px solid;
                padding: 7px 20px;
                font-weight: bold;
                transition: 0.3s ease;
            }
            .tombol:hover{
                color: #2196f3;
                cursor: pointer;
                box-shadow:  0 0 5px #2196f3,
                             0 0 20px #2196f3,
                             0 0 60px #2196f3;
            }
        </style>
    </head>
    <body>
      <div id="preloader"></div>
        
        <p>Terimakasih atas pendapatnya.</p>
        <p>Pendapat anda sudah di tampung,tungu balasan dari kami.</p>
        <div class="konten">
            <a class="tombol" href="home.php">Home</a>
        </div>
    </body>
    <script src="load.js"></script>
</html>