<?php

if(!isset($_GET['url'])){
	$url = "homepage";
}else{
	$url = $_GET['url'];
}

	
	$page = explode('/',filter_var(rtrim($url, '/'),FILTER_SANITIZE_URL));
	//print_r($url);
	$pagePath = "pages/".$url.".phtml";
if(file_exists($pagePath)){
	require_once $pagePath;
}