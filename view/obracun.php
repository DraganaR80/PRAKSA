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
                                        <input type="text" required name="netoSallary" value="" placeholder="Unesite iznos plate" class="form-control mb-2">
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label class="mb-0" for="">Doprinosi</label>
                                        <input type="text" required name="vacation" value="" placeholder="doprinosi" class="form-control mb-2">
                                    </div>
                                  
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-secondary " name="izracunaj">Izračunaj</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>