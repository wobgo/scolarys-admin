
   <section class="content-header">
      <h1>
        ASSISTANCE
<!--        <small>13 new messages</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panneau</a></li>
        <li class="active">Compose</li>
      </ol>
    </section>

    <!-- Main content -->





   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-2">
          <a href="?url=oth/ass" class="btn btn-primary btn-block margin-bottom">retour</a>

<!--          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
             /.box-body 
          </div>
           /. box -->
<!--          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
             /.box-header 
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
             /.box-body 
          </div>-->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-10">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Assistance</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                  <select name="receiver"  class="form-control">
                      <option>Destinataire</option>
                  </select>
              </div>
              <div class="form-group">
                <input class="form-control" id="sujet" placeholder="Sujet:">
              </div>
              <div class="form-group">
                    <textarea id="compose" class="form-control" style="height: 200px">
                     
                    </textarea>
              </div><p  class="help-block" id="msg"></p>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachement
                  <input type="file" id="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
                
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
<!--                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>-->
                <button type="submit" id="send" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Envoyer</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Annuler</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
        <script src="../fileUpload/js/upload.js" type="text/javascript"></script>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <script src="../assets/js/control/assistance.js" type="text/javascript"></script>