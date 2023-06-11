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
                           

                            <label class="custom-radio-btn">
                                    <form action="../contorller/listController.php" method="post">
                                        <input type="hidden" name="id" value=<?php echo $red["id"] ?>>
                                        <button id="btn-obrisi" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Obriši
                                        </button>
                                    </form>
                                </label>
                        </td>



<td class=""> <button name= "izmena">  Izmeni </button> </td>
</tr><?php

}?>


</tbody>
</table>
</div>
<br> <br> <br>
<div class="add">
    <form  method="POST" action="../contorller/listController.php" id="posalji">

<input type="text"name="id" placeholder="id"> <br>
<input type="text"name="name" placeholder="Ime"> <input type="text" name="surname" placeholder="Prezime"> <br>
<label for="birthday"> Datum rođenja</label>     <label for="employmentDate"> Datum zaposlenja</label> <br>
<input type="date" name="birthday" id="">        <input type="date" name="employmentDate" id=""> <br>
<input type="text" name="netoSallary" placeholder="Neto plata"> <input type="text" name="vacation" placeholder="Dani godišnjeg odmora"> <br>
<input type="text" name="department" placeholder="Odsek"> <input type="text" name= "education" placeholder="Stručna sprema"> <br>
<button type="submit" class="btn btn-primary" name="addEmployee"> Dodaj zaposlenog</button>


    </form>




</div>
<?php require "footer.php"; ?>