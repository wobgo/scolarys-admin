<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';

//////////////////////question ////////////////////////////////
$usro = new iniat\Control();

$usro->table='question';

$usrdata = array(); 

$usro->bdd =  bdd();

///////////////////////reponse ////////////////////////////

//
//$rep = new iniat\Control();
//
//$rep->table='reponse';
//
//$rep = array(); 
//
//$rep->bdd =  bdd();


 if (isset($_GET['ref'])&& ($_GET['ref']!="" )){
        
               $n = $_GET['ref'];
        
               $less =  $_GET['question'];
                
               $classid =  $_GET['classid'];
                 
               $chapid =  $_GET['chapid'];
                  
               $subid =  $_GET['subid'];
               
      $usro->updateData(array("champ"=>"QuestionText='$less',ClasseID='$classid','SubjectID='$subid',ChapiterID='$chapid'","condition"=>"QuestionID='$n'"));
     
     
     
 }else{
     
     

 //add
            if (isset($_GET['add'])){
            
               $less =  $_GET['question'];
                
               $classid =  $_GET['classid'];
                 
               $chapid =  $_GET['chapid'];
                  
               $subid =  $_GET['subid'];

   $usro->saveData(array("champ"=>"QuestionText,ClasseID,SubjectID,ChapiterID","value"=>"'$less','$classid','$subid','$chapid'"));

                $usrdata['return'] = 'operation effectuee' ;

            }

            
 

            
     
     
 }



 
//update
if(isset($_GET['aff'])){
    
    $ui = $_GET['added'];
    
      $usro->condition=" WHERE QuestionID='$ui'";
      
        foreach ($usro->readData() as $getusr ){
        
          $usrdata['QuestionText'] = $getusr['QuestionText']; 
          $usrdata['ChapiterField'] = $getusr['ChapiterField']; 
          $usrdata['ClasseText'] = $getusr['ClasseText']; 
          $usrdata['QuestionID'] = $getusr['QuestionID']; 
        }
 
    
}


 
 
// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $usro->condition ='QuestionID'; 

         $usro->delete($del);
        
}

 

foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
