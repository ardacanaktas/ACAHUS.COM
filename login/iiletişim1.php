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
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            .contact-container{
                height: 400px;
                width: 600px;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
                text-align: center;
                color: white;
                background: rgba(0, 0, 0, 0.7);
                padding-top: 30px;
                padding-left: 100px;
                padding-right: 100px;
            }
            .contact-inputs{
                margin-top: -5px;
                width: 400px;
                height: 50px;
                border: none;
                outline: none;
                padding-left: 25px;
                font-weight: 500;
                color: #666;
            }
            .contact-left textarea{
                width: 400px;
                height: 140px;
                padding-top: 15px;
                margin-top: 10px;
            }
            .contact-inputs:focus{
                width: 400px;
                border: 2px solid #ff994f;
            }
            .contact-inputs::placeholder{
                width: 400px;
                color: #a9a9a9;
            }
            .yazi{
                margin-top: 10px;
                font-size: 24px;
                text-align: center;
                color: white;
            }
            .btn{
                margin-bottom: 40px;                
                background: #243B55;
                height: 40px;
                width: 400px;
                color: #fff;
                text-align: center;
                font-size: 20px;
            }
        </style>

    </head>

    <body>

        <div id="hero">
            <video autoplay loop muted>
                <source src="vid/Türk Hava Kuvvetleri _ Metamorphosis.mp4" type="video/mp4">
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
                <div class="contact-container">
                    <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
                        <div class="yazi">İLETİŞİM</div>
                            <input type="hidden" name="access_key" value="6953674a-f3bd-4f8f-9b70-c8f6aea3233f">
                            <input type="text" name="username" placeholder="İsim-Soyisim" class="contact-inputs" required>
                            <input type="email" name="email" placeholder="E-Posta" class="contact-inputs" required>
                            <textarea name="message" placeholder="MESAJ" class="contact-inputs" required></textarea>
                            <button class="btn" type="submit">Gönder</button>
                    </form>
                </div>
 
  <script src="js.js"></script>

    </body>
</html>
    