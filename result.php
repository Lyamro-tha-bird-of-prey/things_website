<?php

/* Les classes que nous allons charger ici serviront notamment
à exécuter les méthodes qui serviront dans les opérations.*/
require_once libs/MachinTrucBidule.php;
require_once classes/Machin.php;
require_once classes/Truc.php;
require_once classes/Bidule.php;

/* Vérification des valeurs transmises avec la méthode GET,
* dans l'optique d'éxécuter le calcul en lien avec le lien
cliqué sur la page index.php */

/* Exécution de l'opération associée à la classe Machin,
dans le cas où la valeur de "thing" est "machin" */
if (isset($_GET["thing"]) && $_GET["thing"] == "machin") {
  $result = $_SESSION["machin"]->machin_op();
}
/* Exécution de l'opération associée à la classe Truc,
dans le cas où la valeur de "thing" est "truc" */
elseif (isset($_GET["thing"]) && $_GET["thing"] == "truc") {
  $result = $_SESSION["truc"]->truc_op();
}
/* Exécution de l'opération associée à la classe Bidule,
dans le cas où la valeur de "thing" est "bidule" */
elseif (isset($_GET["thing"]) && $_GET["thing"] == "bidule") {
  $result = $_SESSION["bidule"]->bidule_op();
}
// Renvoie un pseudo message d'erreur, uniquement si aucune des conditions précédentes n'est remplie.
else {
  $result = "UNKNOWN ERROR"
}
?><!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Résultat de l'opération</title>
  </head>
  <body>
    <!-- Affiche le résultat de l'opération -->
    <p><?php var_dump("Résultat : " . $result); ?></p>
    <!-- Permet de retourner à la page index.php -->
    <a href="index.php">Retour à la page de paramétrage de l'opération</a>
  </body>
</html>
