<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1><?php echo $orig_commit['message']; ?></h1>
        <h2><small>2014-01-01</small></h2>
        <div class="row">
          <div class="col-md-4">
            <p>Name</p>
          </div>
          <div class="col-md-4">
            <p>UserName</p>
          </div>
          <div class="col-md-4">
            <p>Email</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-condensed table-hover">
        <thead>
          <tr>
            <th>Comment message</th>
            <th>Author</th>
            <th>Funny, Yay, Nay or Whatevs</th>
            <th>Comment Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>This commit sucks, not funny at all</td>
            <td>Afzaal</td>
            <td>Nay!</td>
            <td>2014-05-15</td>
          </tr>
        </tbody>      
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Enter a Comment</h3>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" action="/commit/new_commit" method="POST" >
            <div class="form-group">
              <label class="col-sm-2 control-label">Comment Message</label>
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
              <div class="col-sm-12 text-right">
                <button type="button" class="btn btn-success">Yay!</button>
                <button type="submit" class="btn btn-danger">Nay!</button>
                <button type="submit" class="btn btn-info">Whatevs</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>






