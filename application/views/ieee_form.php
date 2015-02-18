<div id="cont">
  <?php
  $this->load->helper("form");
  if (validation_errors()) {
   echo '
   <div class="a alert alert-danger alert-dismissable">
    <strong>' . $message .'</strong>'. validation_errors(). '</div>
  </div>
</div>';

}
?>

<style>
  .required:after {
    content: " *";
    color: #eb6a5a;
  }

  .required-exp:before {
    content: "* ";
    color: #eb6a5a;
  }
</style>


<div class="container">
 <div class="row">
  <div class="col-md-12">
    <h1 class="text-center">The 4G started with a 1G</h1>
    <h3 class="text-center"> Registration Form</h3>
    <h5 class="text-center required-exp">Required Field</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" role="form" action="<?= base_url(); ?>index.php/home" method="post">
      <div class="form-group">
        <div class="col-sm-3">
          <label for="full Name" class="control-label required">Full Name</label>
        </div>
        <div class="col-sm-9">
          <?php
          $data = array(
           "name" => "full_name",
           "id" => "full_name",
           'class' => 'form-control',
           "value"=> set_value('full_name')
           );
          echo form_input($data);
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="mail" class="control-label required">Email</label>
        </div>
        <div class="col-sm-9">
          <?php
          $data = array(
           "name" => "mail",
           "id" => "mail",
           "class" => 'form-control',
           "type" => "email",
           "value"=> set_value('')
           );
          echo form_input($data);
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="uni" class="control-label required">University</label>
        </div>
        <div class="col-sm-9">
          <?php
          $university = array(
           "ain shams" => "Ain Shams University",
           "Cairo" => "Cairo University",
           "oth" => "Other"
           );
          echo form_dropdown("University",$university, '', 'class="form-control"');
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="fa" class="control-label required">Faculty</label>
        </div>
        <div class="col-sm-9">
          <?php
          $faculty = array(
           "ENg" => "Engineering",
           "oth" => "Other"
           );
          echo form_dropdown("Faculty",$faculty, '', 'class="form-control"');
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="dep" class="control-label required">Department</label>
        </div>
        <div class="col-sm-9">
          <?php
          $depart = array(
           "Dep" => "Electronics and Communications",
           "oth" => "Other"
           );
          echo form_dropdown("Department",$depart, '', 'class="form-control"');
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="year" class="control-label required">Studying Year</label>
        </div>
        <div class="col-sm-9">
          <?php
          $year = array(
           "y1" => "1st",
           "y2" => "2nd",
           "y3" => "3rd",
           "y4" => "4th",
           "y" => "Preparatory"
           );
          echo form_dropdown("Year",$year, '', 'class="form-control"');
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="grade" class="control-label required">Grade</label>
        </div>
        <div class="col-sm-9">
          <?php
          $data = array(
           "excellent" => "Excellent",
           "very_good" => "Very good",
           "good" => "Good",
           "fair" => "Fair",
           "poor" => "Poor"
           );
          echo form_dropdown("grade",$data, '', 'class="form-control" id="grade"');
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="na_id" class="control-label required">National ID number </label>
        </div>
        <div class="col-sm-9">
          <?php
          $data = array(
            "name" => "na_id",
            "id" => "na_id",
            'type' => 'number',
            'class' => 'form-control',
            "value"=> set_value('')
            );
          echo form_input($data);
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="vl" class="control-label">IEEE Student branch volunteer? </label>
        </div>
        <div class="col-sm-9">
          <?php
          echo form_radio('did',1,True);
          echo " ";
          echo form_label(' <br> Yes', 'did');
          echo "<br>";
          echo form_radio('did',0);
          echo " ";
          echo form_label('<br> No ', 'did');
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="CV" class="control-label">Link to your CV</label>
        </div>
        <div class="col-sm-9">
          <?php
          $data = array(
            "name" => "CV",
            "id" => "CV",
            "type" => "url",
            "class" => "form-control"
            );
          echo form_input($data);
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="extr" class="control-label">Extracurricular activities</label>
        </div>
        <div class="col-sm-9">
          <?php
          $data = array(
            "name" => "extr",
            "id" => "extr",
            'rows' => '3'
            );

          echo form_textarea($data);

          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="course" class="control-label">Related courses you attended</label>
        </div>
        <div class="col-sm-9">
          <?php
          $data = array(
            "name" => "course",
            "id" => "course",
            'rows' => '3'
            );

          echo form_textarea($data);
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-3">
          <label for="comm" class="control-label">Comments</label>
        </div>
        <div class="col-sm-9">
          <?php

          $data = array(
            "name" => "comm",
            "id" => "comm",
            'rows' => '3',
            'cols'=>'40'
            );

          echo form_textarea($data);
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
          <?php
          $code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
          $data = array(
           "name" => "code",
           "type" => "hidden",
           "value" => $code
           );
           echo form_input($data); ?>
           <button type="submit" name ="submit"class="btn btn-default btn-block">Submit</button>
         </div>
       </div>
     </form>
   </div>
 </div>
</div>