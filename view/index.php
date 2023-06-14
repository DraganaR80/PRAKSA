<?php 
require "../db.Broker.php";
require "../model/Admins.php";
require "indexHeader.php";
require "navbar.php";


session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $korisnik = new Admins(1, $email, $password);
    // $odgovor = $korisnik->Login($conn);
    $odgovor = Admins::login($email, $password, $conn);

    if ($odgovor->num_rows == 1) {
        echo "Uspesno ste se prijavili!";
        $_SESSION['loggeduser'] = 'prijavljen';
        $_SESSION['id'] = $odgovor->fetch_assoc()['id'];
        header("Location:managingList.php");
        exit();
    } else {
        echo "User ne postoji";
        exit();
    }
}




?>  

<div class="forma">
<form method="POST" action="">
  <fieldset>
  <legend> Unesite podatke </legend>
<br><br>
<input type="email" name="email" placeholder="Email"   id="email">

<br><br>
<input type="password" name="password" placeholder="Password"   id="password">

<br><br>
  
  <button type="submit" class="btn btn-primary">Prijavi se</button>
  </fieldset>
</form>
</div>
<br><br>
<br><br>


<div class="search">

<h3> Pretražite </h3>

<form action="" method="GET">
<input type="text"  name="search" value= "<?php if(isset($_GET['search'])){echo $_GET['search']; } ?> "id="search"  class="pretrazi">
<button type="submit" class="btn btn-primary">Pretražite</button>

</div>
</form>
<br> <br> <br>
<div class="col-md-12" >
  <div class="card mt-4"> 
    <div class="card-body">
<table class="table table-bordered">

<thead>
<tr>
<th>Prezime</th>
<th>Datum zaposlenja</th>
<th>Odsek</th>
</tr>
</thead>
</table>
<tbody>
<?php
require "../db.Broker.php";
$conn= mysqli_connect("localhost","root","","praksa");

if(isset($_GET['search'])){
$filtervalues=$_GET['search'];
$query= " SELECT * FROM employees WHERE CONCAT (surname, employmentDate,department) LIKE '%$filtervalues%'";
$query_run= mysqli_query($conn,$query);

if(mysqli_num_rows($query_run)>0){

  foreach ($query_run as $items){
?>
<tr>
<td><?=$items['surname'];?></td>
<td><?=$items['employmentDate'];?></td>
<td><?=$items['department'];?></td>



</tr>
<?php 
  }

}else {

  

}
?>
<!--<tr>

<td colspan="3"> Neuspešna pretraga </td>
</tr>--><?php 
}

?>
<tr></tr>


</tbody>

    </div>
        </div>
  
</div>


<?php require "footer.php"; ?>
