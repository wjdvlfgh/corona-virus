<?php
	$a = $_POST['a']; //POST방식으로 전송 받음.(반드시 선언해야 함)
	$a = nl2br($a);
	echo "<b> ▼ 궁금한 점 </b><hr>";
	echo "$a";
?>