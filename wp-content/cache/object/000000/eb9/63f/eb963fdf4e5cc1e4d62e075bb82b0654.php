0úİU<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"579";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-02 14:52:17";s:13:"post_date_gmt";s:19:"2015-08-02 09:22:17";s:12:"post_content";s:2646:"Hi! There, This is my first of tutorials in algorithms. Hope this Helps.

Segment tree are very important data-structures when you are dealing with data in intervals and you need to query values in intervals, Go and use this.

<strong>Where can we use Segment Trees</strong> :

&nbsp;
<pre class="lang:c++ decode:true ">//Normal Segment tree
#include &lt;bits/stdc++.h&gt;
using namespace std;

#define maxsiz 1000000
#define F first
#define S second
#define fr(i,k,n) for(int i = k ; i &lt; n ; i++ )
#define mp(a,b) make_pair(a,b)
#define pb(a) push_back(a)
#define printvect(a,n) fr(i,0,n) cout &lt;&lt; a[i] &lt;&lt; " " ;
#define point pair&lt;int,int&gt;
#define pii pair&lt;int,int&gt;
#define pib pair&lt;int,bool&gt;
#define vectin(a,n)
typedef unsigned long long int ull;

// maximum size of t needed is 2^(x+1) if n &lt;= 2^x so 
//in general max size needed is 2*n if n = 2^x else 4*n
ull t[1234567] ;
ull a[123456];
int n ;

int fun(int a,int b)
{
	return a+b ;
}

void build(int index,int start,int end)
{	
	if(start &gt; end)
		return;
	if(start == end)
	{
		t[index] = a[start];
		return ;
	}

	build(index*2 + 1, start , (start+end)/2 );
	build(index*2 + 2, (start+end)/2 + 1 , end );

	t[index] = fun(t[index*2 + 1],t[index*2 + 2]) ;
}

//adding / using function value over a interval
//increment elements in range [x,y]
//where the current range is [a,b]
void set_tree(int index, int a,int b, int x,int y,ull v)
{ 
	if(a &gt; b || a &gt; y || b &lt; x )
		return ;

	if(a==b)
	{
		t[index] = fun(t[index],v) ;
		return ;
	}

	set_tree(2*index+1 , a , (a+b)/2 , x,y,v);
	set_tree(2*index+2 , (a+b)/2 +1 , b ,x,y,v);

	t[index] = fun(t[index*2 + 1],t[index*2 + 2]) ;
}

ull get_tree(int index,int a,int b,int x,int y)
{
	//cout &lt;&lt; "get " &lt;&lt; index &lt;&lt; " " &lt;&lt; a &lt;&lt; " " &lt;&lt; b &lt;&lt; " " &lt;&lt; x &lt;&lt; " " &lt;&lt; y &lt;&lt; endl ;
	if(a &gt; b || a &gt; y || b &lt; x )
		return 0;

	if( a &gt;= x &amp;&amp; b &lt;= y)
		return t[index];

	return fun(get_tree(2*index+1 , a , (a+b)/2 , x,y ),get_tree(2*index+2 , (a+b)/2 +1 , b ,x,y ));
}

int main()
{
	int test;
	cin &gt;&gt; test ;
	while(test--)
	{
		ull c,q,x,y,v;
		cin &gt;&gt; n &gt;&gt; c; 
		fr(i,0,n)
			a[i] = 0 ;

		build(0,0,n-1);

		fr(i,0,c)
		{
			cin &gt;&gt; q ;
			if(q == 0)
			{
				cin &gt;&gt; x &gt;&gt; y &gt;&gt; v ;
				set_tree(0,0,n-1,x-1,y-1,v);
			}
			else
			{
				cin &gt;&gt; x &gt;&gt; y ;
				cout &lt;&lt; get_tree(0,0,n-1,x-1,y-1) &lt;&lt; endl ;
			}
		}
	}
	return 0 ;
}</pre>
&nbsp;";s:10:"post_title";s:31:"Segment Trees : Normal and Lazy";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"private";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:25:"segment-trees-normal-lazy";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-02 14:52:17";s:17:"post_modified_gmt";s:19:"2015-08-02 09:22:17";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=579";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}