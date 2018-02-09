//link to verify authentification
var addr ='./Models/Auth/authdoor.php';


  $('#formas').submit(function(){
      
   //alert('authen test'); // 
      authen();
      return false;
      
  });
  
  
  
  function authen(){
      
      
       var log = $('#logname').val();
    
       var passwd = $('#pwdname').val();
   
       $(".load").css('display','block');
    
    $.post(addr,{login:log,pd:passwd},function(d){
         
//         alert(log+  "  ###  " +  passwd);
         
            if(d.verif !=='erreur'){
                
                   var l=d.verif;
                     
                   var red = l.split('##');
                                 //alert(red);
                     $(".load").css('display','none'); 
            
                   var  adr='index.php';
               
                  $.post(adr,{auth:red[0],idn:red[1],niv:red[2]},function(){
                  
                  },'json');
                
                 window.location ='pages/admin.php?url=';
               
               
            }else{
                
                 $('#authenerror').text("identifiant ou mot de passe erroné");
                
            }   
      
       
      
     },"json"); 
  
  
}
