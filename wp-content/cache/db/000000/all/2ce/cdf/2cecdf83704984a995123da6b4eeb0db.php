���U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:184:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.post_name = 'bigquery-php-api-loading-data-into-the-table' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"149";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-08 18:45:58";s:13:"post_date_gmt";s:19:"2015-07-08 13:15:58";s:12:"post_content";s:7633:"<p>Using bigquery php api or any other client libraries, we can only steam data into bigquery table in following ways</p>
<ol>
<li>Objects in <a href="https://cloud.google.com/storage/">Google Cloud Storage</a></li>
<li>Data sent with the job or <a href="https://cloud.google.com/bigquery/streaming-data-into-bigquery">streaming insert</a></li>
<li>A <a href="https://cloud.google.com/datastore/">Google Cloud Datastore</a> backup</li>
<li>Row-wise from php script </li>
</ol>
<p>Firstly lets see a way to add data from google server directly into the bigquery table ( method 1/2/3 )</p>
<p>U need</p>
<ol>
<li>PROJECT_ID</li>
<li>DATASET_ID</li>
<li>TABLE_ID</li>
<li>Url to google cloud storage where csv/json file is stored.</li>
</ol>
<p>Same goes here, knock on here .</p>
<pre class="prettyprint lang-php"><?php
set_include_path("src/" . PATH_SEPARATOR . get_include_path());
require_once 'Google/Client.php';
require_once 'Google/Service/Bigquery.php';

define("PROJECT_ID", 'YOUR PROJECT ID');
define("DATASET_ID", "YOUR DATASET ID");
define("TABLE_ID", "DESIRED TABLE ID");
define("KEY_FILE", 'KEY FILE NAME');
define("SERVICE_ACCOUNT_NAME", 'SERVICE ACCOUNT NAME');
define("CLIENT_ID", 'CLIENT ID');

$key = file_get_contents(KEY_FILE);

$client = new Google_Client();
$client->setAssertionCredentials(new Google_Auth_AssertionCredentials(
                SERVICE_ACCOUNT_NAME,
                array('https://www.googleapis.com/auth/bigquery'),
                $key)
);

$client->setClientId(CLIENT_ID);

// Instantiate a new BigQuery Client 
$service = new Google_Service_Bigquery($client);

$table_reference = new Google_Service_Bigquery_TableReference();
$table_reference->setProjectId(PROJECT_ID);
$table_reference->setDatasetId(DATASET_ID);
$table_reference->setTableId(TABLE_ID);

$load = new Google_Service_Bigquery_JobConfigurationLoad();
$load->setDestinationTable($table_reference);
$load->setSourceUris(['linktocsv/jsonfile']);
$load->setSourceFormat('CSV');
$load->setMaxBadRecords(1);

$config = new Google_Service_Bigquery_JobConfiguration();
$config->setLoad($load);

$job = new Google_Service_Bigquery_Job();
$job->setConfiguration($config);
$job->setKind('load');

$result =  $service->jobs->insert(PROJECT_ID, $job);
print_r($result);

?></pre>
<p><span style="color: #99cc00;"><em><strong>Understanding the code</strong></em></span></p>
<p><strong>define(“KEY_FILE”, ‘KEY FILE NAME’);</strong></p>
<p>You will have to put your downloaded key file in the directory same as your php file. And provide a name to your key file here. </p>
<p><strong>define(“SERVICE_ACCOUNT_NAME”, ‘SERVICE ACCOUNT NAME’);</strong></p>
<p>This is the service account name for your account. If you are not getting a thing about this service account, Please see <a href="http://webtutplus.com/bigquery-basic-setup/" target="_blank">http://webtutplus.com/bigquery-basic-setup/</a> </p>
<p><strong>define(“CLIENT_ID”, ‘CLIENT ID’);</strong></p>
<p>This is client ID you can see after creating a authorization again given on the same link given above.  </p>
<p><strong>$load-&gt;setSourceUris(['linktocsv/jsonfile']);</strong></p>
<p>Here you will be providing the address to your json or the csv file which contains the data that you want to insert into the bigquery table. If you want to periodically add data into the table you can set crons for doing so. Soon we will be uploading a post on setting crons in google cloud storage. Keep looking for more. </p>
<p>Now the 2nd way, Its too simple.</p>
<p>Create an array in php with the values you need to insert and desired no. of rows.</p>
<p>Yo are ready to go with again 3 things</p>
<ul>
<li>PROJECT_ID</li>
<li>DATASET_ID</li>
<li>TABLE_ID </li>
</ul>
<pre class="prettyprint lang-php"><?php
set_include_path("src/" . PATH_SEPARATOR . get_include_path());
require_once 'Google/Client.php';
require_once 'Google/Service/Bigquery.php';

define("PROJECT_ID", 'YOUR PROJECT ID');
define("DATASET_ID", "YOUR DATASET ID");
define("TABLE_ID", "DESIRED TABLE ID");
define("KEY_FILE", 'KEY FILE NAME');
define("SERVICE_ACCOUNT_NAME", 'SERVICE ACCOUNT NAME');
define("CLIENT_ID", 'CLIENT ID');

$key = file_get_contents(KEY_FILE);
$client = new Google_Client();
$client->setAssertionCredentials(new Google_Auth_AssertionCredentials(
                SERVICE_ACCOUNT_NAME,
                array('https://www.googleapis.com/auth/bigquery'),
                $key)
);

$client->setClientId(CLIENT_ID);

// Instantiate a new BigQuery Client 
$service = new Google_Service_Bigquery($client);
try
{		
        //insertALL check
        $data = array( 'user_id' => 2 , 'order_id' => 23,'status' => 2,'timestamp' => time());
        		$rows = array();
        $row = new Google_Service_Bigquery_TableDataInsertAllRequestRows;
        $row->setJson($data);
        //$row->setInsertId( strtotime('now') );
        $rows[0] = $row;
        $request = new Google_Service_Bigquery_TableDataInsertAllRequest;
        $request->setKind('bigquery#tableDataInsertAllRequest');
        $request->setRows($rows);
        $response =  $service->tabledata->insertAll(PROJECT_ID, DATASET_ID , TABLE_ID, $request);
        print_r($response);
} 
catch (Exception $e)
{
    echo $e->getMessage();
}
?></pre>
<p><span style="color: #99cc00;"><em><strong>Understanding the code</strong></em></span></p>
<p><strong>define(“KEY_FILE”, ‘KEY FILE NAME’);</strong></p>
<p>You will have to put your downloaded key file in the directory same as your php file. And provide a name to your key file here. </p>
<p><strong>define(“SERVICE_ACCOUNT_NAME”, ‘SERVICE ACCOUNT NAME’);</strong></p>
<p>This is the service account name for your account. If you are not getting a thing about this service account, Please see <a href="http://webtutplus.com/bigquery-basic-setup/" target="_blank">http://webtutplus.com/bigquery-basic-setup/</a> </p>
<p><strong>define(“CLIENT_ID”, ‘CLIENT ID’);</strong></p>
<p>This is client ID you can see after creating a authorization again given on the same link given above.  </p>
<p><strong> $data = array( 'user_id' =&gt; 2 , 'order_id' =&gt; 23,'status' =&gt; 2,'timestamp' =&gt; time());</strong>

<strong> $row = new Google_Service_Bigquery_TableDataInsertAllRequestRows;</strong>

<strong> $row-&gt;setJson($data);</strong></p>
<p>Here you can add multiple rows to the table. Above defined data array takes one row and according to the column values we can provide the data. Now the below defined row variable create a request and then sets the data to json format. This is the single row, if you wish to add multiple rows, create similar row that many times and then push all those in a array.</p>
<p><strong>$rows = array();</strong></p>
<p><strong>$rows[0] = row ;</strong></p>
<p>This will add all the desired rows to the rows array and now that array is provided as a request.</p>
<p><strong></strong><strong>$row-&gt;setInsertId( strtotime('now') );</strong></p>
<p>You can choose to insert the data at later time or now. This is the ways to do it. Its good going with you right, If you have any queries or are facing difficulties implementing this. Give me message on chat below.</p>
<p>&nbsp;</p>
<p><span style="color: #ff0000;">Here in google bigquery, since we need a billing account for uploading data, creating table and all such operations I can not provide you with the demos for this, For any queries comment below or drop me a message in chat box below. </span></p>
";s:10:"post_title";s:46:"BigQuery PHP API : Loading Data Into the table";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"private";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:44:"bigquery-php-api-loading-data-into-the-table";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-06 18:34:25";s:17:"post_modified_gmt";s:19:"2015-08-06 13:04:25";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=149";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"2";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7633;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:46;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:44;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}