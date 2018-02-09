<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='reponse';

$usrdata = array(); 

$usro->bdd =  bdd();

// ADD  //
if(isset($_GET['add'])) {
    
    $getresp = $_GET['valeurs'];
    
    foreach ($getresp as $value) {
        
        $usro->saveData(array("champ"=>"RepField,isTrue","value"=>"'$value',0"));
   
       }
       
     $usrdata['rep'] = $getresp;
}



foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}




echo json_encode($usrdata);
