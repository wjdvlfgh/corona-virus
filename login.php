<?php
	include "C:/xampp/htdosc/dashboard/session.php"; //세션 선언 파일 호출
	include "C:/xampp/htdosc/dashboard/connect_db.php"; //DB접속 파일 호출
	
	$sql="select *from user_tbl where userid = '$fuserid' and passwd='$fpasswd' ";
	$res=mysqli_query($connect, $sql);
	$list = mysqli_num_rows($res);
	
	if($list) //일치하는 사용자 레코드 수가 1건 이상이면
	{
		$row = mysqli_fetch_array($res);
		$ses_userid = $row['userid'];
		$ses_pass = $row['passwd'];
		
		echo "<center><br><font size=4><b> 로그인을 성공하였습니다.
		</b></font><br><hr>";
	}
	
	mysqli_close($connect);
?>

<html>
	<head>
		<title> 로그인 성공 메시지 </title>
	</head>
	<body>
		<form name="login_form_msg">
			<table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
				<tr bgcolor=#3300CC>
					<td align="center"><font color=#FFFFFF>
						▷▷▷ &nbsp;&nbsp; <b> 회원 전용 페이지 </b> &nbsp;&nbsp; ◁◁◁ </font>
					</td>
				</tr>
				<tr height="180" bgcolor=#FFFFCC><td width="40%" align="center">
					[ <b><?php echo $ses_userid; ?></b> ]
					님이 성공적인 로그인을 축하합니다... </td>
				</tr>
				<tr bgcolor=#CCCCFF><td align="center">
					<input type="button" name="Button" value=" 정의 " onClick="location.replace('definition.php')">
					<input type="button" name="Button" value=" 로그아웃 " onClick="location.replace('logout.php')">
				</tr>
			</table>
		</form>
	</body>
</html>