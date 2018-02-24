   
<section class="content-header">
      <h1>
        LISTE DES ETUDIANTS
<!--        <small>advanced tables</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Utilisateurs</a></li>
        <li><a href="#">Liste</a></li>
        <li class="active">Etudiants</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<!--            <a href="?url=dash/sub" > <i class=" text-success glyphicon glyphicon-plus " ></i> ajouter un nouvel etablissement</a>-->
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
<!--              <h3 class="box-title">Data Table With Full Features</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    
                  <th>Nom & Prenom </th>
                  <th>Date de naissance </th>
                   <th>Membre depuis le  </th>
                    <th>Est autorise?  </th>
                    <th>Acces  </th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                 
                </tr>
                </thead>
                <tbody id="sub_dis">
                
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
    
    <div id="dialog-message" title="Information sur l'utilisateur"></div>
    
      <div id="confirm-dial" title="Supprimer cet element ?" ></div>
      

    <script src="../assets/js/control/student_info.js"></script>