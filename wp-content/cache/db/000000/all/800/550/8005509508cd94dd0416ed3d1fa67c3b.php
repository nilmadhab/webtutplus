���U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (708,672,644,642)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"642";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:42:19";s:13:"post_date_gmt";s:19:"2015-08-07 02:12:19";s:12:"post_content";s:14757:"<figure id="attachment_31" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/kdag.png"><img class="wp-image-31 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/kdag.png?w=648" alt="kdag" /></a><figcaption class="wp-caption-text">Random Forest : A collection of Trees</figcaption></figure>Random Forest is an algorithm used for both Regression and Classification problems.
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

</div>";s:10:"post_title";s:14:"Decision Trees";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"decision-trees";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:46:34";s:17:"post_modified_gmt";s:19:"2015-08-07 02:16:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=644";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"672";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-08 10:00:11";s:13:"post_date_gmt";s:19:"2015-08-08 04:30:11";s:12:"post_content";s:11009:"Hello everyone, continuing with our e-commerce website building tutorial this is one more tutorial which will teach you how to how to hover zoom your product image from the details page

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

[caption id="attachment_674" align="aligncenter" width="1024"]<img class="size-large wp-image-674" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-122-1024x424.png" alt="Details page of a particular product. On hovering the mos over the product It will zoom the image" width="1024" height="424" /> Details page of a particular product. On hovering the mouse over the product It will zoom the image[/caption]";s:10:"post_title";s:35:"ecommerce part -2 , add zoom effect";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:32:"ecommerce-part-2-add-zoom-effect";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-08 10:54:34";s:17:"post_modified_gmt";s:19:"2015-08-08 05:24:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=672";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"708";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-11 10:12:26";s:13:"post_date_gmt";s:19:"2015-08-11 04:42:26";s:12:"post_content";s:13420:"We have created an e commerce store earlier, where we were able to add new product, filter those according to the category. Today we will add a new and exiting feature, add to cart option.

&nbsp;

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part4/" target="_blank"]Try it[/button]
[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part4.zip" target="_blank"]Download Code[/button]

&nbsp;

<strong>Step 1-</strong>In the index.php add My Cart option to the navigation bar and this option will act as a personal database and this will help one to store products which can be bought later. One can even delete products from cart if required
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
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
	       	&lt;li&gt;&lt;a href="cart.php"&gt;My Cart&lt;/a&gt;&lt;/li&gt; //THE MY CART OPTION
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		
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
<strong>Step 2</strong>-Create cart.php file.
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Make Ecommerce part 1&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'&gt;&lt;/script&gt;
    &lt;style&gt;
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	}
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    .total{
    	font-weight: bold;
			font-size: 1.5em;
			    }
    &lt;/style&gt;
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;
	&lt;script type="text/javascript"&gt;
		function delete_cart(product_id){
			//$('#cart').html("added to cart");
			$.ajax({
				  url: "delete_cart.php", // we will delete the post inside delete.php file
				  type: "get", 
			  	  data: { id : product_id}, // lets pass the post id to be deleted here.
				  success: function(html){
				  // $("#cart").load("cart_reload.php"); // we will reload the tbody by reload.php  
				   console.log(html);
				  window.location.reload(1); 
				  }
				});
		}
	&lt;/script&gt;
	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li &gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	       	&lt;li class="active"&gt;&lt;a href="cart.php"&gt;My cart&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; My Cart &lt;/h2&gt;
		&lt;div class="row"&gt;
			
			 &lt;table class="table table-striped" style="width:80%;margin:0 auto" id="cart"&gt;
				&lt;?php
					
				if(isset($_SESSION['cart'])){
					$products =$_SESSION['cart'];
					$str = "";
					foreach ($products as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM products WHERE id IN ($str)";
				}else{
					$sql = "SELECT * FROM products WHERE id IN (0)"; // no products
				}


					//$sql = "SELECT * FROM products";
					//echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);
					$total = 0;
					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo '&lt;tr&gt;';
					    	
					    	$image = "images/".$row['image_name'];
					       
					        $product_id = $row['id'];
					        echo '&lt;td&gt;';
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:100px;max-height:150px"
					      		  /&gt;&lt;/a&gt;';
					      	echo '&lt;/td&gt;';
					      	echo '&lt;td&gt;';

					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					        echo '&lt;/td&gt;';
					        echo '&lt;td&gt;';

					       echo '&lt;p&gt;'.'Rs '.$row['price']."&lt;/p&gt;";
					       echo '&lt;/td&gt;';
					       echo '&lt;td&gt;';

					       echo '&lt;p class="btn btn-danger" onclick="delete_cart('.$product_id.')" &gt; Delete from Cart &lt;/p&gt;';
					       echo '&lt;/td&gt;';

					        $total += (int)$row['price'];


			         
					    	echo "&lt;/tr&gt;";
					    }
					} else {
					    echo "No Products";
					}
					?&gt;
					&lt;tr&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					Amount Payable
					&lt;/td&gt;
					&lt;td&gt;
					&lt;p class='total' &gt; Rs &lt;?php echo $total ?&gt; &lt;/p&gt;
					&lt;/td&gt;
					&lt;/tr&gt;
					&lt;/table&gt;
			&lt;/div&gt;
		
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
<strong>Step 3</strong>-Create  two php files add_cart.php and delete_cart.php which will be used to update the cart. the first will add products to the cart while the latter will delete products.
<pre class="lang:php decode:true ">&lt;?php

session_start();
// remove all session variables
//session_unset(); 

// destroy the session 
//session_destroy(); 

$product_id = $_GET['id'];
if(!isset($_SESSION['cart'])){

	$_SESSION['cart'] = array();

}
if(!in_array($product_id, $_SESSION['cart']))
$_SESSION['cart'][] = $product_id;

print_r($_SESSION['cart']);



?&gt;</pre>
<pre class="lang:php decode:true ">&lt;?php

session_start();

$product_id = $_GET['id'];
if(!isset($_SESSION['cart'])){

	$_SESSION['cart'] = array();

}
/*if(in_array($product_id, $_SESSION['cart'])){
	//array_push($_SESSION['cart'],$product_id);
	//unset($anArray[0]);
	for ($i=0;$i &lt; sizeof($_SESSION['cart']) ; $i++) {
		if($_SESSION['cart'][$i] == $product_id){
			unset($_SESSION['cart'][$i]);
		}
	}
}*/

if(($key = array_search($product_id , $_SESSION['cart'])) !== false) {
    unset($_SESSION['cart'][$key]);
}


print_r($_SESSION['cart']);



?&gt;</pre>
<strong>Step 4-</strong>Create the cart_reload.php file which will reload the page once a product has been deleted to show the updated cart
<pre class="lang:default decode:true ">&lt;?php

					
				if(isset($_SESSION['cart'])){
					$products =$_SESSION['cart'];
					$str = "";
					foreach ($products as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM products WHERE id IN ($str)";
				}else{
					$sql = "SELECT * FROM products WHERE id IN (0)"; // no products
				}


					//$sql = "SELECT * FROM products";
					//echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);
					$total = 0;
					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo '&lt;tr&gt;';
					    	
					    	$image = "images/".$row['image_name'];
					       
					        $product_id = $row['id'];
					        echo '&lt;td&gt;';
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:100px;max-height:150px"
					      		  /&gt;&lt;/a&gt;';
					      	echo '&lt;/td&gt;';
					      	echo '&lt;td&gt;';

					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					        echo '&lt;/td&gt;';
					        echo '&lt;td&gt;';

					       echo '&lt;p&gt;'.'Rs '.$row['price']."&lt;/p&gt;";
					       echo '&lt;/td&gt;';
					       echo '&lt;td&gt;';

					       echo '&lt;p class="btn btn-danger" onclick="delete_cart('.$product_id.')" &gt; Delete from Cart &lt;/p&gt;';
					       echo '&lt;/td&gt;';

					        $total += (int)$row['price'];


			         
					    	echo "&lt;/tr&gt;";
					    }
					} else {
					    echo "No Products";
					}
					?&gt;
					&lt;tr&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					Amount Payable
					&lt;/td&gt;
					&lt;td&gt;
					&lt;p class='total' &gt; Rs &lt;?php echo $total ?&gt; &lt;/p&gt;
					&lt;/td&gt;
					&lt;/tr&gt;</pre>
<img class="aligncenter size-large wp-image-789" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-139-1024x451.png" alt="The My Cart option on the main page" width="1024" height="451" />
<h6 class=""></h6>";s:10:"post_title";s:53:"Lets build an e commerce, part-4 , add to cart option";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"lets-build-an-e-commerce-part-4";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-23 16:23:06";s:17:"post_modified_gmt";s:19:"2015-08-23 10:53:06";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=708";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:14757;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:53;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:41;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}