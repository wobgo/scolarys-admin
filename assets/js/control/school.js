


var url = '../Models/datalist/school.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
        $.getJSON("../Models/datalist/school.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.EtablissementText +"</td>"
                        
                        +" <td><a href='' id=aff##"+donnees.EtablissementID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +"<td > <a href='' id=del##"+donnees.EtablissementID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
             getUrlValue();
            
    
    
    
});

// add new school 
/************************************************************************************************** */

$('#addsch').click(function(){
  // alert(ref);
    addSchool();
});


    function addSchool (){
        
        
        var sch = $('#school').val();
        
        $.get(url,{add:'action',schl:sch,ref:refr},function(d){
            
            alert(d.return);
            
            window.location = '?url=dash/school';
        });
        
        
    }


// delete displayed article
/************************************************************************************************** */
var repn;

$('#sub_dis').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
        repn = recupID.split('##');
    
      if(repn[0]==='del'){
        
        modalDialog();
         
        //alert(' va etre supprimer??' + recupID);
          
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
     

       $.get(url,{aff:'af',scho:rep[1]},function(up){

                alert("ce ci est editable " +up.EtablissementText);

                  
              window.location ="?url=school/add&schl="+up.EtablissementText+"&numb="+up.EtablissementID;
              

        },"json");
      
   }
   return false;
});




/********************************************************************************************************* */



     
  // url data search

  function getUrlParameter(name) {

    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    
    var results = regex.exec(location.search);
    
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));

};


function getUrlValue(){
    
    var school = getUrlParameter('schl');
    
      refr = getUrlParameter('numb');
    
    $('#school').val(school);
    
   
    
    
}

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

               $.get(url,{delete:'delete',numb:repn[1]},function(d){

                     //   alert(d.antille);
                     window.location = '?url=dash/school';

               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     } 


/********************************************************************************************************* */


