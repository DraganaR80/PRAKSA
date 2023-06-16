<?php
require "navbar.php";
require "obracunHeader.php";

?>
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
       
                    <div class="card">
                    <p><b> Ovde možete izračunati svoju bruto platu</b></p>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    
                                    <input type="hidden" name="id" value="">
                                    <div class="col-md-12">
                                        <label class="mb-0" for="">Osnovica</label>
                                        <input type="text" required name="osnovica" value="" placeholder="Unesite iznos plate" class="form-control mb-2">
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label class="mb-0" for="">Iznos</label>
                                        <input type="text" required name="" value="" placeholder="" class="form-control mb-2">
                                    </div>
                                  
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-secondary " name="izracunaj">Izračunaj</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php

                      if (isset($_POST['izracunaj'])){

                        $osnovica=$_POST['osnovica'];


                        if($osnovica > 40000)

                            $dodatak= $osnovica * 10/100;

                        
                        else if($osnovica> 60000)

                            $dodatak=$osnovica * 20/100;
                        

                        else ($osnovica > 70000){

                            $dodatak= $osnovica * 30/100;
                       


                        $bruto = $osnovica + $dodatak;

                        
                      } ?>
                 
                    <?php   require "footer.php"; ?>
               
                