<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="feed.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="Viewport" content="width=device-width, initial-scale=1.0" />
        <title>LIST</title>
        <link rel="stylesheet" href="load.css">
        <link rel="stylesheet" href="musik.css">
        <style>
            body{
                margin: 0;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                background: url(foto/bck2.jpg);
                background-size: cover;

            }

            h3{
                text-align: center;
                padding-top: 20px;
                font-family: 'Segoe UI',sans-serif;
                color: #f9f3f4;
                font-size: 25px;
                font-weight: bold;
            }

            .luar {
                padding-top: 30px;
                padding-left: 15%;
                padding-right: 15%;
                text-align: center;
                

                
                
            }
            
            

            .latar{
                background-color: #000;
                display: inline-block;
                font-display: 'Segoe UI',sans-serif;
                font-size: 15px;
                margin: 8px;
                max-width: 230px;
                min-width: 200px;
                overflow: hidden;
                position: relative;
                text-align: center;
                width: 100%;
                
            }
            .latar * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-transition: all 0.35s ease;
                transition: all 0.35s ease;
                
            }

            .latar h3 {
                
                
                
                border: 2px solid ;
                color: white ;
                font-size: 0.8cm;
                font-weight: bold;
                letter-spacing: 1px;
                margin: 0;
                padding: 5px 10px;
                text-transform: uppercase;
                text-decoration: none;
                font-family: 'Segoe UI',sans-serif;
            }
            .latar::before,
            .latar::after {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                -webkit-transition: all 0.35s ease;
                transition: all 0.35s ease;
                background-color: #000;
                border-left: 3px solid white;
                border-right: 3px solid white;
                content: '';
                opacity: 0.9;
                z-index: 1;
            }

            .latar::before{
                -webkit-transform: skew(45deg) translateX(-155%);
                transform: skew(45deg) translateX(-155%);
            }

            .latar::after{
                -webkit-transform: skew(45deg) translateX(155%);
                transform: skew(45deg) translateX(155%);
            }

            .latar img{
                backface-visibility: hidden;
                max-width: 100%;
                vertical-align: top;
            }

            .latar figcaption {
                top: 50%;
                left: 50%;
                position: absolute;
                z-index: 2;
                -webkit-transform: translate(-50%, -50%) scale(0.5);
                transform: translate(-50%, -50%) scale(0.5);
                -webkit-box-shadow: 0 0 10px #000;
                box-shadow: 0 0 10px #000;
            }

            .latar a {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 3;
            }

            .latar :hover {
                opacity: 0.5;
            }

            .latar:hover::before,
            .latar.hover::before {
                transform: skew(45deg) translateX(-55%);
                -webkit-transform: skew(45deg) translateX(-55%);
                
            }
            .latar:hover::after,
            .latar.hover::after{
                transform: skew(45deg) translateX(55%);
                -webkit-transform: skew(45deg) translateX(55%);
                
            }

            .latar:hover figcaption,
            .latar:hover figcaption{
                -webkit-transform: translate(-50%, -50%) scale(1);
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
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
            <h3>LIST GAME</h3>
            <div class="luar">
                <figure class="latar">
                    <img src="foto/wallpaperbetter (1).jpg" alt="">
                    <figcaption>
                        <h3>Janken</h3>
                    </figcaption>
                    <a href="batugunting.html"></a>
                </figure>

                <figure class="latar">
                    <img src="foto/ular.jpeg" alt="">
                    <figcaption>
                        <h3>snake</h3>
                    </figcaption>
                    <a href="snake.html"></a>
                </figure>

                <figure class="latar">
                    <img src="foto/kucingwp.jpeg" alt="">
                    <figcaption>
                        <h3>Nekorun</h3>
                    </figcaption>
                    <a href="GameCatRunner.html"></a>
                </figure>

                <figure class="latar">
                    <img src="foto/catur.jpeg" alt="">
                    <figcaption>
                        <h3>Catur</h3>
                    </figcaption>
                    <a href="GameChess.html"></a>
                </figure>

                <figure class="latar">
                    <img src="foto/soon.jpeg" alt="">
                    <figcaption>
                        <h3>soon</h3>
                    </figcaption>
                    <a href=""></a>
                </figure>
                <figure class="latar">
                    <img src="foto/soon.jpeg" alt="">
                    <figcaption>
                        <h3>soon</h3>
                    </figcaption>
                    <a href=""></a>
                </figure>
                <div class="konten">
                    <a class="tombol" href="home.php">Home</a>
                </div>
            </div>

            <div id="bgmbox">
                <button id="unvious"> </button>
                <button id="play"> </button>
                <button id="mute"> </button>
                <button id="prev"> </button>
            </div>
            <input type="radio" name="r" id="open" />
            <script>
                var bgm = new Audio();
                bgm.src = "musik/bgm6.mp3";
                bgm.loop = true;
                bgm.play() ;

                function mulai() {
                    var play = document.getElementById("play") ;
                    var mute = document.getElementById("mute") ;
                    var prev = document.getElementById("prev") ;
                    var unvious = document.getElementById("unvious");

                    play.addEventListener('click', fplay);
                    mute.addEventListener('click', fmute);   
                    prev.addEventListener('click', fprev);     
                    unvious.addEventListener('click', funvious)

                    function fplay(){
                        if(bgm.paused){
                            bgm.play();
                            play.style.background="url(foto/2pause.png)";
                        }else{
                            bgm.pause() ;
                            play.style.background="url(foto/2play.png)";
                        }
                    }
                    function fmute(){
                        if(bgm.muted){
                            bgm.muted = false;
                            mute.style.background="url(foto/2unmute.png)";
                        }else{
                            bgm.muted= true;
                            mute.style.background="url(foto/2mute.png)";
                        }
                    }
                    function fprev(){
                        if(prev.click){
                            bgm.src = "musik/bgm5.mp3";
                            bgm.play();         
                        }       
                    }
                    function funvious(){
                        if(unvious.click){
                            bgm.src = "musik/bgm6.mp3";
                            bgm.play();
                        }                
                    }

                }
                window.addEventListener('load', mulai) ;

            </script>
        <input type="radio" name="r" id="open" />
        <input type="radio" name="r" id="close" />
        <div class="f-button"><label for="open">Feedback</label></div>
        <div id="form-area">
            <div class="form-in">
                <div class="close1"><label for="close">x</label></div>
                <form action="database.php" method="post">
                    <input type="text" required placeholder="Input Your Name" class="in" name="nama" /><br />
                    <input type="email" required placeholder="Input Your Email" class="in" name="email" /><br />
                    <textarea placeholder="Your Comment" required class="text1" name="komentar"></textarea><br />
                    <input type="submit" value="Submit" class="sb" />
                </form>
            </div>
        </div>



    </body>
    <script src="load.js"></script>
</html>