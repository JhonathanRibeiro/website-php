<?php
require 'db/connect.php';
    $query = $conn->query("SELECT * FROM clientes");
    $query->rowCount() > 0 ? $dados = $query->fetchAll(PDO::FETCH_ASSOC): "";
?>
    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Clientes</h5>
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                
                            <?php foreach($dados as $data){ ?>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="images/<?=$data['cliente_logo']?>" alt="alternative">
                                </div>
                            <?php } ?>

                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of data