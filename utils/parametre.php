<?php

    /**
     *Classe singleton qui permet de lire les paramètre du fichier param.ini
     *@author Daniel SOUDRY
     *
     */
    class Parametre
    {
      /**
       *Instance de la classe parametre
       */
      private static $instance;

      private $tabPrm;

      /**
       *Fonction qui permet d'instancier s'il le faut un objet de la classe parametre
       *@return object
       */
      public static function getInstance()
      {
        if(is_null(self::$instance))
        {
          self::$instance = new Parametre();
        }

        return self::$instance;
      }

      /**
       *Constructeur de la classe parametre
       *
       */
      private function __construct()
      {
        if (file_exists("param.ini"))
        {
          $this->tabPrm = parse_ini_file("param.ini");
        }
        else
        {
          if (file_exists("../param.ini"))
          {
            $this->tabPrm = parse_ini_file("../param.ini");
          }
        }

      }

      /**
       *Fonction qui renvoie les paramètres de connexion
       *
       */
    public function getTabPrm()
    {
        return $this->tabPrm;
    }

}



?>
