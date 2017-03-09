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
																<td class="app_row" colspan="2"><b>คำแนะนำก่อนลงทะเบียน</b><br>
																	1. ก่อนทำการลงทะเบียน กรุณาอ่านคำชี้แจงที่อยู่ที่หน้าแรกของใบสมัครให้เข้าใจก่อน โดยใบสมัครสามารถดาวน์โหลดได้ที่<a href="download.php">หน้า Download</a><br>
																	2. เตรียมรูปที่จะใช้ในการสมัคร scan มาให้เรียบร้อย เป็นรูปชุดนักเรียนที่สามารถใช้ในราชการได้ โดยจะเป็นภาพสีหรือขาวดำก็ได้ ขนาด 72x72 pixel นามสกุลไฟล์ .jpg หรือ .jpeg<br>
																	3. การลงทะเบียนมีทั้งหมด 3 หน้า เพราะฉะนั้นเพื่อความสะดวกรวดเร็ว น้องๆ อาจจะ download ใบสมัครเพื่อเตรียมคำตอบไว้ก่อน แล้วค่อย copy ลงมาใส่ก็ได้<br>
																	4. กรุณาใส่ข้อมูลที่จำเป็นให้ครบทุกช่องและเป็นข้อมูลที่เป็นจริง ถ้าช่องใดไม่มีข้อมูล เช่น ยาที่แพ้ อาหารที่ทานไม่ได้ ให้เว้นว่างไว้ พี่ๆ ขอสงวนสิทธิ์ไม่พิจารณาใบสมัครในกรณีที่น้องใส่ข้อมูลที่จำเป็นไม่ครบหรือไม่ถูกต้อง<br>
																	5. ไม่ต้องกลัวว่าคำถามยาก จะตอบไม่ได้ดี ขอให้น้องมั่นใจในตัวเอง ตอบคำถามตามความคิดเห็นของตัวเอง ถ้าข้อใดไม่รู้อาจจะหาข้อมูลได้จาก Search engine ทั่วไป<br>
																	6. มีข้อสงสัยใดๆ เกี่ยวกับการลงทะเบียนสามารถโพสคำถามไว้ได้ที่เวปบอร์ดครับ
																</td>
															</tr>
															<tr>
																<td class="input">รูปถ่าย :</td>
																<td class="app_row"> <input type="file" name="picture"><br>
																</td>
															</tr>
<!-- Page 1 -->
															<tr>
																<td class="input" valign="top">คำนำหน้าชื่อ :</td>
																<td class="app_row">
																	<table border="0" cellspacing="0" cellpadding="2">
																		<tr>
																			<td width="20"><input type="radio" name="title" value="1"></td><td>ด.ช.</td>
																			<td width="20"><input type="radio" name="title" value="2"></td><td>ด.ญ.</td>
																			<td width="20"><input type="radio" name="title" value="3" checked></td><td>นาย</td>
																			<td width="20"><input type="radio" name="title" value="4"></td><td>นางสาว</td>
																		</tr>
																	</table>
																</td>
															</tr>														
															<tr>
																<td class="input">ชื่อ :</td>
																<td class="app_row"><input class="textfill" type="text" size="30" name="firstname"></td>
															</tr>
															<tr>
																<td class="input">นามสกุล :</td>
																<td class="app_row"><input class="textfill" type="text" size="30" name="lastname"></td>
															</tr>
															<tr>
																<td class="input">ชื่อเล่น :</td>
																<td class="app_row"><input class="textfill" type="text" size="15" name="nickname"></td>
															</tr>
															<tr>
																<td class="input">วัน/เดือน/ปี เกิด :</td>
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
																<td class="input">อายุ :</td>
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
																ปี</td>
															</tr>
															<tr>
																<td class="input">หมู่เลือด :</td>
																<td class="app_row"><input class="textfill" type="text" size="3" maxlength="3" name="blood"></td>
															</tr>
															<tr>
																<td class="input">ศาสนา :</td>
																<td class="app_row"><input class="textfill" type="text" size="15" name="region"></td>
															</tr>
															<tr>
																<td class="input" valign="top">ที่อยู่  :<br>(ที่สามารถติดต่อได้สะดวก)</td>
																<td class="app_row"><textarea rows="5" cols="45" name="address"></textarea></td>
															</tr>
															<tr>
																<td class="input">หมายเลขโทรศัพท์<br>บ้าน(ระบุรหัสพื้นที่) :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="phone"></td>
															</tr>
															<tr>
																<td class="input">หมายเลขโทรศัพท์<br>มือถือ/PCT :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="mobile"></td>
															</tr>
															<tr>
																<td class="input">หมายเลขโทรศัพท์<br>ที่ติดต่อได้ในกรณีฉุกเฉิน :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="emerphone"></td>
															</tr>
															<tr>
																<td class="input">E-Mail :</td>
																<td class="app_row"><input class="textfill" type="text" size="45" name="email"></td>
															</tr>
															<tr>
																<td class="input" valign="top">กำลังศึกษาอยู่ในระดับชั้น :</td>
																<td class="app_row">
																	<table border="0" cellspacing="0" cellpadding="5">
																		<tr>
																			<td width="20"><input type="radio" name="education" value=1 checked></td><td>ม. 4</td>
																			<td width="20"><input type="radio" name="education" value=2></td><td>ม. 5</td>
																			<td width="20"><input type="radio" name="education" value=3></td><td>ม. 6</td>
																			<td>แผนการเรียนวิทยาศาสตร์</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td class="input">โรงเรียน :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="school"></td>
															</tr>
															<tr>
																<td class="input">ผลการเรียนเฉลี่ยสะสม<br>(GPA) :</td>
																<td class="app_row"><input class="textfill" type="text" size="4" maxlength="4" name="gpa"></td>
															</tr>
															<tr>
																<td class="input" valign="top">ที่ตั้งโรงเรียน</td>
																<td class="app_row"><textarea rows="5" cols="45" name="schooladdress"></textarea></td>
															</tr>
															<tr>
																<td class="input">จังหวัด</td>
																<td class="app_row">
																		<select name="schoolprov">
																		<option value="1">กรุงเทพมหานคร</option>
																		<option value="2">กระบี่</option>
																		<option value="3">กาญจนบุรี</option>
																		<option value="4">กาฬสินธุ์</option>
																		<option value="5">กำแพงเพชร</option>
																		<option value="6">ขอนแก่น</option>
																		<option value="7">จันทบุรี</option>
																		<option value="8">ฉะเชิงเทรา</option>
																		<option value="9">ชลบุรี</option>
																		<option value="10">ชัยนาท</option>
																		<option value="11">ชัยภูมิ</option>
																		<option value="12">ชุมพร</option>
																		<option value="13">เชียงราย</option>
																		<option value="14">เชียงใหม่</option>
																		<option value="15">ตรัง</option>
																		<option value="16">ตราด</option>
																		<option value="17">ตาก</option>
																		<option value="18">นครนายก</option>
																		<option value="19">นครปฐม</option>
																		<option value="20">นครพนม</option>
																		<option value="21">นครราชสีมา</option>
																		<option value="22">นครศรีธรรมราช</option>
																		<option value="23">นครสวรรค์</option>
																		<option value="24">นนทบุรี</option>
																		<option value="25">นราธิวาส</option>
																		<option value="26">น่าน</option>
																		<option value="27">บุรีรัมย์</option>
																		<option value="28">ปทุมธานี</option>
																		<option value="29">ประจวบคีรีขันธ์</option>
																		<option value="30">ปราจีนบุรี</option>
																		<option value="31">ปัตตานี</option>
																		<option value="32">อยุธยา</option>
																		<option value="33">พะเยา</option>
																		<option value="34">พังงา</option>
																		<option value="35">พัทลุง</option>
																		<option value="36">พิจิตร</option>
																		<option value="37">พิษณุโลก</option>
																		<option value="38">เพชรบุรี</option>
																		<option value="39">เพชรบูรณ์</option>
																		<option value="40">แพร่</option>
																		<option value="41">ภูเก็ต</option>
																		<option value="42">มหาสารคาม</option>
																		<option value="43">มุกดาหาร</option>
																		<option value="44">แม่ฮ่องสอน</option>
																		<option value="45">ยโสธร</option>
																		<option value="46">ยะลา</option>
																		<option value="47">ร้อยเอ็ด</option>
																		<option value="48">ระนอง</option>
																		<option value="49">ระยอง</option>
																		<option value="50">ราชบุรี</option>
																		<option value="51">ลพบุรี</option>
																		<option value="52">ลำปาง</option>
																		<option value="53">ลำพูน</option>
																		<option value="54">เลย</option>
																		<option value="55">ศรีสะเกษ</option>
																		<option value="56">สกลนคร</option>
																		<option value="57">สงขลา</option>
																		<option value="58">สตูล</option>
																		<option value="59">สมุทรปราการ</option>
																		<option value="60">สมุทรสงคราม</option>
																		<option value="61">สมุทรสาคร</option>
																		<option value="62">สระแก้ว</option>
																		<option value="63">สระบุรี</option>
																		<option value="64">สิงห์บุรี</option>
																		<option value="65">สุโขทัย</option>
																		<option value="66">สุพรรณบุรี</option>
																		<option value="67">สุราษฎร์ธานี</option>
																		<option value="68">สุรินทร์</option>
																		<option value="69">หนองคาย</option>
																		<option value="70">หนองบัวลำภู</option>
																		<option value="71">อ่างทอง</option>
																		<option value="72">อำนาจเจริญ</option>
																		<option value="73">อุดรธานี</option>
																		<option value="74">อุตรดิตถ์</option>
																		<option value="75">อุทัยธานี</option>
																		<option value="76">อุบลราชธานี</option>
																</td>
															</tr>
															<tr>
																<td class="input">หมายเลขโทรศัพท์<br>โรงเรียน(ระบุรหัสพื้นที่) :</td>
																<td class="app_row"><input class="textfill" type="text" size="12" maxlength="9" name="schoolphone"></td>
															</tr>
															<tr>
																<td class="input">โรคประจำตัว/ยาประจำตัว  :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="disease"></td>
															</tr>
															<tr>
																<td class="input">สิ่งที่แพ้/ยาที่แพ้   :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="medicine_not"></td>
															</tr>
															<tr>
																<td class="input">อาหารที่ไม่สามารถ<br>รับประทานได้  :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="food_not"></td>
															</tr>
															<tr>
																<td class="input" valign="top">ชื่อเพื่อนสนิท<br>ที่สามารถติดต่อได้สะดวก  :</td>
																<td class="app_row">
																	<table border="0" cellspacing="0" cellpadding="5">
																		<tr>
																			<td width="20">1.</td><td><input class="textfill" type="text" size="40" name="friend1"></td>
																			<td width="20">เบอร์โทรศัพท์</td><td><input class="textfill" type="text" size="12" maxlength="9" name="friend1_phone"></td>
																		</tr>
																		<tr>
																			<td width="20">2.</td><td><input class="textfill" type="text" size="40" name="friend2"></td>
																			<td width="20">เบอร์โทรศัพท์</td><td><input class="textfill" type="text" size="12" maxlength="9" name="friend2_phone"></td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td class="input">ชื่อผู้ปกครอง  :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="parent"></td>
															</tr>
															<tr>
																<td class="input">โดยมีความเกี่ยวข้องเป็น :</td>
																<td class="app_row"><input class="textfill" type="text" size="40" name="parent_relate"></td>
															</tr>
															<tr>
																<td class="input">หมายเลขโทรศัพท์<br>ที่สามารถติดต่อได้สะดวก   :</td>
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
