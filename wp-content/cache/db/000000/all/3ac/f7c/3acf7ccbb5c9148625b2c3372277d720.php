D��U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (631,642,637,644)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"631";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:23:59";s:13:"post_date_gmt";s:19:"2015-08-07 01:53:59";s:12:"post_content";s:4688:"<strong>Data Analytics</strong> is all about looking patterns in the data. And there is nothing new in it. People have been doing this since the beginning of the life. Hunters sought patterns in animal migration, farmers sought patterns in the crop growth, politicians sought the voting patterns of voters and many more.<strong>Modern Data Analytics</strong> has just taken all this to a whole new level. Very efficient. Very accurate. Data scientists device methods and tools to extract patterns in the data, which is more valuable than you and me can ever imagine. Intelligently analyzed data is a very valuable resource. It can lead to new insights and, in commercial settings, to competitive advantages.

Data scientists device methods and tools to extract patterns in the data, which is more valuable than you and me can ever imagine. Intelligently analyzed data is a very valuable resource. It can lead to new insights and, in commercial settings, to competitive advantages.

In this blog, we will see how data analytics is being used in several different fields.

<strong>1. Decision Involvement Judgement</strong>

Let us start with a very basic example. When you go to a bank for a loan, they usually ask you to fill a questionnaire. That questionnaire will take your personal and professional details which might affect your ability to repay the amount borrowed. All these act as an input parameter to an ML program and then the program gives you a judgment. The result of this exercise gives a black and white picture to the bank, whether to lend you money or not. This is how data analytics helps you in the decision-making process. One quick fact, banks were among the first organizations to use data analysis on a wide commercial scale.

2. <strong>Screening Images</strong>

In early days of satellite imaging, data analysis was not very prominent in the field. Yet semi-automatic decision-making programs were there. That is primitive data analytics, I know. Those programs used to locate potential oil slicks by reading satellite images, again by using our very own machine learning tactics.

3.<strong>Load Forecasting</strong>

The need of the hour is to save electricity. Well said. No no, we can’t save energy with data analytics, if that’s what you were thinking, but, we can predict its usage and can plan accordingly. A linear regression analysis has done it. Temperature, Humidity, Day, wind speed etc are being used as the features of the training sets and the regression is being used to forecast electricity usage. This regression analysis has also solved the problem of the daily weather <span class="skimlinks-unlinked">forecast.Now</span>, there is no need to appoint weather forecasters for the <span class="skimlinks-unlinked">prediction.The</span> results of the analysis were pretty much similar, but the process was faster.

4.<strong>Diagnosis</strong>

In big industries, machine failure has always been a nightmare. To ensure safety and smoothness in the industries, experts having 20 years of experience, inspect machines manually. Typical errors like a misalignment of a shaft, mechanical loosening or faulty bearings are all taken care of, manually! But nowadays, analyzing data of diagnostic tests by a program can reduce a lot of work. In fact, some industries are using such programs to assist experts and I believe that similar programs will eliminate manual checks completely, in the coming future.

5. <strong>Marketing and Sales</strong>

As I already said, data analysis can give you and your firm a competitive advantage over others. Let me give you an example for the same. <strong>Wallmart, topping the list of Fortune 500 companies</strong> (<a href="http://fortune.com/fortune500">http://fortune.com/fortune500</a>), and similar other shopping chain companies, read our shopping patterns. Then, the data speaks. For example, the data collected may reveal that we buy chips and cleaners together more on Thursday rather than the other day. There could be some logical reason for that, but the important thing is <strong>they know what we want and they know what we will buy and even when!</strong> So, they plan their store’s layout, discount offers, coupons and several other schemes accordingly. It also helps them to categorize customers for the future direction of their strategies. And this is how they make it big, real big!

So, we see that as the technology improves, data storage capacity increases. More data meaning more insights into the future. Predicting future, that’s something that we all ever wanted!!

Please visit https://kgpdag.wordpress.com for more tutorials.

&nbsp;";s:10:"post_title";s:29:"Data- Past,Present and Future";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:27:"data-pastpresent-and-future";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:30:13";s:17:"post_modified_gmt";s:19:"2015-08-07 02:00:13";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=631";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"637";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:36:20";s:13:"post_date_gmt";s:19:"2015-08-07 02:06:20";s:12:"post_content";s:5039:"<strong>K-MEANS ALGORITHM</strong>

<strong>K-Means algorithm</strong> is one of the most widely used clustering technique because of its simplicity and speed. Just to recall, Clustering is the process of organizing objects into self-similar groups algorithmically  by using different statistical algorithms and methods that we shall see in the later part of the blog.

K-Means lies in the category of <strong>unsupervised clustering</strong>. The basic objective of unsupervised clustering is to maximize the intracluster similarity and minimize intercluster. It just makes sure that the clusters formed have their own individuality. K-Means basically uses a data set which has no target variable, similar to all other unsupervised clustering techniques.

Let us dive deeper and try to see the steps followed by the Algorithm.

In layman terms, here are the steps
<ol>
	<li><strong>Choose the number of clusters, k.</strong></li>
	<li><strong>Selects k-centroids corresponding to k clusters.(What is a centroid of data points? Hang on.)</strong></li>
	<li><strong>Assign each object to the nearest cluster.(How to decide which is nearest? Wait!)</strong></li>
	<li><strong>Recompute centroid.</strong></li>
	<li><strong>Repeat steps 3 and 4 until the convergence criteria is met.(Convergence criteria?)</strong></li>
</ol>
Right, so this was the basic layout of the whole algorithm. In step 2, selecting any k objects (data points) from the data set would suffice and those random k points will be our initial centroids. It is crucial to select right initial data points if we expect flawless results (because the algorithm might converge at some local minimum).This Algorithm is said to be converged when the assignment of objects to the clusters no longer change with multiple iterations. A consistency comes and the Algo is said to be converged.

Now the big question comes, how does the Algo decide which point is nearest and which is not? There are several ways to do it, but here I will be mentioning the most common ones.
<ul>
	<li><strong><strong>Euclidean distance</strong></strong>

[caption id="" align="aligncenter" width="732"]<img class="" src="https://kgpdag.files.wordpress.com/2015/06/euclidean.jpg" alt="Euclidean distance" width="732" height="112" /> Euclidean distance[/caption]</li>
</ul>
&nbsp;

&nbsp;

This is the most common way for calculating the distances in a hyperspace. The above-stated formula explains all of it, so I believe I can skip the explanation part.
<ul>
	<li><strong>City Block (Manhattan) distance</strong></li>
</ul>
<a href="https://kgpdag.files.wordpress.com/2015/06/manhattan_distance_bgiu.png"><img class=" size-medium wp-image-20 aligncenter" src="https://kgpdag.files.wordpress.com/2015/06/manhattan_distance_bgiu.png?w=300&amp;h=276" alt="Manhattan_distance_bgiu" width="300" height="276" /></a>

Suppose there are two points X(1,2) and Y(3,1), then the M.D. between X and Y would be equal to [(3-1)+(2-1)] = 3. It is basically the absolute sum of the differences of coordinates.

To understand the significance of this distance, let us consider an example. Suppose that there is a taxi at a block whose coordinates are A (1,2) and it intends to go to a block of coordinates B (3,1). To go from A to B, the taxi will have to travel a distance of [(3-1)+(2-1)] =3 units. This is what we call as the Manhattan Distance.

In several different algorithms, pointers move in the same fashion (block to block) and hence a lot of importance is given to this distance. Due to this analogy we just discussed, M.D. is also called as taxi-cab distance.
<ul>
	<li><strong>Cosine Similarity</strong></li>
</ul>
<a href="https://kgpdag.files.wordpress.com/2015/06/cosine-similarity-34eaf5ab.png"><img class=" size-medium wp-image-21 aligncenter" src="https://kgpdag.files.wordpress.com/2015/06/cosine-similarity-34eaf5ab.png?w=300&amp;h=105" alt="cosine-similarity-34eaf5ab" width="300" height="105" /></a>

This is a pretty straight-forward method to evaluate similarities. The Cosine of the angle formed in the hyperspace, fair enough.

The thing about this algorithm which is worth mentioning here is that this technique could be very useful when it is applied to fill the missing data of initial datasets. I remember that in one of the problem statements solved by KDAG, this small formula of cosine similarity bumped the efficiency to 92.7% when it was applied to fill the missing values.

There are some other distance measuring techniques as well like <strong>Correlation similarity, Jaccard similarity, Chebyshev’s distance</strong> etc. Maybe we will discuss them in some other blog but the above three are the most important and most commonly used methods and <strong>K-Means is all about those distances and their meaningful interpretation for clustering.</strong>

&nbsp;

<span id="IL_AD10" class="IL_AD">This tutorial was originally published in </span> <a href="https://kgpdag.wordpress.com">https://kgpdag.wordpress.com.</a>";s:10:"post_title";s:37:"Most widely used Clustering Technique";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:37:"most-widely-used-clustering-technique";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:40:04";s:17:"post_modified_gmt";s:19:"2015-08-07 02:10:04";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=637";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"642";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:42:19";s:13:"post_date_gmt";s:19:"2015-08-07 02:12:19";s:12:"post_content";s:14757:"<figure id="attachment_31" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/kdag.png"><img class="wp-image-31 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/kdag.png?w=648" alt="kdag" /></a><figcaption class="wp-caption-text">Random Forest : A collection of Trees</figcaption></figure>Random Forest is an algorithm used for both Regression and Classification problems.
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

&nbsp;";s:10:"post_title";s:44:"Random Forest :- An Ensemble Learning Method";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:41:"random-forest-an-ensemble-learning-method";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:47:16";s:17:"post_modified_gmt";s:19:"2015-08-07 02:17:16";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=642";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"644";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:44:41";s:13:"post_date_gmt";s:19:"2015-08-07 02:14:41";s:12:"post_content";s:4529:"<header class="entry-header">
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

</div>";s:10:"post_title";s:14:"Decision Trees";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"decision-trees";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:46:34";s:17:"post_modified_gmt";s:19:"2015-08-07 02:16:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=644";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:14757;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:44;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:41;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}