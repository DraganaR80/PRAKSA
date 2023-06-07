<?php
require "../db.Broker.php" ;
require "../model/Employee.php";
require "../contorller/addEmployee.php";
require "../contorller/deleteEmployee.php";
require "../contorller/updateEmployee.php";
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
    <form  method="POST" action="../contorller/addEmployee.php" id="posalji">

<input type="text" placeholder="Ime"> <input type="text" placeholder="Prezime"> <br>
<label for="birthday"> Datum rođenja</label> <label for="employmentDate"> Datum zaposlenja</label> <br>
<input type="date" name="" id="">   <input type="date" name="" id=""> <br>
<input type="text" placeholder="Neto plata"> <input type="text" placeholder="Dani godišnjeg odmora"> <br>
<input type="text" placeholder="Odsek"> <input type="text" placeholder="Stručna sprema"> <br>
<button type="submit" class="btn btn-primary" name="addEmployee"> Dodaj zaposlenog</button>


    </form>




</div>
</body>
</html>