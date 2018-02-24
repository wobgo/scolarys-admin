/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var url="../Models/datalist/question.php";

$(function(){
    
        $.getJSON("../Models/DataView/QuestionAdded.php",function(donnees){
            
            
             $.each(donnees,function(i,donnees){
                 
                  $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.ClasseText+"</td>"
                
                        +" <td>" +donnees.SubField+"</td>"
                  
                        +" <td>" +donnees.ChapiterField+"</td>"
                   
                        +" <td>" +donnees.QuestionText+"</td>"
                        
                        +" <td><a href='' id=aff##"+donnees.QuestionID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +" <td > <a href='' id=del##"+donnees.QuestionID+"> <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                 
                  });
                  
        });
        
        
        getUrlValue();
              
   });
            
            
            
             
  
// delete displayed article
/************************************************************************************************** */
var   repn;

$('#sub_dis').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
        repn = recupID.split('##');
    
      if(repn[0]==='del'){
        
        modalDialog();
         // alert(' va etre supprimer??' + recupID);
       $('#confirm-dial').html("<div id='dialog-confrm' title='Empty the recycle bin?'>  <p> <span class='ui-icon ui-icon-alert' >"
                   
        +" </span>   Cet élément va etre supprimer.Etes vous sure de vouloir continuer cette opération?   </p>   </div>");

   }
   
   return false;
   
});



            


/********************************* EDIT CONTAIN************************************************************ */




$('#sub_dis').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
      var rep = recupID.split('##');
    
      if(rep[0]==='aff'){
      
            alert(rep[1]);

       $.get(url,{aff:'ed',added:rep[1]},function(up){

                window.location ="?url=question_added&quest="+up.LessonTitle+"&lecon_added="+up.LessonField+"&numbrastic="+up.LessonID;
         

       },"json");
      
   }
   return false;
});


/*******************************DIALOG********************DIALOG*****************************DIALOG************************* */



     function modalDialog(){

        $("#confirm-dial").dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
            "Confirmation": function() {
               // $( this ).dialog( "close" );

               $.get(url,{delete:'delete',numb:repn[1]},function(){

                     //   alert(d.antille);
                     window.location = '?url=question_added';

               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     } 



/********************************************************************************************************* */

  // url data search

  function getUrlParameter(name) {

    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    
    var results = regex.exec(location.search);
    
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));

};


function getUrlValue(){
    
    var title = getUrlParameter('tilte');
    
    var lesson = getUrlParameter('lecon_added');
    
    refr = getUrlParameter('numbrastic');
    
    $('#title_lesson').val(title);
    
     $('#textArea').val(lesson);
    
    
}
