<?php



require './subscribe.php';

    $dii = array();
 
  //if((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['passwd']) && !empty($_POST['passwd'])) && (isset($_POST['usr']) && !empty($_POST['usr']))   && (isset($_POST['birth']) && !empty($_POST['birth'])) && (isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['genre']) && !empty($_POST['genre'])) && (isset($_POST['assoc']) && !empty($_POST['assoc']))){
 
    $login = htmlentities($_POST['login']);
  
    $pwd = htmlentities($_POST['passwd']);
   
   if(isset($_GET['name'])) { 
       
        $entrname =  htmlentities($_GET['name']);
    
       // $temple =  htmlentities($_GET['temple']);
    
       // $mail= htmlentities($_GET['mail']);
    
    }
   
    /* ***   $assoc = htmlentities($_POST['assoc']);  *** */
    
    $subs = new subscribe();
    
     //$r =  $subs->getNewRegister();
 
    if(isset($usrname) && !empty($usrname)){
     
     $subs->getNewRegister($entrname);
     
     
 }
 
   
 if(isset($login) && isset($pwd)){
 
     $g= $subs->getAuthen($login,$pwd);
     
     if($g!=''){
         
         $dii['verif'] = $g;
         
     }
 }   
     
   
    
echo json_encode($dii);