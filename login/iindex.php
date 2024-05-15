<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACAHUS</title>
        <link rel="website icon" type="png" href="img/Başlıksız-1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <style>

body{
    padding: 0px;
    background-color: black;
}
::-webkit-scrollbar {
    display: none;
}

#heroo video{
    margin-top: -23px;
    height: 740px;
    width: 100%;
    background-position: absolute;
    z-index: 10;
    object-fit: cover;
}

#heroo .content {
    height: 100%;
    width: 100%;
    z-index: 20;
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

nav{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 200px;
    padding: 10px 90px;
    box-sizing: border-box;
    background: linear-gradient(360deg, #00000000, #000000ca);
    font-family: "Russo One", sans-serif;
    font-weight: 400;
    font-style: normal;
}

nav .logo{
    padding: 22px 20px;
    height: 80px;
    float: left;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
}

nav ul{
    list-style: none;
    float: right;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li a{
    line-height: 80px;
    color: #fff;
    padding: 12px 30px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
}

nav ul li a:hover{
    background: rgba(42, 40, 40, 0.9);
    border-radius: 6px;
}

.acahus{
        font-size:x-large;
        font-family: "Russo One", sans-serif;
        font-weight: 400;
        font-style: normal;
        position: absolute;
        margin-left: 100px;
        margin-top: -60px;
        color: white;
}
.saydamback{
    height: 400px;
    width: 800px;
    margin-top: -550px;
    margin-left: 360px;
    background: rgba(42, 40, 40, 0.8);
    color: white;
    position: relative;
    text-align: center;
}
.yazi{
    font-family: "Russo One", sans-serif;
    font-weight: 400;
    font-style: normal;
    margin-bottom: 30px;
    margin-top: 50px;
}
.btn{
    padding: 10px 60px;
    background: #fff;
    border: 0;
    outline: none;
    cursor: pointer;
    font-size: 22px;
    font-weight: 500;
    border-radius: 30px;
}
.popup{
    width: 400px;
    background: #fff;
    border-radius: 6px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%,-50%) scale(0.1);
    text-align: center;
    padding: 0 30px 30px;
    color: #333;
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
}
.open-popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
}
.popup h2{
    font-size: 38px;
    font-weight: 500;
    margin: 20px 0 0px;
    font-family: "Russo One", sans-serif;
    font-size:larger;
    font-weight: 70;
    font-style: normal;
    color:black;
}
.popup button{
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    background: #6fd649;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    font-family: "Russo One", sans-serif;
    font-size:larger;
    font-weight: 70;
    font-style: normal;
    color:white;
}
.altalta{
    margin-right: 200px;
    margin-top: 25px;
    font-family: "Russo One", sans-serif;
    font-size:larger;
    font-weight: 70;
    font-style: normal;
    color:white;
    font-size: 24px;
}
    </style>
</head>


<body>
<div id="heroo">
            <video autoplay loop muted>
                <source src="vid/Video Background Blue light Full HD.mp4" type="video/mp4">
            </video>
            <nav>
        <img src="img/acahuslogo.png" alt="" width="110px" height="90px">
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
            <div class="saydamback">
                <div class="yazi">
                    <img src="img/account_circle_24dp_FILL0_wght300_GRAD0_opsz24.png" width="150px" height="150px" style= "margin-top: 20px;">
                    <div class="altalta">Kullanıcı Adı:</div>
                    <div class="altalta">E-Posta:</div>
                </div>
                <button type="submit" class="btn" onClick="openPopup()">Çıkış Yap</button>
                <div class="popup" id="popup">
                    <img src="img/acahuslogo.png" width="300px" height="300px">
                    <h2>ÇIKMAK İSTEDEĞİNE EMİN MİSİN</h2>
                    <button type="button" onClick="closePopup()">HAYIR</button>            
                    <button type="button" style= "background: #ff0000;" onclick="location.href = 'logout.php'">EVET</button>
                </div>
            </div>
        </div>
        <script>
            let popup =document.getElementById("popup");

            function openPopup(){
                popup.classList.add("open-popup");
            }
            function closePopup(){
                popup.classList.remove("open-popup")
            }
            document.getElementById("myButton").onclick = function () {
        location.href = "logout.php";
    };
        </script>
</body>
</html>
