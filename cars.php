<?php require_once "./elements/repo.data.php"; ?>

    <?php require_once "./elements/header.php" ?>

    <main class="container">

        <h1 class="my-5">
            <?= $titrecars ?>
        </h1>

        <div class="row flex-lg-row flex-xl-row flex-column">   

            <?php foreach ($cars as $car) : ?>
                <?php require "./elements/newCard.php"; ?>
            <?php endforeach ?>

        </div>

    </main>
    
    <?php require_once "./elements/footer.php" ?>

