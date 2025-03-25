<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>



  <?php
  if (isset($_GET['stranka']))
    $stranka = $_GET['stranka'];
  else
    $stranka = 'domu';
  if (preg_match('/^[a-z0-9]+$/', $stranka)) {
    $vlozeno = include('podstranky/' . $stranka . '.php');
    if (!$vlozeno)
      echo ('Podstránka nenalezena');
  } else
    echo ('Neplatný parametr.');
  ?>



  <footer class="text-center text-lg-start bg-body-tertiary text-muted">

    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>

      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </section>

    <section class="">
  <div class="container text-center text-md-start mt-5">
    <div class="row mt-3">

      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">
          <i class="fas fa-gem me-3"></i>Company name
        </h6>
        <p>
          Here you can use rows and columns to organize your footer content. Lorem ipsum
          dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>

      <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">Struktura stránek</h6>
        <div class="row">
          <div class="col-6">
            <p><a href="index.php?stranka=domu" class="text-reset">Domů</a></p>
            <p><a href="index.php?stranka=onas" class="text-reset">O nás</a></p>
            <p><a href="index.php?stranka=cenik" class="text-reset">Ceník</a></p>
          </div>
          <div class="col-6">
            <p><a href="index.php?stranka=podminky" class="text-reset">Podmínky</a></p>
            <p><a href="index.php?stranka=kontakt" class="text-reset">Kontakt</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase fw-bold mb-4">Kontakt</h6>
        <p><i class="fas fa-home me-3"></i> Kotlářská 6, Brno</p>
        <p><i class="fas fa-envelope me-3"></i> kadlík59@seznam.cz</p>
        <p><i class="fas fa-phone me-3"></i> +420 603 780 343</p>
      </div>

    </div>
  </div>
</section>



    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
  </footer>



  </body>

</html>