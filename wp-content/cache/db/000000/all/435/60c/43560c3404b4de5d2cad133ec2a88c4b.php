���U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (672,648,644,642)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"642";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:42:19";s:13:"post_date_gmt";s:19:"2015-08-07 02:12:19";s:12:"post_content";s:14757:"<figure id="attachment_31" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/kdag.png"><img class="wp-image-31 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/kdag.png?w=648" alt="kdag" /></a><figcaption class="wp-caption-text">Random Forest : A collection of Trees</figcaption></figure>Random Forest is an algorithm used for both Regression and Classification problems.
<ul>
	<li><strong>Regression</strong> :- When response variables (output variables) are <strong>continuous, </strong>given data on input variables e.g, predict a person’s systolic blood pressure based on their age, height, weight</li>
</ul>
<figure id="attachment_32" class="wp-caption alignnone" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/regression.png"><img class="wp-image-32 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/regression.png?w=648" alt="regression" /></a><figcaption class="wp-caption-text">An example of Regression Problem</figcaption></figure>Here is an example of regression problem in which the input variables are PSA and Cancer Volume. You can see that output variable is continuous. Here we are applying linear model to solve out this problem
<ul>
	<li><strong>Classification :- </strong>When response variables (output variables) are <strong>categorical</strong><strong> </strong>, given data on input variables. e.g, predict a person’s 5-year-survival (yes/no) based on their age, height, weight</li>
</ul>
Following is an example of Classification problem where we have applied linear model . The point worth noting is that output variable <strong>color </strong>can take only two values that is either <strong>0 </strong>or <strong>1</strong>

<figure id="attachment_33" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/classification.png"><img class="wp-image-33 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/classification.png?w=648" alt="classification" /></a><figcaption class="wp-caption-text">An example of Classification Problem</figcaption></figure>In regression and classification problem, our aim is to :-
<ul>
	<li>Build a model to predict the value of response variables from given predictor variables</li>
	<li>To understand the relationship between predictor and response variable</li>
</ul>
<strong>Decision Trees :- </strong> A decision tree is a structure that includes a root node, branches, and leaf nodes. Each internal node denotes a test on an attribute, each branch denotes the outcome of a test, and each leaf node holds a class label. The topmost node in the tree is the root node. A decision tree can be categorized in two classes on the basis of response variables. If the response variable is continuous, it said to be <strong>Regression Tree </strong>while on the other hand if the response variable is discrete, it is said to be <strong>Classification Tree</strong>.

<figure id="attachment_61" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/kdag.jpg"><img class="wp-image-61 size-large" src="https://sirinsanchay.files.wordpress.com/2015/05/kdag.jpg?w=648&amp;h=445" alt="kdag" /></a><figcaption class="wp-caption-text">An outlook of a decision tree</figcaption></figure><strong>How to develop a Tree</strong> :-
<ul>
	<li>To grow a binary tree, at each node, “split” the data into two “daughter” nodes.</li>
	<li>Splits are chosen using a splitting criterion.</li>
	<li>Bottom nodes are “terminal” nodes.</li>
	<li>For regression the predicted value at a node is the average response variable for all observations in the node.</li>
	<li>For classification the predicted class is the most common class in the node (majority vote).</li>
	<li>For classification trees, we can also get estimated probability of membership in each of the classes</li>
</ul>
Here is an example of decision tree :-

<figure id="attachment_15" class="wp-caption aligncenter" data-shortcode="caption"><img class="  wp-image-15 size-full" src="https://sirinsanchay.files.wordpress.com/2015/04/tvtree.jpg?w=648" alt="tvTree" /><figcaption class="wp-caption-text">A decision tree</figcaption></figure>
<h5>Splitting Criteria :</h5>
<strong>Regression</strong> : residual sum of squares

RSS = ∑ left (y<sub>i </sub>– y<sub>L</sub>*)<sup>2</sup> + ∑ right (y<sub>i</sub> – y<sub>R</sub>*) <sup>2</sup>

where y<sub>L</sub>* = mean y-value for left node, y<sub>R</sub>* = mean y-value for right node

<strong>Classification : </strong>Gini criterion

Gini = N<sub>L</sub> ∑ <sub>k=1,…,K</sub> kL (1- kL ) + N<sub>R</sub> ∑ <sub>k=1,…,K</sub> kR (1- kR )

where kL = proportion of class k in left node, kR = proportion of class k in right node

Here is an illustration how to determine the split using above splitting criteria :-

<figure id="attachment_40" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/horizontal-split2.png"><img class="wp-image-40 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/horizontal-split2.png?w=648" alt="horizontal split2" /></a><figcaption class="wp-caption-text">Checking out the min RSS in case of Horizontal Split</figcaption></figure>So, here we find out that minimum RSS for horizontal split is<strong> 68.09</strong> where the log of prostate weight is <strong>3.67 </strong>

<figure id="attachment_39" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/vertical-split1.png"><img class="wp-image-39 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/vertical-split1.png?w=648" alt="vertical split1" /></a><figcaption class="wp-caption-text">Checking out min RSS for vertical split</figcaption></figure>In case of Vertical Split, the minimum RSS is <b>61.76 </b>where log of cancer volume is <strong>1.05 </strong>. <a href="https://sirinsanchay.files.wordpress.com/2015/05/done1.png"><img class=" wp-image-43  alignnone" src="https://sirinsanchay.files.wordpress.com/2015/05/done1.png?w=429&amp;h=190" alt="done1" width="429" height="190" /></a> <a href="https://sirinsanchay.files.wordpress.com/2015/05/done2.png"><img class="  alignnone wp-image-42" src="https://sirinsanchay.files.wordpress.com/2015/05/done2.png?w=260&amp;h=205" alt="done2" width="260" height="205" /></a>

So , we will go for vertical split as the <strong>min </strong>RSS is less in case of Vertical split as compared to Horizontal Split . Now for second split (left) , again we will repeat the same procedure :

<figure id="attachment_49" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/2h1.png"><img class="wp-image-49 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/2h1.png?w=648" alt="2h1" /></a><figcaption class="wp-caption-text">Finding min RSS in case of Horizontal Split</figcaption></figure>Best horizontal split is at <strong>3.66</strong> with RSS = <strong>16.11</strong>

<figure id="attachment_47" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/2v1.png"><img class="wp-image-47 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/2v1.png?w=648" alt="2v1" /></a><figcaption class="wp-caption-text">Finding min RSS in case of Vertical Split</figcaption></figure>Best vertical split is at –<strong>.48</strong> with RSS = <strong>13.61</strong>. So once again we will go for vertical split as RSS is less in  case of vertical split.

.<a href="https://sirinsanchay.files.wordpress.com/2015/05/2d1.png"><img class="  wp-image-51 alignright" src="https://sirinsanchay.files.wordpress.com/2015/05/2d1.png?w=696&amp;h=308" alt="2d1" width="696" height="308" /></a><a href="https://sirinsanchay.files.wordpress.com/2015/05/2d2.png"><img class="  wp-image-50 aligncenter" src="https://sirinsanchay.files.wordpress.com/2015/05/2d2.png?w=211&amp;h=340" alt="2d2" width="211" height="340" /></a>

So , the second split in the left node is at -.48.  In a similar way, we can classify all the data using splitting criteria. And ultimately we will end up similar to this..<a href="https://sirinsanchay.files.wordpress.com/2015/05/final.png"><img class="  wp-image-53 alignright" src="https://sirinsanchay.files.wordpress.com/2015/05/final.png?w=708&amp;h=314" alt="final" width="708" height="314" /></a><a href="https://sirinsanchay.files.wordpress.com/2015/05/final2.png"><img class="  wp-image-52 alignright" src="https://sirinsanchay.files.wordpress.com/2015/05/final2.png?w=237&amp;h=277" alt="final2" width="237" height="277" /></a>

On a summarizing note, we can say that for each variable, first we determine which split (Horizontal or Vertical) has minimum RSS (in case of Regression). And then we choose the variable having minimum RSS as the split. Similarly, we select the splitting variable at each node and classify the given data set in a tree. Then we repeat the same procedure at each node to classify the data set and we end up in developing a decision tree.
<h5>Pruning of tree :-</h5>
<ul>
	<li>Pruning reduces the size of decision tree by removing sections of the tree that provide little power to classify instances.</li>
	<li>Classification trees can have hundreds or thousands of nodes and these need to be reduced by pruning to simplify the tree</li>
	<li>Pruning is done to avoid the potential over-fitting problem that might happen in a single tree</li>
</ul>
<b>Perks of using CART ( Classification and Regression Trees) :-</b>
<ul>
	<li>It is applicable to both classification and regression problems and as well as handles categorical predictor naturally</li>
	<li>Computationally simple and quick to fit even for larger problems</li>
	<li>Can handle highly non-linear interaction and classification boundaries</li>
	<li>Very easy to interpret if the tree is small</li>
	<li>The picture of the tree can give valuable insights into which variables are important and where.</li>
	<li>The terminal nodes suggest a natural clustering of data into homogeneous groups</li>
</ul>
<h5>Then why do we need Random Forest ??</h5>
<ul>
	<li><strong>Accuracy :- </strong>Decision trees tend to overfit training data which can give poor results when applied to the full data set<strong> .</strong>The accuracy of CART is very low as compared to other modern methods.</li>
	<li><strong>Instability :- </strong>If we change the data a little, the tree picture can change a lot. So, the interpretation is not as straightforward as it appears.</li>
</ul>
<em>Before we go to the Random forest, </em>first we need to understand the concept of <strong>Bagging </strong>.
<h5><strong>Bagging :-  </strong></h5>
Bagging is word made from <strong>B</strong>ootstrap <strong>Agg</strong>regat<strong>ing </strong>. A bootstrap sample is chosen at random with replacement from the data. Some observations end up in the bootstrap sample more than once, while others are not included also known as <b>out of bag .</b> Classification or Regression model is fit to bootstrap samples from data and combine by voting (classification) or averaging (regression) all the bootstrap samples. It reduces the variance of base learner but has limited effect on bias
<h4>Random Forest</h4>
It is an ensemble classifier using many decision tree models which can be used for both classification and regression problem. It corrects the decision trees habit of over-fitting the training data. <strong>How Random Forest works ?</strong>
<ul>
	<li>Grow a forest of many trees. We take default R as 500 where R is number of trees</li>
	<li>Grow each tree on an independent bootstrap sample from the training data where N samples are selected at random with replacement from given data</li>
	<li>At each node: Select <strong>m</strong> variables at random out of all M possible variables (independently for each node).Find the best split on selected <strong>m</strong> variables</li>
	<li>Grow the trees to maximum depth</li>
	<li>Vote/average the trees to get predictions for the new data</li>
</ul>
<h5>Advantages of Random Forest :-</h5>
It inherits the various advantages of CART like computationally simple and quick to fit even for larger problems , can handle highly non-linear interactions and classification boundaries but two main advantages over CART are as follows :-

<strong>Accuracy :- </strong>Random Forests is competitive with the best known machine learning methods.

<strong>Stability :-  </strong>if we change the data a little, the individual trees may change but the forest is relatively stable because it is a combination of many trees.

Though <strong>Random Forest </strong>has various advantages, but in this case the picture does not give an insight of which variables are important and where nor the terminal nodes suggest a natural clustering of data into homogeneous groups
<h4>Proximity Meausres :-</h4>
Proximity of two cases is the proportion of the time that they end up in the same node. The proximities don’t just measure similarity of the variables – they also take into account the importance of the variables. Two cases that have quite <strong>different</strong> predictor variables might have <strong>large</strong> proximity if they differ only on variables that are<strong> not important .</strong> Two cases that have quite<strong>similar</strong> values of the predictor variables might have <strong>small</strong> proximity if they differ on inputs that are <strong>important.</strong>

<strong> </strong> <b>Applications of Proximity Measures :- </b>
<ul>
	<li>Proximity measures how frequent unique pairs of training samples (in and out of bag) end up in the same terminal node</li>
	<li>It is used to fill in missing data and calculating outliers</li>
	<li>At a glance, we get the information about which classes are overlapping and which classes differ.</li>
</ul>
An application of proximity measure is illustrated here :- Here we can visualize that there are <strong>600 </strong>cases, in which there are <strong>2 </strong>meaningful variables, <strong>48 </strong>noise variables and <strong>3 </strong>classes.
<a href="https://sirinsanchay.files.wordpress.com/2015/05/proximity.png"><img class="  wp-image-28 aligncenter" src="https://sirinsanchay.files.wordpress.com/2015/05/proximity.png?w=451&amp;h=398" alt="proximity" width="451" height="398" /></a>

&nbsp;";s:10:"post_title";s:44:"Random Forest :- An Ensemble Learning Method";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:41:"random-forest-an-ensemble-learning-method";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:47:16";s:17:"post_modified_gmt";s:19:"2015-08-07 02:17:16";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=642";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"644";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:44:41";s:13:"post_date_gmt";s:19:"2015-08-07 02:14:41";s:12:"post_content";s:4529:"<header class="entry-header">
<h2 class="entry-title"></h2>
</header>
<div class="entry-content">

A Decision tree is basically a tree structure used for classification. The tree has a root, that quite counter-intuitively is located at the top. Further, it branches out to nodes, and the nodes with no further branches are known as leaves.

Consider this data-set:

<img class="alignnone" src="https://cochincodeclub.files.wordpress.com/2015/04/fe150-tennis-table.jpg?w=1054&amp;h=577" alt="" width="1054" height="577" />
In a decision tree, the process of classification starts at the root. Now, just like any other data set we’ve encountered, in the above data each row contains a set of features/variables and a class to which the particular row is classified. At the root node, we make a classification of the data set based on just one feature – the one feature that can best classify the data set.

<img class="alignnone" src="https://i2.wp.com/jmvidal.cse.sc.edu/talks/decisiontrees/dt.png" alt="" width="1292" height="788" />
Now before moving on – how do we decide which feature can best classify the data set at each node. Why did we start with ‘Outlook’ and not ‘Humidity’ or ‘Wind’. It can be mathematically understood as follows:

Entropy = -p1 * log(p1) – p2 * log(p2) and so on, where p1 and p2 denote the probability of a row in the data set at the particular node being from class 1 or class 2 respectively

This is, as name would suggest, a measure of the randomness of the data set. In the data-set, if there are more number of classes with each class occurring almost equal number of times, it’s highly random. But if it’s mostly of one class, then it’s not very random and the entropy would be less.

So we measure the entropy gain in classifying at a node using change in entropy – the more, the better. For example, if we have three features at a node, and we need to check the change in entropy for division with each feature we have, and choose to divide with the one that creates maximum reduction in entropy. Now that the data-set is divided into two or more nodes based on one feature, we continue to do this at each until one node has satisfactorily low entropy. That is, the node mostly only one class of data.

<a href="https://cochincodeclub.files.wordpress.com/2015/04/decision-tree-learning-17-638.jpg"><img class="alignnone size-medium wp-image-14" src="https://cochincodeclub.files.wordpress.com/2015/04/decision-tree-learning-17-638.jpg?w=300&amp;h=141" alt="decision-tree-learning-17-638" width="300" height="141" /></a>

In the above case, notice how we came to choose ‘Humidity’ as the splitting variable using the concept of entropy. So this is the basics of a simple decision tree – just enough to understand RF.

Random Forest.

Now Random Forest in basically an extension of the decision trees. It uses the crucial technique of bagging. Bagging involves training a lot of weak learning algorithms and collectively using them to produce a powerful learner. In case of RF, all weak learners are decision trees, but they are weak, because they use only part of the data to train themselves. Now all these weak decision trees work together to give a result much accurate than if we’d just used a single decision tree accessing complete data.

This is how it works. Consider a data-set, with say 100 rows and 5 features. Each of the entry belongs to either of 3 classes.

Now we take, say, two-thirds of the total rows (60 in this case) and feed it to a decision tree. At each node, choose a small subset of the features and then find out the most suitable feature from only among that subset. In this case, say at one node, we make a subset of 2 out of five features. From the two features we find out which one reduces entropy most and proceed. This continues at each node.
This is done for many more decision trees. So essentially data is randomly chosen for each decision tree while the subset of features to be used is selected at each node.

<img class="alignnone" src="https://i1.wp.com/cdn-ak.f.st-hatena.com/images/fotolife/k/kazoo04/20131204/20131204173330.png" alt="" width="567" height="328" />

Finally, after learning, we run the test data on each decision tree and find out the classification – then decide the final classification based on voting from each tree. For a row in test data, if 80 among 100 decision trees voted a particular class, that would be chosen as the class of the row.

</div>";s:10:"post_title";s:14:"Decision Trees";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"decision-trees";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:46:34";s:17:"post_modified_gmt";s:19:"2015-08-07 02:16:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=644";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"648";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-07 09:39:31";s:13:"post_date_gmt";s:19:"2015-08-07 04:09:31";s:12:"post_content";s:16955:"Hi friends today we will add a new and exiting feature in our existing e-commerce. We will filter the products based on what category they belong. Please refer to below tutorial if you missed the first part of the e commerce.
<h5><a href="http://webtutplus.com/e-commerce-website-building-tutorial-set-part-1/">Lets build an E Commerce Website : part-1</a></h5>
[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part3/" target="_blank"]DEMO[/button]  [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part3.zip" target="_blank"]Download Code[/button]

Lets understand how we are going to do that from database point of view. We will create two tables to store categories and which product goes to which category.
<pre class="lang:default decode:true ">CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;</pre>
<pre class="lang:default decode:true ">CREATE TABLE IF NOT EXISTS `product_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;</pre>
<h2><span style="color: #ff0000;">Step 2:-  Add option of adding category in admin panel.</span></h2>

<hr />

&nbsp;

Add the following code in admin.php form
<pre class="lang:default decode:true ">&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;br /&gt;&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;"  &gt; 
					    		&lt;?php echo $row['name']; ?&gt;

			&lt;?php
			}
		}
			?&gt;</pre>
And save when the form is submitted.
<pre class="lang:default decode:true ">$product_id =  mysqli_insert_id($conn);
							$categories = $_POST['cat'];
							foreach ($categories as $key ) {
								$sql = "INSERT INTO `product_cat`( `product_id`, `categories_id`) 
								VALUES ('$product_id','$key')";
								echo $sql;
								if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							}
</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_1.png"><img class="alignnone size-large wp-image-653" src="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_1-1024x576.png" alt="ecomm_part3_1" width="1024" height="576" /></a>

So the code of admin panel becomes
<h3><span style="color: #ff0000;">Admin.php</span></h3>
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Develop An E commerce Store&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
&lt;/head&gt;
&lt;body&gt;
&lt;div class="container" style="margin-top:100px"&gt;
&lt;?php include("connect.php")  ?&gt;

	&lt;?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] &gt; 0) { // if error &gt; 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "&lt;br /&gt;";
			} else {
			   
			    $image_name = $_FILES['file']['name'];
			     // store image name 
                $pn=mysqli_real_escape_string($conn,$_POST['naam']);
                // clean name 
                $pc=mysqli_real_escape_string($conn,$_POST['cate']);
				$p=mysqli_real_escape_string($conn,$_POST['pr']);

			    $imageFileType = pathinfo($image_name, PATHINFO_EXTENSION); // get image file type 
			    if($imageFileType != "jpg" &amp;&amp; $imageFileType != "png" &amp;&amp; $imageFileType != "jpeg"
				&amp;&amp; $imageFileType != "gif" ) {
					// image is not in requiered format 
				    echo "Sorry, only JPG, JPEG, PNG &amp; GIF files are allowed.&lt;br /&gt;";
				   
				}else{
					// image is in correct format 
					// save the image
					echo "Product Image is ok"."&lt;br /&gt;";
					// save image 
					$new_name = basename(uniqid().$image_name);
					$target_file = "images/".$new_name; // unique id function make sure all images are unique
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					 	// move the file from temo location to image folder
				        $sql = "INSERT INTO products (image_name,pname,pdesc,price)
							VALUES ('$new_name','$pn','$pc','$p')";

							if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							$product_id =  mysqli_insert_id($conn);
							$categories = $_POST['cat'];
							foreach ($categories as $key ) {
								$sql = "INSERT INTO `product_cat`( `product_id`, `categories_id`) 
								VALUES ('$product_id','$key')";
								echo $sql;
								if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							}



				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.&lt;br /&gt;";
				    }
				}
			}
		} 
	?&gt;
	&lt;/div&gt;
	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li &gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li &gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li class="active"&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;
	&lt;div class="container" style="margin-top:0px"&gt;
		&lt;h2 style="text-align:center"  class="bg-success"&gt; Upload a new product&lt;/h2&gt;
	&lt;div class="container"&gt;
		&lt;form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto"&gt;

		  &lt;div class="form-group"&gt;
                  &lt;label for="exampleInputFile"&gt; Product Name &lt;/label&gt;  
               &lt;input type="text" class="form-control" name="naam" required&gt;
          &lt;label for="exampleInputFile"&gt;Product Description &lt;/label&gt;  
           &lt;textarea class="form-control"  name="cate" rows="5" id="comment"&gt;&lt;/textarea&gt;
		
		  &lt;label for="exampleInputFile"&gt;Product Price &lt;/label&gt; 
		 &lt;input type="number" min="10" class="form-control" name="pr" required&gt;
		    &lt;label for="exampleInputFile"&gt;Upload Product Image&lt;/label&gt;
		    &lt;input type="file" class="form-control" name="file" id="exampleInputFile" required&gt;
		   
		  &lt;/div&gt;
		  &lt;div class="form-group"&gt;
		  &lt;label for="exampleInputFile"&gt;Add relevent categories&lt;/label&gt;
		  	&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;br /&gt;&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;"  &gt; 
					    		&lt;?php echo $row['name']; ?&gt;

			&lt;?php
			}
		}
			?&gt;

		  &lt;/div&gt;
		 
		  
		  &lt;button type="submit" name="upload" class="btn btn-info" &gt;Add new product&lt;/button&gt;
		&lt;/form&gt;
	&lt;/div&gt;

	&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
Step 3:- We will implement check box type filter based on product category.

We have to write a form which will be submitted by get method when anyone clicks the check box
<pre class="lang:default decode:true ">&lt;form action="" method="get"&gt;
					&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						//&lt;?php
						$cat = array();
						      	if(isset($_GET['cat'])){
						      		print_r($_GET['cat']) ;
						      		$cat = $_GET['cat'];
						      	 
						      	}
						    
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;div class="checkbox"&gt;
						      &lt;label&gt;
						      	&lt;!-- check whether checkbox is selected or not --&gt;

						      	&lt;?php 
						      		if(in_array($row['id'], $cat)){
						      			?&gt;
						      			 &lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" checked&gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      			&lt;?php
						      		}else{?&gt;
						      		&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" &gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      		&lt;?php
						      	}	
						      	?&gt;
						       
						      &lt;/label&gt;
						    &lt;/div&gt;
					    	&lt;?php
					    	
					    }
					} 
					?&gt;
					
				&lt;/form&gt;</pre>
And based on what categories are checked we have to filter the products.
<pre class="lang:default decode:true ">&lt;?php
					$cat = array();
					$str = "";
					if(isset($_GET['cat'])){
						$cat = $_GET['cat'];
					}
					foreach ($cat as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM product_cat WHERE categories_id IN ($str)";
					$result = mysqli_query($conn, $sql);
					$products = '';
					if (mysqli_num_rows($result) &gt; 0) {
						while($row = mysqli_fetch_assoc($result)) {
							// get all relevent product ids
							$products .= $row['product_id'].",";

						}
						$products  = rtrim($products,',');
						$sql = "SELECT * FROM products WHERE id IN ($products) ";


					}else{
						$sql = "SELECT * FROM products";
					}
					echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	if($count %3 == 0){
					    		echo '&lt;div class="row" &gt;';
					    	}
					    	
					    	$image = "images/".$row['image_name'];
					        echo '&lt;div class="col-sm-3 image" &gt;';
					        $product_id = $row['id'];
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:230px;max-height:250px"
					      		  /&gt;&lt;/a&gt;';
					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
					        echo '&lt;/div&gt;';


					        if($count %3 == 2){
					    		echo '&lt;/div &gt;';
					    	}
					    	$count +=1;
			         

					    }
					} else {
					    echo "No Products";
					}
					?&gt;</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_2.png"><img class="alignnone size-large wp-image-656" src="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_2-1024x576.png" alt="ecomm_part3_2" width="1024" height="576" /></a>

Thats it. Here is complete code of index.php
<h3><span style="color: #ff0000;">index.php</span></h3>
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Make Ecommerce part 1&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;style&gt;
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    &lt;/style&gt;
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;

	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li class="active"&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; Products &lt;/h2&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-sm-3"&gt;
				&lt;h2 class="bg-info"&gt;Category &lt;/h2&gt; 
				&lt;form action="" method="get"&gt;
					&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						//&lt;?php
						$cat = array();
						      	if(isset($_GET['cat'])){
						      		print_r($_GET['cat']) ;
						      		$cat = $_GET['cat'];
						      	 
						      	}
						    
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;div class="checkbox"&gt;
						      &lt;label&gt;
						      	&lt;!-- check whether checkbox is selected or not --&gt;

						      	&lt;?php 
						      		if(in_array($row['id'], $cat)){
						      			?&gt;
						      			 &lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" checked&gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      			&lt;?php
						      		}else{?&gt;
						      		&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" &gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      		&lt;?php
						      	}	
						      	?&gt;
						       
						      &lt;/label&gt;
						    &lt;/div&gt;
					    	&lt;?php
					    	
					    }
					} 
					?&gt;
					
				&lt;/form&gt;
			&lt;/div&gt;
			&lt;div class="col-sm-9"&gt;
				&lt;?php
					$cat = array();
					$str = "";
					if(isset($_GET['cat'])){
						$cat = $_GET['cat'];
					}
					foreach ($cat as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM product_cat WHERE categories_id IN ($str)";
					$result = mysqli_query($conn, $sql);
					$products = '';
					if (mysqli_num_rows($result) &gt; 0) {
						while($row = mysqli_fetch_assoc($result)) {
							// get all relevent product ids
							$products .= $row['product_id'].",";

						}
						$products  = rtrim($products,',');
						$sql = "SELECT * FROM products WHERE id IN ($products) ";


					}else{
						$sql = "SELECT * FROM products";
					}
					echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	if($count %3 == 0){
					    		echo '&lt;div class="row" &gt;';
					    	}
					    	
					    	$image = "images/".$row['image_name'];
					        echo '&lt;div class="col-sm-3 image" &gt;';
					        $product_id = $row['id'];
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:230px;max-height:250px"
					      		  /&gt;&lt;/a&gt;';
					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
					        echo '&lt;/div&gt;';


					        if($count %3 == 2){
					    		echo '&lt;/div &gt;';
					    	}
					    	$count +=1;
			         

					    }
					} else {
					    echo "No Products";
					}
					?&gt;
			&lt;/div&gt;
		
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;";s:10:"post_title";s:50:"E commerce, part 3. Lets add filtering of products";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:36:"add-filter-based-category-e-commerce";s:7:"to_ping";s:0:"";s:6:"pinged";s:71:"
http://webtutplus.com/e-commerce-website-building-tutorial-set-part-1/";s:13:"post_modified";s:19:"2015-08-09 10:18:07";s:17:"post_modified_gmt";s:19:"2015-08-09 04:48:07";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=648";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"672";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-08 10:00:11";s:13:"post_date_gmt";s:19:"2015-08-08 04:30:11";s:12:"post_content";s:11009:"Hello everyone, continuing with our e-commerce website building tutorial this is one more tutorial which will teach you how to how to hover zoom your product image from the details page

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part2/" target="_blank"]DEMO[/button]  [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part2.zip" target="_blank"]Download Code[/button]

&nbsp;

Recall the fact that we had a details.php section in our previous tutorials of e-commerce websites where each product details were displayed individually when the image of the product was clicked. Now we will use a jQuery zoom plugin in that file in order to hover zoom images from the details.php page

<strong>Step 1-</strong>Upgrade the details.php page accordingly
<h2><span style="color: #ff0000;">details.php</span></h2>
<pre class="lang:php decode:true" title="Details.php updated with the jquery code">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Details &lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;style&gt;
		/* styles unrelated to zoom */
		

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		
	&lt;/style&gt;
	&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'&gt;&lt;/script&gt;
	&lt;script src='jquery.zoom.js'&gt;&lt;/script&gt;
	&lt;script&gt;
		$(document).ready(function(){
			$('#image').zoom(); //zoom plugin applied on the image
			
		});
	&lt;/script&gt;

&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;

	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li class="active"&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; Products &lt;/h2&gt;
		&lt;div class="row"&gt;
		&lt;?php
		if(isset($_GET['product_id'])){
			if(is_numeric($_GET['product_id']) ){ 
				$product_id = $_GET['product_id'];
			}
		}else{
			$product_id = 1;
		}
		

		$sql = "SELECT * FROM images WHERE id='$product_id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) &gt; 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		    	?&gt;
		    	&lt;div class="container"&gt;
		    	&lt;div class="col-sm-6"&gt;
		    		&lt;span class='zoom' id='image'&gt;
		    		&lt;?php echo '&lt;img src="'.$image.'"style="width:400px;" /&gt;';?&gt;
		    		&lt;/span&gt;
		    	&lt;/div&gt;
		    	&lt;div class="col-sm-6"&gt;
		    	&lt;?php 
		    		 echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
			       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
			        echo '&lt;p&gt;'.$row['pdesc'].'&lt;/p&gt; ';
		        ?&gt;
		    	&lt;/div&gt;
		    	&lt;/div&gt;
         
		    	&lt;?php
		    }
		} else {
		    echo "No Products";
		}
		?&gt;
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
<strong>Step 2-</strong>Include the following jquery code to add the hover zoom plugin
<h2><span style="color: #ff0000;">jQuery.zoom.js</span></h2>
<pre class="lang:default decode:true ">/*!
	Zoom 1.7.14
	license: MIT
	http://www.jacklmoore.com/zoom
*/
(function ($) {
	var defaults = {
		url: false,
		callback: false,
		target: false,
		duration: 120,
		on: 'mouseover', // other options: grab, click, toggle
		touch: true, // enables a touch fallback
		onZoomIn: false,
		onZoomOut: false,
		magnify: 2
	};

	// Core Zoom Logic, independent of event listeners.
	$.zoom = function(target, source, img, magnify) {
		var targetHeight,
			targetWidth,
			sourceHeight,
			sourceWidth,
			xRatio,
			yRatio,
			offset,
			$target = $(target),
			position = $target.css('position'),
			$source = $(source);

		// The parent element needs positioning so that the zoomed element can be correctly positioned within.
		$target.css('position', /(absolute|fixed)/.test(position) ? position : 'relative');
		$target.css('overflow', 'hidden');

		img.style.width = img.style.height = '';

		$(img)
			.addClass('zoomImg')
			.css({
				position: 'absolute',
				top: 0,
				left: 0,
				opacity: 0,
				width: img.width * magnify,
				height: img.height * magnify,
				border: 'none',
				maxWidth: 'none',
				maxHeight: 'none'
			})
			.appendTo(target);

		return {
			init: function() {
				targetWidth = $target.outerWidth();
				targetHeight = $target.outerHeight();

				if (source === $target[0]) {
					sourceWidth = targetWidth;
					sourceHeight = targetHeight;
				} else {
					sourceWidth = $source.outerWidth();
					sourceHeight = $source.outerHeight();
				}

				xRatio = (img.width - targetWidth) / sourceWidth;
				yRatio = (img.height - targetHeight) / sourceHeight;

				offset = $source.offset();
			},
			move: function (e) {
				var left = (e.pageX - offset.left),
					top = (e.pageY - offset.top);

				top = Math.max(Math.min(top, sourceHeight), 0);
				left = Math.max(Math.min(left, sourceWidth), 0);

				img.style.left = (left * -xRatio) + 'px';
				img.style.top = (top * -yRatio) + 'px';
			}
		};
	};

	$.fn.zoom = function (options) {
		return this.each(function () {
			var
			settings = $.extend({}, defaults, options || {}),
			//target will display the zoomed image
			target = settings.target || this,
			//source will provide zoom location info (thumbnail)
			source = this,
			$source = $(source),
			$target = $(target),
			img = document.createElement('img'),
			$img = $(img),
			mousemove = 'mousemove.zoom',
			clicked = false,
			touched = false,
			$urlElement;

			// If a url wasn't specified, look for an image element.
			if (!settings.url) {
				$urlElement = $source.find('img');
				if ($urlElement[0]) {
					settings.url = $urlElement.data('src') || $urlElement.attr('src');
				}
				if (!settings.url) {
					return;
				}
			}

			(function(){
				var position = $target.css('position');
				var overflow = $target.css('overflow');

				$source.one('zoom.destroy', function(){
					$source.off(".zoom");
					$target.css('position', position);
					$target.css('overflow', overflow);
					$img.remove();
				});
				
			}());

			img.onload = function () {
				var zoom = $.zoom(target, source, img, settings.magnify);

				function start(e) {
					zoom.init();
					zoom.move(e);

					// Skip the fade-in for IE8 and lower since it chokes on fading-in
					// and changing position based on mousemovement at the same time.
					$img.stop()
					.fadeTo($.support.opacity ? settings.duration : 0, 1, $.isFunction(settings.onZoomIn) ? settings.onZoomIn.call(img) : false);
				}

				function stop() {
					$img.stop()
					.fadeTo(settings.duration, 0, $.isFunction(settings.onZoomOut) ? settings.onZoomOut.call(img) : false);
				}

				// Mouse events
				if (settings.on === 'grab') {
					$source
						.on('mousedown.zoom',
							function (e) {
								if (e.which === 1) {
									$(document).one('mouseup.zoom',
										function () {
											stop();

											$(document).off(mousemove, zoom.move);
										}
									);

									start(e);

									$(document).on(mousemove, zoom.move);

									e.preventDefault();
								}
							}
						);
				} else if (settings.on === 'click') {
					$source.on('click.zoom',
						function (e) {
							if (clicked) {
								// bubble the event up to the document to trigger the unbind.
								return;
							} else {
								clicked = true;
								start(e);
								$(document).on(mousemove, zoom.move);
								$(document).one('click.zoom',
									function () {
										stop();
										clicked = false;
										$(document).off(mousemove, zoom.move);
									}
								);
								return false;
							}
						}
					);
				} else if (settings.on === 'toggle') {
					$source.on('click.zoom',
						function (e) {
							if (clicked) {
								stop();
							} else {
								start(e);
							}
							clicked = !clicked;
						}
					);
				} else if (settings.on === 'mouseover') {
					zoom.init(); // Preemptively call init because IE7 will fire the mousemove handler before the hover handler.

					$source
						.on('mouseenter.zoom', start)
						.on('mouseleave.zoom', stop)
						.on(mousemove, zoom.move);
				}

				// Touch fallback
				if (settings.touch) {
					$source
						.on('touchstart.zoom', function (e) {
							e.preventDefault();
							if (touched) {
								touched = false;
								stop();
							} else {
								touched = true;
								start( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );
							}
						})
						.on('touchmove.zoom', function (e) {
							e.preventDefault();
							zoom.move( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );
						});
				}
				
				if ($.isFunction(settings.callback)) {
					settings.callback.call(img);
				}
			};

			img.src = settings.url;
		});
	};

	$.fn.zoom.defaults = defaults;
}(window.jQuery));
</pre>
Once your done run the website and go to the details page of any product

[caption id="attachment_673" align="aligncenter" width="1024"]<img class="size-large wp-image-673" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-121-1024x424.png" alt="The Main Page" width="1024" height="424" /> The Main Page[/caption]

&nbsp;

[caption id="attachment_674" align="aligncenter" width="1024"]<img class="size-large wp-image-674" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-122-1024x424.png" alt="Details page of a particular product. On hovering the mos over the product It will zoom the image" width="1024" height="424" /> Details page of a particular product. On hovering the mouse over the product It will zoom the image[/caption]";s:10:"post_title";s:35:"ecommerce part -2 , add zoom effect";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:32:"ecommerce-part-2-add-zoom-effect";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-08 10:54:34";s:17:"post_modified_gmt";s:19:"2015-08-08 05:24:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=672";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:16955;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:50;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:41;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:71;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}