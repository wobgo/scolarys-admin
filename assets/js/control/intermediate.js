/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


     var adresse='./Models/subscribe/subs.php'; 

      var addr ='./Models/Auth/authdoor.php';

       var url = './pages/lockscreen.php';
   
   
$('#usrconfirm').click(function(){
   
   // NewParticipant();
    NewRegister();
   // alert('new subs');
   

});







function NewRegister(){
    
    var usr = $('#name').val();
    var login = $('#idLog').val();
    var passwd = $('#passwordinput').val();
    var conf = $('#confpwd').val();
  
    //get error
    if(login!==""){  
    
          // $('#info').attr('class','');
        
        if(passwd === conf){
            
           // $('#info-conf').attr('class','');
          
          
            $.post(url,{login:login,passwd:passwd,username:usr},
            
                   function(d){
                       
                       if(d.verif=='OK'){
                           
//                       $.post(addr,{login:login,pd:passwd},function(rep){
//                           
//                         if(rep.verif !=='erreur'){
//                           
//                             var l=rep.verif;
//                             
//                             var rep = l.split('##');
//                             
//                             var  adr='./index.php';
//               
//          
//                            $.get(adr,{auth:rep[0],idn:rep[1],niv:rep[2]});
                             
                              
                            }  
                             
                            
                       },'json');
                            window.location = "./pages/lockscreen.php";
                    }
                        
//                   },'json');
                   
            
        
//         }else{
//          
//             $('#info-conf').attr('class','glyphicon glyphicon-alert').css('color','red');
//        
//         }
//   
//    }else{
//        
//       $('#info').attr('class','glyphicon glyphicon-alert').css('color','red');                    
//        
    }
//    
}