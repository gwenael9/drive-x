
<div class="card text-center shadow">
    <div class="card-header bg-dark text-white ">
        <h2 class="card-title">
            <?= $cars[3]["name"] ?> 
        </h2>
    </div>

    <div class="card-body">
        <img src="./asset/img/cars/bugatti.jpg"
            class="img-fluid" alt="photo de bugatti">
        <hr>
        <p>Origine: <?= $cars[3]["pays"] ?>

        </p>

        <p>Puissance: <span class="badge badge-info"> <?= $cars[3]["power"] ?> CH</span></p>

        <p>0 à 100 km/h: <span> <?= $cars[3]["perf"] ?> sec</span></p>

        <p>Réserver maintenant !</p>

        <button class="btn btn-primary ">Réserver</button>
    </div>
</div>

<hr>

<div class="card text-center shadow">
    <div class="card-header bg-dark text-white ">
    <h2 class="card-title">
            <?= $cars[4]["name"] ?> 
        </h2>
    </div>

    <div class="card-body">
        <img src="./asset/img/cars/mercedes.jpg"
            class="img-fluid" alt="photo de mercedes">
        <hr>
        <p>Origine: <?= $cars[4]["pays"] ?>

        </p>

        <p>Puissance: <span class="badge badge-info"> <?= $cars[4]["power"] ?> CH</span></p>

        <p>0 à 100 km/h: <span> <?= $cars[4]["perf"] ?> sec</span></p>

        <p>Réserver maintenant !</p>

        <button class="btn btn-primary ">Réserver</button>
    </div>
</div>

<hr>

