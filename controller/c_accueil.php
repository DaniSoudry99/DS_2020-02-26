<?php

require '../model/fonctionsUtils.php';
require '../model/RequeteSQL.php';
require 'c_erreur.php';

$cnx = fonctionsUtils::activeCnx();

$erreur = null;

$page = "accueil";

require '../view/v_accueil.php';



?>
