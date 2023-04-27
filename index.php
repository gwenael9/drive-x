<?php 
    require_once "./elements/repo.data.php";
    require_once "./services/data.services.php"; 
    require_once "./elements/header.php" 
?>

    <main class="container">

        <?php require_once "./elements/entete.php" ?>

        <h2 class="my-5 text-center"><?= $titre1 ?></h2>
        
        <div class="card-deck justify-content-center">
            <?php require_once "./elements/pilote.php" ?>
        </div>

        <h2 class="my-5 text-center"><?= $titre2 ?></h2>

        <div class="card-deck  justify-content-center">
            <?php require_once "./elements/voiture.php" ?>
        </div>

    </main>

    <?php require_once "./elements/footer.php" ?>

