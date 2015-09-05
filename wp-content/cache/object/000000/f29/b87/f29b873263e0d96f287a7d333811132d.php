�:�U<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:100;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-04 05:24:43";s:13:"post_date_gmt";s:19:"2015-07-03 23:54:43";s:12:"post_content";s:4320:"<p>Hola! From now on we will try and implement codes in PHP. And we are using google's PHP api for doing this. Now We will do wonders in bigdata with bigquery php api. To Create a Empty Table into the bigquery database  you need to know
</p>
<ol>
<li>PROJECT_ID</li>
<li>DATASET_ID</li>
<li>TABLE_ID (to be created)</li>
</ol>
<p>I hope you already have created a project and a new dataset into the project. Now choose a well looking name for your new table and lets create it by running a php script. Refer to the following code, use your project id, dataset id and desired table id to go with this. If you have any trouble getting key file, service account name or client id comment below.</p>
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

$fields = array(
array('name' => 'user_id', 'type' => 'integer', 'mode' => 'required'),
array('name' => 'order_id', 'type' => 'integer', 'mode' => 'required'),
array('name' => 'status', 'type' => 'integer', 'mode' => 'nullable'),
array('name' => 'timestamp', 'type' => 'timestamp', 'mode' => 'nullable')
);

$table_reference = new Google_Service_Bigquery_TableReference();
$table_reference->setProjectId(PROJECT_ID);
$table_reference->setDatasetId(DATASET_ID);
$table_reference->setTableId(TABLE_ID);
$schema = new Google_Service_Bigquery_TableSchema();
$schema->setFields($fields);
$table = new Google_Service_Bigquery_Table();
$table->setTableReference($table_reference);
$table->setSchema($schema);

try 
{
    $result = $service->tables->insert(PROJECT_ID, DATASET_ID, $table);
    print_r($result);
} 
catch (Google_Service_Exception $e)
{
    echo $e->getMessage();
}

?></pre>
<p><span style="color: #339966;"><em><strong>Understanding the code</strong></em></span></p>
<p><strong>define("KEY_FILE", 'KEY FILE NAME');</strong></p>
<p>You will have to put your downloaded key file in the directory same as your php file. And provide a name to your key file here. </p>
<p><strong>define("SERVICE_ACCOUNT_NAME", 'SERVICE ACCOUNT NAME');</strong></p>
<p>This is the service account name for your account. If you are not getting a thing about this service account, Please see <a href="http://webtutplus.com/bigquery-basic-setup/" target="_blank">http://webtutplus.com/bigquery-basic-setup/</a> </p>
<p>
<strong>define("CLIENT_ID", 'CLIENT ID');</strong></p>
<p>This is client ID you can see after creating a authorization again given on the same link given above.  </p>
<p><strong>$fields = array(</strong>

<strong>array('name' =&gt; 'user_id', 'type' =&gt; 'integer', 'mode' =&gt; 'required'),</strong>

<strong>array('name' =&gt; 'order_id', 'type' =&gt; 'integer', 'mode' =&gt; 'required'),</strong>

<strong>array('name' =&gt; 'status', 'type' =&gt; 'integer', 'mode' =&gt; 'nullable'),</strong>

<strong>array('name' =&gt; 'timestamp', 'type' =&gt; 'timestamp', 'mode' =&gt; 'nullable')</strong>

<strong>);</strong></p>
<p>This defines the table schema you wish to create for the new table. For more details about name,type, mode and other attributes follow <a href="https://cloud.google.com/bigquery/docs/reference/v2/tables#schema" target="_blank">https://cloud.google.com/bigquery/docs/reference/v2/tables#schema</a></p><p><span style="color: #ff0000;">Here in google bigquery, since we need a billing account for uploading data, creating table and all such operations I can not provide you with the demos for this, For any queries comment below or drop me a message in chat box below. </span></p>
";s:10:"post_title";s:39:"BigQuery PHP API : Creating Empty Table";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"private";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:37:"bigquery-php-api-creating-empty-table";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-06 18:34:34";s:17:"post_modified_gmt";s:19:"2015-08-06 13:04:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:27:"http://webtutplus.in/?p=100";s:10:"menu_order";i:0;s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}