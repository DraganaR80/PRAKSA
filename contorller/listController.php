<?php
require "../db.Broker.php";
require_once "../model/Employee.php";

//DODAVANJE ZAPOSLENOG
if(isset($_POST['addEmployee'])){

    if (isset($_POST['name']) 
    && isset($_POST['surname'])
    && isset($_POST['birthday'])
    && isset ($_POST['employmentDate'])
    && isset ($_POST['netoSallary'])
    && isset ($_POST['vacation'])
    && isset ($_POST['department'])
    && isset ($_POST['education'])
    ){
    
        $status= Employee::add($_POST['name'],
        $_POST['surname'],
        $_POST['birthday'],
        $_POST['employmentDate'],
        $_POST['netoSallary'],
        $_POST['vacation'],
        $_POST['department'],
        $_POST['education'],
        $conn);
    
        If($status){
            header ("Location:../view/managingList.php");
        }else{
    
            echo "Pokusajte ponovo";
             header ("Location:../view/index.php");
        }
    
    }
    }
    
    //BRISANJE ZAPOSLENOG
    if(isset($_POST['obrisi'])){

        $status= Employee::deleteById($_POST['id'],$conn);
    
    if($status){
    
    echo "Success";
    header ("Location:../view/managingList.php");
    
    }
    else{
    
        echo "Pokusajte ponovo";
        header ("Location:../view/managingList.php");
    
    }
    
    }
    
    // IZMENA ZAPOSLENOG
    
    if(isset($_POST['izmena'])){
        if (isset($_POST['netoSallary']) && isset($_POST['vacation'])) {
        $status= Employee::update(
        $_POST['id'],
        $_POST['netoSallary'],
        $_POST['vacation'],
        $conn);
    
        If($status){
            header ("Location:../view/managingList.php");
        }else{
    
            echo "Pokusajte ponovo";
             header ("Location:../view/izmena.php");
        }
}}


    //PRETRAGA
    
    


?>