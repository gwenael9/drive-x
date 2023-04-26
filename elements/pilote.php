<?php require_once "repo.data.php" ?>

<div class="card-deck justify-content-center">

    <div class="card text-center shadow">

    <div class="card-header bg-dark text-white">
        <h2 class="card-title">
            <?= $drivers[2]["fullName"] ?>
        </h2>
    </div>

    <div class="card-body">

        <img src="./asset/img/drivers/Loeb.jpg" width="300px" height="150px" class="img-fluid"
            alt="photo kenblock">
        <hr>

        <p>Origine: <?= $drivers[2]["pays"] ?> </p>

        <p>Discipline:
            <span class=" badge badge-primary">
                <?= $drivers[2]["category"] ?>
            </span>
        </p>

        <button class="btn btn-success mx-2 border">
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>

    </div>
    </div>

    <hr>

    <div class="card text-center shadow">

    <div class="card-header bg-dark text-white ">
        <h2 class="card-title">
            <?= $drivers[5]["fullName"] ?>
        </h2>
    </div>

    <div class="card-body">

        <img src="./asset/img/drivers/shirleymuldowney.jpg" width="300px" height="150px" class="img-fluid"
            alt="photo kenblock">
        <hr>

        <p>Origine: <?= $drivers[5]["pays"] ?> </p>

        <p>Discipline:
            <span class=" badge badge-danger">
                <?= $drivers[5]["category"] ?>
            </span>
        </p>

        <button class="btn btn-success mx-2 border" >
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>

    </div>
    </div>

    <hr>


</div>