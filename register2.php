<?
	$title = "register";
	require_once("include/header.php");
	require_once("include/calendar.php");
	require_once("include/menu.php");
	require_once("include/title.php");
?>
<!-- Start :  Body : Content -->
<!-- Page2-->
													<form name="register" method="post" action="register3.php">
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

														<table align="center" width="90%" border="0" cellspacing="0" cellpadding="7">
															<tr>
																<td class="app_row" colspan="2">��ͧ���ѡ���� IT CAMP �����ҧ�� (���͡���ҡ���� 1 ���) :</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row">
																	<table width="100%" border="0" cellspacing="0" cellpadding="5">
																		<tr>
																			<td width="20"><input type="checkbox" name="know[]" value="6"></td><td width="120">������</td>
																			<td width="20"><input type="checkbox" name="know[]" value="5"></td><td width="120">��������</td>
																			<td width="20"><input type="checkbox" name="know[]" value="4"></td><td width="120">���͹</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="know[]" value="3"></td><td width="120">Website</td>
																			<td width="20"><input type="checkbox" name="know[]" value="2"></td><td width="120">E-mail</td>
																			<td width="20"><input type="checkbox" name="know[]" value="1"></td><td width="120">Webboard</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="know[]" value="0"></td>
																			<td colspan="5">���� (�к�) <input class="textfill" type="text" name="know_etc"size="20"></td>
																		</tr>
																	</table>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">�к���Ժѵԡ��(Operating System) ����ͧ����  (���͡���ҡ���� 1 ���) :</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row">
																	<table width="100%" border="0" cellspacing="0" cellpadding="5">
																		<tr>
																			<td width="20"><input type="checkbox" name="os[]" value="3"></td><td width="120">Windows</td>
																			<td width="20"><input type="checkbox" name="os[]" value="2"></td><td width="120">Linux</td>
																			<td width="20"><input type="checkbox" name="os[]" value="1"></td><td width="120">Mac OS</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="os[]" value="0"></td>
																			<td colspan="5">���� (�к�) <input class="textfill" type="text" name="os_etc"size="20"></td>
																		</tr>
																	</table>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">Program ���� Application ����ͧ����  (���͡���ҡ���� 1 ���) :</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row">
																	<table width="100%" border="0" cellspacing="10" cellpadding="0">
																		<tr>
																			<td colspan="6">Adobe</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="program_adobe[]" value="5"></td><td width="120">Photoshop/ Image Ready</td>
																			<td width="20"><input type="checkbox" name="program_adobe[]" value="4"></td><td width="120">illustrator</td>
																			<td width="20"><input type="checkbox" name="program_adobe[]" value="3"></td><td width="120">Golive</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="program_adobe[]" value="2"></td><td width="120">Premier</td>
																			<td width="20"><input type="checkbox" name="program_adobe[]" value="1"></td><td width="120">PageMaker</td>
																			<td width="20"></td><td></td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="program_adobe[]" value="0"></td>
																			<td colspan="5">���� (�к�) <input class="textfill" type="text" name="program_adobe_etc"size="20"></td>
																		</tr>
																		<tr>
																			<td colspan="6" height="4" background="images/itcamp_dot.gif">
																			</td>
																		</tr>
																	</table>
																	<table width="100%" border="0" cellspacing="10" cellpadding="0">
																		<tr>
																			<td colspan="6">Macromedia</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="program_macromedia[]" value="3"></td><td width="120">Flash</td>
																			<td width="20"><input type="checkbox" name="program_macromedia[]" value="2"></td><td width="120">Dreamweaver</td>
																			<td width="20"><input type="checkbox" name="program_macromedia[]" value="1"></td><td width="120">Authorware </td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="program_macromedia[]" value="0"></td>
																			<td colspan="5">���� (�к�) <input class="textfill" type="text" name="program_macromedia_etc"size="20"></td>
																		</tr>
																		<tr>
																			<td colspan="6" height="4" background="images/itcamp_dot.gif">
																			</td>
																		</tr>
																	</table>
																	<table width="100%" border="0" cellspacing="10" cellpadding="0">
																		<tr>
																			<td colspan="6">Microsoft</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="program_microsoft[]" value="5"></td><td width="120">Word</td>
																			<td width="20"><input type="checkbox" name="program_microsoft[]" value="4"></td><td width="120">Excel</td>
																			<td width="20"><input type="checkbox" name="program_microsoft[]" value="3"></td><td width="120">PowerPoint</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="program_microsoft[]" value="2"></td><td width="120">FrontPage</td>
																			<td width="20"><input type="checkbox" name="program_microsoft[]" value="1"></td><td width="120">Access</td>
																			<td width="20"></td><td width="120"></td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="program_microsoft[]" value="0"></td>
																			<td colspan="5">���� (�к�) <input class="textfill" type="text" name="program_microsoft_etc"size="20"></td>
																		</tr>
																	</table>
																	<table width="100%" border="0" cellspacing="10" cellpadding="0">
																		<tr>
																			<td colspan="6">�͡�˹�ͨҡ��ҧ�� (�ô�к�)</td>
																		</tr>
																		<tr>
																			<td colspan="6"><textarea rows="5" cols="45" name="program_etc"></textarea></td>
																		</tr>
																	</table>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">��ͧ����¹���������������������� :</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row">
																	<table width="100%" border="0" cellspacing="10" cellpadding="0">
																		<tr>
																			<td colspan="6"><input type="radio" name="programming_ever"> �� <input type="radio" name="programming_ever"> ����� (������仵ͺ��͵���)</td>
																		</tr>
																		<tr>
																			<td colspan="6" height="4" background="images/itcamp_dot.gif">
																			</td>
																		</tr>
																		<tr>
																			<td colspan="6">��ҹ Programming (���͡���ҡ���� 1 ���)</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="programing_programing[]" value="5"></td><td width="120">C/ C++</td>
																			<td width="20"><input type="checkbox" name="programing_programing[]" value="4"></td><td width="120">Pascal</td>
																			<td width="20"><input type="checkbox" name="programing_programing[]" value="3"></td><td width="120">Java</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="programing_programing[]" value="2"></td><td width="120">C#</td>
																			<td width="20"><input type="checkbox" name="programing_programing[]" value="1"></td><td width="120">Visual Basic</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="programing_programing[]" value="0"></td>
																			<td colspan="5">���� (�к�) <input class="textfill" type="text" name="programing_programing_etc"size="20"></td>
																		</tr>
																		<tr>
																			<td colspan="6" height="4" background="images/itcamp_dot.gif">
																			</td>
																		</tr>
																		<tr>
																			<td colspan="6">��ҹ Web (���͡���ҡ���� 1 ���)</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="programing_web[]" value="4"></td><td width="120">HTML</td>
																			<td width="20"><input type="checkbox" name="programing_web[]" value="3"></td><td width="120">PHP</td>
																			<td width="20"><input type="checkbox" name="programing_web[]" value="2"></td><td width="120">XML</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="programing_web[]" value="1"></td><td width="120">ASP/ ASP.NET</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="programing_web[]" value="0"></td>
																			<td colspan="5">���� (�к�) <input class="textfill" type="text" name="programing_web_etc"size="20"></td>
																		</tr>
																	</table>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">��ͧ�����¹�������ͧ���¹�� (Robot) �ҡ�͹������� :</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row">
																	<table width="100%" border="0" cellspacing="10" cellpadding="0">
																		<tr>
																			<td colspan="6"><input type="radio" name="robot_ever"> �� �ҡ <input class="textfill" type="text" name="robot_source"size="20"> <input type="radio" name="robot_ever"> ����� (������仵ͺ��͵���)</td>
																		</tr>
																		<tr>
																			<td colspan="6" height="4" background="images/itcamp_dot.gif">
																			</td>
																		</tr>
																		<tr>
																			<td colspan="6">������������¹�� (Robot) ����ͧ���ѡ��������¹��� ��� (���͡���ҡ���� 1 ���)</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="robot_program[]" value="3"></td><td width="120">LEGO</td>
																			<td width="20"><input type="checkbox" name="robot_program[]" value="2"></td><td width="120">LOGO</td>
																			<td width="20"><input type="checkbox" name="robot_program[]" value="1"></td><td width="120">Basic Stamp</td>
																		</tr>
																		<tr>
																			<td width="20"><input type="checkbox" name="robot_program[]" value="0"></td>
																			<td colspan="5">���� (�к�) <input class="textfill" type="text" name="robot_program_etc"size="20"></td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td colspan="2" align="center">
																	<input class="button" type="reset" name="reset" value="Reset">		
																	<input class="button" type="submit" name="submit" value="Next">
																</td>
															</tr>
														</table>
													</form>

<?
	require_once("include/footer.php");
?>
