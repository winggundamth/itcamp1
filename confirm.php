<?
	$title = "register";
	require_once("include/header.php");
	require_once("include/calendar.php");
	require_once("include/menu.php");
	require_once("include/title.php");
?>

<!-- Start :  Body : Content -->
<!-- Submit -->
													<form name="register" method="post" action="submit.php">
<!-- Page 1 -->
													<input type="hidden" name="picture" value="<?echo $_POST["picture"];?>">
													<input type="hidden" name="title" value="<?echo $_POST["title"];?>">
													<input type="hidden" name="firstname" value="<?echo $_POST["firstname"];?>">
													<input type="hidden" name="lastname" value="<?echo $_POST["lastname"];?>">
													<input type="hidden" name="nickname" value="<?echo $_POST["nickname"];?>">
													<input type="hidden" name="birthday" value="<?echo $_POST["birthday"];?>">
													<input type="hidden" name="age" value="<?echo $_POST["age"];?>">
													<input type="hidden" name="blood" value="<?echo $_POST["blood"];?>">
													<input type="hidden" name="region" value="<?echo $_POST["region"];?>">
													<input type="hidden" name="address" value="<?echo $_POST["address"];?>">
													<input type="hidden" name="phone" value="<?echo $_POST["phone"];?>">
													<input type="hidden" name="mobile" value="<?echo $_POST["mobile"];?>">
													<input type="hidden" name="emerphone" value="<?echo $_POST["emerphone"];?>">
													<input type="hidden" name="email" value="<?echo $_POST["email"];?>">
													<input type="hidden" name="education" value="<?echo $_POST["education"];?>">
													<input type="hidden" name="school" value="<?echo $_POST["school"];?>">
													<input type="hidden" name="gpa" value="<?echo $_POST["gpa"];?>">
													<input type="hidden" name="schooladdress" value="<?echo $_POST["schooladdress"];?>">
													<input type="hidden" name="schoolprov" value="<?echo $_POST["schoolprov"];?>">
													<input type="hidden" name="schoolphone" value="<?echo $_POST["schoolphone"];?>">
													<input type="hidden" name="disease" value="<?echo $_POST["disease"];?>">
													<input type="hidden" name="food_not" value="<?echo $_POST["food_not"];?>">
													<input type="hidden" name="friend1" value="<?echo $_POST["friend1"];?>">
													<input type="hidden" name="friend1_phone" value="<?echo $_POST["friend1_phone"];?>">
													<input type="hidden" name="friend2" value="<?echo $_POST["friend2"];?>">
													<input type="hidden" name="friend2_phone" value="<?echo $_POST["friend2_phone"];?>">
<!-- Page 2 -->
													<input type="hidden" name="know" value="<?echo $_POST["know"];?>">
													<input type="hidden" name="know_etc" value="<?echo $_POST["know_etc"];?>">
													<input type="hidden" name="os" value="<?echo $_POST["os"];?>">
													<input type="hidden" name="os_etc" value="<?echo $_POST["os_etc"];?>">
													<input type="hidden" name="program_adobe" value="<?echo $_POST["program_adobe"];?>">
													<input type="hidden" name="program_adobe_etc" value="<?echo $_POST["program_adobe_etc"];?>">
													<input type="hidden" name="program_macromedia" value="<?echo $_POST["program_macromedia"];?>">
													<input type="hidden" name="program_macromedia_etc" value="<?echo $_POST["program_macromedia_etc"];?>">
													<input type="hidden" name="program_microsoft" value="<?echo $_POST["program_microsoft"];?>">
													<input type="hidden" name="program_microsoft_etc" value="<?echo $_POST["program_microsoft_etc"];?>">
													<input type="hidden" name="program_etc" value="<?echo $_POST["program_etc"];?>">
													<input type="hidden" name="programming_ever" value="<?echo $_POST["programming_ever"];?>">
													<input type="hidden" name="programing_programing" value="<?echo $_POST["programing_programing"];?>">
													<input type="hidden" name="programing_programing_etc" value="<?echo $_POST["programing_programing_etc"];?>">
													<input type="hidden" name="programing_web" value="<?echo $_POST["programing_web"];?>">
													<input type="hidden" name="programing_web_etc" value="<?echo $_POST["programing_web_etc"];?>">
													<input type="hidden" name="robot_ever" value="<?echo $_POST["robot_ever"];?>">
													<input type="hidden" name="robot_source" value="<?echo $_POST["robot_source"];?>">
													<input type="hidden" name="robot_program" value="<?echo $_POST["robot_program"];?>">
													<input type="hidden" name="robot_program_etc" value="<?echo $_POST["robot_program_etc"];?>">
<!-- Page 3 -->
													<input type="hidden" name="question1" value="<?echo $_POST["question1"];?>">
													<input type="hidden" name="question2" value="<?echo $_POST["question2"];?>">
													<input type="hidden" name="question3" value="<?echo $_POST["question3"];?>">
													<input type="hidden" name="question4" value="<?echo $_POST["question4"];?>">
													<input type="hidden" name="question5_1" value="<?echo $_POST["question5_1"];?>">
													<input type="hidden" name="question5_2" value="<?echo $_POST["question5_2"];?>">
													<input type="hidden" name="question5_3" value="<?echo $_POST["question5_3"];?>">
													<input type="hidden" name="question5_4" value="<?echo $_POST["question5_4"];?>">
													<input type="hidden" name="question6_choose" value="<?echo $_POST["question6_choose"];?>">
													<input type="hidden" name="question6" value="<?echo $_POST["question6"];?>">
													<input type="hidden" name="question7" value="<?echo $_POST["question7"];?>">
<?
	require_once("include/footer.php");
?>
