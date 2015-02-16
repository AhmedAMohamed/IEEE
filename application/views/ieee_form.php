<div id="cont">
<?php 
$this->load->helper("form");
echo form_open_multipart(base_url(). "index.php/home/submit_form");
///
echo $message ;
echo "<br>";
echo validation_errors();

echo form_label("Full Name: ","full_name");
$data = array(
	"name" => "full_name",
	"id" => "full_name",
	'style'       => 'width:20%',
	"Value" => ""
);

echo form_input($data);
///
echo form_label("Email: ","mail");
$data = array(
	"name" => "mail",
	"id" => "mail",
	'style'       => 'width:20%',
	"Value" => "",
	"type" => "email"
);

echo form_input($data);
///
echo form_label(" <br> University: ","uni");
$university = array(
	"ain shams" => "Ain Shams University", 
	
	"Cairo" => "Cairo University",
	"oth" => "other",
);
echo form_dropdown("University",$university);

//
echo form_label(" <br> Faculty: ","fa");
$faculty = array(
	"ENg" => "Engineering", 
	"oth" => "other",
);
echo form_dropdown("Faculty",$faculty);
////

echo form_label(" <br> Department: ","dep");
$depart = array(
	"Dep" => "Electronics and Communications", 
	"oth" => "other",
);
echo form_dropdown("Department",$depart);
///
echo form_label(" <br> Studying Year: ","year");
$year = array(
	"y1" => "1st", 
	"y2" => "2nd",
	"y3" => "3rd",
	"y4" => "4th",
	"y" => "preparatory",
);
echo form_dropdown("Year",$year);

///
echo form_label(" <br> Grade: ","grade");
$data = array(
	"name" => "grade",
	"id" => "grade",
	"Value" => ""
);
echo form_input($data);


///
echo form_label(" <br> IEEE Student branch volunteer: ","vl");
echo form_label(' <br> Yes', 'did');
echo form_radio('did','YES',True);
echo form_label('<br> No ', 'did');  
echo form_radio('did','NO'); 

///
echo form_label("<br> Extracurricular activities: ","extr");

$data = array(
	"name" => "extr",
	"id" => "extr",
	'rows' => '2',
	'cols'=>'40',
	"Value" => ""
);

echo form_textarea($data);

///
echo form_label("<br> Related technical course you previously attended: ","course");

$data = array(
	"name" => "course",
	"id" => "course",
	'rows' => '2',
	'cols'=>'40',
	"Value" => ""
);

echo form_textarea($data);
///
echo form_label("<br> National ID number: ","na_id");

$data = array(
	"name" => "na_id",
	"id" => "na_id",
		'style'  => 'width:25%',

	"Value" => ""
);
echo form_input($data);
////
echo form_label(" <br>Upload Your CV : ","CV");
$data = array(
	"name" => "CV",
	"id" => "CV",
	"Value" => ""
);
echo form_upload($data);
///
echo form_label(" <br> Comments: ","comm");

$data = array(
	"name" => "comm",
	"id" => "comm",
	'rows' => '2',
	'cols'=>'40',
	"Value" => ""
);

echo form_textarea($data);
////
$code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
$data = array(
	"name" => "code",
	"type" => "hidden",
	"value" => $code
);
echo form_input($data);
///
echo form_submit('Submit','submit');

echo form_close();
?>
</div>
