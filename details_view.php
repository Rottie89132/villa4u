<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/index.css">
  <style>
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../media/logo.svg" alt="Logo" width="auto" height="60">
      </a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="../home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn bordered-button btn-sm w-auto me-2" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary rounded-button btn-sm w-auto" href="#">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
  
    <div id="villaCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="" src="../media/<?=$id?>-2.png" alt="Villa Slideshow 1"/>
          <div class="carousel-caption top-0 mt-5">
            <h1 class="hero-header text-white">Villa Slideshow</h1>
            <p class="btn btn-primary rounded-button btn-sm w-auto">Doe een bod</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="" src="../media/<?=$id?>-2.png" alt="Villa Slideshow 2" />
          <div class="carousel-caption top-0 mt-5">
            <h1 class="hero-header text-white">Villa Slideshow</h1>
            <p class="btn btn-primary rounded-button btn-sm w-auto">Doe een bod</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="" src="../media/<?=$id?>-2.png" alt="Villa Slideshow 3" />
          <div class="carousel-caption top-0 mt-5">
            <h1 class="hero-header text-white">Villa Slideshow</h1>
            <p class="btn btn-primary rounded-button btn-sm w-auto">Doe een bod</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#villaCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#villaCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
</main>

<div class="grid ms-5 me-2 mt-5">
  <div class="color1">
    <h1><?=$ArrayElement["Titel"]?></h1>
  </div>
  <div class="color1">
    <h3>Hoogste beidingen</h3>
    <ol>
      <li>John</li>
      <li>Emily</li>
      <li>Michael</li>
      <li>Sarah</li>
      <li>David</li>
    </ol>


    
  </div>
  <div class="color1">
    <h3>Inleiding</h3>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi reiciendis cum et dicta,
      amet praesentium ea? Odio totam nesciunt molestias. Excepturi cupiditate reprehenderit quaerat.
      Provident, maxime. Iste totam error maxime.</p>
    <button><a href=""></a></button>
  </div>
  <div class="color1">
    <h3>Doe een bod</h3>
    
    <form>
  <div class="row mb-3">
    <div class="col-sm-4">
      <label for="voornaam">Voornaam:</label>
    </div>
    <div class="col-sm-8">
      <input type="text" id="voornaam" name="voornaam" class="form-control custom-input" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-4">
      <label for="achternaam">Achternaam:</label>
    </div>
    <div class="col-sm-8">
      <input type="text" id="achternaam" name="achternaam" class="form-control custom-input" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-4">
      <label for="telefoonnummer">Telefoonnummer:</label>
    </div>
    <div class="col-sm-8">
      <input type="tel" id="telefoonnummer" name="telefoonnummer" class="form-control custom-input" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-4">
      <label for="email">Email:</label>
    </div>
    <div class="col-sm-8">
      <input type="email" id="email" name="email" class="form-control custom-input" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-4">
      <label for="bod">Bod:</label>
    </div>
    <div class="col-sm-8">
      <input type="number" id="bod" name="bod" class="form-control custom-input" required>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Opslaan</button>
</form>






  </div>
  <div class="color1">
    <h3>Locatie</h3>
  </div>
  <div class="color1">
    
  </div>
</div>


  <!-- <div class="container justify-content-between">
    <div class="mt-5 row g-2 g-lg-3 gutter-3">
      <div class="col-md-6 px-2 color1">
        hello-1
      </div>
      <div class="col-md-6 color2">
        hello-2
      </div>
      <div class="col-md-6 color3">
        hello-3
      </div>
      <div class="col-md-6 color4">
        hello-4
      </div>
    </div>
  </div> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>