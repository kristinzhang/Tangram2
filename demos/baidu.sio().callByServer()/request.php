<?php
	$info = array('丰富的中文文档以及案例，容易上手','全浏览器跨平台兼容','平滑的版本升级体验');
	echo $_GET['callback'].'('.json_encode($info).');';
?>