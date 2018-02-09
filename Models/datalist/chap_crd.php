<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='chapiters';

$usrdata = array(); 

$usro->bdd =  bdd();

///////////////////////////////////////////////////////////////////////////////////////////////

$aff = new iniat\Control();

$aff->table='school_rule';

$aff->bdd =  bdd();


///////////////////////////////////////////////////////////////////////////////////////////////////

//crud function
 if (isset($_GET['ref'])&& ($_GET['ref']!="" )){
     
      
  $n = $_GET['ref'];
     
  $iup =  $_GET['chap'];
 
  $matt = $_GET['mati'];

  $nivot = $_GET['nivo'];
            
 $usro->updateData(array("champ"=>"ChapiterField='$iup',SubjectID='$matt',ClasseID='$nivot'","condition"=>"ChapiterID='$n'"));

     
     
     
     
     
 }else{
     
                //add
           if (isset($_GET['add'])){

               $sho = $_GET['chap'];

               $mat = $_GET['mati'];

               $nivo = $_GET['nivo'];

               $usro->saveData(array("champ"=>"ChapiterField,SubjectID,ClasseID","value"=>"'$sho','$mat','$nivo'"));

               $usrdata['return'] = 'operation effectuee' ;



           }
   
     
 }



//update
if(isset($_GET['aff'])){
    
    $ui = $_GET['chapter'];
    
      $aff->condition=" WHERE ChapiterID='$ui'";
      
        foreach ($aff->readData() as $getusr ){
        
      
          $usrdata['ChapiterField'] = $getusr['ChapiterField']; 
          $usrdata['ChapiterID'] = $getusr['ChapiterID']; 
        
        }
 
    
}





// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $usro->condition ='ChapiterID'; 

         $usro->delete($del);
    
    
    
}

foreach ($usro->readData() as $getusr ){
    
    $usrdata[] = $getusr; 
    
    
}




echo json_encode($usrdata);
