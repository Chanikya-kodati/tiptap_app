<?php
	//Start session
	session_start();
	session_regenerate_id(true);	
	//Check whether the session variable SESS_TIPTAP_ID is present or not
	if(!isset($_SESSION['SESS_TIPTAP_ID']) || (trim($_SESSION['SESS_TIPTAP_ID']) == '')) {
		header("location: index.php");
		exit();
	}
?>