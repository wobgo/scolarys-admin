/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
    
    


        $.getJSON("../Models/DataView/progress.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.UserName+"</td>"
                
                         +" <td> " +donnees.SubField+" </td>"
                        
                        +" <td> <a href='#' id=aff##"+donnees.ConnexionID+"> voir le profil </a></td>"
                
                        +" <td><a href='#' id=modif##"+donnees.ConnexionID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                     
		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
  
       
    
});
