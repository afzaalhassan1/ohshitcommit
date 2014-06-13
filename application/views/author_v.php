<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1><?php echo $orig_commit['name']; ?></h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-condensed table-hover">
        <thead>
          <tr>
            <th>Commit Message</th>
            <th>Comment Message</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($commits as $commit): ?>
            <tr>
              <td><?php echo $commit['message']; ?> </td>
            </tr>
          <?php endforeach; ?>
          <?php foreach ($comments as $comment): ?>
            <tr>
              <td><?php echo $comment['comment']; ?> </td>
            </tr>
          <?php endforeach; ?>
        </tbody>      
      </table>
    </div>
  </div>
</div>
