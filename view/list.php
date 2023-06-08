<?php
require "../db.Broker.php" ;
require "../model/Employee.php";
require "../contorller/listController.php";

require "listHeader.php";

$list= Employee::getAll($conn);

if(!$list){

echo "Nema stavki za prikaz";
exit();

}

?>

    

<div class= "list">
<table class="table" id="table">
<thead>
<tr>
<th>Redni broj</th>
<th>ime</th>
<th>Prezime</th>
<th>Datum rođenja </th>
<th>Datum zaposlenja </th>
<th>Neto plata</th>
<th>Dani godišnjeg odmora </th>
<th>Odsek</th>
<th>Stručna sprema</th>

</tr>
</thead>
<tbody>

<?php 
if($list->num_rows==0){
echo "Nema podataka za prikaz ";

}else{

while($red=$list->fetch_array()){

    ?>

<tr>

                         <td><?php echo $red['id'] ?></td>
                        <td><?php echo $red['name'] ?></td>
                        <td><?php echo $red['surname'] ?></td>
                        <td><?php echo $red['birthday'] ?></td>
                        <td><?php echo $red['employmentDate'] ?></td>  
                        <td><?php echo $red['netoSallary'] ?></td>  
                        <td><?php echo $red['vacation'] ?></td>  
                        <td><?php echo $red['department'] ?></td>  
                        <td><?php echo $red['education'] ?></td>  

<!--<td> <button name= "izmena" value=<?php echo $red['id'] ?>  >  izmeni </button> </td>

<td>  <button  name=" brisanje"  value=<?php echo $red['id'] ?> > obriši</button></td>-->

</tr>

<?php
}


}?>








</tbody>




</table>
</div>

<div class="add">
    <form  method="POST" action="../contorller/listController.php" id="posalji">

<input type="text"name="name" placeholder="Ime"> <input type="text" name="surname" placeholder="Prezime"> <br>
<label for="birthday"> Datum rođenja</label> <label for="employmentDate"> Datum zaposlenja</label> <br>
<input type="date" name="birthday" id="">   <input type="date" name="employmentDate" id=""> <br>
<input type="text" name="netoSallary" placeholder="Neto plata"> <input type="text" name="vacation" placeholder="Dani godišnjeg odmora"> <br>
<input type="text" name="department" placeholder="Odsek"> <input type="text" name= "education" placeholder="Stručna sprema"> <br>
<button type="submit" class="btn btn-primary" name="addEmployee"> Dodaj zaposlenog</button>


    </form>




</div>
<?php require "footer.php"; ?>