<?php



require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='subjects';

$usrdata = array(); 

$usro->bdd =  bdd();



if (isset($_GET['ref'])&& ($_GET['ref']!="" )){
    
     //crud function  
      $n = $_GET['ref'];
     
       $iup =  $_GET['schl'];
            
      $usro->updateData(array("champ"=>"SubField='$iup'","condition"=>"SubjectID='$n'"));
   
     
    
}else{
    
    

        //add
        if (isset($_GET['add'])){

            $sh = $_GET['schl'];

            //$cls=  $_GET['nivo'];

            $usro->saveData(array("champ"=>"SubField","value"=>"'$sh'"));

            $usrdata['return'] = 'operation effectuee' ;

        }
        
    
}


// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['sub'];
        
         $usro->condition ='SubjectID'; 

         $usro->delete($del);
    
}


//update
if(isset($_GET['aff'])){
    
    $ui = $_GET['sub'];
    
      $usro->condition=" WHERE SubjectID ='$ui'";
      
        foreach ($usro->readData() as $getusr ){
        
          $usrdata['SubField'] = $getusr['SubField']; 
           $usrdata['SubjectID'] = $getusr['SubjectID'];
        }
 
    
}



foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}


echo json_encode($usrdata);
