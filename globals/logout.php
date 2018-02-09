<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// On détruit les variables de notre session
session_unset ();

    
    
echo '<script>
    
      $(function(){
       
                  var  adr="../index.php";
        
                  $.get(adr,{auth:"",idn:""},function(){},"json");
                
                  window.location =adr;

        }
      )  ;

     </script>';
    
//session_destroy();