<?php 
require_once "../db.Broker.php";
require "../contorller/listController.php";
require_once "../model/Employee.php";
require "izmenaHeader.php";
require "navbar.php";


?>
 
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $zaposId = Employee::getById($id, $conn);

                if (mysqli_num_rows($zaposId) > 0) {
                    $data = mysqli_fetch_array($zaposId); 

            ?>
                    <div class="card">
                        
                        <div class="card-body">
                            <form action="../contorller/listController.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    
                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                    <div class="col-md-12">
                                        <label class="mb-0" for="">Plata</label>
                                        <input type="text" required name="netoSallary" value="<?= $data['netoSallary']; ?>" placeholder="Neto plata" class="form-control mb-2">
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label class="mb-0" for="">Odmor</label>
                                        <input type="text" required name="vacation" value="<?= $data['vacation']; ?>" placeholder="Dani odmora" class="form-control mb-2">
                                    </div>
                                  
                                    <div class="col-md-12">
                                        <button type="submit" class="btn bg-gradient-primary" name="izmena">Ažuriraj</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
            <?php
                } else {
                    echo "PNije pronadjen";
                }
            } else {
                echo "Id missing from url";
            }
            ?>
        </div>
    </div>
</div>








 <?php require "footer.php";?>