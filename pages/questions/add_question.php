    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panneau</a></li>
        <li><a href="#">Questions</a></li>
        <li class="active">Edition</li>
      </ol>
    </section>


  <!-- Main content -->
    <section class="content">

 <a href="?url=quest/question" > <i class=" glyphicon glyphicon-arrow-left" ></i> retour a la liste des questions</a>

      <!-- SELECT2 EXAMPLE -->
<!--      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

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
              <h3 class="box-title">Saisir votre question
                <small>ci dessous</small>
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
              <form>
                <textarea class="textarea" placeholder="Place some text here" id="textArea"
                          style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
      
      
      
      
       <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><a id="add" href=""><i class="text-success glyphicon glyphicon-plus-sign"></i> ajouter des reponses </a></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label>Reponse 1</label>
                
                <input  class="form-control select2" id='rep1' style="width: 100%;">
                
              </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
            </div>
              
               <div class="col-md-2">
                   
              <div class="form-group">
                  
                <label>Est Vrai?</label>
                
                <input  class=""  name="optradio"  type="radio" style="width: 100%;">
                
              </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-10">

              <!-- /.form-group -->
              <div  class="form-group">
                   
                <label>Reponse 2</label>
                
                <input class="form-control select2" id='rep2' style="width: 100%;">
                 
              </div>
              
              <!-- /.form-group -->
            </div>
            
            
                 <div class="col-md-2">
                   
              <div class="form-group">
                  
                  <label style="text-align: center;">Est Vrai?</label>
                
                <input  class=""  name="optradio"  type="radio" style="width: 100%;">
                
              </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
            </div>
            
             <div class="col-md-10">

              <!-- /.form-group -->
              <div id="rep" class="form-group">
                   
                <label>Reponse 3</label>
                
                <input class="form-control select2" id='rep3'  style="width: 100%;">
                 
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
               <div class="col-md-2">
                   
              <div class="form-group">
                  
                <label>Est Vrai?</label>
                
                <input  class=""  name="optradio"  type="radio" style="width: 100%;">
                
              </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
      
        </div>
      </div>
      
      <div class="row">
          
         
          
          
        <div class="col-md-12">

        <div class="pull pull-right">
              
              <button class="btn btn btn-primary" id="addquestion" > ajouter une question  </button> 
                       
          </div>

        
        </div>
       
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
    
     <script src="../assets/js/control/question.js"></script>