u|�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:158:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.post_name = 'python-memory-game' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"356";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-19 15:32:32";s:13:"post_date_gmt";s:19:"2015-07-19 10:02:32";s:12:"post_content";s:18096:"<p>Hi friends, today we will build a simple game based on python and simplegui library. The game is hosted in <a href="http://www.codeskulptor.org/" target="_blank">codeskulaptor</a>  website. I learnt to build this kind of game as a part of few coursera courses. I will guide you step by step , how to build this kind of game. If you are interested you can join coursera. It is an amazing platform to learn programming.</p>
<p>Let play the game before starting coding.</p>
<p>Go to the demo website and click on run button. You can see the entire source code there. </p>
<p>[button colour="lightblue" type="roundedarrow" size="large" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_5.py" target="_blank"]DEMO[/button]</p>
<p>Lets see How we are going to make this game.</p><p>&nbsp;</p>
<p>We can see there are 16 small cards. Initially no cards are exposed. Then if we click any one card, it is exposed. We click another one card. It is exposed too. If these two cards are same, they remain exposed, even we click a third  card. But if these are not same, these gets hidden and the third card get exposed and this trend continues.The players aim to expose all card with minimum number of clicks by remembering which number is which in which card.</p>
<p>So our game logic is </p>
<ul>
<li>Create 16 cards. ( We are taking 16 here, you can take any even number of card)</li>
<li>They will have 0-7 numbers twice hidden inside. (</li>
</ul>
<h2>Step 1:- Lets create a blank frame</h2>
<hr />
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing

#lets create a Frame of width 800px and height 170 px and name it memory

frame = simplegui.create_frame("Memory", 800, 170)


frame.start() #start the frame </pre>
<p>[button colour="limegreen" type="roundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_nn1SBJu4otJsKWj.py" target="_blank"]Play with code[/button]</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_11.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_11-1024x576.png" alt="python_1" width="1024" height="576" class="alignnone size-large wp-image-363" /></a></p>
<p>&nbsp;</p>
<p><!--nextpage--></p>
<p>Step 2:- Now we create 16 cards and assign randomly 0-7 numbers. Each number is repeated twice. (8*2 = 16)</p>
<p>Lets create 3 lists in python. Refer to this <a href="http://www.tutorialspoint.com/python/python_lists.htm" target="_blank">link</a> to know more about python lists. Lists are nothing but arrays with some more functionalities.</p>
<pre class="prettyprint lang-python">LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7]
EXPOSED = [False,False,False,False,False,False,False,False,False,False,False,False,False,False,False,False]
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]</pre>
<p>Initially no cards are exposed. That s why all 16 entries in EXPOSED are initially set to false.</p>
<p>We assume cards are logically 50x100 pixels in size .</p>
<p>Position list defines the x axis distance of individual card from leftmost side of frame. We started from 25 and ended at 775 with interval of 50. For example first card is at co-ordinate (25,0) , 5th card is at co-ordinate (225,0)  like that.</p>
<p>LIST variable contains 0-7 twice which will be randomly shuffled and assigned to a particular card.</p>
<p>When  game is started we should be able to display 16 cards initially not exposed.  </p>
<p>Lets create a function draw() which takes parameter canvas. We register the function by calling set_draw_handler(draw) method of python frame object.</p>
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing

#lets create a Frame of width 800px and height 170 px and name it memory
LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7] #this list will be shuffled randomly
EXPOSED = [False,False,False,False,False,False,False,False,False,False,False,False,False,False,False,False]
#initialy all cards are set to false.
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]
#positions are x axis distance form left most part of frame

def draw(canvas):
    """
    draw the canvas when this function is called
    """

    for x in range(len(LIST)):
        if not EXPOSED[x]:
            canvas.draw_line([POSITION[x],0],[POSITION[x],170],49,"green")
            
        else:
            canvas.draw_text(str(LIST[x]),[POSITION[x],50],40,"white")
     
      


frame = simplegui.create_frame("Memory", 800, 170)
frame.set_draw_handler(draw)
frame.start() #start the frame </pre>
<p>[button colour="purple" type="slightlyroundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0.py" target="_blank"]Play with code [/button]</p>
<p>draw_line <span>method </span>takes 4 parameter, co-ordiante of starting point, ending point, width of line and color of line.</p>
<p>draw_text method takes 4 parameter too, text to be drawn, position of text to be drawn , width of text and color of text.</p>
<p>The logic is simple , we are iterating through all cards and if we find the card is not exposed by checking corresponding card in  exposed  list we are displaying a green line of 49 pixel width ( we leave 1 pixel to differentiate between cards, notice the 1 pixel black line between each card) otherwise display corrospoding number from LIST variable , which is drawn corresponding right position by POSITION list.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_2-1024x576.png" alt="python_2" width="1024" height="576" class="alignnone size-large wp-image-370" /></a></p>
<p>Lets make sure code is working for exposed card also. In exposed list make a few elements as true.</p>
<p>If you click on run button , you will see numbers corresponding to true elements.</p>
<p>[button colour="purple" type="roundedarrow" size="large" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_0.py" target="_blank"]Play with code[/button]</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_3-1024x576.png" alt="python_3" width="1024" height="576" class="alignnone size-large wp-image-376" /></a></p>
<p><!--nextpage--></p>
<h2>Step 3:- Display cards on click</h2>
<hr />
<p>Now we will write two functions, one new_game function which will reset the whole game and all cards will be covered again and another mouseclick function which will expose the clicked unexposed card.</p>
<p>I have commented out what these two function are doing exactly.</p>
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing
import random
#lets create a Frame of width 800px and height 170 px and name it memory
LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7] #this list will be shuffled randomly
EXPOSED = [False,False,False,False,False,False,False,False,False,True,False,False,False,False,False,False]
#initialy all cards are set to false.
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]
#positions are x axis distance form left most part of frame

def new_game():
    global LIST
   
    for i in range(len(EXPOSED)): # make all cards covered 
        EXPOSED[i] = False #by setting all elements of exposed false

       
    #shuffle the list
    random.shuffle(LIST)
    
def mouseclick(pos):
    card_pos = list(pos) #get the coordinate of  clicking point
    print pos #print the position to understand 
    for x in range(len(POSITION)):
       <!-- tab -->#check for each card if x co-ordinate of mouse clicked point in
        #within the card, if yes then expost the card 
        if card_pos[0]+25 >= POSITION[x] and (card_pos[0]+25 <= POSITION[x]+50) :
            EXPOSED[x] = True
            

def draw(canvas):
    """
    draw the canvas when this function is called
    """

    for x in range(len(LIST)):
        if not EXPOSED[x]:
            canvas.draw_line([POSITION[x],0],[POSITION[x],170],49,"green")
            
        else:
            canvas.draw_text(str(LIST[x]),[POSITION[x],50],40,"white")
     
      


frame = simplegui.create_frame("Memory", 800, 170)
new_game()
frame.set_draw_handler(draw)
# register event handlers
frame.set_mouseclick_handler(mouseclick)

frame.start() #start the frame </pre>
<p>We have to use frame.set_mouseclick_handler method to register mouse click event. This method gets the co-ordinates of mouse clicked point and pass it to mouseclick function. In mouseclick function I am checking which card is clicked by iterating through all the cards. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_41.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_41-1024x576.png" alt="python_4" width="1024" height="576" class="alignnone size-large wp-image-378" /></a></p>
<p>[button colour="lightblue" type="roundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_2.py" target="_blank"]Play with code [/button]</p>
<p>You can see I have clicked some card,whose co-ordinates are shown in right side console and corresponding cards are open.</p>
<p><!--nextpage--></p>
<h2>Step 4:- Add main game logic</h2>
<hr />
<p>We will discuss the main game logic here.</p>
<p>Lets make clear some conditions </p>
<ol>
<li>The game can have 3 states.</li>
<li>First state no card is exposed i.e when the game starts we will name it as state 0</li>
<li>Now when first  card is clicked , it is exposed obliviously and game state changed to 1. </li>
<li>When second card is clicked it is also exposed and game state changes to 2.</li>
<li>When third card is clicked, it checks previously two exposed cards, if these are of same number then keep them exposed. Otherwise close them. Third card is kept exposed and game state changes to 1 again.</li>
<li>Then one more card is clicked game state changed to 2.</li>
<li>After that when one more card is clicked step 5 repeats. Step 5 and 6 repeats continuously that is the main game loop.</li>
<li>When new game button is clicked new game start and we jump back to step 2.</li>
</ol>
<h2>Implementation:</h2>
<ul>
<li>We declare state, PREVIOUS ,<span>NOW</span> three global variables, which are all set to 0 initially</li>
<li><span>PREVIOUS will contain index of first exposed card and NOW will contain index of second exposed card.</span></li>
</ul>
<p>[button colour="lightgrey" type="roundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_3.py" target="_blank"]Play with code[/button]</p>
<p>Here is complete code, open the link and start playing the game. </p>
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing
import random
#lets create a Frame of width 800px and height 170 px and name it memory
LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7] #this list will be shuffled randomly
EXPOSED = [False,False,False,False,False,False,False,False,False,True,False,False,False,False,False,False]
#initialy all cards are set to false.
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]
#positions are x axis distance form left most part of frame
state = 0
PREVIOUS = 0
NOW = 0

def new_game():
    global LIST, state
   
    for i in range(len(EXPOSED)): # make all cards covered 
        EXPOSED[i] = False #by setting all elements of exposed false

       
    #shuffle the list
    random.shuffle(LIST)
    state = 0
    
def mouseclick(pos):
    card_pos = list(pos) #get the coordinate of  clicking point
    global state,PREVIOUS,NOW
    for x in range(len(POSITION)):
        #check for each card if x co-ordinate of mouse clicked point in
        #within the card, if yes then expost the card 
        if card_pos[0]+25 >= POSITION[x] and (card_pos[0]+25 <= POSITION[x]+50) :
            EXPOSED[x] = True
            if state == 0: # new game state was 0, make it 1 
                PREVIOUS = x # store this card index in previous variable
                state = 1
            elif state == 1: # one card is clicked, make game state 2 from 1
                state = 2 
                NOW = x     # store this card index  in now variable 
                
            else:  # state is 2 i.e two cards were exposed, and third card is clicked
                state = 1 
                if LIST[PREVIOUS] == LIST[NOW]: # if previously two exposed card are
                                                #same number keep these exposed<!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab -->
                    EXPOSED[NOW] = True
                    EXPOSED[PREVIOUS] = True 
                else:                             #otherwise cover those 
                    EXPOSED[NOW] = False
                    EXPOSED[PREVIOUS] = False
                                      
                PREVIOUS = x  # make third card as previous, game state is changed to  1 

            

def draw(canvas):
    """
    draw the canvas when this function is called
    """

    for x in range(len(LIST)):
        if not EXPOSED[x]:
            canvas.draw_line([POSITION[x],0],[POSITION[x],170],49,"green")
            
        else:
            canvas.draw_text(str(LIST[x]),[POSITION[x],50],40,"white")
     
      


frame = simplegui.create_frame("Memory", 800, 170)
new_game()
frame.set_draw_handler(draw)
# register event handlers
frame.set_mouseclick_handler(mouseclick)

frame.start() #start the frame </pre>
<p><!--nextpage--></p>
<p>We made the game almost 90 %. We will declare a simple global variable "counter" which will start from 0 and increase as we click each card. It keeps track how many times we clicked the cards. </p>
<p>We will display it in screen by setting a lebel. We will also add a button to reset the game. This is easy part.</p>
<p>I have added all of these in existing code. </p>
<p>[button colour="lightblue" type="roundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_5.py" target="_blank"]Play with code[/button]</p>
<p>Here is the complete code.</p>
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing
import random
#lets create a Frame of width 800px and height 170 px and name it memory
LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7] #this list will be shuffled randomly
EXPOSED = [False,False,False,False,False,False,False,False,False,True,False,False,False,False,False,False]
#initialy all cards are set to false.
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]
#positions are x axis distance form left most part of frame
state = 0
PREVIOUS = 0
NOW = 0
counter = 0
def new_game():
    global LIST, state,counter
   
    for i in range(len(EXPOSED)): # make all cards covered 
        EXPOSED[i] = False #by setting all elements of exposed false

       
    #shuffle the list
    random.shuffle(LIST)
    state = 0
    
def mouseclick(pos):
    card_pos = list(pos) #get the coordinate of  clicking point
    global state,PREVIOUS,NOW,counter
    for x in range(len(POSITION)):
        #check for each card if x co-ordinate of mouse clicked point in
        #within the card, if yes then expost the card 
        if card_pos[0]+25 >= POSITION[x] and (card_pos[0]+25 <= POSITION[x]+50) :
            EXPOSED[x] = True
            counter +=1
            if state == 0: # new game state was 0, make it 1 
                PREVIOUS = x # store this card index in previous variable
                state = 1
            elif state == 1: # one card is clicked, make game state 2 from 1
                state = 2 
                NOW = x     # store this card index  in now variable 
                
            else:  # state is 2 i.e two cards were exposed, and third card is clicked
                state = 1 
                if LIST[PREVIOUS] == LIST[NOW]: # if previously two exposed card are
                                                #same number keep these exposed											
                    EXPOSED[NOW] = True
                    EXPOSED[PREVIOUS] = True 
                else:                             #otherwise cover those 
                    EXPOSED[NOW] = False
                    EXPOSED[PREVIOUS] = False
                                      
                PREVIOUS = x  # make third card as previous, game state is 1 as 1 card is exposed

            

def draw(canvas):
    """
    draw the canvas when this function is called
    """

    for x in range(len(LIST)):
        if not EXPOSED[x]:
            canvas.draw_line([POSITION[x],0],[POSITION[x],170],49,"green")
            
        else:
            canvas.draw_text(str(LIST[x]),[POSITION[x],50],40,"white")
     
    label.set_text("Turns = " + str(counter)) 
     
def click():
    pass

frame = simplegui.create_frame("Memory", 800, 170)
frame.add_button("Restart", new_game)
frame.add_button("Click to turn the card. Your aim is to expose all the cards.\
                If two same cards are exposed at same time they will remain open.\
                 ", click)
label = frame.add_label("Turns = 0")

new_game()
frame.set_draw_handler(draw)
# register event handlers
frame.set_mouseclick_handler(mouseclick)

frame.start() #start the frame </pre>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_5.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_5-1024x576.png" alt="python_5" width="1024" height="576" class="alignnone size-large wp-image-383" /></a></p>
";s:10:"post_title";s:18:"Python memory game";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:18:"python-memory-game";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-20 09:20:15";s:17:"post_modified_gmt";s:19:"2015-07-20 03:50:15";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=356";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:18096;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:18;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:18;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}