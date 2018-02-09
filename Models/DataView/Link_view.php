<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='Class_Link_Sub';

$usrdata = array(); 

$usro->bdd =  bdd();
//
//
//  $getSelected = $_GET['select'] ;
//  
//  $getLinkClass = $_GET['idn'] ;
//
////$getSelected = array(1,2,3);
//
////
//        foreach($getSelected as $row ){
//
//              $usro->saveData(array("champ"=>"Link_Mat,ClasseID_Link","value"=>"'$row','$getLinkClass'"));   
//
//        }
//        

foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
