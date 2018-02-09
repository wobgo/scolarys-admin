<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='lesson';

$usrdata = array(); 

$usro->bdd =  bdd();


// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $usro->condition ='LessonID'; 

         $usro->delete($del);
        
}

 //add
            if (isset($_GET['add'])){

                $sh = $_GET['title'];
                
                $less =  $_GET['lesson'];
                
                 $classid =  $_GET['classid'];
                 
                  $chapid =  $_GET['chapid'];
                  
                   $subid =  $_GET['subid'];

   $usro->saveData(array("champ"=>"LessonTitle,LessonField,ClasseID,SubjectID,ChapiterID","value"=>"'$sh','$less','$classid','$subid','$chapid'"));

                $usrdata['return'] = 'operation effectuee' ;

            }

            
foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
