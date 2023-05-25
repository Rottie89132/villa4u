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
            <h1 class="">Villa Slideshow</h1>
            <p class="btn btn-primary rounded-button btn-sm w-auto">Doe een bod</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="" src="../media/<?=$id?>-2.png" alt="Villa Slideshow 2" />
          <div class="carousel-caption top-0 mt-5">
            <h1>Villa Slideshow</h1>
            <p class="btn btn-primary rounded-button btn-sm w-auto">Doe een bod</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="" src="../media/<?=$id?>-2.png" alt="Villa Slideshow 3" />
          <div class="carousel-caption top-0 mt-5">
            <h1>Villa Slideshow</h1>
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





<footer class="footer">
  
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>