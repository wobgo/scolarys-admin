var url = "../Models/datalist/operate.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
    


        $.getJSON("../Models/datalist/operate.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.Login+"</td>"
                
                         +" <td>  <input type='checkbox' class='check' value="+donnees.ConnexionID+"  name='isBlock' checked >  </td>"
                        
                        +" <td> <a href='#' id=aff##"+donnees.ConnexionID+"> voir le profil </a></td>"
                
                        +" <td><a href='#' id=modif##"+donnees.ConnexionID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +"<td > <a href='' id=del##"+donnees.ConnexionID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
  
       
    
});

/*******************************voir profil************profil************************************************/

$('#sub_dis').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
     var repn = recupID.split('##');
    
      if(repn[0]==='aff'){
          
           
       $.get(url,{aff:'af',id:repn[1]},function(d){

        modalDisplay();

        $('#dialog-message').html(
                
   " <div id='dialog-message' title='Publication'>"

                + "<p> "
                
                   + "<span class='glyphicon glyphicon-user' style='float:left;'>  utilisateur : "+d.Login+"</span>"
           
                   +"<br/><p> identifiant :  xxxxxxx </p>"  
           
                    +"<p> mot de passe :  xxxxxxx </p>"  
                                      
                +"</p><br/>"
                    
                + "<p> l'utilisateur est autorise : " +d.Isblock+"</p> "
        
                + "<p>niveau d'access : " +d.Acces_Level+"</p> "
        
              
        
                    
            +"</div> ");

       },'json'
          
    );
          
          
 
   }
   return false;
});

///////////////////////////////////////////ADDD NEW OPERATE //////// ASSISTANT //////////////

$('#addpo').click(function(){
    
    var name= $('#nameo').val();
     var log = $('#logo').val();
      var pssd = $('#pwdo').val();
     
      $.get(url,{add:'action',namo:name,lg:log,pd:pssd},function(d){
          
          alert(d.return);
          
           window.location = '?url=user/support';
           
      },"json");
      
     
      
    return  false;
});



// delete displayed article
/************************************************************************************************** */
var repn; 

$('#sub_dis').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
   repn  = recupID.split('##');
    
    
// 
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


     function modalDisplay(){

        $( "#dialog-message" ).dialog({
            
            modal: true,
            
             buttons: {
             
                 Ok: function() {
                
                     $( this ).dialog( "close" );
            
                 }
           
             }
         
         });

     }
     
     
     
     /**********************************MODAL DISPLAY***********************************************************************/
     
     
     
     

     function modalDialog(){

        $( "#confirm-dial").dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
            "Confirmation": function() {
               // $( this ).dialog( "close" );

               $.get(url,{delete:'delete',numb:repn[1]},function(d){

                     //   alert(d.antille);
                     window.location = '?url=user/support';

               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     } 

////////////////////////////////////////////////////USER IS BLOCK DON'T ACCESS ////////////////////////////////////////////



          
                 
  $('#sub_dis').on("click","input[type='checkbox']:not(:checked)",function(){
       
       
       
   //   e.preventDefault();
                //category checked list
               
              
         var valeurs = [];
//
//
//
                $('input:checked:not(:checked)[name=isBlock]').each(function() {
//
                valeurs.push($(this).val());
//
            }); 
//
              selected = valeurs.join(',') ;
//
                 alert('la selection:::' + selected);


    });
   
    