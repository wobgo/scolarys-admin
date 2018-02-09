/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var url="../Models/DataView/assistance_view.php";

$(function(){
    
        $.getJSON("../Models/DataView/assistance_view.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#assist').append("<tr>"
                   
                   
                        +"<td><input type='checkbox'></td>"    
                   
                            +"<td class='mailbox-name' >  <a  id=aff##"+donnees.AssistanceID+" href='#'>"+donnees.UserName+"</a>  </td>"
                
                        +"<td class='mailbox-subject'><b>"+donnees.ObjectDetail+"</b></td>"
                
                 
                        +"<td class='mailbox-date'>"+donnees.DateAss+"</td>"
                        
//                        +" <td><a href='' id=modif##"+donnees.ChapiterID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
//     
//                        +"<td > <a href='' id=del##"+donnees.ChapiterID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
//		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
            var user = getUrlParameter('username');
            var sujet = getUrlParameter('sujet');
           // var date = getUrlParameter();
            var text = getUrlParameter('text');
            var attach = getUrlParameter('Link_File');
            
            //////////////////READ LINK ////////////////////////////////////////////////////////////
            
            $('#from').append(user);
            $('#subject').append(sujet);
            $('#help_box').append(text);
});
/*******************************voir profil************profil************************************************/

$('#assist').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
     var repn = recupID.split('##');
    
      if(repn[0]==='aff'){
          
          
       $.get(url,{aff:'af',id:repn[1]},function(d){

      //  modalDisplay();
          alert(d.UserName);
          
          window.location = "admin.php?url=read/help&username="+d.UserName+"&sujet="+d.Object+"&text="+d.ObjectDetail+"&attach="+d.Link_File;
             
       },'json'
          
    );
          
          
 
   }
   return false;
});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////                               //////////////////////////////////////////////////


  // url data search

  function getUrlParameter(name) {

    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    
    var results = regex.exec(location.search);
    
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));

};
