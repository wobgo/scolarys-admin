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

$lssn->table='plan_question';

$lssn->bdd = bdd();


////////////////////////////////////////////////////////////////////



        //add
  if (isset($_GET['add'])){
                
                 $getresp = $_GET['lessonid'];
                 
            foreach ($getresp as $value) {      

                $datebi = $_GET['dateb'];
                
                $datefin = $_GET['datefin'];
                
                $lessonid = $_GET['lessonid'];
                 
                $lib = $_GET['lib'];
                  
             //   $subid = $_GET['subid'];
               
                $usro->saveData(array("champ"=>"PlanDate,PlanEnd,PlanField,LessonID","value"=>"'$datebi','$datefin','$lib','$value'"));

                $usrdata['return'] = 'operation effectuee' ;

            }

 }




// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $usro->condition ='PlanningID'; 

         $usro->delete($del);
    
    
    
}

//$test = [13,14,16];
//update
if(isset($_GET['add_quest'])){
    
          $getresp = $_GET['questionid'];
                 
            foreach ($getresp as $value) {      

                $datebi = $_GET['dateb'];
                
                $datefin = $_GET['datefin'];
                
                //$lessonid = $_GET['lessonid'];
                 
                $lib = $_GET['lib'];
                  
             //   $subid = $_GET['subid'];
               
                $usro->saveData(array("champ"=>"PlanQuestDate,PlanQuestEND,PlanQuestField,QuestionID","value"=>"'$datebi','$datefin','$lib','$value'"));

                $usrdata['return'] = 'operation effectuee' ;

            }
 
    }





echo json_encode($usrdata);