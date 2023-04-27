<?php 
    require_once "./elements/repo.data.php"; 
    require_once "./elements/header.php" 
?>

    <main class="container">

        <h1 class="my-5">
            <?= $titredrivers ?>
        </h1>

        <div class="row flex-lg-row flex-xl-row flex-column">

        <!-- deux méthodes =/= pour apl la card -->
            <?php foreach ($drivers as $driver) {
                require "./elements/newDriver.php" ;
            };
            ?>
            
        </div>

    </main>

    <?php require_once "./elements/footer.php" ?>
