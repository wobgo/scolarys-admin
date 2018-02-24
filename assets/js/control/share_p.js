/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var url ="../Models/datalist/planning.php";

$(function(){
    
    
    
    
    
        $.getJSON("../Models/DataView/Share_b.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.PlanField +"</td>"
                
                        +"<td> du " +donnees.PlanDate+ " au " + donnees.PlanEnd+ "</td>"
                
                        +"<td> " +donnees.ClasseText+"</td>"
                
                        +"<td> " +donnees.SubField+"</td>"
                
                        +"<td> " +donnees.ChapiterField+"</td>"
                
                        +"<td> " +donnees.LessonTitle+"</td>"
                
                  
                      //  +" <td><a href='' id=modif##"+donnees.ClasseID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +"<td > <a href='' id=del##"+donnees.PlanningID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            }); 
            
            
 
 
    
});


    
// delete displayed article
/************************************************************************************************** */
 var  repn;

$('#sub_dis').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
        repn = recupID.split('##');
    
      if(repn[0]==='del'){
        
        modalDialog();
 //         alert(' va etre supprimer??' + recupID);
        $('#confirm-dial').html("<div id='dialog-confrm' title='Empty the recycle bin?'>  <p> <span class='ui-icon ui-icon-alert' >"
//                   
      +" </span>   Cet élément va etre supprimer.Etes vous sure de vouloir continuer cette opération?   </p>   </div>");

   }
   return false;
});


    
    
    
    
   







/********************************************************************************************************* */



     function modalDialog(){

        $( "#confirm-dial" ).dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
            "Confirmation": function() {
               // $( this ).dialog( "close" );

               $.get(url,{delete:'delete',numb:repn[1]},function(){

                     //   alert(d.antille);
                     window.location = '?url=publication';

               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     } 


/********************************************************************************************************* */
