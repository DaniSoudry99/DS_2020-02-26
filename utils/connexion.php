<?php

    /**
     *Classe singleton qui permet d'établir la connexion à la base de données
     *@author Daniel SOUDRY
     *
     */
    class Connexion
    {
      /**
       *Instance de la classe connexion
       */
      private static $instance;

      private $cnx;

      /**
       *Fonction qui permet d'instancier s'il le faut un objet de la classe connexion
       *@return object
       */
      public static function seConnecter()
      {
        if(is_null(self::$instance))
        {
          self::$instance = new Connexion();
        }

        return self::$instance;
      }

      /**
       *Constructeur de la classe connexion
       *
       */
      private function __construct()
      {
        $prm = Parametre::getInstance();
        $param = $prm->getTabPrm();

        $dbhost = $param['DB_HOST'];
        $dbdatabase = $param['DB_DATABASE'];
        $dbuser = $param['DB_USERNAME'];
        $dbpw = $param['DB_PASSWORD'];

        try
        {
          $this->cnx = new PDO('mysql:dbname='.$dbdatabase.';host='.$dbhost,$dbuser,$dbpw);
        } catch (\Exception $e)
        {
          echo "Erreur de connexion : " . $e->getMessage();
        }
      }

    /**
     *Fonction qui renvoie si la connexion à la bdd est établie ou pas
     *
     */
    public function getCnx()
    {
        return $this->cnx;
    }


}



?>
