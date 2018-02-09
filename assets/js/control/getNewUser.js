/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



     var adresse='../Models/subscribe/subs.php'; 

      var addr ='../Models/Auth/authdoor.php';


$('#link').click(function(){
   
   // NewParticipant();
    NewRegister();
   // alert('new subs');
   

});



//#wizard .content > li.actions
$('#confirm').click(function(){
   
 //   NewRegister();
  

});

function NewRegister(){
    
    var rec = $('#newuser').attr("class");  
    
    var l = rec.split('##')
    
    var  login =l[1];

    var passwd = l[2] ;

    var usr = l[0] ;

//    var usr = $('#name').val();
//    var login = $('#idLog').val();
//    var passwd = $('#passwordinput').val();
//    var conf = $('#confpwd').val();
//  
//    //get error
//    if(login!==""){  
//    
//          // $('#info').attr('class','');
//        
//        if(passwd === conf){
//            
//           // $('#info-conf').attr('class','');
//          
          
            $.post(adresse,{login:login,passwd:passwd},
            
                   function(d){
                       
                       if(d.verif==='OK'){
                           
                       $.post(addr,{login:login,pd:passwd},function(rep){
                           
                         if(rep.verif !=='erreur'){
                           
                             var l=rep.verif;
                             
                             var rep = l.split('##');
                             
                             var  adr='./index.php';
               
          
                            $.get(adr,{auth:rep[0],idn:rep[1],niv:rep[2]});
                            
                                 window.location = "./admin.php?url=";
                             
                            }
                            
                       },'json');
                            
                    }
                        
                   },'json');
                   
            
//        
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
//    }
    
}


function NewParticipant(){
    
    
    
    
   
    var username = $('#usr').val();
    
//    var birth = $('#datepicker').val();
    
 //   var gender= $(':radio:checked').val();
    
  //  var mail = $('#email').val();
    
    
    // var tel = $('#telephone').val();
    
  //   var assoc = $("select[name='association'] > option:selected").val();
    
   if(username!==""){
       
          $.get(adresse,{username:username},function(){
        
        
        
    },'json');
    
   }
    
 
    
}


