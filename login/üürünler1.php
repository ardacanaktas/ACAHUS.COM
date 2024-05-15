<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="U.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>ACAHUS</title>
        <link rel="website icon" type="png" href="img/Başlıksız-1.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">
    </head>

    <body>


<div id="hero">
    <video autoplay loop muted>
        <source src="vid/Dark Theme Clouds.mp4" type="video/mp4">
    </video>
    <div class="content">
        <nav>
            <img src="img/acahuslogo.png" alt="" width="110px" height="90px" >
            <div class="acahus">ACAHUS.com</div>
            <ul>
            <li><a href="hhomepage.php">Ana Sayfa</a></li>
            <li><a href="üürünler1.php">Çalışmalarımız</a></li>
            <li><a href="hhakkımızda1.php">Hakkımızda</a></li>
            <li><a href="iiletişim1.php">İletişim</a></li>
            <li><a href="Kkariyer.php">Kariyer</a></li>
            <li><a href="iindex.php">HESABIM<i class="fa fa-user-o fa-xl" aria-hidden="true"></i></a></li>
            </ul>
        </nav>
        <div id="sliderr">
            <input type="radio" name="sliderr" id="slidee2" checked>
            <input type="radio" name="sliderr" id="slidee3" checked>
            <input type="radio" name="sliderr" id="slidee4" checked>
            <input type="radio" name="sliderr" id="slidee1" checked>
            <div id="slidess">
                <div id="overrfloow">
                    <div class="inneer">
                        <div class="slidee slidee_1">
                            <div class="slidee-contentt">
                                <div class="cardürünler">
                                    <a href="kkaan.php">
                                        <img src="img/kaan.png" alt="" width="800px" height="550px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slidee slidee_2">
                            <div class="slidee-contentt">
                                <div class="cardürünler">
                                    <a href="attak.php">
                                <img src="img/atak.png" alt="" width="800px" height="500px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slidee slidee_3">
                            <div class="slidee-contentt">
                                <div class="cardürünler">
                                    <a href="kkızılelma.php">
                                <img src="img/kızılelma.png" alt="" width="700px" height="500px">
                                    </a>
                            </div>
                            </div>
                        </div>
                        <div class="slidee slidee_4">
                            <div class="slidee-contentt">
                                <div class="cardürünler">
                                    <a href="hhürjet.php">
                                <img src="img/HÜRJETk.png" alt="" margin-top="-600px"width="800px" height="500px">
                                    </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="controlss">
                <label for="slidee1"></label>
                <label for="slidee2"></label>
                <label for="slidee3"></label>
                <label for="slidee4"></label>
            </div>
            <div id="bulletss">
                <label for="slidee1"></label>
                <label for="slidee2"></label>
                <label for="slidee3"></label>
                <label for="slidee4"></label>
            </div>
            <div class="ürünyaz">BİLGİ ALMAK İÇİN RESİME TIKLAYINIZ</div>
        </div>
    </div>
</div>
    
        <div class="altbannneerrü">
            <div class="altbannerrdüzen">
                <div class="altbannerrtextdüzen"><h3>RESMİ İNTERNET ADRESLERİMİZ</h3></div>
                    <div class="sosyalbutonlar">
                        <a href="https://www.facebook.com/TurkHavaKuvvetleri1/?locale=tr_TR" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/tcsavunma" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="http://google-plus.com//cahitsoyman.blogspot.com" target="_blank" class="google-plus" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="http://Instagram.com/ardaaaktas06" target="_blank" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/@tcbestepe" target="_blank" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>        
                    </div>
                        <div class="altbannerrtextdüzenn"><p>BU SİTENİN YASAL HAKLARI @ACA.A.Ş TARAFINDAN SAKLIDIR</p></div>
                </div>
                    <div class="düzenyukarı"><p><a href="#" onClick="goToByScroll('top')"> <img src="img/okb.png" alt="BAŞA DÖN" width="80px" height="60px"> </a></p></div>
            </div>

    </body>
</html>

