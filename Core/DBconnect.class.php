<?php

/*connection to all database
 *
 *  use new pdo connection 
 * 
 *  */

function bdd(){
    
    
         try
        {
	     
            $pdo_options[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;dbname=solarys','root','',$pdo_options);
             
       } 
       catch(Exception $e)
        {
              die('Erreur : '.$e->getMessage());
        }

        return $bdd;

}

/*****

			///////requete last record/////////////
SELECT statistic.Elligibles,statistic.Objectifs,statistic.TauxEtoile,statistic.TauxSE FROM statistic ORDER BY StatisticID DESC LIMIT 1



******/
