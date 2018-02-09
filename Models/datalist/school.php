<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='school';

$usrdata = array(); 

$usro->bdd =  bdd();


 // $ui = isset($_GET['ref']) ;

//crud function
 if (isset($_GET['ref'])&& ($_GET['ref']!="" )){
     
     $n = $_GET['ref'];
     
     $iup =  $_GET['schl'];
            
 $usro->updateData(array("champ"=>"EtablissementText='$iup'","condition"=>"EtablissementID='$n'"));

} else {

      
        //add
        if (isset($_GET['add'])){

            $sh = $_GET['schl'];

            $usro->saveData(array("champ"=>"EtablissementText","value"=>"'$sh'"));

            $usrdata['return'] = 'operation effectuee' ;

        }

}

// delete
if(isset($_GET['delete'])){
    
     $del = $_GET['numb'];
        
         $usro->condition ='EtablissementID'; 

         $usro->delete($del);
    
    
    
}


 
        //update
        if(isset($_GET['aff'])){

            $ui = $_GET['scho'];

            $usro->condition=" WHERE EtablissementID ='$ui'";

              foreach ($usro->readData() as $getusr ){
                  

                  $usrdata['EtablissementID'] = $getusr['EtablissementID'];
                  
                  $usrdata['EtablissementText'] = $getusr['EtablissementText']; 

                }


        } else{
            

                foreach ($usro->readData() as $getusr ){

                    $usrdata[] = $getusr; 
                }


            
        }     

echo json_encode($usrdata);

