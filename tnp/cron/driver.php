<?php
include 'simple_html_dom.php';
ini_set('display_errors', true); 
//require_once ("Samtec.php");
require_once ("tandp.php");

//$scrapper = new omniata("http://channelinsight.com/careers");
$scrapper = new tandp("http://tp.iitkgp.ernet.in/notice/index.php?page=1");

//http://www.liquiteria.com/careers/
//https://disneyworld.disney.go.com/search/?searchQuery=ab&autoSuggestedQuery=

$scrapper->parseJobList();

//$scrapper->postSample();

?>

