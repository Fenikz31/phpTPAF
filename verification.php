<?php

$userId = array('pierre@email.com' => 123456789, 'charlene@email.com' =>987654321);
// $password = array('bonjour', 123456789);
foreach ($userId as $userEmail => $password) {
    // conditions...
    if (isset($_POST['userEmail']) &&  isset($_POST['password'])) {
        
      if ($_POST['userEmail'] == $_POST['login'] && $password == $_POST ) 
      echo "Connexion réussie!";
        header('Location: members.php');
    } else {
        echo "connexion échouée";
        header('Location : index.php');
    }
}











/*
    <?php
    // Déclaration de la matrice
    $matrice = array();
    $matrice[0] = array('X' ,'O' ,'X');
    $matrice[1] = array('X' ,'X' ,'O');
    $matrice[2] = array('X' ,'O' ,'O');
    ?>
    
    <?php
    // Retourne X
    echo $matrice[1][1];
    ?>  
*/
