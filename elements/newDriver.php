
<!-- if else ternaire imbriqué qui varie le contour de la div pilote selon likeIts -->
<div class="card text-center shadow my-3 
    <?php echo ($driver["likeIts"] > 0) ? 'border border-success' : (($driver["likeIts"] < 0) ? 'border border-danger' : "") ?>">    
<!-- fin if else ternaire -->

    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"> <?= ucwords($driver["fullName"]) ?> </h2>
    </div>

    <div class="card-body">
        <img src="<?= $driver["coverImage"] ?> " width="300px" height="150px" class="img-fluid" alt="photo <?= $driver["fullName"] ?>">
        <hr>

<!-- if else origine -->
        <p>Origine :
            <?php if($driver["pays"] ) : ?>
                <?= mb_strtoupper($driver["pays"]) ?> 
            
                <?php else : ?>
                    <span>NC</span>

            <?php endif ?>
        </p>
<!-- fin if else -->

<!-- switch case concernant les disciplines de chaque pilotes -->
<p>Discipline :<?php driverCategorySwitch($driver["category"]) ?></p>
<!-- fin switch case -->

        <button class="btn btn-success mx-2 border">
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>

    </div>
</div>
<hr>

