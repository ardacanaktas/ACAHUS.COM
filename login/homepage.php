<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ACAHUS</title>
    <link rel="website icon" type="png" href="img/Başlıksız-1.png">
    <link rel="website icon" type="png" href="img/.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Space+Grotesk:wght@300..700&family=Teko:wght@505&display=swap" rel="stylesheet">

    <style>
        body {
    margin:0;
    padding: 0;
    background-color: #000000;
}

::-webkit-scrollbar {
    display: none;
}

#hero video{
    height: 730px;
    width: 100%;
    background-position: absolute;
    z-index: 10;
    object-fit: cover;
}

#hero .content {
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

#hero .contentt {
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

#heroo video{
    height: 730px;
    width: 100%;
    background-position: absolute;
    z-index: 10;
    object-fit: cover;
    margin-bottom: 500px;
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

#heroo .contentt {
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

#herooo video{
    height: 730px;
    width: 100%;
    background-position: absolute;
    z-index: 10;
    object-fit: cover;
    margin-bottom: 900px;
}

#herooo .content {
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

#herooo .contentt {
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

.navv{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 150px;
    padding: 10px 90px;
    box-sizing: border-box;
    background: linear-gradient(360deg, #00000000, #000000ca);
}

.navv .logo{
    padding: 22px 20px;
    height: 80px;
    float: left;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
}

.navv ul{
    list-style: none;
    float: right;
    margin: 0;
    padding: 0;
    display: flex;
}

.navv ul li a{
    line-height: 80px;
    color: #ffffff;
    padding: 12px 30px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
}

.navv ul li a:hover{
    background: rgba(168, 168, 168, 0.9);
    border-radius: 6px;
}

.navvv{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    padding: 10px 90px;
    box-sizing: border-box;
    background: #000000;
    border-bottom: 1px solid #ffffff;
}

.navvv .logo{
    padding: 22px 20px;
    height: 80px;
    float: left;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
}

.navvv ul{
    list-style: none;
    float: right;
    margin: 0;
    padding: 0;
    display: flex;
}

.navvv ul li a{
    line-height: 80px;
    color: #ffffff;
    padding: 12px 30px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
}

.navvv ul li a:hover{
    background: rgba(168, 168, 168, 0.9);
    border-radius: 6px;
}

.urunlistesi {
    list-style-type: none !important;
    font-family: "Arial","Helvetica",sans-serif !important;
    font-size: 12px !important;
}

.urun-listesi .urun {
    float: left;
    overflow:auto;
    width: 400px;
    height: 250px;
    padding: 6px;
    background-color: #0a0a0a;
    margin: 0 8px 14px 0;
    position: relative;
    list-style-type:none !important;
}

.urun-baslik {
    margin-bottom: 0;
    line-height: 15px;
    text-align: left;
}

.urun-baslik a {
    display: block;
    color: #666;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.urun-fiyat {
    padding-top:6px;
    color: #78c042;
    line-height: 14px;
    text-align: right;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: clip;
}

.urun-detay {
    margin-top: 5px;
    position: relative;
}


/*iletişim*/
body {
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
    color: #FFF;
  }
   
  input[type="text"],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #fffcfc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
   
  input[type="submit"] {
    background-color: #4285f4;
    color: rgb(255, 255, 255);
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: auto; 
    transition: width 0.9s; 
  }
   
  input[type="submit"]:hover {
    background-color: #28a745;
  }
   
  .container {
    border-radius: 5px;
    padding: 200px;
    padding-left: 20%;
    padding-right: 20%;
  }

/*sosyal medya alt*/
.altbannneerrk{
    width: 1600px;
    max-height: 300px;
    background-image: url(img/kaanaltban.jpg);
    color: #ffffff;
    position: absolute;
    text-decoration: solid;
}
.altbannneerra{
    width: 1600px;
    max-height: 300px;
    background-image: url(img/atakalt.jpg);
    color: #ffffff;
    position: absolute;
    text-decoration: solid;
}
.altbannneerrke{
    width: 1600px;
    max-height: 300px;
    background-image: url(img/kealt.jpg);
    color: #ffffff;
    position: absolute;
    text-decoration: solid;
}
.altbannneerrh{
    width: 1600px;
    max-height: 300px;
    background-image: url(img/halt.jpg);
    color: #ffffff;
    position: absolute;
    text-decoration: solid;
}
.altbanner{
    width: 100%;
    height: 300px;
    background: #ebebeb;
    margin-top: 1250px;
    color: #000000;
    position: absolute;
    text-decoration: solid;
}
.altbannner{
    width: 100%;
    height: 300px;
    background: #ebebeb;
    color: #6d6d6d;
    position: absolute;
    text-decoration: solid;
}
.altbannnerrr{
    width: 100%;
    height: 300px;
    background: #000000;
    color: #ffffff;
    position: absolute;
    text-decoration: solid;
    border-top: 1px solid #ffffff;
}

.altbannnerrrr{
    margin-top: 950px;
    width: 100%;
    height: 300px;
    background: #000000;
    color: #ffffff;
    position: absolute;
    text-decoration: solid;
    border-top: 1px solid #ffffff;
}

.düzenyukarı{
    margin-left: 100px;

}

.altbannertextdüzen{
    margin-left: 135px;
}
.altbannertextdüzenn{
    margin-left: 70px;
    margin-top: 20px;
}

.altbannerdüzen{
    padding-top: 45px;
    padding-left: 500px;
}

    *{
	    margin: 9;
        padding: 9;
        box-sizing:border-box;      
        }
        
     h2 {
        font-family: 'Oswald', sans-serif;
        color: #212121;
        font-size: 30px;
        font-weight: bold;
        padding-left: 150px;
        margin-top: 10px;
      }
        
    .sosyalbutonlar{
        margin-top: 20px;
        display: inline-block;
        position: relative;
        left: 100px;
          
        
        }
        
    .sosyalbutonlar a  {
      background:#a1a1a1;
        text-decoration: none;
        color: #FFF;
        width: 60px;
        height: 60px;
        display: inline-block;
        border-radius: 10px;
        margin-right: 20px;
        font-size: 30px;
        overflow: hidden;
        position: relative;
        line-height: 60px;
        text-align: center;
      }
        
    .sosyalbutonlar a{  
       transition: transform 0.4s linear 0s, 
         border-top-left-radius 0.1s linear 0s, 
         border-top-right-radius 0.1s linear 0.1s, 
         border-bottom-right-radius 0.1s linear 0.2s, 
         border-bottom-left-radius 0.1s linear 0.3s;
         
    }
    
    .sosyalbutonlar .facebook:hover {
          background-color: #3b5998;
          transform: rotate(360deg);
          border-radius: 50%;	 
    }
    
      .sosyalbutonlar .twitter:hover   {
          background-color: #00aced;
          transform: rotate(360deg);
          border-radius: 50%;	 
    }
      
     .sosyalbutonlar .google-plus:hover   {
          background-color: #dd4b39;
          transform: rotate(360deg);
          border-radius: 50%;	 
    }
    
     .sosyalbutonlar .instagram:hover   {
          background-color: #bc2a8d;
          transform: rotate(360deg);
          border-radius: 50%;	 
    }
    
     .sosyalbutonlar .linkedin:hover   {
          background-color: #00aced;
          transform: rotate(360deg);
          border-radius: 50%;	 
    }
    
     .sosyalbutonlar .youtube:hover   {
           background-color: #bb0000;
          transform: rotate(360deg);
          border-radius: 50%;	 
    }

    /*iletişim altbanner sosyal*/

    .altbannerr{
        width: 100%;
        height: 300px;
        background: #ebebeb;
        margin-top: 0px;
        color: #000000;
        position: absolute;
        text-decoration: solid;
    }
    
    .altbannerrtextdüzen{
        margin-left: 135px;
    }
    .altbannerrtextdüzenn{
        margin-left: 70px;
        margin-top: 20px;
    }
    
    .altbannerrdüzen{
        padding-top: 45px;
        padding-left: 500px;
    }
    
        *{
            margin: 9;
            padding: 9;
            box-sizing:border-box;      
            }
            
         h2 {
            font-family: 'Oswald', sans-serif;
            color: #212121;
            font-size: 30px;
            font-weight: bold;
            padding-left: 150px;
            margin-top: 10px;
          }
            
        .sosyalbutonlar{
            margin-top: 20px;
            display: inline-block;
            position: relative;
            left: 100px;
              
            
            }
            
        .sosyalbutonlar a  {
          background:#a1a1a1;
            text-decoration: none;
            color: #FFF;
            width: 60px;
            height: 60px;
            display: inline-block;
            border-radius: 10px;
            margin-right: 20px;
            font-size: 30px;
            overflow: hidden;
            position: relative;
            line-height: 60px;
            text-align: center;
          }
            
        .sosyalbutonlar a{  
           transition: transform 0.4s linear 0s, 
             border-top-left-radius 0.1s linear 0s, 
             border-top-right-radius 0.1s linear 0.1s, 
             border-bottom-right-radius 0.1s linear 0.2s, 
             border-bottom-left-radius 0.1s linear 0.3s;
             
        }
        
        .sosyalbutonlar .facebook:hover {
              background-color: #3b5998;
              transform: rotate(360deg);
              border-radius: 50%;	 
        }
        
          .sosyalbutonlar .twitter:hover   {
              background-color: #00aced;
              transform: rotate(360deg);
              border-radius: 50%;	 
        }
          
         .sosyalbutonlar .google-plus:hover   {
              background-color: #dd4b39;
              transform: rotate(360deg);
              border-radius: 50%;	 
        }
        
         .sosyalbutonlar .instagram:hover   {
              background-color: #bc2a8d;
              transform: rotate(360deg);
              border-radius: 50%;	 
        }
        
         .sosyalbutonlar .linkedin:hover   {
              background-color: #00aced;
              transform: rotate(360deg);
              border-radius: 50%;	 
        }
        
         .sosyalbutonlar .youtube:hover   {
               background-color: #bb0000;
              transform: rotate(360deg);
              border-radius: 50%;	 
        }


    /*hakkımızda*/

.containerr{
    display: flex;
    min-height: 700px;
    padding: 100px;
    padding-top: 30px;
    margin-top: 100px;
    background: #000000;
    color: #FFF;
}
.chart{
    padding: 1rem;
    border: 1px solid #ffffff;
    border-radius: 1rem;
    background: #000000;
    box-shadow: 0 0 16px rgba(255, 255, 255, 0.8);
}

.yan{
    position: absolute;
    margin-left: 10px;
    text-align: center;
    font-weight: bolder;
    font-size: 25px;
    margin-left:210px ;
    margin-top: 280px;
}

.text{
    width: 600px;
    margin-left: 10px ;
    margin-top: 10px;
    color: #ffffff;
    font-size:medium;
    overflow-wrap: break-word;
}

.textt{
    display: flex;
    flex-direction: column;
    margin-right: 10px ;
    color: #ffffff;
    font-size: 35px;
    font-style: italic;
}

.texttt{
    margin-left: 10px ;
    color: #ffffff;
    font-size: 35px;
    font-weight: bold;
    max-width: 400px;
}

.textttt{
    width: 1000px;
    color: #ffffff;
    text-align: center;
    font-weight: bolder;
}

.text ul{
    list-style-type:none;
}


    /*ana sayfa projeler kısmı*/

    .acahus{
        font-size:x-large;
        font-family: "Russo One", sans-serif;
        font-weight: 400;
        font-style: normal;
        position: absolute;
        margin-left: 100px;
        margin-top: -60px;
    }

    .birana{
        margin-top: 150px;
        padding-top: 60px;
        width: 600px;
        height: 200px;
        background-color: rgba(0, 0, 0, 0.0);
        position: absolute;
    }

    .yanyana{
        width: 500px;
        height: 100px;
        background-color: rgba(0, 0, 0, 0.0);
        margin-top: 60px;
        margin-left: 80px;
    }

    .yanana{
        margin-left: 10px;
        writing-mode:vertical-rl;
        text-orientation:sideways-right;
        font-weight: bolder;
        font-size: 50px;
        color: white;
        position: absolute;
        font-family: "Russo One", sans-serif;
        font-style: normal;
    }

    .body{
        background-color: #000000;
    }

    .anasayfavieodegrade{
        position: absolute;
        width: 100%;
        height: 50px;
        background-color: rgba(0, 0, 0, 1);
        margin-top: 680px;
        background: linear-gradient(180deg, #00000000, #000000ca);
    }

.bsarkaplan{
    width: 100%;
    height: 800px;
    background: url(img/bsarkplan.jpg);
    position: relative;
    padding: 100px;
    border-bottom: 1px solid white;
}

.asagik{
    position: absolute;
    margin-top: 250px;
    margin-right: 650px;
}
.asagiktext{
    color: rgb(255, 255, 255);
    text-align: center;
    position: absolute;
    margin-top: 300px;
    margin-right: 650px;
    font-size: 10px;
    font-family: "Russo One", sans-serif;
    font-weight: 40px;
    font-style: normal;
}


.card{
    padding-top: 10px;
    width: 900px;
    height: 300px;
    margin-left: 150px;
    float: left;
    background-color: #dadada;
    color: #ffffff;
    overflow: hidden;
    cursor: pointer;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0px 0px 10px black;
    transition: 0.4s;
}
        
.card img{
    width: 500px;
    height: 250px;
    border-radius: 5px;
    transition: 0.4s;
}

.card .yazi{
    width: 100%;
    height: 500px;
    background-color: rgba(30, 90, 228, 0.5);
    transform: translateY(-60px);
    opacity: 0.8;
    border-radius: 5px;
    color: rgb(0, 0, 0);
    transition: 0.4s;
    padding-top: 10px;
    padding: 10px;
}

.card .yazi h2{
    height: 50px;
    line-height: 50px;
    padding: 0px 10px;
}

.card .yazi p{
    margin-top: 10px;
    padding: 0px 10px;
    font-size: 17px;
}

.card:hover .yazi{
    transform: translateY(-80px);
}
.card:hover img{
    transform: scale(1.1);
}
.card:nth-child(1){
    background: rgba(103, 81, 81, 0);
}

.card:nth-child(2){
    margin-left:0px;
}
        
.card:nth-child(3){
    margin-left:0px;
}
      
.card h1{
    padding-bottom: 15px;
}
        
.button a{
    padding: 10px 15px;
    margin-left: 600px;
    margin-bottom: 100px;
}
        
.clear{
    clear: both;
}




#overfloow{
    width: 700px;
    height: 450px;
    overflow: hidden;
}


.conten{
    width: 800px;
    height: 330px;
    margin-top: 14px;
    background-color: #000000;
    margin:0 auto;
    display: flex;
    flex-direction: row;
    margin-left: 600px;
    justify-content: center;
    list-style: none
}

.conten1{
    width: 800px;
    height: 330px;
    margin-top: 14px;
    background-color: #000000;
    position: absolute;
    margin:0 auto;
    display: flex;
    flex-direction: row;
    margin-left: 600px;
    justify-content: center;
    list-style: none
}


.box{
    filter: grayscale(1.0);
    position: relative;
    width: 250px;
    height: 250px;
    background: gray;
    margin-right:14px;
    transition: 0.5s;
    background: rgba(103, 81, 81, 0);
}

.box img {
    border-radius: 6px;
}

.box:hover {
    filter: grayscale(0.0);
    transform: scale(1.2);
    background: rgba(103, 81, 81, 0);
    z-index: 2;
}

.box1 {
    text-transform: uppercase;
    filter: grayscale(1.0);
    position: relative;
    width: 300px;
    height: 300px;
    background: gray;
    margin-right: 14px;
    margin-top: 14px;
    transition: 0.5s;
    background: rgba(103, 81, 81, 0);
}

.box1 img {
    border-radius: 6px;
}

.box1:hover {
    filter: grayscale(0.0);
    transform: scale(1.2);
    background: rgba(103, 81, 81, 0);
    z-index: 2;
}

.boxx1 {
    text-transform: uppercase;
    filter: grayscale(1.0);
    position: relative;
    width: 300px;
    height: 300px;
    background: gray;
    margin-right: 14px;
    margin-top: 64px;
    transition: 0.5s;
    background: rgba(103, 81, 81, 0);
}

.boxx1 img {
    border-radius: 6px;
}

.boxx1:hover {
    filter: grayscale(0.0);
    transform: scale(1.2);
    background: rgba(103, 81, 81, 0);
    z-index: 2;
}

.ürünlerarkplan{
    width: 100%;
    height: 730px;
    background-image: url(img/atmosphere-sky-cloud-atmospheric-phenomenon-astronomical-object-horizon-2075165-wallhere.com.jpg);
    padding-right: 600px;
}


.wrapperyazi{
    font-size:x-large;
    font-family: "Russo One", sans-serif;
    font-weight: 400;
    font-style: normal;
    margin-bottom: 30px;
    margin-top: 30px;
  }

.wrapper{
    position: relative;
    padding-top: 40px;
    height: 600px;
    width: 100%;
    overflow: hidden;
    background: #000000;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.15);
    border-bottom: 1px solid white;
    text-align: center;
  }
  .wrapper .wimages{
    height: 500px;
    width: 1536px;
    display: flex;
  }
  .wrapper .wimages .wimg-1{
    position: absolute;
    background: url(img/cizimu.jpg) no-repeat;
    height: 500px;
    width: 1536px;
  }
  .wrapper .wimages .wimg-2{
    position: absolute;
    background: url(img/ucaktamas.jpg) no-repeat;
    height: 500px;
    width: 1536px;
  }
  .wrapper .wslider{
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 99;
  }
  .wrapper .wslider input{
    padding-top: 50px;
    width: 100%;
    outline: none;
    background: none;
    -webkit-appearance: none;
  }
  .wslider input::-webkit-slider-thumb{
    height: 500px;
    width: 3px;
    background: none;
    -webkit-appearance: none;
    cursor: col-resize;
  }
  .wslider .wdrag-line{
    margin-top: 130px;
    width: 3px;
    height: 400px;
    position: absolute;
    left: 765px;
    pointer-events: none;
  }
  .wslider .wdrag-line::before,
  .wslider .wdrag-line::after{
    position: absolute;
    content: "";
    width: 100%;
    height: 222px;
    background: #fff;
  }
  .wslider .wdrag-line::before{
    top: 0;
  }
  .wslider .wdrag-line::after{
    bottom: 0;
  }
  .wslider .wdrag-line span{
    height: 42px;
    width: 42px;
    border: 3px solid #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    border-radius: 50%;
    transform: translate(-50%, -50%);
  }
  .wslider .wdrag-line span::before,
  .wslider .wdrag-line span::after{
    position: absolute;
    content: "";
    top: 50%;
    border: 10px solid transparent;
    border-bottom-width: 0px;
    border-right-width: 0px;
    transform: translate(-50%, -50%) rotate(45deg);
  }
  .wslider .wdrag-line span::before{
    left: 40%;
    border-left-color: #fff;
  }
  .wslider .wdrag-line span::after{
    left: 60%;
    border-top-color: #fff;
  }
  


  .haberler{
    font-size:x-large;
    font-family: "Russo One", sans-serif;
    font-weight: 400;
    font-style: normal;
    margin-left: 700px;
    margin-top: 100px;
  }

  .orta{
  
    margin-top: 20px;
  }
  .orta-sol{
    width: 575px;
    float: left;
  }
  .orta-sag{
    width: 360px;
    float: right;
    height: 280px;
    background: #FDC609;
    padding: 10px;
  }
  
  .orta-sag img{
    box-shadow: 10px 10px 10px gray;
  }
  
  .orta-resim{
    margin: 0 25px;
    
  }
  .ccard
  {
    margin-left: 40px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-top: 1px solid;
    border-bottom: 1px solid;
    border-color: rgb(255, 255, 255);
    text-align: center;
    width: 400px;
    height: 400px;
    float: left;
  }
  
  .ccard{
    margin-top: 40px;
    margin-right: 30px;
  }
  
  .ccard:nth-child(1){
    margin-left: 150px;
  }
  
  .ccard:nth-child(2){
    margin-left: 0px;
  }
  .ccard:nth-child(3){
    margin-top: 40px;
    margin-left: 0px;
  }
  
  .ccard h1{
    border-bottom: 1px solid rgb(0, 0, 0);
    padding-bottom: 15px;
    
  }

  .ccard .image:hover{
    transform: scale(1.08);
    transition: 0.2s;
  }
  
  .button a{
    display: inline-block;
    padding: 10px 15px;
    color: #fdc609;
    background-color: #232323;
    text-decoration: none;
    
  }
  
  .clear{
    clear: both;
  }

  
/*ürünler*/


.ürünyaz{
    margin-top: 20px;
    text-align: center;
    font-family: "Russo One", sans-serif;
    font-size:larger;
    font-weight: 70;
    font-style: normal;
    color:white;
    background-color: rgba(0, 0, 0, 0.5);
    height: 40px;
    width: 480px;
    padding: 10px;
    margin-left: 20%;
}

.altbannneerrü{
    width: 1600px;
    max-height: 300px;
    background-image: url(img/cloud.jpg);
    color: #ffffff;
    position: absolute;
    text-decoration: solid;
}

.cardürünler:hover img{
    transform: scale(1.08);
    transition: 0.3s;
}

    </style>
    
</head>



<body>
    <div id="hero">
        <div class="sayfageçiş">
            <div class="anasayfavieodegrade"></div>
        <video autoplay loop muted>
            <source src="vid/Selam olsun vatan diye atan yüreklere.....mp4" type="video/mp4">
        </video>
    </div>
    </div>
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
    
    <div class="bsarkaplan">
                <div class="birana">
                    <div class="yanana"><p>TÜRK</p></div>
                        <div class="yanyana">
                            <ul>
                                <li><div class="textt">HAVACILIK UZAY SANAYİİ</div></li>
                                <li><div class="texttt">GELECEĞİNE GÜÇ KAT</div></li>
                            </ul>
                        </div>
                </div>
                <div class="conten">
                        <div class="box1">
                        <a href="http://localhost/login/index.php">
                            <img src="img/video-sec-2.jpg" alt="" width="300px" height="300px">
                        </a>
                        </div>
                    <div class="boxx1">
                        <a href="http://localhost/login/index.php">
                            <img src="img/video-sec-4.jpg" alt=""width="250px" height="250px">
                        </a>
                    </div>
                </div>
                <div class="conten1">
                    <div class="box">
                        <a href="http://localhost/login/ürünler1.php">
                            <img src="img/video-sec-5.jpg" alt=""width="250px" height="250px">
                        </a>
                    </div>
                    <div class="box">
                        <a href="http://localhost/login/ürünler1.php">
                            <img src="img/video-sec-6.jpg" alt=""width="300px" height="300px">
                        </a>
                    </div>
                    <div class="asagik">
                        <img src="https://cdn.baykartech.com/static/assets/img/icons/svg/scroll-down.svg" width="24" height="38" alt="Aşağı Kaydır">
                    </div>
                    <div class="asagiktext">AŞAĞI KAYDIR</div>
                </ul>
                </div>
            </div>

            <div class="wrapper">
                <div class="wrapperyazi">SAĞA SOLA SÜRÜKLE</div>
                <div class="wimages">
                  <div class="wimg-1"></div>
                  <div class="wimg-2"></div>
                </div>
                <div class="wslider">
                  <div class="wdrag-line">
                    <span></span>
                  </div>
                  <input type="range" min="0" max="100" value="50">
                </div>
              </div>
              <script>
                const slider = document.querySelector(".wslider input");
                const img = document.querySelector(".wimages .wimg-2");
                const dragLine = document.querySelector(".wslider .wdrag-line");
                slider.oninput = ()=>{
                  let sliderVal = slider.value;
                  dragLine.style.left = sliderVal + "%";
                  img.style.width = sliderVal + "%";
                }
              </script>

                <div class="haberler">HABERLER</div>
                <div class="iccerik">
                    <div class="ccard">
                        <h1>KAAN UÇTU</h1>
                        <div class="image">
                        <a href="https://youtu.be/yyGmRUgarjE?si=WyPS2I3i6mxpWuq9"><img src="img/kaan_mmu.jpeg" width="400px" height="200px"></a>
                    </div>
                        <p>21.02.2024</p>
                    </div>
                    <div class="ccard orta-ccard" >
                        <h1>AKSUNGUR UÇTU</h1>
                        <div class="image">
                        <a href="https://youtu.be/yyGmRUgarjE?si=WyPS2I3i6mxpWuq9"><img src="img/akilk.jpg" width="400px" height="200px"></a>
                    </div>
                        <p>13.11.2023</p>
                    </div>
                    <div class="ccard">
                        <h1>HÜRJET UÇTU</h1>
                        <div class="image">
                        <a href="https://youtu.be/7bnmXbFWrwE?si=ve-4X8WexW_k-KOf"><img src="img/hrjeyilk.jpg" width="400px" height="200px"></a>
                    </div>
                        <p>25.05.2023</p>
                    </div>
                </div>
                <div class="iccerik">
                    <div class="ccard">
                        <h1>T-625 GÖKBEY UÇTU</h1>
                        <div class="image">
                        <a href="https://youtu.be/05vTjtSfNqQ?si=bvdfT2R-L-s3LXEW"><img src="img/gokbeyilk.jpg" width="400px" height="200px"></a>
                    </div>
                        <p>22.04.2023</p>
                    </div>
                    <div class="ccard orta-ccard" >
                        <h1>KIZIL ELMA UÇTU</h1>
                        <div class="image">
                        <a href="https://youtu.be/7bnmXbFWrwE?si=ve-4X8WexW_k-KOf"><img src="img/kızılilk.jpg" width="400px" height="200px"></a>
                    </div>
                        <p>14.12.2022</p>
                    </div>
                    <div class="ccard">
                        <h1>ATAK T-129 UÇTU</h1>
                        <div class="image">
                        <a href="https://youtu.be/05vTjtSfNqQ?si=bvdfT2R-L-s3LXEW"><img src="img/atakk.jpg" width="400px" height="200px"></a>
                    </div>
                        <p>17.08.2011</p>
                    </div>
                </div>

  
<div class="altbannnerrrr">
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
<!--yukarı çıkma butonu-->
<script src="slider.js"></script>
<SCRIPT type="text/javascript" src="jquery.min.js"></SCRIPT>
<SCRIPT type="text/javascript" src="scripts/DD_belatedPNG.js"></SCRIPT>
<SCRIPT type="text/javascript">DD_belatedPNG.fix("img, body, html");</SCRIPT>
<SCRIPT type="text/javascript">function goToByScroll(id){$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');}</SCRIPT>
<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>

</div>
</body>
</html>