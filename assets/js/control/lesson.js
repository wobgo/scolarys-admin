/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

url='../Models/datalist/lesson.php';
url_view ="../Models/DataView/class_link.php";

///////////////

var classid = getUrlParameter('c');
var  subid = getUrlParameter('s');
var  chapid = getUrlParameter('ch') ;
/////////////

$(function(){
    
   
    
        $.getJSON("../Models/DataView/class_link.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#lesson').append("<tr>"
                   
                        +" <td><i id="+donnees.ClasseID+"></i>"+donnees.ClasseText +"</td>"
                
                        +" <td><i id="+donnees.SubjectID+"></i>"  +donnees.SubField +"</td>"
                 
                        +" <td>"  +donnees.ChapiterField +"</td>"
                        
                        +" <td><a href='#' id=aff##"+donnees.ChapiterID+"> <i class='text-success glyphicon glyphicon-plus' ></i>  ajouter une lecon</a></td>"
     
                      //  +"<td > <a href='' id=del##"+donnees.LessonID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
            
            
    // $('#animated-switch').bootstrapSwitch('setAnimated', true);
    
    
});

/*******************************************************************************************************************************/
//add lesson
$('#addlesson').click(function(){
     
   var title =  $('#title_lesson').val();
     
   var txt =  $('#textArea').val();
   
   alert(classid);
   
   $.get(url,{add:'action',title:title,lesson:txt,classid:classid,chapid:chapid,subid:subid,ref:refr},function(d){
        
        alert(d.return);
        
        window.location = "?url=lesson";
        
    },'json');
    
});
  


// delete displayed article
/************************************************************************************************** */
 var  repn;

$('#lesson').on("click","a",function(){
    
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






/********************************* EDIT CONTAIN************************************************************ */




$('#lesson').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
      var rep = recupID.split('##');
    
      if(rep[0]==='modif'){
      
            alert(rep[1]);

      // $.get(url,{edit:'ed',article:rep[1]},function(up){

            //    alert("ce ci est editable " +up.AcTitre +"  "+up.PubContent);

                   // param = up;
                
                //    $.get('./list/actualite.php',{params:up});
           //     window.location ="./list/actualite.php?titre="+up.AcTitre+"&pub="+up.PubContent+"&ref="+up.ActualiteID;
                
                //params = {up};
             /*    $.ajax({
                    type: "GET",
                    url: './list/actualite.php',
                    data: param,
                    success: function(data){
                       
                });
               */

     //   },"json");
      
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

               $.get(url,{delete:'delete',numb:repn[1]},function(d){

                     //   alert(d.antille);
                     window.location = '?url=lesson';

               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     } 


/********************************************************************************************************* */


$('#lesson').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
      var rep = recupID.split('##');
    
      if(rep[0]==='aff'){
          
         alert(rep[1]);

               $.get(url_view,{aff:'ed',level:rep[1]},function(up){
             
          
                       window.location ="?url=lesson_add&c="+up.ClasseID+"&s="+up.SubjectID+"&ch="+up.ChapiterID;
             
         },"json");

          
      }
      
       
    return false;        
});   

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


     
  // url data search

  function getUrlParameter(name) {

    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    
    var results = regex.exec(location.search);
    
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));

};
