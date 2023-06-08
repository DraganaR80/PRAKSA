<?php 
require "indexHeader.php";
?>    
<div class="forma">
<h2> Unesite podatke</h2>
<br><br>
<form method="POST" action="">
<input type="email" name="email" placeholder="Email"   id="email">

<br><br>
<input type="password" name="password" placeholder="Password"   id="password">

<br><br>
  
  <button type="submit" class="btn btn-primary">Prijavi se</button>
</form>
</div>
<br><br>
<br><br>

<div class="search">

<h3> Pretražite </h3>


<input type="text" id="search"  class=" pretrazi" placeholder="Pretraži">

</div>


<?php require "footer.php"; ?>
