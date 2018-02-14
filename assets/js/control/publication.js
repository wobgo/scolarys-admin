/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var url ="../Models/datalist/planning.php";

///////////////
var classid = getUrlParameter('c');
var  subid = getUrlParameter('s');
var  chapid = getUrlParameter('ch') ;
//////////////////////

$(function(){
    
   $.getJSON("../Models/DataView/LessonAdded.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +"<td><input type='checkbox' name='isBlock' value="+donnees.LessonID+"></td>"
                   
                         +" <td>" +donnees.ClasseText +"</td>"
                
                          +" <td>" +donnees.SubField+"</td>"
                  
                           +" <td>" +donnees.ChapiterField+"</td>"
                   
                           +" <td>" +donnees.LessonTitle+"</td>"
                        
                      //  +" <td><a href='' id=modif##"+donnees.ClasseID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
                       
                      
		
			+" </tr>");
                   
                        
                 
                  });
              
            }); 
            
          getSelected(); 
});



/********************************************************************************************************* */
  var valeurs;
      
 function getSelected(){

      

            $('#sub_dis').on("click","input[type='checkbox']",function(){

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

///////////////////////////////////////////////////////////TESTUEL ////////////////////////////////////

$('#addplan').click(function(){
    
    var DateBin =$('#dateb').val();
    var DateFin =$('#datefin').val();
           
  // $.get(url,{aff:'action',level:valeurs},function(up) {
       
     
         
      // window.location="?url=add/planning&c="+up.ClasseID+"&s="+up.SubjectID+"&ch="+up.ChapiterID;
       
           
            $.get(url,{add:'action',dateb:DateBin,datefin:DateFin,classid:valeurs},function(d){

         alert(d.return);

    },'json');  
            
   //       },'json');
   
 
    
});


/********************************************************************************************************* */


     
  // url data search

  function getUrlParameter(name) {

    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    
    var results = regex.exec(location.search);
    
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));

};


/*****************************************************************************************************************/