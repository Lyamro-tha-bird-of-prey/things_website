<?php
/* Les classes que nous allons charger ici serviront notamment
à stocker leurs paramètres dans des supervariable et agir dessus.*/
require_once libs/MachinTrucBidule.php;
require_once classes/Machin.php;
require_once classes/Truc.php;
require_once classes/Bidule.php;

session_start();

// Permet de restaurer les valeurs par défaut des paramètres en mettant fin à la session en cours.
if (isset($_GET["defaults"]) && $_GET["defaults"] == "restore") {
  session_destroy();
  redirection();
}

// Association des valeurs des paramètres des classes à la session en cours.
if (!isset($_SESSION["mtb"])) {
  $_SESSION["mtb"] = get_primary_thing();
}
if (!isset($_SESSION["machin"])) {
  $_SESSION["machin"] = get_machin();
}
if (!isset($_SESSION["truc"])) {
  $_SESSION["truc"] = get_truc();
}
if (!isset($_SESSION["bidule"])) {
  $_SESSION["bidule"] = get_bidule();
}

 ?><!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Things</title>
   </head>
   <body>

     <div>
       <p>Paramétrer la valeur de "MachinTrucBidule", qui sera utilisée dans tous les calculs</p>
       <details>
         <summary>Définir MTB</summary>
         <form action="" method="post">
           <!-- Modification de la valeur du paramètre $mtb de la classe MachinTrucBidule -->
             <input type="text" name="mtb" placeholder="Saisir la valeur de MTB">
             <button type="submit">Définir</button>
             <?php
             // Création d'un objet  dans lequel on stocke les données du formulaire.
             $current_mtb = new MachinTrucBidule($_POST["mtb"]);
             // Association de l'objet précédamment défini (et ses données) à la session en cours.
             $_SESSION["mtb"] = $current_mtb;
             ?>
         </form>
       </details>
     </div>

     <div>
       <p></p>
       <details>
         <summary>Définir MACHIN</summary>
         <form action="" method="post">
           <!-- Modification de la valeur du paramètre $machin de la classe Machin -->
             <input type="text" name="machin" placeholder="Saisir la valeur de MACHIN">
             <button type="submit">Définir</button>
             <?php
             // Création d'un objet  dans lequel on stocke les données du formulaire.
             $current_machin = new Machin($_POST["machin"]);
             // Association de l'objet précédamment défini (et ses données) à la session en cours.
             $_SESSION["machin"] = $current_machin;
             ?>
         </form>
       </details>
     </div>

     <div>
       <p></p>
       <details>
         <summary>Définir TRUC</summary>
         <form action="" method="post">
           <!-- Modification de la valeur du paramètre $truc de la classe Truc -->
             <input type="text" name="truc" placeholder="Saisir la valeur de TRUC">
             <button type="submit">Définir</button>
             <?php
             // Création d'un objet  dans lequel on stocke les données du formulaire.
             $current_truc = new Truc($_POST["truc"]);
             // Association de l'objet précédamment défini (et ses données) à la session en cours.
             $_SESSION["truc"] = $current_truc;
             ?>
         </form>
       </details>
     </div>

     <div>
       <p></p>
       <details>
         <summary>Définir BIDULE</summary>
         <form action="" method="post">
           <!-- Modification de la valeur du paramètre $bidule de la classe Bidule -->
             <input type="text" name="bidule" placeholder="Saisir la valeur de BIDULE">
             <button type="submit">Définir</button>
             <?php
             // Création d'un objet  dans lequel on stocke les données du formulaire.
             $current_bidule = new Bidule($_POST["bidule"]);
             // Association de l'objet précédamment défini (et ses données) à la session en cours.
             $_SESSION["bidule"] = $current_bidule;
             ?>
         </form>
       </details>
     </div>

     <div>
       <p></p>
       <details>
         <summary>Définir les Messages</summary>
         <details>
           <summary>Définir Message MACHIN</summary>
           <form action="" method="post">
             <!-- Modification de la valeur du paramètre $machin_msg de la classe Machin -->
               <input type="text" name="machin_msg" placeholder="Saisir le message de MACHIN">
               <button type="submit">Définir</button>
               <?php
               // Modification de l'objet $current_machin, pour y inclure les données du formulaire.
               $current_machin->set_machin_msg($_POST["machin_msg"]);
               // Mise à jour des données de $current_machin associées à la session en cours.
               $_SESSION["machin"] = $current_machin;
               ?>
         </details>
         <details>
           <summary>Définir Message TRUC</summary>
           <form action="" method="post">
             <!-- Modification de la valeur du paramètre $truc_msg de la classe Truc -->
               <input type="text" name="truc_msg" placeholder="Saisir le message de TRUC">
               <button type="submit">Définir</button>
               <?php
               // Modification de l'objet $current_truc, pour y inclure les données du formulaire.
               $current_truc->set_truc_msg($_POST["truc_msg"]);
               // Mise à jour des données de $current_truc associées à la session en cours.
               $_SESSION["truc"] = $current_truc;
               ?>
         </details>
         <details>
           <summary>Définir Message BIDULE</summary>
           <form action="" method="post">
             <!-- Modification de la valeur du paramètre $bidule_msg de la classe Bidule -->
               <input type="text" name="bidule_msg" placeholder="Saisir le message de BIDULE">
               <button type="submit">Définir</button>
               <?php
               // Modification de l'objet $current_bidule, pour y inclure les données du formulaire.
               $current_bidule->set_bidule_msg($_POST["bidule_msg"]);
               // Mise à jour des données de $current_bidule associées à la session en cours.
               $_SESSION["bidule"] = $current_bidule;
               ?>
         </details>
       </details>
     </div>

     <div>
       <!-- Lien vers une page où sera effectué le calcul impliquant la valeur de $machin (dans la classe Machin) -->
       <a href="result.php?thing=machin">Faire un calcul impliquant MACHIN</a>
       <!-- Lien vers une page où sera effectué le calcul impliquant la valeur de $truc (dans la classe Truc) -->
       <a href="result.php?thing=truc">Faire un calcul impliquant TRUC</a>
       <!-- Lien vers une page où sera effectué le calcul impliquant la valeur de $bidule (dans la classe Bidule) -->
       <a href="result.php?thing=bidule">Faire un calcul impliquant BIDULE</a>
     </div>

     <div>
       <!-- Lien permettant d'éxécuter la procédure mettant fin à la session en cours -->
       <a href="?defaults=restore">Restaurer valeurs par défaut</a>
     </div>

   </body>
 </html>
