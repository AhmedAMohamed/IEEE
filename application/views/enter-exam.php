 <?php
 if ($error == 1 ) {
  echo '
    <div class="a alert alert-danger alert-dismissable">
            <strong>Error</strong>Rewite your right mail or right code</div>
        </div>
</div>';

}
 ?>
 <div class="container">
 <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Enter the Exam</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" role="form" method="POST" >
            <div class="form-group">
              <div class="col-sm-2">
                <label for="inputEmail3" class="control-label">Email</label>
              </div>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="inputPassword3" class="control-label">Code</label>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="code" id="inputPassword3" placeholder="Code">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enter the Exam</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>