<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/index.css">
  <link rel="stylesheet" href="./style/test.css">
  
  <style>
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="./">
        <img src="./media/logo.svg" alt="Logo" width="auto" height="60">
      </a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn bordered-button btn-sm w-auto me-2" href="..">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary rounded-button btn-sm w-auto" href="#">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="form-container">
  <section id="contact_form">
  <h1>Neem contact met ons op</h1>
  <h3>Heeft u en vraag of een opmerking? Dan kunt u contact met ons opnemen via dit formulier.</h3>
  <form id="contact" name="contact" accept-charset="utf-8" method="POST">
    <label><span>Voornaam:</span><input name="Voornaam" type="text" /></label>
    <label><span>Achternaam:</span><input name="Achternaam" type="text" /></label>
    <label><span>Telefoon:</span><input name="Telfoon" type="tel" /></label>
    <label><span>Email:</span><input name="Email" type="email" /></label>
    <label><span>Vraag/opmerking:</span><textarea name="Vraag"  ></textarea></label>
    <input class="btn btn-primary rounded-button btn-sm w-auto" name="submit" type="submit" value="Send"/>
  </form>
  </div>
</section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>