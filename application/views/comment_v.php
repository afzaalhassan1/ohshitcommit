<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1><?php echo $orig_commit['message']; ?></h1>
        <h2><small> <?php echo $orig_commit['commit_date']; ?></small></h2>
        <div class="row">
          <div class="col-md-4">
            <p><?php echo $orig_commit['name']; ?></p>
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
          <?php foreach ($comments as $single_comment): ?>
            <tr>
              <td><?php echo $single_comment['comment']; ?> </td>
              <td><?php echo $single_comment['author']; ?></td>
              <td><?php echo $single_comment['vote']; ?></td>
              <td><?php echo $single_comment['comment_date']; ?></td>
            </tr>
          <?php endforeach; ?>
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
          <form class="form-horizontal" role="form" action="/comment/add_comment" method="POST" >
            <input type="hidden" name="commit_id" value="<?php echo $orig_commit['id']; ?>">
            <div class="form-group">
              <label class="col-sm-2 control-label">Comment Message</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="comment" placeholder="Enter your message">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="author" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-success" name = "vote" value = "Yay"> Yay!</button> 
                <button type="submit" class="btn btn-danger" name = "vote" value = "Nay" >Nay!</button>
                <button type="submit" class="btn btn-info" name = "vote" value = "Whateves"> Whatevs</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>






