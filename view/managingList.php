<?php
require "../db.Broker.php";
require "../model/Employee.php";

$list= Employee::getAll($conn);


if(!$list){
    echo "Greska kod upita";
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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


}while($red=$list->fetch_array()){
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
                        <td class="celija">
                            <label class="radio-btn">
                                
                                <input type="radio" class="radio" name="checked-donut" value=<?php echo $red['id'] ?>>
                                <span class="checkmark"></span>
                            </label>
                        </td>
<!--<td> <button name= "izmena" value=<?php echo $red['id'] ?>  >  izmeni </button> </td>-->

<td>  <button   class= "dugmeBrise"  id= "brisi"  > obriši</button></td>

</tr><?php

}?>


</tbody>
</table>
</div>
<?php require "footer.php"; ?>