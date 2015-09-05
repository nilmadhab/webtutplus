�U<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"644";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:44:41";s:13:"post_date_gmt";s:19:"2015-08-07 02:14:41";s:12:"post_content";s:4529:"<header class="entry-header">
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

</div>";s:10:"post_title";s:14:"Decision Trees";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"decision-trees";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:46:34";s:17:"post_modified_gmt";s:19:"2015-08-07 02:16:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=644";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}