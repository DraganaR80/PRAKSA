<?php
require "../db.Broker.php" ;
require "../model/Employee.php";
require "../contorller/listController.php";
require "listHeader.php";
require "navbar.php";


$list= Employee::getAll($conn);

if(!$list){

echo "Nema stavki za prikaz";
exit();

}

?>
<img class= "slika" src="../images/list.jpg" alt="zaposleni">
    

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


<?php require "footer.php"; ?>