<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SCOLARYS | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/js/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/js/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/js/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
     <!--  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/dist/css/skins/_all-skins.min.css">


<!--                          
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap2/bootstrap-switch.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js"></script>
  -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script  src="http://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>

<!--  <link rel="stylesheet" href="/resources/demos/style.css">-->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

      
  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!--  <link rel="stylesheet" href="/resources/demos/style.css">-->
 
  
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    
 <!--  header include -->
 
 <?php if($_SESSION['control']== '1'){
     
     include './headers/operate_head.php';
     
 } else if ($_SESSION['control']== '2') {
     
     include './headers/parent_head.php';
    
}else {
     

       include './headers/admin_head.php'; 
 }
?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  
  <!--  menu include   --->
  
  <?php if($_SESSION['control']== '0'){ 
      
        include_once './menus/menu_admin.php';
        
  } else if ($_SESSION['control']== '1') {
     
      require './menus/operate_menu.php';
      
  }else{
      
      include './menus/parent_menu.php';
      
     } ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <?php if($_GET['url']=='lesson_add'){ include './lesson/add_lesson.php';} ?>
   

     <?php if($_GET['url']=='lesson'){ include './lesson/datagrid_lesson.php';} ?>
    
    
    <?php if($_GET['url']=='user/parent'){ include './users/parent/parent.php';} ?>
    
    
    <?php if($_GET['url']=='user/student'){ include './users/student/student.php';} ?> 
    
    
   <?php if($_GET['url']=='quest/question'){ include './questions/datagrid_question.php';} ?> 
    
    
    <?php if($_GET['url']=='question_add'){ include './questions/add_question.php';} ?> 
    
    
    <?php if($_GET['url']=='user/support'){ include './users/ad_support/datagrid_support.php';} ?>
    
      
   <?php if($_GET['url']=='support/add'){ include './users/ad_support/add_support.php';} ?> 
    
     
    <?php if($_GET['url']=='settings'){ include './others/profile/settings.php';} ?>
    
    
    <?php if($_GET['url']=='dash/chap'){ include './dash/chapiter/datagrid_chap.php';} ?>
    
    
    <?php if($_GET['url']=='dash/sub'){ include './dash/subject/datagrid_subject.php';} ?>
    
    
     <?php if($_GET['url']=='sub/add'){ include './dash/subject/add_subject.php';} ?>
    
    
     <?php if($_GET['url']=='dash/school'){ include './dash/school/datagrid_school.php';} ?>
    
    
     <?php if($_GET['url']=='school/add'){ include './dash/school/add_school.php';} ?>
    
    
     <?php if($_GET['url']=='chap/add'){ include './dash/chapiter/add_chap.php';} ?>
    
     
     <?php if($_GET['url']=='dash/level'){ include './dash/level/datagrid_level.php';} ?>
    
    
     <?php if($_GET['url']=='level/add'){ include './dash/level/add_level.php';} ?>
    
    
     <?php if($_GET['url']=='link/add'){ include './link/datalink_class.php';} ?>
    
    
     <?php if($_GET['url']=='add/class_mat'){ include './link/linkadd_class.php';} ?>
    
    
      <?php if($_GET['url']=='oth/ass'){ include './others/assistance/datagrid_assist.php';} ?>
    
    
     <?php if($_GET['url']=='ass/comp'){ include './others/assistance/assis_compose.php';} ?>
    
    
       <?php if($_GET['url']=='get/help'){ include './others/assistance/get_help.php';} ?>
    
    
    
     <?php if($_GET['url']=='info'){ include './others/info/informations.php';} ?>
    
    
     
     <?php if($_GET['url']=='contribution'){ include './others/contribution/contrib.php';} ?>
    
    
    
     <?php if($_GET['url']=='parent/student'){ include './parent/mystudent.php';} ?>
    
    
    
       <?php if($_GET['url']=='parent/add'){ include './parent/add_student.php';} ?>
    
    
    
    
       <?php if($_GET['url']=='parent/prog'){ include './parent/progress.php';} ?>
    
    
    
       <?php if($_GET['url']=='read/help'){ include './others/assistance/read_assist.php';} ?>
    
    
       <?php if($_GET['url']=='publication'){ include './share/partage.php';} ?>
    
    
    
      <?php if($_GET['url']=='user/logout'){ include './../globals/logout.php';} ?>
    
    
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
      
    <div class="pull-right hidden-xs">
        
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">ATS services</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- --> 
<!-- jQuery 3 -->
<script src="../assets/js/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/js/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/js/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/js/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/css/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes 
<script src="../assets/css/dist/js/demo.js"></script>-->

<!--<script src="../assets/js/bower_components/ckeditor/ckeditor.js"></script>-->
<!-- Bootstrap WYSIHTML5
<script src="../assets/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- DATA TABLES -->
<script src="../assets/js/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="../assets/js/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
<!--  <link rel="stylesheet" href="/resources/demos/style.css">-->
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
 
<script>
//  $(function () {
//    // Replace the <textarea id="editor1"> with a CKEditor
//    // instance, using default configuration.
//    CKEDITOR.replace('editor1')
//    //bootstrap WYSIHTML5 - text editor
//    $('.textarea').wysihtml5();
//    
//    $('.sidebar-menu').tree();
//    
//    $('#example2').DataTable({
//      'paging'      : true,
//      'lengthChange': false,
//      'searching'   : false,
//      'ordering'    : true,
//      'info'        : true,
//      'autoWidth'   : false
//    });
//    
//    
//  })

 
</script>
</body>
</html>