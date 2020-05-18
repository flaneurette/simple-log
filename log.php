<?php
if(filesize('./l.log') > 3000000) {
	@file_put_contents('./l.log', ""); // empty log if > 3MB.
	} else {
	$log = date("F j, Y, g:i a") . ' - '. $_SERVER['REMOTE_ADDR'].' - '.$_SERVER['HTTP_USER_AGENT'].' - '. $_SERVER['HTTP_REFERER'].' - '.$_SERVER['SCRIPT_NAME']. ' - '.$_SERVER['QUERY_STRING']. PHP_EOL;
	@file_put_contents('./l.log', htmlspecialchars($log,ENT_QUOTES,'UTF-8'), FILE_APPEND);
}
?>
