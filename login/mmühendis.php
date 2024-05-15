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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">
    </head>

    <body>

        <div id="herooo">
            <video autoplay loop muted>
                <source src="vid/İsimsiz video ‐ Clipchamp ile yapıldı.mp4" type="video/mp4">
            </video>
            <div class="content">
                <div class="navv">
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
                <div class="ssarkaplan">
                    <div class="geridönm">
                        <a href="Kkariyer.php">
                            <img src="img/geridön ok.png"width="16px"height="12px">GERİ DÖN
                        </a>
                    </div>
                    <div class="baslik">KARİYER</div>
                        <div class="kyazi">ACA HAVA UZAY SİSTEMLERİ MÜHENDİSLİK KARİYER PLANLAMASI</div>
                            <div class="comtainertr">
                              <img src="img/kimya-muh-7.jpg" class="saga-kaydir" width="300px" height="200px">
                                <div class="kkyazibas">KİMYA MÜHENDİSİ</div>
                                    <div class="mühparg">
                                        <p>
                                            Malzemelerin üretimi, dönüşümü ve tasarım aşamalarından sorumludur. Mühendisler üretim aşamasına geçmeden önce laboratuvar da çeşitli deneyler yapmaları gerekir. Kimya mühendisleri genellikle plastik, kağıt, boya, ilaç ve gıda gibi benzer ürünlerin deney sonuçları ile üretime uygun olup olmadığının kontrolünden sorumludur. Kimya mühendisleri ayrıca makine, imalat ve tesis tasarımlarında da çalışabilir. Seçtikleri alan fark etmeksizin sürecin sorunsuz ve ekonomik şekilde ilerlemesini hedeflemeleri gerekmektedir.                                        
                                        </p>
                                    </div>
                                    <br>
                                <img src="img/havacilik-ve-uzay-muhendisligi.jpg" class="sola-kaydir" width="300px" height="200px">
                                <div class="kkyazibas">HAVACILIK VE UZAY MÜHENDİSLİĞİ</div>
                                    <div class="mühparg">
                                        <p>
                                            Üretimi planlanan uçağın tasarımını yapmak, proje hazırlamak, Motor ve diğer kritik uçuş aygıtlarını içeren uçak sistemlerini denetlemek, Ortaya çıkabilecek sorunları teşhis etmek ve düzeltmek, Uçuş kontrollerini yapmak,Kalkış ve iniş sırasında, pilot belirli bir güç ayarının yapılmasını istediğinde motor gücünü ayarlamak,Seyahat öncesi uçağın dış ekipmanını denetlemek vb...
                                        </p>
                                    </div>
                                    <br>
                                    <img src="img/uçuşpersformans.jpeg" class="saga-kaydir" width="300px" height="200px">
                                    <div class="kkyazii">UÇUŞ PERFORMANS MÜHENDİSİ</div>
                                    <div class="mühpargort">
                                        <p>
                                            Düz uçuş sırasında otomatik kontrol halindeki uçağın hareketini, verilen değerler ile birlikte kontrol etmek, Kalkış için sürat ve trim ayarlarını hesaplamak ve kaptan pilota durumu bildirmek, Kalkış anında motor ve diğer uçuş aletlerinin gözlemini yapmak.
                                        </p>
                                    </div>
                                    <br>
                                    <img src="img/elektrik-1024x651.jpg" class="sola-kaydir" width="300px" height="200px">
                                    <div class="kkyazi">ELEKTRİK ELEKTRONİK MÜHENDİSİ</div>
                                    <div class="mühpargort">
                                        <p>
                                            Elektrik enerjisinin üretilmesi, iletilmesi, dağıtılması ve başka enerji türlerine dönüştürülmesi sistemleri ve her türlü elektronik aletlerin/sistemlerin projelendirilmesi, kullanılmasında ve denetlenmesi konusunda çalışma
                                        </p>
                                    </div>
                                    <br>
                                    <img src="img/aviyonik-ne-demek-aviyonik-muhendisligi-nedir-3-1024x576.jpg" class="saga-kaydir" width="300px" height="200px">
                                    <br>
                                    <div class="kkyazi">AVİYONİK MÜHENDİSİ</div>
                                    <div class="mühparson">
                                        <p>
                                            Aviyonik sistemin kullanıcı arayüz gereksinimlerini belirler, Kullanıcı arayüz dokümanını hazırlar. Alt sistemleri tasarlama veya satın alma kararlarını verir. Değerlendirme toplantıları düzenleyerek sistem/alt sistem tasarımına uzman grupların katkı ve görüşlerini sağlar.                                       
                                        </p>
                                    </div>
                            </div>
                    </div>
                </div>
            

        <script src="js.js"></script>
 

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
    </div>
    </body>
</html>