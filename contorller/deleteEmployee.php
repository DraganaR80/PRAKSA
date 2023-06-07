<?php
require"../db.Broker.php";
require_once "../model/Employee.php";

if(isset($_POST['id'])){

    $status= Employee::deleteById($_POST['id'],$conn);

if($status){

echo "Zposleni je uspešno uklonjen sa liste";

}
else{

    echo "Pokusajte ponovo";
    // header ("Location:../view/potvrda.php");

}

}


