<?php

require_once("inf.php");

/*
 * Do not edit the contents after this, if you don't know what you are doing!!!
 */

global $PID;
$PID = $_REQUEST['pid'];
$ADMIN = $_REQUEST['admin'];
if ( empty($PID) ) {
	require_once("error.php");
	mysqli_close($CNCT);
	exit;
}
else {
	$CNCT = mysqli_connect($DB_HOST, $DB_USER, $DB_PSWD, $DB_NAME);
	if ( !$CNCT ) { 
		die("<center>Database connected ERROR: <br />".mysqli_connect_error()."<br />Please connect the developer!</center>"); 
	}
	$SQL = "SELECT * FROM ".$DB_TABL;
	$INF =  mysqli_query($CNCT, $SQL);
	$check = 0;
	while( $MSG = mysqli_fetch_row($INF) ) {
		if ( $MSG[1] == $PID ) {
			$check = 1;
			if ( $MSG[12] == 1 ) {
				require_once("lost.php");
				mysqli_close($CNCT);
				exit;
			}
			if ( $MSG[2] == 0 ) {
				require_once("check.php");
				mysqli_close($CNCT);
				exit;
			}
        	if ( $ADMIN == "1" ) {
        		require_once("admin.php");
        		mysqli_close($CNCT);
        		exit;
        	}
			break;
		}
	}
	if ( $check == 0 ) {
		require_once("error.php");
		mysqli_close($CNCT);
		exit;
	}
}

require_once("tel.php");
mysqli_close($CNCT);
exit;
?>

