

    <?php require 'constants/header.php'; ?>
    <div class="popup" id="popup">
    <div class="popup-content">
      <span class="close-button" id="close-button">&times;</span>
      <p>Hvala na poseti!</p>
      <img src="img/Vector.png">
    </div>
  </div>
    <script>
        function showPopup() {
            document.body.style.overflow = "hidden";
  document.getElementById("popup").style.display = "block";
}
function closePopup() {
    document.body.style.overflow = "auto";
  document.getElementById("popup").style.display = "none";
}
setTimeout(function() {
  showPopup();
}, 5000);

document.getElementById("close-button").addEventListener("click", closePopup);

    </script>
<div class="slider-1">
 
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/Video.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/magacin.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/meeting.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}

function automaticSlideShow() {
setInterval(function() {
plusSlides(1);
if (slideIndex === document.getElementsByClassName("mySlides").length) {
slideIndex = 0;
}
}, 5000);
}

automaticSlideShow();
</script>

 
    <div class="pasus-1">
        <img src="img/zgrada.png" class="zgrada">
        <div class="onama">
            
            <h2>DVG Company</h2>
            
            <p class="p28">Veleprodaja i maloprodaja kozmetike i ku??ne hemije</p>
            <hr>
            <p class="p14">
                DVG Company d.o.o. je trgovinsko preduze??e osnovano 2008. godine u Subotici.
                Prvenstvena delatnost kompanije je veleprodaja kozmetike i ku??ne hemije.
                U potpunosti je u privatnom vlasni??tvu, sa sedi??tem u Subotici. Tu se nalazi
                distributivni centar i poslovne prostorije, sa ukupno 3000m<sup>2</sup> magacinskoh prostora
                koji zadovoljava sve segmente u pogledu sme??taja, ??uvanja i plasiranja robe.
            </p><br>
             <a href="#"><button type="dugme">Saznajte vi??e o nama</button></a>
        </div>
    </div>
    <div class="prlx">
        <p class="prlx-p">POUZDANA DISTRIBUCIJA</p>
    </div>
    <div class="menu">
        <div class="menu-article">
            <a href="#"><img src="img/staff.png" class="menu-article-img"></a>
            <br><a href="#"><p class="menu-article-text">POSTANITE NA?? PARTNER</p></a>
        </div>
        <div class="menu-article">
            <a href="#"><img src="img/komarac.png" class="menu-article-img"></a><br>
            <a href="#"><p class="menu-article-text">NA??I PROIZVODI</p></a>
        </div>
        <div class="menu-article">
            <a href="#"><img src="img/kombiji.png" class="menu-article-img"></a><br>
            <a href="#"><p class="menu-article-text">UVOZ IZ MA??ARSKE</p></a>
        </div></a>
    </div>
    
        <div class="brojke">
            <h2>DVG Company</h2>
            <p class="p28">u brojkama</p>
            <div class="pozadina">
                <div class="table">
                    <div class="cell-1"><div class="cell-data"><h4 class="magacin">3.000<p class="p18">m<sup>2</sup></p></h4><p class="p18">Magacinskog prostora</p></div></div>
                    <div class="cell"><div class="cell-data"><h4>20</h4><p class="p18">Vozila</p></div></div>
                    <div class="cell"><div class="cell-data"><h4>8</h4><p class="p18">Komercijalista</p></div></div>
                    <div class="cell"><div class="cell-data"><h4>170</h4><p class="p18">Brendova</p></div></div>
                </div>
            </div>
        </div>
        <div class="proizvodi"><div class="proizvodi-top">
            <p class="p28">Na??i proizvodi</p>
            <p class="p14">
                Na??e proizvode DVG Cosmetics odlikuje visok kvalitet kojim se dobija kompletna<br>
                nega lica i tela. Uspeli smo da uskladimo kvalitet i cenu, ??to su prepoznali i na??i<br>
                kupci.
            </p></div>
            
<div id="container">
  <div id="slider-container">
    <span onclick="slideRight()" class="btn"></span>
      <div id="slider">
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/kese.png" class="kartica-img">
                    <div class="kartica-opis">KESE I FOLIJE</div>
                </div></a></span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/kuhinja.png" class="kartica-img">
                    <div class="kartica-opis">ZA KUHINJU</div>
                </div></a></span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/ubrusi.png" class="kartica-img">
                    <div class="kartica-opis">UBRUSI I TOALET PAPIRI</div>
                </div></a><span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/kozmetika.png" class="kartica-img">
                    <div class="kartica-opis">KOZMETIKA</div>
                </div></a></span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/kante.png" class="kartica-img">
                    <div class="kartica-opis">PLASTI??NE KANTE</div>
                </div></a></span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/kese.png" class="kartica-img">
                    <div class="kartica-opis">KESE I FOLIJE</div>
                </div></a></span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/kuhinja.png" class="kartica-img">
                    <div class="kartica-opis">ZA KUHINJU</div>
                </div></a></span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/ubrusi.png" class="kartica-img">
                    <div class="kartica-opis">UBRUSI I TOALET PAPIRI</div>
                </div></a></span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/kozmetika.png" class="kartica-img">
                    <div class="kartica-opis">KOZMETIKA</div>
                </div></a></span></div>
        <div class="slide"><span><a href="#"><div class="kartica">
                    <img src="img/kante.png" class="kartica-img">
                    <div class="kartica-opis">PLASTI??NE KANTE</div>
                </div></a></span></div>
    </div>
    <span onclick="slideLeft()" class="btn"></span>
  </div>
</div>
<script>
var container = document.getElementById('container');
var slider = document.getElementById('slider');
var slides = document.getElementsByClassName('slide').length;
var buttons = document.getElementsByClassName('btn');

var currentPosition = 0;
var currentMargin = 0;
var slidesPerPage = 0;
var slidesCount = slides - slidesPerPage;
var containerWidth = container.offsetWidth;
var prevKeyActive = false;
var nextKeyActive = true;
var slideInterval;

window.addEventListener("resize", checkWidth);

function checkWidth() {
    containerWidth = container.offsetWidth;
    setParams(containerWidth);
}

function setParams(w) {
    if (w < 551) {
        slidesPerPage = 1;
    } else {
        if (w < 901) {
            slidesPerPage = 2;
        } else {
            if (w < 1101) {
                slidesPerPage = 3;
            } else {
                slidesPerPage = 4;
            }
        }
    }
    slidesCount = slides - slidesPerPage;
    if (currentPosition > slidesCount) {
        currentPosition -= slidesPerPage;
    };
    currentMargin = - currentPosition * (100 / slidesPerPage);
    slider.style.marginLeft = currentMargin + '%';
    if (currentPosition > 0) {
        buttons[0].classList.remove('inactive');
    }
    if (currentPosition < slidesCount) {
        buttons[1].classList.remove('inactive');
    }
    if (currentPosition >= slidesCount) {
        buttons[1].classList.add('inactive');
    }
}

setParams();

function slideRight() {
    if (currentPosition != 0) {
        slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
        currentMargin += (100 / slidesPerPage);
        currentPosition--;
    };
    if (currentPosition === 0) {
        buttons[0].classList.add('inactive');
    }
    if (currentPosition < slidesCount) {
        buttons[1].classList.remove('inactive');
    }
};

function slideLeft() {
    if (currentPosition != slidesCount) {
        slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
        currentMargin -= (100 / slidesPerPage);
        currentPosition++;
    };
    if (currentPosition == slidesCount) {
        buttons[1].classList.add('inactive');
    }
    if (currentPosition > 0) {
        buttons[0].classList.remove('inactive');
    }
};

function startSlideInterval() {
  slideInterval = setInterval(function() {
    if (currentPosition == slidesCount) {
      slider.style.marginLeft = 0 + '%';
      currentMargin = 0;
      currentPosition = 0;
      buttons[0].classList.add('inactive');
      buttons[1].classList.remove('inactive');
    } else {
      slideLeft();
    }
  }, 3000);
}

function stopSlideInterval() {
  clearInterval(slideInterval);
}

startSlideInterval();
container.addEventListener('mouseenter', stopSlideInterval);
container.addEventListener('mouseleave', startSlideInterval);
</script>
    
   
            <img src="img/ghost.png" class="ghost">
        </div>
        <div class="brendovi">
            <p class="p28">
                Istaknuti brendovi za koje radimo
                distribuciju
            </p>
            <div class="brendovi-tabela">
                <div class="per3-1">
                <div class="brendovi-cell">
                    <img src="img/dove.png" class="brendovi-png">
                    <p class="brendovi-opis">Dove</p>
                </div>
                <div class="brendovi-cell">
                    <img src="img/nivea.png" class="brendovi-png">
                    <p class="brendovi-opis">Nivea</p>
                </div>
                <div class="brendovi-cell">
                    <img src="img/palmolive.png" class="brendovi-png">
                    <p class="brendovi-opis">Palmolive</p>
                </div></div>
                <div class="per3-2"><div class="brendovi-cell">
                    <img src="img/vanish.png" class="brendovi-png">
                    <p class="brendovi-opis">Vanish</p>
                </div>
                <div class="brendovi-cell">
                    <img src="img/ajax.png" class="brendovi-png">
                    <p class="brendovi-opis">Ajax</p>
                </div>
                <div class="brendovi-cell">
                    <img src="img/cif.png" class="brendovi-png">
                    <p class="brendovi-opis">Cif</p>
                </div></div>
                </div> 
                <a href="#"><button type="dugme">Svi brendovi u na??em portfoliju</button></a>               
    </div>
    
    
    <?php require 'constants/footer.php'; ?>
