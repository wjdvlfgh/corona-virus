<?php
	session_start( ); //세션의 시작
	
	$fuserid = $_POST['fuserid']; //POST 방식으로 전송 받음 (로그인 폼의 아이디)
	$fpasswd = $_POST['fpasswd']; //POST 방식으로 전송 받음 (로그인 폼의 비밀번호)
	
	$_SESSION['ses_userid'] = $fuserid;
	$_SESSION['ses_pass'] = $fpasswd;
?>