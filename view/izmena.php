<?php 
require_once "../db.Broker.php";
require "../contorller/listController.php";
require_once "../model/Employee.php";
require "izmenaHeader.php";
require "navbar.php";


?>
 
 <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Neto plata</label>
    <input type="text" class="form-control" id="plata" aria-describedby="" placeholder="">
   
  </div>
  <div class="form-group">
    <label for="">Dani godišnjeg odmora</label>
    <input type="text" class="form-control" id="" >
  </div>
  
  <button type="submit" class="btn btn-primary"> <a href="managingList.php">    Izmeni </a></button>
</form>









 <?php require "footer.php";?>