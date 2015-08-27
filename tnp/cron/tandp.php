<?php

require_once ("simple_html_dom.php");
require_once ("AbstractWebGsScraper2.php");
function db_connect(){

	$con = mysqli_connect("localhost","webtutplus","webtutplus","webtut_tnp");
	
	// Check connection
	if (mysqli_connect_errno())
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
	
	return $con;
}




class tandp extends AbstractWebGsScraper2 {

	static private $pageSize = 100;
	
	private $page = 0;
	
	private $lastJobKey = 1;

	private $job_list = array();

	private $key_list =  array();

	private $job_location = array();
	
	private $job_snippet = array();
#082855855 -
	private $job_posted = array();
	private $job_id = array();


	function __construct($url, $username="", $password="") {
		parent::__construct($url, $username, $password); //initialize parent constructor
		$this->setScrapperName(__CLASS__); //set ScraperName
	}
	
	public function parseJobList() {
		
		$parsedURLs = array();
		
		$running = true;
		$count_no = 0;
		
		while($running) {
			$count_no +=1;
			$content = $this->getNextPageContent();
		
			$urls = $this->extractJobURLs($content);
			//$urls = "";
			
			
			if (count($urls) == 0) {
				break;
			}
			
			foreach($urls as $url) {
				$url = preg_replace('/(;jsessionid=.*)(\?)/', '$2', $url);
				
				if (in_array($url, $parsedURLs)) {
					$running = false;
					break;
				}
				$this->setJobToList($url);
				$parsedURLs[] = $url;
			}
			if ($count_no >= 1) {
				break;
			}
			
		}

		//echo "<p style='color:red;font-size:2em '>ParseJobList repeateed {$count_no} times";

	}
	
	public function loadJobDetails($url) {

		$company = 'Bellicum Pharmaceuticals';
		$snippet = $this->clean($snippet);
		$title = $this->clean($title);
		$key = $this->lastJobKey;
		$this->lastJobKey++;
		$date = date("Y-m-d");
		//$parts = explode("|", $date);
		//$date = $parts[0];
		//$key = explode(":",$parts[1])[1];
		$this->setJobToList($url, $key, $title, $snippet, $city, $state, $country, $date, $company);
	}




	public function extractJobURLs($content) {


		$dom = str_get_html($content);//->getElementById("pageContainer");//->find(".wsite-multicol-table-wrap",0);//->getElementById("content-area");//->find(".main-content",0);
		//->find(".contentWrapper",0);//->find(".js-page-job-list",0);//->find("a");
		//wsite-multicol-table-wrap$dom =  $dom->find(".cm_careers_overview_rightContent",0);//->find(".main-content",0);
		//$dom = $dom->find(".container",2);//->find("table",0)->find("td",1);
		#
		//$dom = $dom->find(".job-table",0);//->find("table",2);
		//echo $dom;
		$current = 1;
		$max = 930;
		$urls = array();
		while ($current <= $max) {
			$url = "http://tp.iitkgp.ernet.in/notice/index.php?page=$current";
			$current +=1;
			//$cook = "__utmt=1; _talentnest_session_secure=d0b68b67bdcba8039a818dae65b1b092; __utma=165219232.1341022948.1436499925.1436503819.1436522555.3; __utmb=165219232.5.10.1436522555; __utmc=165219232; __utmz=165219232.1436522555.3.3.utmcsr=95.85.59.8|utmccn=(referral)|utmcmd=referral|utmcct=/gsScraperServer/";
			//$this->curl->setOpt(CURLOPT_COOKIE,$cook);
			//$this->curl->setOpt(CURLOPT_FOLLOWLOCATION, 1);
			$this->curl->get($url);
		
			$content = $this->curl->getResponse();
		
			$dom = str_get_html($content);//->find(".job_list",0);//->find("table",0);
			// if(trim($dom) == ''){
			// 	break;
			// }
			$home = 'http://tp.iitkgp.ernet.in/notice/';
			echo $url."\n";
			//echo $dom."contgent";
			$count = 0;
			$titles = $dom->find("tr");
			foreach ($titles as $key) {
		
				//echo $key."<br />";
				//echo "special".htmlentities($key);
				if(!preg_match("/href/", htmlentities($key))){
					continue;
				}

				$count +=1;
				if($count == 1){
					continue;
				}

				$value = $key->find("a",0);

				//echo $value-
		
				$orl = $home.$value->getAttribute("href");//."?count=$count";
				//$orl = $home."?count=$count";
				//$orl = preg_replace('/(;jsessionid=.*)(\?)/', '$2', $orl);
				if(!preg_match("/sr_no/", $orl)){
					continue;
				}
				//$this->job_list[$orl] = trim($key->find(".panel-heading",0)->plaintext);
				$this->job_list[$orl] = trim($value->plaintext);
				$date = trim($key->find("td",0)->plaintext);
				$description = $this->job_list[$orl];
				$conn = db_connect();
				$sql1 = "INSERT INTO `data_date_cron`(`link`, `description`,`date`) 
				VALUES ('$orl','$description','$date')";

				//echo $sql1."<br />";


				if( mysqli_query($conn,$sql1) ) {
					//echo "recoreds inserted sucessfully".$no_insert;//."<br />";
					//echo "\n";
					//$no_insert +=1;
				}else{
					echo $sql1."<br />";
					echo "\n";
					echo "insertion failed".mysqli_error($conn);
					echo "\n";
				}
				
		
				

				//$this->job_snippet[$orl] = trim($key->plaintext);//$key->find(".answer",0)->find("p",0)->plaintext;
				//$this->job_posted[$orl] = trim($key->find("td",2)->plaintext);
				//$this->job_id[$orl] = trim($key->find("td",0)->plaintext);
	 			//$this->job_location[$orl] = trim($key->find("td",1)->plaintext);
	 			//$this->job_location[$orl] .= ",".trim($key->find("td",2)->plaintext);
	 			if(!in_array($orl, $urls)){
	 				$urls[] = $orl;
 				}
 			
 			}

 			//break;
 		}

		//$dom= $dom->find("tr");
 			echo "<pre>";
		echo "prininting urls";
		print_r($urls);
		print_r($this->job_list);
		print_r($this->job_posted);
		print_r($this->job_snippet);
		print_r($this->job_id);
		echo "location<br />";
		print_r($this->job_location);
		echo "</pre>";
	
	
	}
	
	private function getNextPageContent() {
		$url = $this->url;
		//$url = "http://www.ziprecruiter.com/jobs-widget-content/v1/8720dfe2/all?show_posted_days=0&_=1432654229543";
		if ($this->page > 0) {
			$url .= '&act=next&rowFrom='.(($this->page - 1) * self::$pageSize);
		}
		
		$this->curl->get($url);
		
		$content = $this->curl->getResponse();

		return $content;
	}

	public function nil_job_list(){
		return $this->job_list;

	}
		private function clean($string) {
		$string =strip_tags($string,'');
      $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string=preg_replace('/[^A-Za-z0-9.\-]/', '', $string);
    $string=str_replace('-',' ',$string);// replace all hyphen again with space
    $string=str_replace('nbsp','', $string);   
     $string=str_replace('8211','', $string);   
     $string=str_replace('8217','', $string); 
     $string=str_replace('8212','', $string); 
      $string=str_replace('160','', $string); 
      $string=str_replace('038',' ', $string); 
      
     $string=str_replace('ldquo','', $string); 
       $string=str_replace('rdquo','', $string); 
        $string=str_replace('ndash','', $string); 
        $string=str_replace('x002B','', $string); 
        
       
    return $string; // Removes special chars.
}





}


