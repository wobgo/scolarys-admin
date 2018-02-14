  <section class="content-header">
      <h1>
        AJOUTS DE PLANNING
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panneau</a></li>
        <li><a href="#">Planning</a></li>
        <li class="active">Ajout</li>
      </ol>
    </section>



  <!-- Main content -->
    <section class="content">
<a href="?url=publication" > <i class=" glyphicon glyphicon-arrow-left" ></i> retour a la liste des planning</a>   
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
                <label>Date Debut</label>
                 <div class='input-group date' type='text'  id='datetimepicker2'>
                   <input id='dateb' class="datepicker form-control select2">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            
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
               
                  <label>Date Fin</label>
            
            
                <div class='input-group date' id='datetimepicker2'>
                   <input  type='text' id='datefin'  class="datepicker form-control select2">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            
                     
              
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
                
                
                    
                    <table class="table table-bordered table-striped">
                        
                         <thead>
                                <tr>
                                  <th></th>
                                  <th>Niveau</th>
                                  <th>Matiere</th>
                                  <th>Chapitre</th>
                                  <th>Le&#231;on</th>
                                </tr>
                           </thead>
                           
                           <tbody id='sub_dis'></tbody>
                           
                           <tfoot>

                           </tfoot>
                           
                    </table>
                    
                </div>
                
           
                
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
   <!--       <div class="box-footer">
        Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>-->
     
      
      <div class="row">
          
         
          
          
        <div class="col-md-12">

         <div class="pull pull-right">
              
            <button class="btn btn btn-primary" id="addplan" > Ajouter un programme </button> 
                       
          </div>

        
        </div>
       
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  
  <script src="../assets/bootstrap/bootstrap-datepicker.fr.min.js" type="text/javascript"></script> 
    <script>
      $('.datepicker').datepicker({
        language: 'fr'
      });
    </script>
    
  <script src="../assets/js/control/publication.js"></script>
 