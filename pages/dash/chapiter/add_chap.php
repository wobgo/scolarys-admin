  <section class="content-header">
      <h1>
        AJOUTS DES CHAPITRES
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panneau</a></li>
        <li><a href="#">Chapitre</a></li>
        <li class="active">Ajout</li>
      </ol>
    </section>



  <!-- Main content -->
    <section class="content">
<a href="?url=dash/chap" > <i class=" glyphicon glyphicon-arrow-left" ></i> retour a la liste des chapitres</a>   
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Niveau</label>
                <select id="nivo"  name="niveau" class="form-control select2" style="width: 100%;">
                  <option   >Choisir un niveau</option>
                  
                </select>
              </div>
              <!-- /.form-group -->
<!--              <div class="form-group">
                <label>Disabled</label>
                <select class="form-control select2" disabled="disabled" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>-->
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
<!--              <div class="form-group">
                <label>Multiple</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>-->
              <!-- /.form-group -->
              <div class="form-group">
               
                  <label>Matiere</label>
            
                     <select id="Matchap"  name='matiere' class="form-control select2" style="width: 100%;">
                
                    <option>Choisir le chapitre</option>
                 
                </select>
              
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <a href="https://select2.github.io/"></a> 
        </div>
      </div>
      <!-- /.box -->

  
      
       <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
<!--            <h3 class="box-title"><a id="add" href=""><i class="text-success glyphicon glyphicon-plus-sign"></i> ajouter des reponses </a></h3>-->

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Chapitre</label>
                
                <input id="chapo"  class="form-control select2" style="width: 100%;">
                
              </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
<!--            <div class="col-md-12">

               /.form-group 
              <div id="rep" class="form-group">
                   
                <label>Reponse 2</label>
                
                <input class="form-control select2" style="width: 100%;">
                 
              </div>
               /.form-group 
            </div>-->
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
<!--          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.-->
        </div>
      </div>
      
      <div class="row">
          
         
          
          
        <div class="col-md-12">

        <div class="pull pull-right">
              
            <button class="btn btn btn-primary" id="addchap" > Ajouter un chapitre </button> 
                       
          </div>

        
        </div>
       
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
    
  <script src="../assets/js/control/chapiter.js"></script>