
var url ="../Models/datalist/chap_crd.php";

 var mat ;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
        $.getJSON("../Models/datalist/chapiter.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.SubField +"</td>"
                
                          +" <td>" +donnees.ChapiterField +"</td>"
                        
                        +" <td><a href='' id=aff##"+donnees.ChapiterID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +"<td > <a href='' id=del##"+donnees.ChapiterID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
            /////////////////////////////////////////////////////add chapter 
            
            
            
            ///////////////////////////////////
            
        $.getJSON("../Models/datalist/classroom.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#nivo').append("<option value="+donnees.SubjectID+" >" +donnees.ClasseText+ "</option> ");
                   
                       
                 
                  });
              
            });  
            
                
        $.getJSON("../Models/datalist/subject.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#Matchap').append("<option  value="+donnees.SubjectID+" >" +donnees.SubField+ "</option> ");
                   
                 });
              
            });  
    
    getUrlValue();
    
});

/******************************************************************************************************************??????******/

        
$('#addchap').click(function(){
    
    
        var dach =  $('#chapo').val();
        
         mat   =  $("select[name='matiere'] > option:selected").val();
         
         nivote =    $("select[name='niveau'] > option:selected").val();


        $.get(url,{ add:'action', chap:dach ,mati:mat , nivo:nivote ,ref:refr },function(){

             window.location='?url=dash/chap';

        },"json");

   
});

//$('#Matchap').on('change',function(){
//        mat   =  $("select[name='matiere'] > option:selected").val();
//        alert(mat);
//});
//

// delete displayed article
/************************************************************************************************** */
 var repn ;

$('#sub_dis').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
       repn = recupID.split('##');
    
      if(repn[0]==='del'){
        
           modalDialog();
        //  alert(' va etre supprimer??' + recupID);
        $('#confirm-dial').html("<div id='dialog-confrm' title='Empty the recycle bin?'>  <p> <span class='ui-icon ui-icon-alert' >"
//                   
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

       $.get(url,{aff:'ed',chapter:rep[1]},function(up){

                window.location ="?url=chap/add&chapter="+up.ChapiterField+"&numbrastic="+up.ChapiterID;
         

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

               $.get(url,{delete:'delete',numb:repn[1]},function(){

                     //   alert(d.antille);
                     window.location = '?url=dash/chap';

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

/////////////////////////////////********************/////////////////////////////////***********************/////////////////

function getUrlValue(){
    
    var levl = getUrlParameter('chapter');
    
    refr = getUrlParameter('numbrastic');
    
    $('#chapo').val(levl);
    
   
    
    
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////