<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='my_progress';

$usrdata = array(); 

$usro->bdd =  bdd();
     

foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);