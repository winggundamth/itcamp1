<?
	$title = "register";
	require_once("include/header.php");
	require_once("include/calendar.php");
	require_once("include/menu.php");
	require_once("include/title.php");
?>
<!-- Start :  Body : Content -->
 													<form name="register" method="post" action="register2.php">
														<table align="center" width="90%" border="0" cellspacing="0" cellpadding="7">
															<tr>
																<td class="app_row" colspan="2"><b>���йӡ�͹ŧ����¹</b><br>
																	1. ��͹�ӡ��ŧ����¹ ��س���ҹ�Ӫ��ᨧ���������˹���á�ͧ���Ѥ�������㨡�͹ �����Ѥ�����ö��ǹ���Ŵ����<a href="download.php">˹�� Download</a><br>
																	2. ������ٻ������㹡����Ѥ� scan ��������º���� ���ٻ�ش�ѡ���¹�������ö����Ҫ����� �¨����Ҿ�����͢�Ǵӡ��� ��Ҵ 72x72 pixel ���ʡ����� .jpg ���� .jpeg<br>
																	3. ���ŧ����¹�շ����� 3 ˹�� ���Щй�����ͤ����дǡ�Ǵ���� ��ͧ� �Ҩ�� download ���Ѥ�����������ӵͺ����͹ ���Ǥ��� copy ŧ��������<br>
																	4. ��س��������ŷ��������ú�ء��ͧ����繢����ŷ���繨�ԧ ��Ҫ�ͧ�����բ����� �� �ҷ���� ����÷��ҹ����� ��������ҧ��� ���� ��ʧǹ�Է������Ԩ�ó����Ѥ�㹡óշ���ͧ�������ŷ��������ú�������١��ͧ<br>
																	5. ����ͧ������ҤӶ���ҡ �еͺ������ ������ͧ����㹵���ͧ �ͺ�Ӷ����������Դ��繢ͧ����ͧ ��Ң����������Ҩ���Ң�������ҡ Search engine �����<br>
																	6. �բ��ʧ����� ����ǡѺ���ŧ����¹����ö�ʤӶ����������ǻ���촤�Ѻ
																</td>
															</tr>
															<tr>
																<td class="input">�ٻ���� :</td>
																<td class="app_row"> <input type="file" name="picture"><br>
																</td>
															</tr>
<!-- Page 1 -->
															<tr>
																<td class="input" valign="top">�ӹ�˹�Ҫ��� :</td>
																<td class="app_row">
																	<table border="0" cellspacing="0" cellpadding="2">
																		<tr>
																			<td width="20"><input type="radio" name="title" value="1"></td><td>�.�.</td>
																			<td width="20"><input type="radio" name="title" value="2"></td><td>�.�.</td>
																			<td width="20"><input type="radio" name="title" value="3" checked></td><td>���</td>
																			<td width="20"><input type="radio" name="title" value="4"></td><td>�ҧ���</td>
																		</tr>
																	</table>
																</td>
															</tr>														
															<tr>
																<td class="input">���� :</td>
																<td class="app_row"><input class="textfill" type="text" size="30" name="firstname"></td>
															</tr>
															<tr>
																<td class="input">���ʡ�� :</td>
																<td class="app_row"><input class="textfill" type="text" size="30" name="lastname"></td>
															</tr>
															<tr>
																<td class="input">������� :</td>
																<td class="app_row"><input class="textfill" type="text" size="15" name="nickname"></td>
															</tr>
															<tr>
																<td class="input">�ѹ/��͹/�� �Դ :</td>
																<td class="app_row">
																	<!-- Start form date -->
<?
																	echo "<select name=\"day_birth\">";
																	for($j=1;$j<=31;$j++)
																	{
																		echo "<option value=\"$j\">";
																		if($j<10)
																			echo "0";
																		echo "$j</option>";
																	}
																	echo "</select>";
																	echo "<select name=\"month_birth\">";
																	for($j=1;$j<=12;$j++)
																	{
																		echo "<option value=\"$j\">";
																		if($j<10)
																			echo "0";
																		echo "$j</option>";
																	}
																	echo "</select>";
																	echo "<select name=\"year_birth\">";
																	for($j=2528;$j<=2535;$j++)
																	{
																		echo "<option value=\"$j\"";
																		echo ">$j</option>";
																	}
																	echo "</select>";
?>
																	<!-- End form date -->
																</td>
															</tr>
															<tr>
																<td class="input">���� :</td>
																<td class="app_row">
<?
																	echo "<select name=\"age\">";
																	for($j=13;$j<=20;$j++)
																	{
																		echo "<option value=\"$j\"";
																		echo ">$j</option>";
																	}
																	echo "</select>";
?>
																��</td>
															</tr>
															<tr>
																<td class="input">�������ʹ :</td>
																<td class="app_row"><input class="textfill" type="text" size="3" maxlength="3" name="blood"></td>
															</tr>
															<tr>
																<td class="input">��ʹ� :</td>
																<td class="app_row"><input class="textfill" type="text" size="15" name="region"></td>
															</tr>
															<tr>
																<td class="input" valign="top">�������  :<br>(�������ö�Դ������дǡ)</td>
																<td class="app_row"><textarea rows="5" cols="45" name="address"></textarea></td>
															</tr>
															<tr>
																<td class="input">�����Ţ���Ѿ��<br>��ҹ(�к����ʾ�鹷��) :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="phone"></td>
															</tr>
															<tr>
																<td class="input">�����Ţ���Ѿ��<br>��Ͷ��/PCT :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="mobile"></td>
															</tr>
															<tr>
																<td class="input">�����Ţ���Ѿ��<br>���Դ�����㹡óթء�Թ :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="emerphone"></td>
															</tr>
															<tr>
																<td class="input">E-Mail :</td>
																<td class="app_row"><input class="textfill" type="text" size="45" name="email"></td>
															</tr>
															<tr>
																<td class="input" valign="top">���ѧ�֡��������дѺ��� :</td>
																<td class="app_row">
																	<table border="0" cellspacing="0" cellpadding="5">
																		<tr>
																			<td width="20"><input type="radio" name="education" value=1 checked></td><td>�. 4</td>
																			<td width="20"><input type="radio" name="education" value=2></td><td>�. 5</td>
																			<td width="20"><input type="radio" name="education" value=3></td><td>�. 6</td>
																			<td>Ἱ������¹�Է����ʵ��</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td class="input">�ç���¹ :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="school"></td>
															</tr>
															<tr>
																<td class="input">�š�����¹���������<br>(GPA) :</td>
																<td class="app_row"><input class="textfill" type="text" size="4" maxlength="4" name="gpa"></td>
															</tr>
															<tr>
																<td class="input" valign="top">������ç���¹</td>
																<td class="app_row"><textarea rows="5" cols="45" name="schooladdress"></textarea></td>
															</tr>
															<tr>
																<td class="input">�ѧ��Ѵ</td>
																<td class="app_row">
																		<select name="schoolprov">
																		<option value="1">��ا෾��ҹ��</option>
																		<option value="2">��к��</option>
																		<option value="3">�ҭ������</option>
																		<option value="4">����Թ���</option>
																		<option value="5">��ᾧྪ�</option>
																		<option value="6">�͹��</option>
																		<option value="7">�ѹ�����</option>
																		<option value="8">���ԧ���</option>
																		<option value="9">�ź���</option>
																		<option value="10">��¹ҷ</option>
																		<option value="11">�������</option>
																		<option value="12">�����</option>
																		<option value="13">��§���</option>
																		<option value="14">��§����</option>
																		<option value="15">��ѧ</option>
																		<option value="16">��Ҵ</option>
																		<option value="17">�ҡ</option>
																		<option value="18">��ù�¡</option>
																		<option value="19">��û��</option>
																		<option value="20">��þ��</option>
																		<option value="21">����Ҫ����</option>
																		<option value="22">�����ո����Ҫ</option>
																		<option value="23">������ä�</option>
																		<option value="24">�������</option>
																		<option value="25">��Ҹ����</option>
																		<option value="26">��ҹ</option>
																		<option value="27">���������</option>
																		<option value="28">�����ҹ�</option>
																		<option value="29">��ШǺ���բѹ��</option>
																		<option value="30">��Ҩչ����</option>
																		<option value="31">�ѵ�ҹ�</option>
																		<option value="32">��ظ��</option>
																		<option value="33">�����</option>
																		<option value="34">�ѧ��</option>
																		<option value="35">�ѷ�ا</option>
																		<option value="36">�ԨԵ�</option>
																		<option value="37">��ɳ��š</option>
																		<option value="38">ྪú���</option>
																		<option value="39">ྪú�ó�</option>
																		<option value="40">���</option>
																		<option value="41">����</option>
																		<option value="42">�����ä��</option>
																		<option value="43">�ء�����</option>
																		<option value="44">�����ͧ�͹</option>
																		<option value="45">��ʸ�</option>
																		<option value="46">����</option>
																		<option value="47">�������</option>
																		<option value="48">�йͧ</option>
																		<option value="49">���ͧ</option>
																		<option value="50">�Ҫ����</option>
																		<option value="51">ž����</option>
																		<option value="52">�ӻҧ</option>
																		<option value="53">�Ӿٹ</option>
																		<option value="54">���</option>
																		<option value="55">�������</option>
																		<option value="56">ʡŹ��</option>
																		<option value="57">ʧ���</option>
																		<option value="58">ʵ��</option>
																		<option value="59">��طû�ҡ��</option>
																		<option value="60">��ط�ʧ����</option>
																		<option value="61">��ط��Ҥ�</option>
																		<option value="62">������</option>
																		<option value="63">��к���</option>
																		<option value="64">�ԧ�����</option>
																		<option value="65">��⢷��</option>
																		<option value="66">�ؾ�ó����</option>
																		<option value="67">����ɮ��ҹ�</option>
																		<option value="68">���Թ���</option>
																		<option value="69">˹ͧ���</option>
																		<option value="70">˹ͧ�������</option>
																		<option value="71">��ҧ�ͧ</option>
																		<option value="72">�ӹҨ��ԭ</option>
																		<option value="73">�شøҹ�</option>
																		<option value="74">�صôԵ��</option>
																		<option value="75">�ط�¸ҹ�</option>
																		<option value="76">�غ��Ҫ�ҹ�</option>
																</td>
															</tr>
															<tr>
																<td class="input">�����Ţ���Ѿ��<br>�ç���¹(�к����ʾ�鹷��) :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="schoolphone"></td>
															</tr>
															<tr>
																<td class="input">�ä��Шӵ��/�һ�Шӵ��  :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="disease"></td>
															</tr>
															<tr>
																<td class="input">��觷����/�ҷ����   :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="medicine_not"></td>
															</tr>
															<tr>
																<td class="input">����÷���������ö<br>�Ѻ��зҹ��  :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="food_not"></td>
															</tr>
															<tr>
																<td class="input" valign="top">�������͹ʹԷ<br>�������ö�Դ������дǡ  :</td>
																<td class="app_row">
																	<table border="0" cellspacing="0" cellpadding="5">
																		<tr>
																			<td width="20">1.</td><td><input class="textfill" type="text" size="40" name="friend1"></td>
																			<td width="20">�������Ѿ��</td><td><input class="textfill" type="text" size="12" maxlength="9" name="friend1_phone"></td>
																		</tr>
																		<tr>
																			<td width="20">2.</td><td><input class="textfill" type="text" size="40" name="friend2"></td>
																			<td width="20">�������Ѿ��</td><td><input class="textfill" type="text" size="12" maxlength="9" name="friend2_phone"></td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td class="input">���ͼ�黡��ͧ  :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="parent"></td>
															</tr>
															<tr>
																<td class="input">���դ�������Ǣ�ͧ�� :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="parent_relate"></td>
															</tr>
															<tr>
																<td class="input">�����Ţ���Ѿ��<br>�������ö�Դ������дǡ   :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="parent_phone"></td>
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
