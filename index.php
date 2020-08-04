<?php
	// error_reporting(E_ALL);
	@session_start();
	header('Content-type: text/html; charset=utf-8');
	date_default_timezone_set('Asia/Brunei');
	
	$r=explode('?',urldecode($_SERVER['REQUEST_URI']));
	$r=explode('/',$r[0]);
	array_shift($r);
	for($i=1;$i<=count($r);$i++)
		$opts[$i]=$r[$i-1];
	include('include/config.php');
	include('include/fns_db.php');
	include('include/fns_output.php');
	include('include/fns_engine.php');
	include('include/class.catalog.php');
	db_connect();

	
	$content=engine_get_content($opts);

	echo output_header();
	echo $content;
	echo output_footer();
	db_disconnect();
?>

