
var url ="../Models/datalist/subject.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
        $.getJSON("../Models/datalist/subject.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.SubField +"</td>"
                        
                        +" <td><a href='' id=aff##"+donnees.SubjectID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +"<td > <a href='' id=del##"+donnees.SubjectID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
            
            //niveau option list
            
             $.getJSON("../Models/datalist/classroom.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#classr').append("<option value="+donnees.ClasseID+">"+donnees.ClasseText+"</option>");
                   
                       
                 
                  });
              
            });  
            
            
            getUrlValue();
    
    
    
});


// add new sub
/************************************************************************************************** */

$('#addsub').click(function(){
    
    addSub();
    
});


    function addSub (){
        
        
        var sch = $('#sub').val();
        
        //var niv = $("select[name='niv'] > option:selected").val();
        
        $.get(url,{add:'action',schl:sch,ref:refr  },function(d){
            
            alert(d.return);
            
            window.location = '?url=dash/sub';
            
        });
        
        
    }




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

         $.get(url,{aff:'ed',sub:rep[1]},function(up){

                alert("ce ci est editable " +up.SubField);

               window.location ="admin.php?url=sub/add&subfield="+up.SubField+"&numb_level="+up.SubjectID;
                

        },"json");
      
   }
   return false;
});




/********************************************************************************************************* */






/*******************************DIALOG********************DIALOG*****************************DIALOG************************* */



     function modalDialog(){

        $( "#confirm-dial" ).dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
            "Confirmation": function() {
               // $( this ).dialog( "close" );

               $.get(url,{delete:'delete',sub:repn[1]},function(){

                     //   alert(d.antille);
                     window.location = '?url=dash/sub';

               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     } 


/**********************************************************************************************************************************/


     
  // url data search

  function getUrlParameter(name) {

    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    
    var results = regex.exec(location.search);
    
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));

};


function getUrlValue(){
    
    var levl = getUrlParameter('subfield');
    
    refr = getUrlParameter('numb_level');
    
    $('#sub').val(levl);
    
   
    
    
}
