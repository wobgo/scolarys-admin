<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='usrinfo';

$usrdata = array(); 

$usro->bdd =  bdd();

/////////////////////////////////////////


$op = new iniat\Control();

$op->table='connexion';

$op->condition=' WHERE  Acces_Level = 1';

$op->bdd =  bdd();

///////////////////////////////////////////
//
if (isset($_GET['aff'])){
//
    $u = htmlentities($_GET['id']);      
//
    $op->condition=" WHERE ConnexionID ='$u'";
//    
    foreach ($op->readData() as $getusr ){
//    
      $usrdata['Login'] = $getusr['Login']; 
//
      $usrdata['Isblock'] = $getusr['Isblock']; 
//
      $usrdata['Acces_Level'] = $getusr['Acces_Level']; 
//   
//                 $usrdata['image'] = $getusr['image']; 
    }
//    
//    
 }   
    
        //add
  if (isset($_GET['add'])){

            $s = $_GET['namo'];
              
            $log =  $_GET['lg'];
            
            $pass =  $_GET['pd'];
             
            $usro->saveData(array("champ"=>"UserName,DateNaiss,ParentName,SubscribeDate","value"=>"'$s',NOW(),'operate',NOW()"));
              
            $op->saveData(array("champ"=>"Login,Password,Isblock,Acces_Level","value"=>"'$log','$pass',0,1"));
            
            
            $usrdata['return'] = 'effectuee' ;
                  
   }
            
        

           

      



// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $op->condition ='ConnexionID'; 

         $op->delete($del);
    
    
    
}


foreach ($op->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
