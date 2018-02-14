<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='planning';

$usrdata = array(); 

$usro->bdd =  bdd();

///////////////////////////////////////////////////////////////////


$lssn = new iniat\Control();

$lssn->table='lesson';

$lssn->bdd = bdd();


////////////////////////////////////////////////////////////////////



        //add
  if (isset($_GET['add'])){
                
                 $getresp = $_GET['classid'];
                 
            foreach ($getresp as $value) {      

                $datebi = $_GET['dateb'];
                
                $datefin = $_GET['datefin'];
                
                $classid = $_GET['classid'];
                 
              //  $chapid = $_GET['chapid'];
                  
             //   $subid = $_GET['subid'];
               
                $usro->saveData(array("champ"=>"PlanDate,PlanEnd,ClassID","value"=>"'$datebi','$datefin','$value'"));

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
    
      $lssn->condition=" WHERE LessonID='$ui'";
      
        foreach ($lssn->readData() as $getusr ){
        
       //   $usrdata['LessonID'] = $getusr['LessonID']; 
          $usrdata['ClasseID'] = $getusr['ClasseID']; 
           $usrdata['SubjectID'] = $getusr['SubjectID']; 
            $usrdata['ChapiterID'] = $getusr['ChapiterID']; 
        }
 
    
}




echo json_encode($usrdata);