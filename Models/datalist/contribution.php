<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='improvement';

$usrdata = array(); 

$usro->bdd =  bdd();


//crud function

  //add
            if (isset($_GET['add'])){

                $sh = $_GET['sugg'];
                
                 $conn = $_GET['connx'];

                $usro->saveData(array("champ"=>"ImproveField,ConnexionID","value"=>"'$sh','$conn'"));

                $usrdata['return'] = 'operation effectuee' ;

            }

            
            
            
// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $usro->condition ='ImproveID'; 

         $usro->delete($del);
    
    
    
}



            
            
            
            
     
                foreach ($usro->readData() as $getusr ){

                    $usrdata[] = $getusr; 
                }

       
            
            
            
            
echo json_encode($usrdata);