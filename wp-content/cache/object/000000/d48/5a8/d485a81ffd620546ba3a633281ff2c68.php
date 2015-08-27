���U<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"732";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-14 16:15:22";s:13:"post_date_gmt";s:19:"2015-08-14 10:45:22";s:12:"post_content";s:6218:"SUPPORT VECTOR MACHINES

In machine learning, support vector machines are supervised learning models with associated learning algorithms that analyze data and recognize patterns, used for classification and regression analysis.

Support vector machine (SVM) learns a hyperplane to classify data into 2 classes.

SVM doesn’t use decision trees at all.

Properties of SVM :
<ul>
	<li>Duality</li>
	<li>Kernels</li>
	<li>Margin</li>
	<li>Convexity</li>
	<li>Sparseness</li>
</ul>
Basic concept of SVM

In a two-class learning task, the aim of SVM is to find the best classification function to distinguish between members of the two classes in the training data. The metric for the concept of the “best” classification function can be realized geometrically. For a linearly separable dataset, a linear classification function corresponds to a separating hyperplane f (x) that passes through the middle of the two classes, separating the two. Once this function is determined, new data instance xn can be classified by simply testing the sign of the function f (xn); xn belongs to the positive class if f (xn) &gt; 0. Because there are many such linear hyperplanes, what SVM additionally guarantee is that the best such function is found by maximizing the margin between the two classes.

Find a linear decision surface (“hyperplane”) that can separate classes and has the largest distance (i.e., largest “gap” or “margin”) between borderline patients (i.e., “support vectors”).

<a href="https://kgpdag.files.wordpress.com/2015/08/11845984_1042104829148150_1968623963_n.jpg"><img class="size-medium wp-image-36 aligncenter" src="https://kgpdag.files.wordpress.com/2015/08/11845984_1042104829148150_1968623963_n.jpg?w=300&amp;h=204" alt="11845984_1042104829148150_1968623963_n" width="300" height="204" /></a>

Hyperplane as a Decision boundary
<ul>
	<li>A hyperplane is a linear decision surface that splits the space into two parts</li>
	<li>a hyperplane is a binary classifier</li>
</ul>
<a href="https://kgpdag.files.wordpress.com/2015/08/11846223_1042104855814814_1146300225_n.jpg"><img class="alignnone size-medium wp-image-35" src="https://kgpdag.files.wordpress.com/2015/08/11846223_1042104855814814_1146300225_n.jpg?w=300&amp;h=141" alt="11846223_1042104855814814_1146300225_n" width="300" height="141" /></a>

Equation of a Hyperplane

<a href="https://kgpdag.files.wordpress.com/2015/08/11846318_1042104835814816_876576002_n.jpg"><img class="alignnone size-medium wp-image-34" src="https://kgpdag.files.wordpress.com/2015/08/11846318_1042104835814816_876576002_n.jpg?w=300&amp;h=180" alt="11846318_1042104835814816_876576002_n" width="300" height="180" /></a>

Geometrically, the margin corresponds to the shortest distance between the closest data points to a point on the hyperplane. Having this geometric definition allows us to explore how to maximize the margin, so that even though there are an infinite number of hyperplanes, only a few qualify as the solution to SVM. The reason why SVM insists on finding the maximum margin hyperplanes is that it offers the best generalization ability. It allows not only the best classification performance (e.g., accuracy) on the training data, but also leaves much room for the correct classification of the future data.

<a href="https://kgpdag.files.wordpress.com/2015/08/11868732_1042104832481483_935003505_n.jpg"><img class="size-medium wp-image-31 aligncenter" src="https://kgpdag.files.wordpress.com/2015/08/11868732_1042104832481483_935003505_n.jpg?w=300&amp;h=284" alt="11868732_1042104832481483_935003505_n" width="300" height="284" /></a>

<a href="https://kgpdag.files.wordpress.com/2015/08/11855452_1042104825814817_1558817076_n.jpg"><img class="size-medium wp-image-33 aligncenter" src="https://kgpdag.files.wordpress.com/2015/08/11855452_1042104825814817_1558817076_n.jpg?w=279&amp;h=300" alt="11855452_1042104825814817_1558817076_n" width="279" height="300" /></a>

now the Problem is to

max 2/||w||

such that

y(w’x + b) &gt;1 for all

also ||w||= √(w’.w)

so now minimize (w’ w)/2 subject to y(w’x + b) &gt;1

this equation is solved by using Lagrange multiplier and Quadratic programming techniques and equation of hyperplane is achieved.

For nonlinear separable data ,SVM  maps them into a higher dimension using Kernel method and then finds the hyperplane to separate the classes.

<a href="https://www.youtube.com/watch?v=3liCbRZPrZA">https://www.youtube.com/watch?v=3liCbRZPrZA</a>

<a href="https://kgpdag.files.wordpress.com/2015/08/11850866_1042104839148149_308987681_n.jpg"><img class="size-medium wp-image-32 aligncenter" src="https://kgpdag.files.wordpress.com/2015/08/11850866_1042104839148149_308987681_n.jpg?w=300&amp;h=195" alt="11850866_1042104839148149_308987681_n" width="300" height="195" /></a>

Kernel method
<ul>
	<li>Kernel methods involve</li>
	<li>Non-linear transformation of data to a higher dimensional feature space</li>
	<li>Detection of optimal linear solutions in the kernel feature space</li>
</ul>
Let ⱷ→X:F be nonlinear mapping from input space X (original space) to feature space (higher dimensional) F

Then our inner (dot) product &lt;Xi,Xj&gt;  in higher dimensional space is &lt;  ⱷ(Xi), ⱷ(Xj) &gt;

There exist a way to compute inner product in feature space as function of original input points – Its kernel function!

Kernel function:

K(x,z) = &lt; ⱷ(Xi), ⱷ(Xj) &gt;

We need not know ⱷ to compute K(x,z)

Commonly used Kernel functions
<ul>
	<li>Linear</li>
	<li>Polynomial of degree d</li>
	<li>Gaussian Radial Basis Function (RBF)</li>
</ul>
Issues:
<ul>
	<li>Selecting suitable kernel: Its most of the time trial and error</li>
	<li>Multi-class classification: One decision function for each class and then finding one with maximum value</li>
</ul>
Use SVM
<ul>
	<li>High dimensional, linearly separable data (strength), for nonlinearly depends on the choice of the kernel.</li>
</ul>
This post was originally published in <a href="https://kgpdag.wordpress.com/2015/08/12/svm-simplified/">https://kgpdag.wordpress.com/2015/08/12/svm-simplified/</a>";s:10:"post_title";s:14:"SVM Simplified";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"svm-simplified";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-14 16:15:22";s:17:"post_modified_gmt";s:19:"2015-08-14 10:45:22";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=732";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}