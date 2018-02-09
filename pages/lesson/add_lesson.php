  <section class="content-header">
      <h1>
        Ajout des Lessons
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panneau</a></li>
        <li><a href="#">Lesson</a></li>
        <li class="active">Ajout</li>
      </ol>
    </section>


 <section class="content">
     
       
     
     
     
      <div class="row">
        <div class="col-md-12">
            <a href="?url=lesson"><i class=" glyphicon glyphicon-arrow-left" ></i> retour a la liste</a>
<!--          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
               tools box 
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
               /. tools 
            </div>
             /.box-header 
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              </form>
            </div>
          </div>-->
          <!-- /.box -->
          
          
          
          
          
          
<div class="box box-default">
        <div class="box-header with-border">
              
          <h3 class="box-title">Ajout de cours</h3>

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
                <label>Titre du Cours </label>
                
                <input id='title_lesson' class="form-control select2" style="width: 100%;">
                 
              </div>
             
            </div>
          
          </div>
          <!-- /.row -->
        </div>
        
        <!-- /.box-body -->
        <div class="box-footer">
<!--          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.-->
        </div>
      </div>
      
          
          
              <!-- SELECT2 EXAMPLE -->
<!--      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajout de Lessons</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
         /.box-header 
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Matiere </label>
                <select id="matiere" class="form-control select2" style="width: 100%;">
                  <option >Choisir une Matiere</option>
                  
                </select>
              </div>
               /.form-group 
              <div class="form-group">
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
              </div>
               /.form-group 
            </div>
             /.col 
            <div class="col-md-6">
              <div class="form-group">
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
              </div>
               /.form-group 
              <div class="form-group">
                <label>Chapitre</label>
                <select id="chap" class="form-control select2" style="width: 100%;">
                  <option>Choisir le chapitre</option>
                 
                </select>
              </div>
               /.form-group 
            </div>
             /.col 
          </div>
           /.row 
        </div>
         /.box-body 
        <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>-->
      <!-- /.box -->
          
          
          
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Saisir votre cours
                <small>Ci dessous</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                  
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             
                <textarea id="textArea" class="textarea" placeholder="Place some text here"
                      style="width: 100%; height: 180px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
     
        <div class="row">
          
         
          
          
        <div class="col-md-12">

        <div class="pull pull-right">
              
              <button class="btn btn btn-primary"  id="addlesson"  >ajouter une le&#231;on  </button> 
                       
          </div>
            
        
        </div>
       
      </div>

      <!-- /.row -->
      <!-- ./row -->
    </section>  


<script src="../assets/js/control/lesson.js" type="text/javascript"></script>