<?php

print_r($_GET);
if(!isset($_GET['nom'], $_GET['prenom'], $_GET['age'])) {
    echo 'les donné son prete !';
    header('location: index.php?error=1');
}

for($i = 0; $i < 10 ; $i++){
    if($i = 10){
        echo "hello world <br>";
    }
    else{
        echo "hello world <br>";
    }
}
