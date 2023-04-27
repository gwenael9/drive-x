<?php

// fonction nombre de CH pour chaque voiture 
function carPowerSwitch($power) {
    switch ($power) {
        case $power < 1000:
            echo ' <span class="badge badge-danger">' .  $power . 'CH</span>';
            break;
        case $power >= 1000 && $power <= 1200: 
            echo ' <span class="badge badge-warning">' .  $power . 'CH</span>';
            break;
        default:
            echo ' <span class="badge badge-success">' .  $power . 'CH</span>';  
    };
};


// fonction discipline pour chaque pilote
function driverCategorySwitch($category) {
    switch ($category) {
        case $category == "rallye":
            echo '<span class="badge badge-danger">' . $category . '</span>';
            break;
        case $category == "drag":
            echo '<span class="badge badge-warning">' . $category . '</span>';
            break;
        case $category == "nascar":
            echo '<span class="badge badge-success">' . $category . '</span>';
            break;
        case $category == "formule 1":
            echo '<span class="badge badge-info">' . $category . '</span>';
            break;
        case $category == "gymkhana":
            echo '<span class="badge badge-primary">' . $category . '</span>';
    };
};


// tri d'un tableau avec la fonction asort()
// revoir cela

asort($drivers);
foreach($drivers as $driver) {
    
}





