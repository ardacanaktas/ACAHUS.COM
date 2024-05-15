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
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">

        <style>.chart{
    padding: 1rem;
    border: 1px solid #ffffff;
    border-radius: 1rem;
    background: #000000;
    box-shadow: 0 0 16px rgba(255, 255, 255, 0.8);
    text-decoration: oldlace;
}</style>
    </head>


    <body>
        <div class="navvv">
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
        </div>

        <div class="content">
        <div class="containerr">    
            <div class="yan"><p>PAYDAŞLARIMIZ</p></div>
            <div class="chart">
                <canvas id="doughnut" width="580px" height="200px"></canvas>
            </div>
            <div class="text">
            <ul>
                <li><div class="textt">TÜRK HAVACILIK UZAY SANAYİİ</div></li>
                <li><div class="texttt">GELECEĞİNE GÜÇ KAT</div></li>
                <li><div class="text">Türk Uçak Sanayii Anonim Ortaklığı (TUSAŞ), 28 Haziran 1973 tarihinde Türkiye'nin savunma sanayiinde dışa bağımlılığını azaltmak amacıyla Sanayi ve Teknoloji Bakanlığı bünyesinde kurulmuştur.
                    Türk Hava Kuvvetleri'nin savaş uçağı ihtiyacının karşılanmasına yönelik olarak F-16 uçaklarının kullanılması kararı ile birlikte; F-16 uçağının üretimi, uçak üzerindeki sistemlerin entegrasyonu ve uçuş testlerini yaparak Hava Kuvvetlerimize teslim etmek üzere TUSAŞ tarafından 1984 yılında TUSAŞ Havacılık ve Uzay Sanayii A.Ş. (TAİ), Türk-ABD ortak yatırım şirketi olarak 25 yıllığına kurulmuştur.
                    25 yıllık süreç tamamlanmadan, 2005 yılında TAI'nin yabancı hisseleri Türk hissedarlar tarafından satın alınarak şirket yeniden yapılandırılmıştır. Bu kapsamda TAI ve TUSAŞ birleşerek, TUSAŞ – Türk Havacılık ve Uzay Sanayii A.Ş. çatısı altında faaliyetlerini genişletmiş, havacılık ve uzay sanayi sistemlerinin geliştirilmesi, modernizasyonu, üretimi, sistem entegrasyonu ve yaşam döngüsü destek süreçlerinde Türkiye'nin teknoloji merkezi konumuna gelmiştir.
                    Havacılık ve uzay sanayisinde küresel ilk yüz oyuncu arasında yer alan Türk Havacılık ve Uzay Sanayii, proje konularına bağlı olarak; 
                    Havacılık Yapısalları Grubu
                    Uçak Grubu,
                    Helikopter Grubu,
                    İnsansız Hava Aracı (İHA) Sistemleri Grubu,
                    Uzay Sistemleri Grubu,
                    Milli Muharip Uçak Grubu
                    Mühendislik Grubu
                    olmak üzere altı stratejik iş merkezi bünyesinde örgütlenmiştir. Ayrıca, Türk Havacılık ve Uzay Sanayii tarafından tasarlanan/üretilen tüm ürünlerle ilgili olarak entegre lojistik destek hizmeti sağlanmaktadır.</div></li>
            </ul>
        </div>
        </div>
    </div>

        <div class="altbannnerrr">
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



            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <script src="js.js"></script>
      
    </body>
</html>