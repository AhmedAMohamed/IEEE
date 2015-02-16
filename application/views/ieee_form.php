<div id="cont">
<?php 
$this->load->helper("form");
?>
<div class="a alert alert-danger alert-dismissable">
            <strong><?= $message ?></strong><?= validation_errors(); ?></div>
        </div>
</div>

 <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" role="form" action="<?= base_url()  ; ?>index.php/home/submit_form" method="post">
            <div class="form-group">
              <div class="col-sm-2">
                <label for="full Name" class="control-label">Full Name</label>
              </div>
              <div class="col-sm-10">
                <?php 
                $data = array(
	"name" => "full_name",
	"id" => "full_name",
	'class' => 'form-control',
	"Value" => ""
	);
	echo form_input($data);
                ?>
              </div>
            </div>
           <div class="form-group">
              <div class="col-sm-2">
                <label for="mail" class="control-label">Email</label>
              </div>
              <div class="col-sm-10">
                <?php 
                $data = array(
	"name" => "mail",
	"id" => "mail",
	"class" => 'form-control',
	"Value" => "",
	"type" => "email"
	);
                echo form_input($data);
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="uni" class="control-label">University</label>
              </div>
              <div class="col-sm-10">
                <?php 
                $university = array(
	"ain shams" => "Ain Shams University", 
	"class" => "form-control",
	"Cairo" => "Cairo University",
	"oth" => "other",
	);
	echo form_dropdown("University",$university);
                ?>
              </div>
            </div>
              <div class="form-group">
              <div class="col-sm-2">
                <label for="fa" class="control-label">Faculty</label>
              </div>
              <div class="col-sm-10">
                <?php 
	$faculty = array(
	"ENg" => "Engineering", 
	"oth" => "other",
	);
	echo form_dropdown("Faculty",$faculty);
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="dep" class="control-label">Department</label>
              </div>
              <div class="col-sm-10">
                <?php 
	$depart = array(
	"Dep" => "Electronics and Communications", 
	"oth" => "other",
	);
	echo form_dropdown("Department",$depart);
                ?>
              </div>
            </div>
             <div class="form-group">
              <div class="col-sm-2">
                <label for="year" class="control-label">Studying Year</label>
              </div>
              <div class="col-sm-10">
                <?php 
	$year = array(
	"y1" => "1st", 
	"y2" => "2nd",
	"y3" => "3rd",
	"y4" => "4th",
	"y" => "preparatory",
	);
	echo form_dropdown("Year",$year);
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="grade" class="control-label">Grade</label>
              </div>
              <div class="col-sm-10">
                <?php 
	$data = array(
	"name" => "grade",
	"id" => "grade",
	"class" => 'form-control',
	"Value" => ""
	);
	echo form_input($data);
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="vl" class="control-label">IEEE Student branch volunteer </label>
              </div>
              <div class="col-sm-10">
                <?php 
	echo form_label(' <br> Yes', 'did');
	echo form_radio('did','YES',True);
	echo form_label('<br> No ', 'did');  
	echo form_radio('did','NO'); 
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="extr" class="control-label">Extracurricular activities</label>
              </div>
              <div class="col-sm-10">
                <?php 
	$data = array(
		"name" => "extr",
		"id" => "extr",
		'rows' => '2',
		"Value" => ""
	);

	echo form_textarea($data);

                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="course" class="control-label">Related technical course you previously attended </label>
              </div>
              <div class="col-sm-10">
                <?php 
	$data = array(
		"name" => "course",
		"id" => "course",
		'rows' => '2',
		"Value" => ""
	);

	echo form_textarea($data);
                ?>
              </div>
            </div>
              <div class="form-group">
              <div class="col-sm-2">
                <label for="na_id" class="control-label">National ID number </label>
              </div>
              <div class="col-sm-10">
                <?php 

	$data = array(
		"name" => "na_id",
		"id" => "na_id",
		'type' => 'number',
		"Value" => "",
		'class' => 'form-control'
	);
	echo form_input($data);
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="CV" class="control-label">Upload Your CV </label>
              </div>
              <div class="col-sm-10">
                <?php 
	$data = array(
		"name" => "CV",
		"id" => "CV",
		"Value" => ""
	);
	echo form_upload($data);
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="comm" class="control-label">Comments</label>
              </div>
              <div class="col-sm-10">
                <?php 

	$data = array(
		"name" => "comm",
		"id" => "comm",
		'rows' => '2',
		'cols'=>'40',
		"Value" => ""
	);

	echo form_textarea($data);
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <?php 
              $code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
	$data = array(
	"name" => "code",
	"type" => "hidden",
	"value" => $code
	);
	echo form_input($data); ?>
                <button type="submit" class="btn btn-default">Sign in</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>