���U<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"637";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:36:20";s:13:"post_date_gmt";s:19:"2015-08-07 02:06:20";s:12:"post_content";s:5039:"<strong>K-MEANS ALGORITHM</strong>

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

<span id="IL_AD10" class="IL_AD">This tutorial was originally published in </span> <a href="https://kgpdag.wordpress.com">https://kgpdag.wordpress.com.</a>";s:10:"post_title";s:37:"Most widely used Clustering Technique";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:37:"most-widely-used-clustering-technique";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:40:04";s:17:"post_modified_gmt";s:19:"2015-08-07 02:10:04";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=637";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}