<?php

/**
 *Classe de requêtes SQL (uniquement des fonctions static)
 *@author Daniel SOUDRY
 */
class RequeteSQL
{
  /**
   *sélection d'un menu à partir du jour
   *$cnx : objet PDO de connexion à la base de données
   *$dateFr : date d'aujourd'hui
   *@return string
   */
  static function selectMenuJour($cnx, $dateFr)
  {
    $selectMenu = $cnx->query("SELECT `idMenu`, `jour_ds`, `plat_ds`, `photoMenu` FROM `menu_ds` WHERE jour_ds = '$dateFr'");
    $leMenu = $selectMenu->fetch();

    return $leMenu;
  }
}
?>
