<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVG Company</title>
    <link rel="stylesheet" href="SASS/style.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&700display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&700display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&700display=swap" rel="stylesheet">
</head>
<body>
    <div class="head">
   
        <div class="head-top">
            <div class="ht-left">
            <div class="logo-head"><img src="img/logo.png"></div>
            <img src="img/moon.png" class="micon" id="micon">
            <script>
                var micon=document.getElementById("micon")
                micon.onclick=function(){
                    document.body.classList.toggle("dark-theme");
                    if(document.body.classList.contains("dark-theme")){
                        micon.src="img/sun.png";
                    }else{
                        micon.src="img/moon.png";
                    }
                }
            </script> 
            </div>
            <div class="ht-right">
                <ul class="head-nav-menu">
                    <li class="nav-item-my"><a href="#"> <a href="#" class="nav-link-my active-lang">Srpski</a></a></li>
                    <li class="nav-item-my"><a href="#" class="nav-link-my">English</a></li>
                    <li class="nav-item-my"><a href="#" class="nav-link-my">Magyar</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
        
        <div class="head-bottom">
            <div class="hb1">
                <a href="#" class="nav-link"><div class="nb-h3-1">O NAMA<p class="description">vizija za uspeh</p></div></a>
                <a href="#" class="nav-link"><div class="nb-h3">DVG PROIZVODI<p class="description">na??i proizvodi</p></div></a>
                <a href="#" class="nav-link"><div class="nb-h3">BRENDOVI<p class="description">koje zastupamo</p></div></a>
                <a href="#" class="nav-link"><div class="nb-h3">DISTRIBUCIJA<p class="description">logistika i operativa</p></div></a>
            </div>
            <div class="hb2">
                <a href="#" class="nav-link"><div class="nb-h3-2">SARADNJA<p class="description">pro??irenje ponude</p></div></a>
                <a href="#" class="nav-link"><div class="nb-h3">NOVOSTI<p class="description">aktuelnosti</p></div></a>
                <a href="#" class="nav-link"><div class="nb-h3">KONTAKT<p class="description">kontaktirajte nas</p></div></a>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
