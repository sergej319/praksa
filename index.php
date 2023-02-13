

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
  document.getElementById("popup").style.display = "block";
}

// Funkcija za zatvaranje pop-up prozora
function closePopup() {
  document.getElementById("popup").style.display = "none";
}

// Poziv funkcije za prikazivanje pop-up prozora nakon 5 sekundi
setTimeout(function() {
  showPopup();
}, 5000);

// Event listener za zatvaranje pop-up prozora klikom na dugme
document.getElementById("close-button").addEventListener("click", closePopup);
    </script>
    <div class="container-swiper">
    <div class="swiper">
                    
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="img/Video.png" class="video"></div>
    <div class="swiper-slide"><img src="img/magacin.png" class="magacin"></div>
    <div class="swiper-slide"><img src="img/meeting.png" class="meeting"></div>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
  </div>
</div>
<script>
const swiper = new Swiper('.swiper', {
  
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <div class="pasus-1">
        <img src="img/zgrada.png" class="zgrada">
        <div class="onama">
            
            <h2>DVG Company</h2>
            
            <p class="p28">Veleprodaja i maloprodaja kozmetike i kućne hemije</p>
            <hr>
            <p class="p14">
                DVG Company d.o.o. je trgovinsko preduzeće osnovano 2008. godine u Subotici.
                Prvenstvena delatnost kompanije je veleprodaja kozmetike i kućne hemije.
                U potpunosti je u privatnom vlasništvu, sa sedištem u Subotici. Tu se nalazi
                distributivni centar i poslovne prostorije, sa ukupno 3000m<sup>2</sup> magacinskoh prostora
                koji zadovoljava sve segmente u pogledu smeštaja, čuvanja i plasiranja robe.
            </p><br>
            <a href="#" class="dugme">Saznajte više o nama</a>
        </div>
    </div>
    <div class="convoy">
        <img src="img/convoy.png" class="convoy-img">
    </div>
    <div class="menu">
        <div class="menu-article">
            <a href="#"><img src="img/staff.png" class="menu-article-img"></a>
            <br><a href="#"><p class="menu-article-text">POSTANITE NAŠ PARTNER</p></a>
        </div>
        <div class="menu-article">
            <a href="#"><img src="img/komarac.png" class="menu-article-img"></a><br>
            <a href="#"><p class="menu-article-text">NAŠI PROIZVODI</p></a>
        </div>
        <div class="menu-article">
            <a href="#"><img src="img/kombiji.png" class="menu-article-img"></a><br>
            <a href="#"><p class="menu-article-text">UVOZ IZ MAĐARSKE</p></a>
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
            <p class="p28">Naši proizvodi</p>
            <p class="p14">
                Naše proizvode DVG Cosmetics odlikuje visok kvalitet kojim se dobija kompletna<br>
                nega lica i tela. Uspeli smo da uskladimo kvalitet i cenu, što su prepoznali i naši<br>
                kupci.
            </p></div>
            <!--
            <div class="sve-kartice">
                <a href="#"><div class="kartica">
                    <img src="img/kese.png" class="kartica-img">
                    <div class="kartica-opis">KESE I FOLIJE</div>
                </div></a>
                <a href="#"><div class="kartica">
                    <img src="img/kuhinja.png" class="kartica-img">
                    <div class="kartica-opis">ZA KUHINJU</div>
                </div></a>
                <a href="#"><div class="kartica">
                    <img src="img/ubrusi.png" class="kartica-img">
                    <div class="kartica-opis">UBRUSI I TOALET PAPIRI</div>
                </div></a>
                <a href="#"><div class="kartica">
                    <img src="img/kozmetika.png" class="kartica-img">
                    <div class="kartica-opis">KOZMETIKA</div>
                </div></a>
                <a href="#"><div class="kartica">
                    <img src="img/kante.png" class="kartica-img">
                    <div class="kartica-opis">PLASTIČNE KANTE</div>
                </div></a>-->
    <div class="container-swiper">
    <div class="swiper">
                    
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><a href="#"><div class="kartica">
                    <img src="img/kese.png" class="kartica-img">
                    <div class="kartica-opis">KESE I FOLIJE</div>
                </div></a></div>
    <div class="swiper-slide"><a href="#"><div class="kartica">
                    <img src="img/kuhinja.png" class="kartica-img">
                    <div class="kartica-opis">ZA KUHINJU</div>
                </div></a></div>
    <div class="swiper-slide"><a href="#"><div class="kartica">
                    <img src="img/ubrusi.png" class="kartica-img">
                    <div class="kartica-opis">UBRUSI I TOALET PAPIRI</div>
                </div></a></div>
    <div class="swiper-slide"><a href="#"><div class="kartica">
                    <img src="img/kozmetika.png" class="kartica-img">
                    <div class="kartica-opis">KOZMETIKA</div>
                </div></a></div>
    <div class="swiper-slide"><a href="#"><div class="kartica">
                    <img src="img/kante.png" class="kartica-img">
                    <div class="kartica-opis">PLASTIČNE KANTE</div>
                </div></a></div>
    
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
</div>

                <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
            </div>
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
            <div class="dugme-okvir"><a href="#" class="dugme">Svi brendovi u našem portfoliju</a><a href="#" class="mini-dugme">Brendovi portfolija</a></div>               
    </div>
    
    <?php require 'constants/footer.php'; ?>
