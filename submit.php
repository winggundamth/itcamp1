<?
	$title = "register";
	require_once("include/header.php");
	require_once("include/calendar.php");
	require_once("include/menu.php");
	require_once("include/title.php");

	// Initial
	$picture=$_POST["picture"];
	$title=$_POST["title"];
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$nickname=$_POST["nickname"];
	$birthday=$_POST["birthday"];
	$age=$_POST["age"];
	$blood=$_POST["blood"];
	$region=$_POST["region"];
	$address=$_POST["address"];
	$phone=$_POST["phone"];
	$mobile=$_POST["mobile"];
	$emerphone=$_POST["emerphone"];
	$email=$_POST["email"];
	$education=$_POST["education"];
	$school=$_POST["school"];
	$gpa=$_POST["gpa"];
	$schooladdress=$_POST["schooladdress"];
	$schoolprov=$_POST["schoolprov"];
	$schoolphone=$_POST["schoolphone"];
	$disease=$_POST["disease"];
	$food_not=$_POST["food_not"];
	$friend1=$_POST["friend1"];
	$friend1_phone=$_POST["friend1_phone"];
	$friend2=$_POST["friend2"];
	$friend2_phone=$_POST["friend2_phone"];
	$know=$_POST["know"];
	$know_etc=$_POST["know_etc"];
	$os=$_POST["os"];
	$os_etc=$_POST["os_etc"];
	$program_adobe=$_POST["program_adobe"];
	$program_adobe_etc=$_POST["program_adobe_etc"];
	$program_macromedia=$_POST["program_macromedia"];
	$program_macromedia_etc=$_POST["program_macromedia_etc"];
	$program_microsoft=$_POST["program_microsoft"];
	$program_microsoft_etc=$_POST["program_microsoft_etc"];
	$program_etc=$_POST["program_etc"];
	$programming_ever=$_POST["programming_ever"];
	$programing_programing=$_POST["programing_programing"];
	$programing_programing_etc=$_POST["programing_programing_etc"];
	$programing_web=$_POST["programing_web"];
	$programing_web_etc=$_POST["programing_web_etc"];
	$robot_ever=$_POST["robot_ever"];
	$robot_source=$_POST["robot_source"];
	$robot_program=$_POST["robot_program"];
	$robot_program_etc=$_POST["robot_program_etc"];
	$question1=$_POST["question1"];
	$question2=$_POST["question2"];
	$question3=$_POST["question3"];
	$question4=$_POST["question4"];
	$question5_1=$_POST["question5_1"];
	$question5_2=$_POST["question5_2"];
	$question5_3=$_POST["question5_3"];
	$question5_4=$_POST["question5_4"];
	$question6_choose=$_POST["question6_choose"];
	$question6=$_POST["question6"];
	$question7=$_POST["question7"];

// Check Duplicate
$db_host = "localhost";
$db_username = "wingth_";
$db_password = "wing0cus";
$db = "wingth_beta";
mysql_connect($db_host,$db_username,$db_password) or die("Cannot connect to mysql");
mysql_select_db($db) or die("Cannot connect to database");
$table ="";

	$sql = "INSERT INTO $table (picture,title,firstname,lastname,nickname,birthday,age,blood,region,address,phone,mobile,emerphone,email,education,school,gpa,schooladdress,schoolprov,schoolphone,disease,medicine_not,food_not,friend1,friend1_phone,friend2,friend2_phone,parent,parent_relate,parent_phone,know,know_etc,os,os_etc,program_adobe,program_adobe_etc,program_macromedia,program_macromedia_etc,program_microsoft,program_microsoft_etc,program_etc,programming_ever,programing_programing,programing_programing_etc,programing_web,programing_web_etc,robot_ever,robot_source,robot_program,robot_program_etc,question1,question2,question3,question4,question5_1,question5_2,question5_3,question5_4,question6_choose,question6,question7) VALUES('$picture', '$title', '$firstname', '$lastname', '$nickname', '$birthday', '$age', '$blood', '$region', '$address', '$phone', '$mobile', '$emerphone', '$email', '$education', '$school', '$gpa', '$schooladdress', '$schoolprov', '$schoolphone', '$disease', '$medicine_not', '$food_not', '$friend1', '$friend1_phone', '$friend2', '$friend2_phone', '$parent', '$parent_relate', '$parent_phone', '$know', '$know_etc', '$os', '$os_etc', '$program_adobe', '$program_adobe_etc', '$program_macromedia', '$program_macromedia_etc', '$program_microsoft', '$program_microsoft_etc', '$program_etc', '$programming_ever', '$programing_programing', '$programing_programing_etc', '$programing_web', '$programing_web_etc', '$robot_ever', '$robot_source', '$robot_program', '$robot_program_etc', '$question1', '$question2', '$question3', '$question4', '$question5_1', '$question5_2', '$question5_3', '$question5_4', '$question6_choose', '$question6', '$question7')";
	$db_query = mysql_db_query($db,$sql);


	

?>

<!-- Start :  Body : Content -->
<!-- Submit -->

<?
	require_once("include/footer.php");
?>
