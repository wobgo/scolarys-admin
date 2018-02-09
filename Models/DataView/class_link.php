<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='Class_Link';

$usrdata = array(); 

$usro->bdd =  bdd();

//update
if(isset($_GET['aff'])){
    
    $ui = $_GET['level'];
    
      $usro->condition=" WHERE ChapiterID='$ui'";
      
        foreach ($usro->readData() as $getusr ){
        
          $usrdata['ClasseID'] = $getusr['ClasseID']; 
          
          $usrdata['SubjectID'] = $getusr['SubjectID']; 
          
          $usrdata['ChapiterID'] = $getusr['ChapiterID']; 
          
        }
        
        
}


foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
