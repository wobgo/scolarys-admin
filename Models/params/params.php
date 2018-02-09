<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='connexion';

$usrdata = array(); 

$usro->bdd =  bdd();


 
if(isset($_POST['id'])){
    
    $n=$_POST['id']; 
   
    $log = $_POST['nlog'];
    
    $pd = $_POST['pwd'];
            
    $usro->updateData(array("champ"=>"Login='$log',Password='$pd'","condition"=>"ConnexionID='$n'"));
    
    $usrdata['report']='OK';
    
}else{
    
    $usrdata['report']='Id pas defini';
    
}

echo json_encode($usrdata);