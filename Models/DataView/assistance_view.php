<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='help_module';

$usrdata = array(); 

$usro->bdd =  bdd();




//function to display

if(isset($_GET['aff'])){
    
    $ui = $_GET['id'];
    
      $usro->condition=" WHERE AssistanceID ='$ui'";
      
        foreach ($usro->readData() as $getusr ){
            
          $usrdata['Link_File'] = $getusr['Link_File']; 
        
          $usrdata['ObjectDetail'] = $getusr['ObjectDetail']; 
          
            $usrdata['UserName'] = $getusr['UserName']; 
          
          $usrdata['Object'] = $getusr['Object']; 
        
        }
 
    
}


foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
