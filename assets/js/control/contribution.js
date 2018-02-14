/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var url ="../Models/datalist/contribution.php";




$(function(){
    
    
       $.getJSON(url,function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.ImproveID +"</td>"
                
                          +" <td>" +donnees.ImproveField +"</td>"
                  
                            +" <td>" +donnees.ImproveDate +"</td>"
                       
                          +"<td > <a href='' id=del##"+donnees.ImproveID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            });  
            
            //////////////////
  
    
});





$('#addcontrib').click(function(){
    
    
    var txt = $('#textContrib').val();
    
     var recupID = $('input[type=hidden]').attr('id');
     
     alert(recupID);
    
   $.get(url,{add:'action',sugg:txt,connx:recupID},function(d){
       
      alert( d.return );
      
   },'json');
    
     $('#textContrib').val('');
     
});


 var repn;

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
                     window.location = '?url=contribution';

               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     } 


/********************************************************************************************************* */
