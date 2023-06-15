<?php
require "../db.Broker.php" ;
require "../model/Employee.php";
require "../contorller/listController.php";
require "listHeader.php";
require "navbar.php";
?>

<img class= "slika" src="../images/list.jpg" alt="zaposleni">
<br> <br> <br>
<h1 class="text-center my-3"> Upoznajte naš tim</h1>
<br> <br> <br>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="../images/Dragana.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dragana Stošić</h5>
      <p class="card-text">Upravni odbor.</p>
      <p class="card-text"><small class="text-muted">Sa nama od 2017.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../images/Jovan.jpg"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Jovan Dabić</h5>
      <p class="card-text">Upravni odbor</p>
      <p class="card-text"><small class="text-muted">sa nama od 1990.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../images/Dragutin.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dragutin Topić</h5>
      <p class="card-text">Upravni odbor.</p>
      <p class="card-text"><small class="text-muted">Sa nama od 2000. </small></p>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="../images/Svetlana.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Svetlana Simić</h5>
      <p class="card-text">Administracija</p>
      <p class="card-text"><small class="text-muted">Sa nama od 2022.</small></p>
    </div>
  </div>
  <br> <br>
  <div class="card">
    <img class="card-img-top" src="../images/Suzana.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Suzana Glušić</h5>
      <p class="card-text">Administracija</p>
      <p class="card-text"><small class="text-muted">Sa nama od 2016.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../images/Vigor.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Vigor Knežević</h5>
      <p class="card-text"> Administracija</p>
      <p class="card-text"><small class="text-muted">Sa nama od 2001.</small></p>
    </div>
  </div>
</div>
<br> <br>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="../images/Radiša.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Radiša Urošević</h5>
      <p class="card-text">Administracija</p>
      <p class="card-text"><small class="text-muted">Sa nama od 2017.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../images/Slavica.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Slavica Đukić</h5>
      <p class="card-text">Računovodstvo</p>
      <p class="card-text"><small class="text-muted">Sa nama od 2014.</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../images/Slavko.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Slavko Rodić</h5>
      <p class="card-text"> Računovodstvo</p>
      <p class="card-text"><small class="text-muted">Sa nama od 2014.</small></p>
    </div>
  </div>
</div>

<?php require "footer.php"; ?>