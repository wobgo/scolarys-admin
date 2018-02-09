<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';
/**
 * Description of subscribe
 *
 * @author wendila
 */
class subscribe extends iniat\Control{
    //put your code here
    
 
     public function __construct() {
        
        /* $this->login = $login;
        $this->pwd =   $pwd;
       
        $this->usrname = $usrname;
        $this->mail = $mail; 
        //$this->date = $date; $this->gender = $gender;
        $this->assoc = $assoc;
        */
        
         $this->bdd =  bdd();
          
        //$this->getNewRegister();
        
        //$this->getAuthen();
      
        
     }
    
     public function getNewRegister($usrname,$date,$gender,$mail){
        
         $this->table ='usrinfo' ;
         
         $this->saveData(array("champ"=>"ParticipantName,DateNaiss,gender,Mail","value"=>"'$usrname','$date','$gender','$mail'"));
         
        return 'OK';
    }
    
    public function getAuthen($login,$pwd){
        
        
        $this->table ='connexion';
        
        $this->saveData(array("champ"=>"Login,Password,Isblock,Acces_Level","value"=>"'$login','$pwd',0,2"));
        
        return 'OK';
        
    }
}

