/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var url = "../Models/DataView/class_link.php";
var url_link =  "../Models/datalist/question.php";
var url_link_rep =  "../Models/datalist/answer.php";
/////////////////////////////

var classid = getUrlParameter('c');
var  subid = getUrlParameter('s');
var  chapid = getUrlParameter('ch') ;

/////////////////////////////
$(function(){
    
        $.getJSON("../Models/DataView/class_link.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#sub_dis').append("<tr>"
                   
                        +" <td colspan=''><i id="+donnees.ClasseID+"></i>"+donnees.ClasseText + "</td>"
                 
                       +" <td class='sub'> <i id="+donnees.SubjectID+"></i>" +donnees.SubField +" </td>"
               
                        +" <td class='sub'> <i ></i>" +donnees.ChapiterField +" </td>"
                
                         +"<td >  <i class='text-success glyphicon glyphicon-plus' ></i>   <a href='#' id=aff##"+donnees.ChapiterID+">ajouter une question</a> </td>"
                
                      //  +" <td><a href='' id=modif##"+donnees.QuestionID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
     
               //         +"<td > <a href='' id=del##"+donnees.QuestionID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
		
			+" </tr>");
                   
                       
                 
                  });
              
           // });  
            
            /////////////////////////////////////////////////////add subjet to table /////////////////////////////////////////
            
//               $.getJSON("../Models/DataView/Link_view.php",function(donnees){
////                 
//                  $.each(donnees,function(i,donnees){
////            
//                   $('.sub').append("<table> <tr>"
////                   
//                        +" <td>" +donnees.SubField +"</td>"
////                        
//                       
//                  
//       //                   +" <td><a href='' id=aff##"+donnees.SubjectID+"><i  class=' text-primary glyphicon glyphicon-pencil'></i>modifier</a></td>"
//////     
//       //                 +"<td > <a href='' id=del##"+donnees.SubjectID+" > <i class=' text-danger glyphicon glyphicon-remove'></i>supprimer </a></td>  "
//////		
//			+" </tr></table>");
////                   
//                         $('.addQuestion').append(
//                                        
//                          "<table> <td><a href=''>ajouter une question </a> </td> </table>  "
//                      
//			);
////                 
//                  });
//                 
            
            });  
            
             
            //////////////////////////////////////////add question //////////////////////
                        
//               $.getJSON("../Models/datalist/subject.php",function(donnees){
//                 
//                  $.each(donnees,function(i,donnees){
//            
//                  
//                   
//                       
//                 
//                  });
//              
//            });  
//            
            
        
            
            
            
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
        $.getJSON("../Models/datalist/subject.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#matiere').append("<option value="+donnees.SubjectID+" >"+donnees.SubField+"</option>");
                   
                       
                 
                  });
              
            });  
            
            
           $.getJSON("../Models/datalist/chapiter.php",function(donnees){
                 
                  $.each(donnees,function(i,donnees){
            
                   $('#chap').append("<option value="+donnees.ChapiterID+" >"+donnees.ChapiterField+"</option>");
                   
                       
                 
                  });
              
            });  
                
            
    
    
});

var i=2;

$('#add').click(function(){
    
     i+=1;
     
   //  $.each(i,function(i){ i = i+1;});
     
    $('#rep').after(" <div class=''>"
    
                            +"<div class='form-group'>"
                    
                            + "<label>Reponse "+i+"</label>"
                
                            +  "<input  class='form-control select2' style='width: 100%;'>"
                
                            +"</div>"
           
                      +"</div>");
              if(i===3){
                  
                  alert('welcome test');
              }

 return false;});



// delete displayed article
/************************************************************************************************** */

//
//$('#sub_dis').on("click","a",function(){
//    
//    var recupID = $(this).attr('id');
//   
//        repn = recupID.split('##');
//    
//      if(repn[0]==='del'){
//        
////        modalDialog();
//          alert(' va etre supprimer??' + recupID);
////        $('#confirm-dial').html("<div id='dialog-confrm' title='Empty the recycle bin?'>  <p> <span class='ui-icon ui-icon-alert' >"
////                   
////        +" </span>   Cet élément va etre supprimer.Etes vous sure de vouloir continuer cette opération?   </p>   </div>");
//
//   }
//   return false;
//});






/********************************* ADD CONTAIN************************************************************ */

//add lesson
$('#addquestion').click(function(){
     
 //  var title =  $('#title_lesson').val();
     
   var txt =  $('#textArea').val();
    var  valeur =[];
   //add response too
 
 
        var selValue = $('input[name=optradio]:checked').attr('id'); 
       
        var rep1 = $('#rep1').val();
   
        var rep2 = $('#rep2').val();
        
        var rep3 = $('#rep3').val();
   ////////////////
       valeur = [rep1,rep2,rep3];
     
     alert(selValue);
       
    $.get(url_link_rep,{add:'action',valeurs:valeur},function(d){
             
             alert(d.rep);
             
       $.get(url_link,{add:'action',question:txt,classid:classid,chapid:chapid,subid:subid},function(d){alert(d.return);},'json');
         
            window.location = "?url=quest/question";
        
    },'json');
    
});
  


/********************************************************************************************************* */

////////////////////////////////////////addd question  ////////////////////////////////////////////

$('#sub_dis').on("click","a",function(){
    
    var recupID = $(this).attr('id');
   
      var rep = recupID.split('##');
    
      if(rep[0]==='aff'){
          
         alert(rep[1]);

               $.get(url,{aff:'ed',level:rep[1]},function(up){
                 
                     window.location ="?url=question_add&c="+up.ClasseID+"&s="+up.SubjectID+"&ch="+up.ChapiterID;
                     ///  window.location ="?url=question_add";
             
         },"json");

          
      }
      
       
    return false;        
});     


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


     
  // url data search

  function getUrlParameter(name) {

    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    
    var results = regex.exec(location.search);
    
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));

};
