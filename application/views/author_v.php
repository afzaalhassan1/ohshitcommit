<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        This is sooo right!
      </div>
        <h3>My awesome picture!</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <img src="http://placehold.it/250x250&text=PROFILE PIC">
      <br />
      <strong>Name:</strong> <?php echo $author_name; ?><br />
      <div class="row">
        <div class="col-md-6"> 
          FIRST
        </div>
        <div class="col-md-6"> 
          SECOND
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <div class="well well-sm">
              <p class="bg-primary">
                <h3>My repositories</h3>
              </p>
            </div>
          </table>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">

            <div class="panel-heading">
              Top dumb commit
            </div>
            <div class="panel-body">
              "LOL, this shit is funny"
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Search!</button>
        <input type="text" class="form-control" placeholder="Search for commits using keywords">
      </span>
      <input type="text" class="form-control">
    </div><!-- /input-group -->
    <div class="progress progress-striped active">
      <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
        <span class="sr-only">45% Complete</span>
      </div>
    </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
