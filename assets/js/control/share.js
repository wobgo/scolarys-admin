/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
    
    
    
    
    
        $.getJSON("../Models/DataView/Link_view.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.ClasseText +"</td>"
                
                        +"<td>" +donnees.SubField+"</td>"
                        
                      //  +" <td><a href='' id=modif##"+donnees.ClasseID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +"<td > <a href='' id=del##"+donnees.LinK_ID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            }); 
            
            
 
    
    
    
    
    
    
    
});