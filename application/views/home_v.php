<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-condensed table-hover">
        <thead>
          <tr>
            <th>Commit message</th>
            <th>Author</th>
            <th>Commit Date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($my_commits as $commit): ?>
            <tr>
              <td><?php echo $commit['message']; ?></td>
              <td><?php echo $commit['name']; ?></td>
              <td><?php echo $commit['commit_date']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>      
      </table>
      <div class="row">
        <div class="col-lg-6">
          <div class="dropdown">
            <button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
              Dropdown
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Search</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Search keywords</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading"> Username table</div>
        <div class="panel-body">
          "Username"
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Enter a Commit</h3>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" action="/commit/new_commit" method="POST" >
            <div class="form-group">
              <label class="col-sm-2 control-label">Commit Message</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="message" placeholder="Enter your message">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          <span class="sr-only">60% Complete</span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-3">
    </div>
  </div>
</div>