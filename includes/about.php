<?php  
    require 'db/connect.php';
    $queryAbout = $conn->query("SELECT * FROM about");
    $queryTeam  = $conn->query("SELECT * FROM team");
    //OPERADOR TERNÁRIO - verifica se existem dados na tabela about
    $queryAbout->rowCount() > 0 ? $dadosab = $queryAbout->fetchAll(PDO::FETCH_ASSOC): "";
    //OPERADOR TERNÁRIO - verifica se existem dados na tabela team
    $queryTeam->rowCount() > 0 ? $dadostm = $queryTeam->fetchAll(PDO::FETCH_ASSOC): "";
?>

<!-- About -->
    <div id="sobre" class="cards-3">
        <div class="container">
            <!-- ABOUT -->
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach($dadosab as $data){ ?>
                    <h2 class="h2-heading"><?= $data['title']; ?></h2>
                    <p class="p-heading">
                        <?=$data['description']; ?>
                    </p>
                </div> <!-- end of col -->
                <?php } ?>
            </div> <!-- end of row -->
            
            <!-- TEAM -->
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach($dadostm as $dt){ ?>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/<?=$dt['image'];?>" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"><?=$dt['name'];?></h6>
                            <p><?=$dt['office'];?></p>
                            <span class="fa-stack">
                                <a href="<?=$dt['twitter'];?>">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="<?=$dt['linkedin'];?>">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->
                    <?php } ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-3 -->
    <!-- end of about -->

