<section class="content-header">
      <h1>
        Table de Donnees Lessons
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panneau</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Lessons</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <a href="?url=lesson_add" >  <i class=" text-success glyphicon glyphicon-plus " ></i>  ajouter un cours</a>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Table de Donnees</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Classe</th>
                  <th>Matiere</th>
                  <th>Chapitre</th>
                  <th></th>
                  
                </tr>
                </thead>
                <tbody id='lesson'>
               
            </tbody>
                <tfoot>
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div id="confirm-dial" title="Supprimer cet element ?" ></div>
    
     <script src="../assets/js/control/lesson.js"></script>