<?php

require '../model/fonctionsUtils.php';
require '../model/RequeteSQL.php';
require 'c_erreur.php';

$cnx = fonctionsUtils::activeCnx();

$erreur = null;

$page = "menu";

$dateFr = fonctionsUtils::dateAujd();

$menu_du_jour = RequeteSQL::selectMenuJour($cnx, $dateFr);

$menuJour = new menu($menu_du_jour['jour_ds'], $menu_du_jour['plat_ds'], $menu_du_jour['photoMenu'], $menu_du_jour['idMenu']);

require '../view/v_menu.php';



?>
