<?php
session_start();
include_once "inc/header.php";
?>
<div class="restaurant link-warning">
    <h1>Les services</h1>
    <div class="service1">
        <h2 class="resto fa-4x">Restauration</h2>
        <div class="card mt-5 m-3 w-25 border-warning border-3" style="width: 18rem;">
          <div class="card-body bg-dark link-warning list-group-item lead">
          <h5 class="card-title mt-2">Horaire</h5>
          <p class="card-text">Notre restaurant Gastronomique vous accueille tous les jours de 6h30 à 11h00 pour le petit déjeuner.</p>
          <p class="card-text">Le déjeuner débute de 12h à 15h.</p>
          <p class="card-text">Tandis que le dîner vous invite à partir de 18h et s'achève à 00h00.</p>   
          </div>
        </div>
    </div>       
</div>

<div class="petitDejeuner">
    <h2>Notre formule petit déjeuner à volonté au prix tous doux de 10€/jour</h2>
    <img src="./assets/imgs/petit_dejeuner.jpg" alt="" class="img1 border border-success border-4">
    <img src="./assets/imgs/petit_dejeuner2.jpg" alt="" class="img2 border border-info border-4">
    <img src="./assets/imgs/petit_dejeuner3.jpg" alt="" class="img3 border border-primary border-4">
    <img src="./assets/imgs/petit_dejeuner4.jpg" alt="" class="img4 border border-black border-4">
    <button type="submit" id="bouton" class="btn btn-primary border-warning-subtle border-3 bg-transparent my-5 rounded-5 progress-bar-striped w-25 fw-medium" name="reservation" value="submit">Je réserve</button>
</div>
<div class="dejeuner">
    <h2>Notre formule Gastronomique à volonté au prix tous doux de 30€/jour</h2>
   
    <div class="container d-flex justify-content-center align-items-center">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">

            <div class="carousel-inner ">
                <div class="carousel-item active">
                  <img src="./assets/imgs/restaurant1.webp" class="d-block w-75 m-auto border border-3 border-danger-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant2.jpg" class="d-block w-75 m-auto border border-3 border-warning" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant3.jpg" class="d-block w-75 m-auto border border-3 border-danger" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant4.webp" class="d-block w-75 m-auto border border-3 border-danger" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant5.webp" class="d-block w-75 m-auto border border-3 border-success-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant6.jpg" class="d-block w-75 m-auto border border-3 border-danger" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant7.jpg" class="d-block w-75 m-auto border border-3 border-danger" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant8.jpg" class="d-block w-75 m-auto border border-3 border-danger-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant9.png" class="d-block w-75 m-auto border border-3 border-danger-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant10.png" class="d-block w-75 m-auto border border-3 border-danger-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant11.jpg" class="d-block w-75 m-auto border border-3 border-danger-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/imgs/restaurant.avif" class="d-block w-75 m-auto border border-3 border-danger-subtle" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
              <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
              <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
    <button type="submit" id="bouton" class="btn btn-primary border-danger-subtle border-3 bg-transparent my-5 rounded-5 progress-bar-striped w-25 fw-medium initialism" name="reservation" value="submit">Je réserve</button>
</div>
</div>

<div class="extreme">

  <h2>Vos loisirs les plus Extrêmes sont réunis ici ne les ratés pas pour seulement 20€ la journée au choix!!!!</h2>

  <div class="container2 d-flex justify-content-center align-items-center">

    <div id="carouselExampleFade2" class="carousel slide carousel-fade ">

      <div class="carousel-inner2 ">

        <div class="carousel-item active">
          <img src="./assets/imgs/loisir1.marelle.webp" class="d-block w-75 m-auto border border-3 border-primary-subtle" alt="...">
        </div>

        <div class="carousel-item">
          <img src="./assets/imgs/loisir2.Art.jpg" class="d-block w-75 m-auto border border-3 border-danger-subtle" alt="...">
        </div>

        <div class="carousel-item">
          <img src="./assets/imgs/loisir3.elastique.webp" class="d-block w-75 m-auto border border-3 border-info-subtle" alt="...">
        </div>

        <div class="carousel-item">
          <img src="./assets/imgs/loisir4.Art.png" class="d-block w-75 m-auto border border-3 border-danger-subtle" alt="...">
        </div>

        <div class="carousel-item">
          <img src="./assets/imgs/loisire5.lastique.avif" class="d-block w-75 m-auto border border-3 border-success-subtle" alt="...">
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
      </button>
      <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
      </button>
    </div>
  </div>
  <button type="submit" id="bouton" class="btn bg-primary-subtle border-primary-subtle border-3 my-5 rounded-5 progress-bar-striped w-25 fw-bolder initialism" name="reservation" value="submit">Je réserve</button>
</div>

<div class="douceur">

  <h2>Une envie de vous plonger dans de nouvelles aventures en douceur et sans efforts ? </h2>
  <h3>Voici notre Formule Sensationnel à un prix d'ami pour seulement 20€ au choix</h3>
  <div class="container2 d-flex justify-content-center align-items-center">

    <div id="carouselExampleFade3" class="carousel slide carousel-fade">
      <div class="carousel-inner2 ">

        <div class="carousel-item active">
          <img src="./assets/imgs/loisir6.Elico.jpg" class="d-block w-75 m-auto border border-3 border-success-subtle" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/loisir7.Detente.jpg" class="d-block w-75 m-auto border border-3 border-danger" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/loisir8Montgolfieres.jpg" class="d-block w-75 m-auto border border-3 border-primary" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/loisir9rando.jpg" class="d-block w-75 m-auto border border-3 border-warning" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/loisir10rando.jpg" class="d-block w-75 m-auto border border-3 border-primary" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/loisir11rando.jpg" class="d-block w-75 m-auto border border-3 border-success" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/loisir12.montgolfiere.jpg" class="d-block w-75 m-auto border border-3 border-dark" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/loisir13.Detente.jpg" class="d-block w-75 m-auto border border-3 border-light" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/loisir14.Elico.jpg" class="d-block w-75 m-auto border border-3 border-success" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
      </button>
    </div>
  </div>
  <button type="submit" id="bouton" class="btn border-success-subtle border-3 bg-success-subtle my-5 rounded-5 w-25 fw-bold initialism" name="reservation" value="submit">Je réserve</button>
</div>

<div class="detente">

  <h2>Une envie de vous relaxer en douceur et sans douleurs ? </h2>
  <h3>Voici notre Formule Spa à un petit prix pour seulement 20€ au choix</h3>
  <div class="container2 d-flex justify-content-center align-items-center">

    <div id="carouselExampleFade4" class="carousel slide carousel-fade">
      <div class="carousel-inner2 ">

        <div class="carousel-item active">
          <img src="./assets/imgs/soins_et_bien_etre2 .jpg" class="d-block w-75 m-auto border border-3 border-warning-subtle" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/soins_et_bien_etre3 .jpg" class="d-block w-75 m-auto border border-3 border-danger" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/soins_et_bien_etre4 .jpg" class="d-block w-75 m-auto border border-3 border-primary" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade4" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-warning" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade4" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-warning" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
      </button>
    </div>
  </div>
  <button type="submit" id="bouton" class="btn btn-primary border-warning border-3 bg-transparent my-5 rounded-5 progress-bar-striped w-25 fw-medium initialism" name="reservation" value="submit">Je réserve</button>
</div>
<?php
include_once "inc/footer.php";
?>