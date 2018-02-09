<?php




require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='link';

$usrdata = array(); 

$usro->bdd =  bdd();

if(isset( $_GET['select'])){
    
  $getSelected = $_GET['select'] ;
  
  $getLinkClass = $_GET['idn'] ;

//$getSelected = array(1,2,3);

//
        foreach($getSelected as $row ){

              $usro->saveData(array("champ"=>"Link_Mat,ClasseID_Link","value"=>"'$row','$getLinkClass'"));   

        }

$usrdata['value'] = $getSelected ;


}

// delete
if(isset($_GET['delete'])){
    
         $del = $_GET['numb'];
        
         $usro->condition ='LinK_ID'; 

         $usro->delete($del);
    
   
}




echo json_encode($usrdata);
