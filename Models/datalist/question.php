<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='question';

$usrdata = array(); 

$usro->bdd =  bdd();



 //add
            if (isset($_GET['add'])){

              //  $sh = $_GET['title'];
                
               $less =  $_GET['question'];
                
               $classid =  $_GET['classid'];
                 
               $chapid =  $_GET['chapid'];
                  
               $subid =  $_GET['subid'];

   $usro->saveData(array("champ"=>"QuestionText,ClasseID,SubjectID,ChapiterID","value"=>"'$less','$classid','$subid','$chapid'"));

                $usrdata['return'] = 'operation effectuee' ;

            }

            


foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
