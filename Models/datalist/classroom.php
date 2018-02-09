<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='classe';

$usrdata = array(); 

$usro->bdd =  bdd();


//crud function

 if (isset($_GET['ref'])&& ($_GET['ref']!="" )){
  
     //crud function  
      $n = $_GET['ref'];
     
       $iup =  $_GET['lev'];
            
      $usro->updateData(array("champ"=>"ClasseText='$iup'","condition"=>"ClasseID='$n'"));
   
     
 } else {
     
        //add
            if (isset($_GET['add'])){

                $sh = $_GET['lev'];

                $usro->saveData(array("champ"=>"ClasseText","value"=>"'$sh'"));

                $usrdata['return'] = 'operation effectuee' ;

            }

}

// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $usro->condition ='ClasseID'; 

         $usro->delete($del);
    
    
    
}
//update
if(isset($_GET['aff'])){
    
    $ui = $_GET['level'];
    
      $usro->condition=" WHERE ClasseID='$ui'";
      
        foreach ($usro->readData() as $getusr ){
        
          $usrdata['ClasseID'] = $getusr['ClasseID']; 
          $usrdata['ClasseText'] = $getusr['ClasseText']; 
        
        }
 
    
}





foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
