<div class="card text-center shadow my-3">
    <div class="card-header bg-dark text-white ">
        <!-- ucwords -->
        <h2 class="card-title"> <?= ucwords($car["name"]) ?> </h2>
    </div>
        
    <div class="card-body">
        <img src=" <?= $car["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
        <hr>

<!-- if else pour savoir si le pays est renseigné ou non -->
        <?php if(empty($car["pays"]) ) : ?>

            <p>NC</p>

        <?php else : ?>
            <!-- mb_strtoupper permet de mettre en majuscule -->
            <p> <?= mb_strtoupper($car["pays"]) ?> </p>

        <?php endif ?>

<!-- switch case selon le nombre de CH de la voiture -->
<?php switch ($car["power"]) : ?>
<?php case $car["power"] < 1000: ?>
        <p>Puissance: <span class="badge badge-danger"><?= $car["power"] ?> CH</span></p>
<?php break; ?>
<?php case $car["power"] >= 1000 && $car["power"] <= 1200 ?>
        <p>Puissance: <span class="badge badge-warning"><?= $car["power"] ?> CH</span></p>
<?php break; ?>
<?php default: ?>
        <p>Puissance: <span class="badge badge-success"><?= $car["power"] ?> CH</span></p>
<?php endswitch ?>
            
<!-- if else comme pour la perf -->
        <?php if(empty($car["perf"]) ) : ?>

            <p>NC</p>

        <?php else : ?>

            <p>0 à 100 km/h: <span> <?= $car["perf"] ?> sec</span></p>

        <?php endif ?>
        
        
        <p>Réserver maintenant !</p>
        
        <button class="btn btn-primary ">Réserver</button>
    </div>
</div>
<hr>
    