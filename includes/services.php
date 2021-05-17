<?php
require 'db/connect.php';
    $query = $conn->query("SELECT * FROM services");
    $query->rowCount() > 0 ? $dados = $query->fetchAll(PDO::FETCH_ASSOC): "";
?>
    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach($dados as $data){ ?>
                        <h2 class="h2-heading"><?=$data['title'];?></h2>
                        <p class="p-heading"><?=$data['description'];?></p>
                    <?php }?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                <?php foreach($dados as $data){ ?>
                    <!-- Card -->
                    <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="images/<?=$data['service_image'];?>" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?=$data['service_title'];?></h5>
                                <p><?=$data['service_description'];?></p>
                            </div>
                    </div>
                    <!-- end of card -->
                    <?php }?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->
