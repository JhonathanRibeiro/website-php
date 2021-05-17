<?php
require 'db/connect.php';
    $query = $conn->query("SELECT * FROM header");
    $query->rowCount() > 0 ? $dados = $query->fetchAll(PDO::FETCH_ASSOC): "";
?>

<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <?php foreach($dados as $data){ ?>
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large"><?=$data['title']?></h1>
                        <p class="p-large"><?=$data['description']?></p>
                        <a class="btn-solid-lg page-scroll" href="#orcamento">Orçamentos</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of div -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/<?=$data['image']?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            <?php } ?>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->
