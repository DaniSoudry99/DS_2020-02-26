<?php

require '..\vendor\autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

  function mesErreurs($numero,$message)
  {
    echo "<h2 class='erreur2'>Erreur : Contactez l'administrateur</h2>";

    date_default_timezone_set('Europe/Paris');
    $date = date("Y-m-d");

    $logger = new Logger('monLogger');
    $logger->pushHandler(new StreamHandler("../log/$date.log", Logger::WARNING));
    $logger->warning("Erreur : $message, $numero");

  }

  set_error_handler('mesErreurs');






?>
