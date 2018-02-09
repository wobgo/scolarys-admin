/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var url ="../Models/params/params.php";

$('#editProfil').click(function(){
  
    updateFunction();
    
    return false;
});


  function  updateFunction(){
      
     var log = $('#newlog').val();
     
        var pass = $('#newpass').val();
        
           var confp = $('#confpass').val();
           
            var rec = $('#colparams').attr("class");
    
    var l = rec.split('-');
    
    alert(l[1]);
       
      if(log!==""){
          
          if(pass!==""){
              
              if(pass === confp ){
                  alert();
                  
                  $.post(url,{nlog:log,pwd:confp,id:l[1]},function(dd){
                      
                      if(dd.report ==='OK'){
                          
                          $('#report').append("<div class='alert alert-success alert-dismissible'>"
                          
               +" <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>"
               +" <h4><i class='icon fa fa-check'></i> Alert!</h4>"
               +"Mis a jour effectue avec succes."
               +"</div>");
                          
                      }else{
                          
                          $('#report').append(" <div class='alert alert-danger alert-dismissible'>"
                +"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>"
               +" <h4><i class='icon fa fa-ban'></i> Alert!</h4>"
               +" Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire"
               +" soul, like these sweet mornings of spring which I enjoy with my whole heart."
               +" </div>");
                          
                      }
                  
                  },"json");
              }
          }
          
      }
      
  }