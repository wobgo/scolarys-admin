<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require './auth.php';

$d = array();

// $_POST['login']='wendila';$_POST['pd']='wendila';

if(isset($_POST['login']) && isset($_POST['pd'])){
    
    //variables protected
    
    $login = htmlentities($_POST['login']);
    $passwd = htmlentities($_POST['pd']);
    
  // $d['verif'] = 'identifiant ou mot de passe incorrect passe petit !!';  
    
     $authen = new auth($login,$passwd);
     
     $verif = $authen->Authen();
     
     if($verif!==''){
       
     $d['verif'] = $verif;
    
     }  else {
         
     $d['verif']='erreur';
        
     }
   
}

echo json_encode($d);

