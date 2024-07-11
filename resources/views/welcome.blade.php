<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
</head>

<body>
        @include('header')
        <img src="/assets/vectors/img.svg" class="header_image1" alt="">
        <img src="/assets/vectors/img1.svg" class="header_image2" alt="">
        <img src="/assets/vectors/img2.svg" class="header_image2" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 ">
                    <div class="header_image_container">
                        <img src="/assets/vectors/eclipse1.svg" class="" alt="">
                        <img src="/assets/vectors/eclipse.svg" class="" alt="">
                        <div class="header_text">
                            <h2>BIENVENUE à SABOUR </h2>
                            <h6>EDUCATION </h6>
                            <p class="lead">votre destination pour l'excellence mathématique. <br> Explorez notre plateforme dès aujourd'hui</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <img src="/assets/vectors/Group 7.svg" class="shadowed-image zoom" alt="">
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/assets/vectors/education.svg" class="shadowed-image zoom image" alt="Education">
                <img src="/assets/vectors/programme.svg" class="shadowed-image zoom image" alt="Programme">
            </div>
            <div class="col-md-3 align-self-center">
                <img src="/assets/vectors/college.svg" class="shadowed-image zoom image" alt="College">
            </div>
            <div class="col-md-6 align-self-center" style="padding-left: 150px;">
                <h2 style="color:black;">À Propos de Nous</h2>
                <img src="/assets/vectors/bar.svg" alt="">
                <p class="propos">Bienvenue chez Sabour Education, leader de <br>
                    l'excellence académique en mathématiques.Notre <br>
                    équipe dévouée propose des ressources de <br>
                    qualité, des cours interactifs et un soutien <br>
                    personnalisé pour garantir la réussite de nos <br>
                    étudiants.Grâce à notre expertise et notre <br>
                    approche innovante, nous offrons un <br>
                    environnement d'apprentissage stimulant et <br>
                    propice à l'épanouissement académique. <br><br>
                    Notre mission est d'inspirer et d'encourager <br>
                    l'excellence dans les mathématiques, tout en <br>
                    promouvant l'accessibilité à l'éducation de qualité. <br>
                    Explorez notre site pour découvrir comment nous <br>
                    pouvons vous aider à réaliser vos objectifs <br>
                    académiques et à atteindre votre plein potentiel <br>
                    mathématique.</p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div><img src="/assets/vectors/banner.svg" class="shadowed-image zoom" alt=""></div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
    
<div class="cotainer carousel-container">
    <h2>Our <span>Team</span></h2>
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left left"></i>
      <ul class="carousel" >
        <li class="card">
          <div class="img"><img src="assets/vectors/images.jpeg"  class="card-img" alt=""  draggable="false"></div>
          <h2>Blanche Pearson</h2>
          <span>Sales Manager</span>
          <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
        </li>
        <li class="card" >
          <div class="img"><img src="assets/vectors/images.jpeg"  class="card-img" alt=""  draggable="false"></div>
          <h2>Joenas Brauers</h2>
          <span>Web Developer</span>
        </li>
        <li class="card">
          <div class="img"><img src="assets/vectors/images.jpeg"  class="card-img" alt=""  draggable="false"></div>
          <h2>Lariach French</h2>
          <span>Online Teacher</span>
        </li>
        <li class="card">
          <div class="img"><img src="assets/vectors/images.jpeg"  class="card-img" alt=""  draggable="false"></div>
          <h2>James Khosravi</h2>
          <span>Freelancer</span>
        </li>
        <li class="card">
          <div class="img"><img src="assets/vectors/images.jpeg"  class="card-img" alt=""  draggable="false"></div>
          <h2>Kristina Zasiadko</h2>
          <span>Bank Manager</span>
        </li>
        <li class="card">
          <div class="img"><img src="images/img-6.jpg" alt="img" draggable="false"></div>
          <h2>Donald Horton</h2>
          <span>App Designer</span>
        </li>
      </ul>
      <i id="right" class="fa-solid fa-angle-right right"></i>
    </div></div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        document.querySelector('.burger').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('open');
        });
    </script>
    <script src="{{ asset('css/carousel.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
@include('footer')
</html>
