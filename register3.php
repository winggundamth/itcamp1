<?
	$title = "register";
	require_once("include/header.php");
	require_once("include/calendar.php");
	require_once("include/menu.php");
	require_once("include/title.php");
?>

<!-- Start :  Body : Content -->
<!-- Page3 -->
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
    

													<input type="hidden" name="know" value="<?$temp=$_POST["know"];for ($i=0;$i<count($temp);$i++)$sum+=pow(2,$temp[$i]);echo $sum;?>">
													<input type="hidden" name="know_etc" value="<?echo $_POST["know_etc"];?>">
													<input type="hidden" name="os" value="<?$temp=$_POST["os"];for ($i=0;$i<count($temp);$i++)$sum+=pow(2,$temp[$i]);echo $sum;?>">
													<input type="hidden" name="os_etc" value="<?echo $_POST["os_etc"];?>">
													<input type="hidden" name="program_adobe" value="<?$temp=$_POST["program_adobe"];for ($i=0;$i<count($temp);$i++)$sum+=pow(2,$temp[$i]);echo $sum;?>">
													<input type="hidden" name="program_adobe_etc" value="<?echo $_POST["program_adobe_etc"];?>">
													<input type="hidden" name="program_macromedia" value="<?$temp=$_POST["program_macromedia"];for ($i=0;$i<count($temp);$i++)$sum+=pow(2,$temp[$i]);echo $sum;?>">
													<input type="hidden" name="program_macromedia_etc" value="<?echo $_POST["program_macromedia_etc"];?>">
													<input type="hidden" name="program_microsoft" value="<?$temp=$_POST["program_microsoft"];for ($i=0;$i<count($temp);$i++)$sum+=pow(2,$temp[$i]);echo $sum;?>">
													<input type="hidden" name="program_microsoft_etc" value="<?echo $_POST["program_microsoft_etc"];?>">
													<input type="hidden" name="program_etc" value="<?echo $_POST["program_etc"];?>">
													<input type="hidden" name="programming_ever" value="<?echo $_POST["programming_ever"];?>">
													<input type="hidden" name="programing_programing" value="<?$temp=$_POST["programing_programing"];for ($i=0;$i<count($temp);$i++)$sum+=pow(2,$temp[$i]);echo $sum;?>">
													<input type="hidden" name="programing_programing_etc" value="<?echo $_POST["programing_programing_etc"];?>">
													<input type="hidden" name="programing_web" value="<?$temp=$_POST["programing_web"];for ($i=0;$i<count($temp);$i++)$sum+=pow(2,$temp[$i]);echo $sum;?>">
													<input type="hidden" name="programing_web_etc" value="<?echo $_POST["programing_web_etc"];?>">
													<input type="hidden" name="robot_ever" value="<?echo $_POST["robot_ever"];?>">
													<input type="hidden" name="robot_source" value="<?echo $_POST["robot_source"];?>">
													<input type="hidden" name="robot_program" value="<?$temp=$_POST["robot_program"];for ($i=0;$i<count($temp);$i++)$sum+=pow(2,$temp[$i]);echo $sum;?>">
													<input type="hidden" name="robot_program_etc" value="<?echo $_POST["robot_program_etc"];?>">

														<table align="center" width="90%" border="0" cellspacing="0" cellpadding="7">
															<tr>
																<td class="app_row" colspan="2">������ͧ�֧��ҡ��������Ԩ�����Ѻ����  IT CAMP ��� ��ͧ����Ҥ��·������ǡѺ��������������ͷ� �ͧ����Է��������������� (��س��к�)</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row"><textarea rows="10" cols="60" name="question1"></textarea>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">��ͧ��Һ����������������Է�����㴺�ҧ����Դ�͹��ҹ IT (Information Technology) ��ҷ�Һ����кت�������Է����¹��</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row"><textarea rows="10" cols="60" name="question2"></textarea>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">"Centrino" �繪���෤����բͧ���� ��е�ͧ��Сͺ�������ú�ҧ�֧�����¡�������෤����� Centrino</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row"><textarea rows="10" cols="60" name="question3"></textarea>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">��ҵ�ͧ��෤����մ�ҹ IT ˹�����ҧ����ͧ���仨ҡ�š��� ��ͧ�Դ��Ҥ�������� ����˵ؼŻ�Сͺ</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row"><textarea rows="10" cols="60" name="question4"></textarea>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">��з���ͧ��ͧ����֡�ҵ����дѺ����Է������ҡ����ش (�����ӹ֧�֧��ṹ) ���</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row">
																		<table width="100%" border="0" cellspacing="10" cellpadding="0">
																		<tr>
																			<td width="100">���</td><td><input class="textfill" type="text" name="question5_1" size="40"></td>
																		</tr>
																		<tr>
																			<td width="100">�Ң�</td><td><input class="textfill" type="text" name="question5_2"  size="40"></td>
																		</tr>
																		<tr>
																			<td width="100">����Է�����</td><td><input class="textfill" type="text" name="question5_3"  size="40"></td>
																		</tr>
																		<tr>
																			<td width="100" valign="top">���� (��س��к�)</td>
																			<td><textarea rows="10" cols="60" name="question5_4" ></textarea></td>
																		</tr>
																	</table>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">����ͧ���͡��Ǣ�͵��仹�� ��§˹�觢�� �����ʴ������Դ���</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row">
																		<table width="100%" border="0" cellspacing="10" cellpadding="0">
																		<tr>
																			<td><input type="radio" name="question6_choose"> ��ҹ�ͧ����ö���ҧ ���¹�� (Robot) ��˹�觵�� ��ͧ���͡Ẻ����ѹ�դ�������ö����?</td>
																		</tr>
																		<tr>
																			<td><input type="radio" name="question6_choose"> ����͹Ҥ� ��ô��Թ���Ե��Ш��ѹ�١�Ǻ��������к���������������� ���Դ���â��?</td>
																		</tr>
																		<tr>
																			<td><input type="radio" name="question6_choose"> ��ͧ�Դ��� �����������Ҵ���������� ���� �������Ҵ���Ҥ��������� �������� ���ҧ��?</td>
																		</tr>
																		<tr>
																			<td colspan="2"><textarea rows="10" cols="60" name="question6"></textarea></td>
																		</tr>
																	</table>
																</td>
															</tr>

															<tr>
																<td class="app_row" colspan="2">��觷���ͧ�Ҵ��ѧ��Ҩ����Ѻ�ҡ�����Ҥ��� IT CAMP ������˵ؼ�</td>
															</tr>
															<tr>
																<td class="input"><img src="images/space.gif"></td>
																<td class="app_row"><textarea rows="10" cols="60" name="question7"></textarea>
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
