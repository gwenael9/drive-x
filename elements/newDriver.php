
<!-- if else ternaire imbriqué qui varie le contour de la div pilote selon likeIts -->
<div class="card text-center shadow my-3 
    <?php echo ($driver["likeIts"] > 0) ? 'border border-success' : (($driver["likeIts"] < 0) ? 'border border-danger' : "") ?>">    

    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"> <?= ucwords($driver["fullName"]) ?> </h2>
    </div>

    <div class="card-body">
        <img src="<?= $driver["coverImage"] ?> " width="300px" height="150px" class="img-fluid" alt="photo kenblock">
        <hr>

<!-- if else -->
    <?php if(empty($driver["pays"]) ) : ?>

        <p>NC</p>

    <?php else : ?>

        <p>Origine: <?= mb_strtoupper($driver["pays"]) ?> </p>

    <?php endif ?>


<!-- switch case concernant les disciplines de chaque pilotes -->
<?php switch ($driver["category"]) : ?>
<?php case $driver["category"] == "rallye": ?>
    <p>Discipline: <span class="badge badge-danger"> <?= $driver["category"] ?> </span></p>
<?php break; ?>
<?php case $driver["category"] == "drag": ?>
    <p>Discipline: <span class="badge badge-warning"> <?= $driver["category"] ?> </span></p>
<?php break; ?>
<?php case $driver["category"] == "nascar": ?>
    <p>Discipline: <span class="badge badge-success"> <?= $driver["category"] ?> </span></p>
<?php break; ?>
<?php case $driver["category"] == "formule 1": ?>
    <p>Discipline: <span class="badge badge-info"> <?= $driver["category"] ?> </span></p>
<?php break; ?>
<?php case $driver["category"] == "gymkhana": ?>
    <p>Discipline: <span class="badge badge-primary"> <?= $driver["category"] ?> </span></p>
<?php endswitch ?>


        <button class="btn btn-success mx-2 border">
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>

    </div>
</div>
<hr>