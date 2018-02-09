/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




var url ="../Models/datalist/classroom.php";

var url_link ="../Models/datalist/link.php";

var id;



var   selected;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
    
    // get url value  
    
     var level = getUrlParameter('level');
     
         id    =   getUrlParameter('idselect');
     
     $('#mat').append(level);
    
        $.getJSON("../Models/DataView/Link_view.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td>" +donnees.ClasseText +"</td>"
                
                        +"<td>" +donnees.SubField+"</td>"
                        
                      //  +" <td><a href='' id=modif##"+donnees.ClasseID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
                        +"<td > <a href='' id=del##"+donnees.LinK_ID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
            }); 
            
            
 
});






/********************************* EDIT CONTAIN************************************************************ */

 var rep;


$('#sub_dis_link').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
        rep = recupID.split('##');
    
      if(rep[0]==='modif'){
      
            alert(rep[1]);

         $.get(url,{edit:'ed',level:rep[1]},function(up){

               // alert("ce ci est editable " +up);
modalDisplay();

        $('#dialog-message').html(

            " <div id='dialog-message' title='Publication'>"

                + "<p> "
                
                   + "<span class='glyphicon glyphicon-user' style='float:left;'>  </span>"
           
                +"</p>" 
       
                + "<p class='class_link'> </p> <br/>"
        
                    
            +"</div> ");
           
           // yann cedric raimi  window.location ="admin.php?url=add/class_mat&level="+up.ClasseText+"&idselect="+up.ClasseID;
                
              

        },"json");
        
                
           
      $.getJSON("../Models/datalist/subject.php",function(donnees){
                 
         $.each(donnees,function(i,donnees){
            
           $('.class_link').append("<input type='checkbox' name='isBlock'  value="+donnees.SubjectID+">" + donnees.SubField );
                   
                  });
           getSelected();       
       });
       
        
       
   }
   
  
   return false;
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



/********************************************************************************************************* */


     
  // url data search

  function getUrlParameter(name) {

    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    
    var results = regex.exec(location.search);
    
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));

};


/********************************************************************************************************* */
  var valeurs;
      
 function getSelected(){

      

            $('.class_link').on("click","input[type='checkbox']",function(){

                 //category checked list

                valeurs = [];

                  $('input:checked[name=isBlock]').each(function() {
 //
                 valeurs.push($(this).val());
 //
             }); 
 //
                selected = valeurs ;
 //
                  alert('la selection:::' + selected);


     });

   
}


/********************************************************************************************************* */
// add new record 

function addLink(){

// $('#addlink').click(function(){
     
     alert(selected);
    
    $.get(url_link,{select:valeurs,idn:rep[1]},function(rt){
        
        alert(rt.value);
        
    },"json");
    
    
 //  });
   
   
   }
   
       
/********************************************************************************************************* */


     function modalDisplay(){

        $( "#dialog-message" ).dialog({
            
            modal: true,
            
             buttons: {
             
                 Ok: function() {
                    addLink();
                     $( this ).dialog( "close" );
            
                 }
           
             }
         
         });

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

               $.get(url_link,{delete:'delete',numb:repn[1]},function(){

                     //   alert(d.antille);
                    
                    window.location = '?url=link/add';
                    
               },"json");
            },
            annuler: function() {
                $( this ).dialog( "close" );
            }
            }
        });


     } 



/********************************************************************************************************* */
