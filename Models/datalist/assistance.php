<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='assistance';

$usrdata = array(); 

$usro->bdd =  bdd();

   //add
            if (isset($_GET['add'])){

                $obj = $_GET['sujet'];
                $ctn = $_GET['contain'];
                $file = $_GET['file'];

                $usro->saveData(array("champ"=>"Object,ObjectDetail,Link_File","value"=>"'$obj','$ctn','$file'"));

                $usrdata['return'] = 'operation effectuee' ;

            }
            
            
        echo json_encode($usrdata);
