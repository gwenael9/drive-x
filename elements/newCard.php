<div class="card text-center shadow my-3">
    <div class="card-header bg-dark text-white ">
        <!-- ucwords permet de mettree en majuscule la 1e lettre de chaque mot -->
        <h2 class="card-title"> <?= ucwords($car["name"]) ?> </h2>
    </div>
        
    <div class="card-body">
        <img src=" <?= $car["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
        <hr>

<!-- if else pour savoir si le pays est renseigné ou non -->
        <p>Origine :
            <?php if($car["pays"] ) : ?>
                <!-- mb_strtoupper permet de mettre en majuscule -->
                <span> <?= mb_strtoupper($car["pays"]) ?> </span>
            
                <?php else : ?>
                    <span>NC</span>

            <?php endif ?>
        </p>
<!-- fin if else -->


<!-- switch case selon le nombre de CH de la voiture -->    
<p> Puissance :

<?php switch ($car["power"]) : ?>
<?php case $car["power"] < 1000: ?>
        <span class="badge badge-danger"><?= $car["power"] ?> CH</span>
<?php break; ?>
<?php case $car["power"] >= 1000 && $car["power"] <= 1200 ?>
        <span class="badge badge-warning"><?= $car["power"] ?> CH</span>
<?php break; ?>
<?php default: ?>
        <span class="badge badge-success"><?= $car["power"] ?> CH</span>
<?php endswitch ?>

</p>    
<!-- fin switch -->     

<!-- if else comme pour la perf -->
        <p>0 à 100 km/h :
            <?php if($car["perf"] ) : ?>
                <span><?= $car["perf"] ?> sec</span>
            
                <?php else : ?>
                    <span>NC</span>
             
            <?php endif ?>
        </p>
<!-- fin if else -->

        <p>Réserver maintenant !</p>
        <button class="btn btn-primary ">Réserver</button>
    
    </div>
</div>
<hr>
    