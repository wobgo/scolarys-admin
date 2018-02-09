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



// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $usro->condition ='InfoID'; 

         $usro->delete($del);
    
    
    
}

//
if (isset($_GET['aff'])){
//
   $u = htmlentities($_GET['id']);      
//
   $usro->condition=" WHERE InfoID ='$u'";
//    
    foreach ($usro->readData() as $getusr ){
//    
      $usrdata['UserName'] = $getusr['UserName']; 
//
      $usrdata['ParentName'] = $getusr['ParentName']; 
//
     $usrdata['ParentEmail'] = $getusr['ParentEmail']; 
//    
      $usrdata['ParentContact'] = $getusr['ParentContact']; 
    }
//    
//    
 }   
    

foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
