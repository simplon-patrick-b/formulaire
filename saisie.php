<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=trombinoscope;charset=utf8', 'root', 'simplon');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

$req = $bdd->prepare('INSERT INTO simploniens(nom, prenom, photo, mail, cv, tel, date, reseaux) VALUES(:nom, :prenom, :photo, :mail, :cv, :tel, :date, :reseaux)');

$req->execute(array(

    'nom' => $_POST['nom'],

    'prenom' => $_POST['prenom'],

    'photo' => $_POST['photo'],

    'mail' => $_POST['mail'],

    'cv' => $_POST['cv'],

    'tel' => $_POST['tel'],

    'date' => $_POST['date'],

    'reseaux' => $_POST['reseaux']

    ));


echo 'Vos informations ont bien &eacute;t&eacute; enregistr&eacute;es';
