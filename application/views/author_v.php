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
            <th>Comment Message</th>
            <th>Commit Message</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($orig_author as $one_author): ?>
            <tr>
              <td><a href="/commit/show/<?php echo $one_author['author_id']; ?>"><?php echo $one_author['comment']; ?></a> </td>
              <td><?php echo $one_author['commit']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>      
      </table>
    </div>
  </div>
</div>
