/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var url ="../Models/datalist/student.php";

$(function(){
    
   
    
        $.getJSON("../Models/datalist/student.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.UserName +"</td>"
                
                        +" <td>" +donnees.DateNaiss +"</td>"
                 
                        +" <td>" +donnees.SubscribeDate +"</td>"
                  
                        +" <td>  <input type='checkbox' value="+donnees.InfoID+" checked   name='isBlock'  >  </td>"
                
                        +" <td> <a href='' id=aff##"+donnees.InfoID+" >voir le profil</a> </td>"
                        
                        +" <td><a href='' id=modif##"+donnees.InfoID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +"<td > <a href='' id=del##"+donnees.InfoID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
            
           
    
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





//display content
/***************************************************************************************************/

$('#sub_dis').on("click","a",function(){
     
    var recupID = $(this).attr('id');
   
      var rep = recupID.split('##');
    
      if(rep[0]==='aff'){
       
       $.get(url,{aff:'af',id:rep[1]},function(d){

        modalDisplay();

        $('#dialog-message').html(

            " <div id='dialog-message' title='Publication'>"

                + "<p> "
                
                   + "<span class='glyphicon glyphicon-user' style='float:left;'>  utilisateur : "+d.UserName+"</span>"
           
                   +"<br/><p> identifiant :  xxxxxxx </p>"  
           
                    +"<p> mot de passe :  xxxxxxx </p>"  
                                      
                +"</p><br/>"
                    
                + "<p>nom du parent : " +d.ParentName+"</p> "
        
                + "<p>mail du parent : " +d.ParentEmail+"</p> "
        
                + "<p>contact du parent : " +d.ParentContact+"</p> "
        
                    
            +"</div> ");

       },'json'
          
    );
   }
  return false;
});

/*************************************************************************************************/



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
                     window.location = '?url=user/student';

               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     }
     
     
     
     
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
     




////////////////////////////////////////////////////USER IS BLOCK DON'T ACCESS ////////////////////////////////////////////



                 
  $('#sub_dis').on("click","input[type='checkbox:not(:checked)']",function(){
       
       
       
   //   e.preventDefault();
                //category checked list
               
              
         var valeurs = [];
//
//
//
                $('input:checked[name=isBlock]').each(function() {
//
                valeurs.push($(this).val());
//
            }); 
//
              selected = valeurs.join(',') ;
//
                 alert('la selection:::' + selected);


    });
   
