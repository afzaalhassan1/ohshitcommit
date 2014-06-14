<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1><?php echo $authorname; ?></h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <table class="table table-striped table-condensed table-hover">
        <thead>
          <tr>
            <th>Commit Message</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($commits as $commit): ?>
            <tr>
              <td><?php echo $commit['message']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table table-striped table-condensed table-hover">
        <thead>
          <tr>
            <th>Comment Message</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($comments as $comment): ?> 
              <td><?php echo $comment['comment']; ?> </td>
            </tr>
          <?php endforeach; ?>
        </tbody>      
      </table>
    </div>
  </div>
</div>
