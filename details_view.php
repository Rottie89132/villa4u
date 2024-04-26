<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/index.css">
  <script src="../scripts/image.js"></script>
  <style>
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light position-sticky top-0 bg-white zindex border-bottom">
  <div class="container-fluid">
      <a class="navbar-brand" href="./">
        <img src="../media/logo.svg" alt="Logo" width="auto" height="60">
      </a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="./">Home</a>
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
            <a href="#bod" class="btn btn-primary rounded-button btn-sm w-auto">Doe een bod</a>
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

<div class="grid ms-5 me-2 mt-5 mb-5">
  <div class="Title">
    <h1voornaam</h1>
  </div>
  
  <div class="Intro">
    <h3>Inleiding</h3>
    <p><?=$ArrayElement["Intro"]?></p>
      <a class="btn bordered-button btn-sm w-auto me-2" href="#">Bekijk meer</a>
  </div>


  <div class="bidders">
    <h3>Hoogste beidingen</h3>
    <P><?=$LijstBod?></p>
  </div>

  <div class="locatie">
    <h3>Locatie</h3>
    <iframe class="google border rounded-2 border-2" src="<?=$ArrayElement["Google_Maps"]?>" width="95%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  
  <div id="bod" class="bod">
    <h3>Doe een bod</h3>
    
    <form method="POST" action="../scripts/vestuurBid.php">
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
          <input type="hidden" name="idHuis" value="<?=$id?>">
          <p class="mt-1 text-danger"><?=$Melding?></p>
          
        </div>
      </div>



      <button type="submit" class="btn btn-primary rounded-button btn-sm w-auto">Opslaan</button>
    </form>
  </div>
</div>
<div class="bg-gray">
  <div class="px-5 py-4">
    <h3 class="pb-2">Vergelijkbare huizen</h3>
    <div class="d-flex justify-content-between mt-2">
      <div class="">
        <img class="card-img border rounded-2 border-2 link" src="../media/<?=$Image1?>.png" id="<?=$Image1?>">
      </div>
      <div class="">
        <img class="card-img border rounded-2 border-2 link" src="../media/<?=$Image2?>.png" id="<?=$Image2?>">
        </div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>