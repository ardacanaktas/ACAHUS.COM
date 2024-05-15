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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>

::-webkit-scrollbar {
    display: none;
}

#heroo video{
    height: 725px;
    width: 1600px;
    background-position: absolute;
    z-index: 10;
    object-fit: cover;
}

#heroo .content {
    margin-top: 50px;
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


    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}

:root {
    --linear-grad: linear-gradient(to right, #141E30, #243B55);
    --grad-clr1: #141E30;
    --grad-clr2: #243B55;
}

body {
    height: 100vh;
    background: #00000000;
    display: grid;
    place-content: center;
    font-family: 'Poppins', sans-serif;
}
.container{
    position: absolute;
    width: 850px;
    height: 500px;
    margin-top: -580px;
    margin-left: 368px;
    background-color: rgba(42, 40, 40, 0.4);
    border-radius: 13px;
    overflow: hidden;
}
.form-container{
    position: absolute;
    width: 60%;
    height: 100%;
    padding: 0px 40px;
    transition: all 0.6s ease-in-out;
}
.sign-up-container{
    opacity: 0;
    z-index: 1;
}
.sign-in-container{
    z-index: 2;
}
form{
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0px 50px;
}
.yazig{
    margin-top: 160px;
    text-align: center;
    margin-bottom: -160px;
    color: white;
}
.yazi{
    margin-top: 100px;
    text-align: center;
    margin-bottom: -100px;
    color: white;
}
h1{
    color:var(--grad-clr1);
}
.social-container{
    margin: 20px 0px;
}
.social-container a{
    border: 1px solid #fff;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0px 5px;
    height: 40px;
    width: 40px;
}
span{
    font-size: 12px;
}
.infield{
    position: relative;
    margin: 8px 0px;
    width: 100%;
}
input {
    width: 100%;
    padding: 12px 15px;
    background-color: #f3f3f3;
    border: none;
    outline: none;
}
label{
    position: absolute;
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
    width: 0%;
    height: 2px;
    background: var(--linear-grad);
    transition: 0.3s;
}
input:focus ~ label{
    width: 100%;
}
a{
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0px;
}
a.forgot{
    padding-bottom: 3px;
    border-bottom:2px solid #eee ;
}
button{
    border-radius: 20px;
    border: 1px solid var(--grad-clr1);
    background: var(--grad-clr2);
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.form-container button{
    margin-top: 17px;
    transition: 80ms ease-in;
}
.form-container button:hover{
    background: #fff;
    color: var(--grad-clr1);
}
.btn{
    background: #243B55;
    height: 40px;
    width: 330px;
    color: white;
}
.overlay-container{
    position: absolute;
    top: 0;
    left: 60%;
    width: 40%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 9;
}
#overlayBtn{
    cursor: pointer;
    position: absolute;
    left: 50%;
    top: 300px;
    transform: translateX(-50%);
    width: 143.67px;
    height: 40px;
    border: 1px solid #fff;
    background: transparent;
    border-radius: 20px;
}
.overlay{
    position: relative;
    background: var(--linear-grad);
    color: #fff;
    left: -150%;
    height: 100%;
    width: 250%;
    transition: transform 0.6s ease-in-out;
}
.overlay-panel{
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0px 40px;
    text-align: center;
    height: 100%;
    width: 340px;
    transition: 0.6s ease-in-out;
}
.overlay-left{
    right: 60%;
    transform: translateX(-12%);
}
.overlay-right{
    right: 0;
    transform: translateX(0%);
}
.overlay-panel h1{
    color: #fff;
}
p{
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 25px 0px 35px;
}
.overlay-panel button{
    border: none;
    background-color: transparent;
}
.overlay-panel button{
    border: none;
    background-color: transparent;
}
.right-panel-active .overlay-container{
    transform: translateX(-150%);
}
.right-panel-active .overlay{
    transform: translateX(50%);
}
.right-panel-active .overlay-left{
    transform: translateX(25%);
}
.right-panel-active .overlay-right{
    transform: translateX(35%);
}
.right-panel-active .sign-in-container{
    background: rgba(42, 40, 40, 0.2);
    transform: translateX(20%);
    opacity: 0;
}
.right-panel-active .sign-up-container{
    transform: translateX(66.7%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
}
@keyframes show {
    0%, 50% {
        opacity: 0;
        z-index: 1;
    }
    50.1%,100%{
        opacity: 1;
        z-index: 5;
    }
}
.btnScaled{
    animation: scaleBtn 0.6s;
}
@keyframes scaleBtn{
    0%{
        width: 143.67px;
    }
    50%{
        width: 250px;
    }
    100%{
        width: 143.67px;
    }
}
    </style>
</head>


<body>

<div id="heroo">
<img src="img/logarka.jpg" width="1600px"height="730px">
    <nav>
        <img src="img/acahuslogo.png" alt="" width="110px" height="90px" >
            <div class="acahus">ACAHUS.com</div>
                <ul>
                    <li><a href="homepage.php">Ana Sayfa</a></li>
                    <li><a href="ürünler1.php">Çalışmalarımız</a></li>
                    <li><a href="hakkımızda1.php">Hakkımızda</a></li>
                    <li><a href="http://localhost/login/index.php">Giriş Yap/Kayıt Ol</a></li>
                </ul>
            </nav>

    <!-- üye olma kisim -->

<div class="container" id="container">
        <div class="form-container sign-up-container" id="signup">
                <h1 class="yazi">Hesap Oluştur</h1>
                <form method="post" action="register.php">
                <div class="infield">
                    <input type="text" name="fName" id="fName" placeholder="Kullanıcı Adı" required>
                </div>
                <div class="infield">
                    <input type="email" name="email" id="email" placeholder="E-Posta" required>
                </div>
                <div class="infield">
                    <input type="password" name="password" id="password" placeholder="Şifre" required>
                </div>
                <div class="infield">
                    <input type="password" name="passwordd" id="passwordd" placeholder="Şifre Tekrar" required>
                </div>
                <input type="submit" class="btn" value="Kayıt Ol" name="signUp">
            </form>
        </div>

    <!-- şifre kullanıcı ad kısmı -->

    <div class="form-container sign-in-container" id="signIn">
        <h1 class="yazig">Giriş Yap</h1>
        <form method="post" action="register.php">
        <div class="infield">
                    <input type="text" name="fName" id="fName" placeholder="Kullanıcı Adı" required>
                </div>
                <div class="infield">
                    <input type="password" name="password" id="password" placeholder="Şifre" required>
                </div>
                <input type="submit" class="btn" value="Giriş Yap" name="signIn">
            </form>
        </div>


    <!-- geçiş tuşları -->

    <div class="overlay-container" id="overlayCon">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Üye Misin?</h1>
                <p>E-Posta ve Şifre Kullanarak Giriş Yap</p>
                <br>
                <button>Giriş Yap</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hesabın Yok Mu?</h1>
                <p>E-Posta Adresini Kullanarak Hesap Oluştur</p>
                <button>Kayıt Ol</button>
            </div>
        </div>
        <button id="overlayBtn"></button>
    </div>
</div>
</div>   
    <!-- js -->
    <script>
        const signUpButton=document.getElementById('signUpButton');
        const signInButton=document.getElementById('signInButton');
        const signInForm=document.getElementById('signIn');
        const signUpForm=document.getElementById('signup');
        const overlayCon=document.getElementById('overlayCon');
        const overlayBtn=document.getElementById('overlayBtn');   
        
            overlayBtn.addEventListener('click', ()=>{
            container.classList.toggle('right-panel-active');    

            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame( ()=>{
                overlayBtn.classList.add('btnScaled');
            })

            signUpButton.addEventListener('click',function(){
            signInForm.style.display="none";
            signUpForm.style.display="block";
            })

            signInButton.addEventListener('click', function(){
            signInForm.style.display="block";
            signUpForm.style.display="none";
            })
        });
        
    </script>
</body>
</html>
