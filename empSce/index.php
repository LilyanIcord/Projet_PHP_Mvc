<?php
if (!empty($_GET['page']))
{
    $page=$_GET['page'];
}
else
{
    $page="accueil";
}
switch ($page)
{
  case "listeEmployes":
      require_once "controleurs/C_consulterEmployes.php";
      $controleur=new C_consulterEmployes();
      $controleur->action_listeEmployes($_GET['service']);
      break;
  case "saisieEmploye":
      require_once "controleurs/C_ajouterEmployer.php";
      $controleur = new C_ajouterEmployer();
      $controleur->action_saisie();
      break;
  default:
      require_once "controleurs/C_accueil.php";
      $controleur=new C_accueil();
      $controleur->action_afficher();
      break;
}

?>