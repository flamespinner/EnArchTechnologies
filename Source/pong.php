<!--ARDUINO PONG SOURCE & SCHEMATIC-->

<html>

<body>
    <style>
    body{font-family:"Courier New", monospace;}
    </style>
    <div id="nav">
    <a href="../index.php">Home</a> |
        <a href="source.php">Sources</a> |
        <a href="../dev.php">Dev</a> |
        <a href="../webdesign.php">Design</a>
    </div>
    
    <div id="header">
        
        <style>
        #header{text-align:center;}
        </style>
        ARDUINO PONG SOURCE AND SCHEMATIC:
    </div>
    
    <div id="content">
        <p>Materials:<br><br>1 Arduino<br>Jumper Wire<br>Alligator Clips<br>RCA cable<br>TV w/RCA in<br>2 poteniometers<br>RCA plug (optional, can be attached with alligator clips)<br>Button (optional)<br>9V Battery (optional, computer power works)<br>Battery Holder (optional)<br>Soldering Iron, Solder (if using any optional materials)</p> ---------<br><br>
        The Code:
        
        <pre>
<span style="color: #7E7E7E;">//ARDUINO&nbsp;PONG</span>
<span style="color: #7E7E7E;">//2013&nbsp;EnArch&nbsp;GDT</span>

#include&nbsp;&lt;<span style="color: #CC6600;">TVout</span>.h&gt;
&nbsp;
#define&nbsp;WHEEL_ONE_PIN&nbsp;0&nbsp;<span style="color: #7E7E7E;">//analog</span>
#define&nbsp;WHEEL_TWO_PIN&nbsp;1&nbsp;<span style="color: #7E7E7E;">//analog</span>
<span style="color: #7E7E7E;">//#define&nbsp;BUTTON_ONE_PIN&nbsp;2&nbsp;//digital&nbsp;to&nbsp;start&nbsp;game,&nbsp;not&nbsp;utilized&nbsp;at&nbsp;the&nbsp;moment</span>
<span style="color: #7E7E7E;">//&nbsp;#define&nbsp;BUTTON_TWO_PIN&nbsp;3&nbsp;//digital&nbsp;to&nbsp;reset&nbsp;and&nbsp;go&nbsp;back&nbsp;to&nbsp;main&nbsp;menu</span>
&nbsp;
#define&nbsp;PADDLE_HEIGHT&nbsp;14
#define&nbsp;PADDLE_WIDTH&nbsp;1
&nbsp;
#define&nbsp;RIGHT_PADDLE_X&nbsp;(TV.horz_res()-4)
#define&nbsp;LEFT_PADDLE_X&nbsp;2
&nbsp;
#define&nbsp;IN_GAMEA&nbsp;0&nbsp;<span style="color: #7E7E7E;">//in game state - draw constants of the game box</span>
#define&nbsp;IN_GAMEB&nbsp;0&nbsp;<span style="color: #7E7E7E;">//in game state - draw the dynamic part of the game</span>

#define&nbsp;IN_MENU&nbsp;1&nbsp;<span style="color: #7E7E7E;">//in menu state</span>
#define&nbsp;GAME_OVER&nbsp;2&nbsp;<span style="color: #7E7E7E;">//game over state</span>
&nbsp;
#define&nbsp;LEFT_SCORE_X&nbsp;(TV.horz_res()/2-15)
#define&nbsp;RIGHT_SCORE_X&nbsp;(TV.horz_res()/2+10)
#define&nbsp;SCORE_Y&nbsp;4
&nbsp;
#define&nbsp;MAX_Y_VELOCITY&nbsp;6
#define&nbsp;PLAY_TO&nbsp;7
&nbsp;
#define&nbsp;LEFT&nbsp;0
#define&nbsp;RIGHT&nbsp;1
&nbsp;
<span style="color: #CC6600;">TVout</span> TV;
<span style="color: #CC6600;">unsigned</span> <span style="color: #CC6600;">char</span> x,y;

<span style="color: #CC6600;">int</span> led = 13;

<span style="color: #CC6600;">int</span> button1Status = 0;
<span style="color: #7E7E7E;">//&nbsp;boolean&nbsp;button2Status&nbsp;=&nbsp;false;</span>

<span style="color: #CC6600;">int</span> wheelOnePosition = 0;
<span style="color: #CC6600;">int</span> wheelTwoPosition = 0;
<span style="color: #CC6600;">int</span> rightPaddleY = 0;
<span style="color: #CC6600;">int</span> leftPaddleY = 0;
<span style="color: #CC6600;">unsigned</span> <span style="color: #CC6600;">char</span> ballX = 0;
<span style="color: #CC6600;">unsigned</span> <span style="color: #CC6600;">char</span> ballY = 0;
<span style="color: #CC6600;">char</span> ballVolX = 2;
<span style="color: #CC6600;">char</span> ballVolY = 2;
&nbsp;
<span style="color: #CC6600;">int</span> leftPlayerScore = 0;
<span style="color: #CC6600;">int</span> rightPlayerScore = 0;
&nbsp;
<span style="color: #CC6600;">int</span> frame = 0;
<span style="color: #CC6600;">int</span> state = IN_MENU;
&nbsp;
<span style="color: #CC6600;">void</span> processInputs() {
&nbsp;&nbsp;wheelOnePosition&nbsp;=&nbsp;<span style="color: #CC6600;">analogRead</span>(WHEEL_ONE_PIN);
&nbsp;&nbsp;<span style="color: #7E7E7E;">// delay(50);</span>
&nbsp;&nbsp;wheelTwoPosition&nbsp;=&nbsp;<span style="color: #CC6600;">analogRead</span>(WHEEL_TWO_PIN);
&nbsp;<span style="color: #7E7E7E;">// delay(50);</span>
&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">//button1Status = analogRead(BUTTON_ONE_PIN);</span>
&nbsp;&nbsp;
&nbsp;<span style="color: #7E7E7E;">//  button2Status = (digitalRead(BUTTON_TWO_PIN) == LOW);</span>
&nbsp;&nbsp;&nbsp;
<span style="color: #7E7E7E;">//&nbsp;&nbsp;&nbsp;button1Status&nbsp;=&nbsp;(digitalRead(BUTTON_ONE_PIN));</span>
&nbsp;&nbsp;
&nbsp;
&nbsp;&nbsp;<span style="color: #7E7E7E;">//cdubois</span>
&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">//Serial.println(BUTTON_ONE_PIN);</span>
&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">//Serial.println(BUTTON_TWO_PIN);</span>
&nbsp;&nbsp;<span style="color: #7E7E7E;">// delay(50);</span>
&nbsp;&nbsp;<span style="color: #7E7E7E;">//Serial.println(button1Status);</span>
&nbsp;<span style="color: #7E7E7E;">// Serial.println(button2Status);</span>
&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">//Serial.println(wheelOnePosition);</span>
&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">//Serial.println(wheelTwoPosition);</span>
&nbsp;&nbsp;<span style="color: #7E7E7E;">//  delay(1000);</span>
&nbsp;

}
&nbsp;
<span style="color: #CC6600;">void</span> drawGameScreen() {
&nbsp;<span style="color: #7E7E7E;">//TV.clear_screen();</span>
&nbsp;&nbsp;<span style="color: #7E7E7E;">//draw right paddle</span>
&nbsp;&nbsp;rightPaddleY&nbsp;=&nbsp;((wheelOnePosition&nbsp;/8)&nbsp;*&nbsp;(TV.vert_res()-PADDLE_HEIGHT))/&nbsp;128;
&nbsp;&nbsp;x&nbsp;=&nbsp;RIGHT_PADDLE_X;
&nbsp;&nbsp;<span style="color: #CC6600;">for</span>(<span style="color: #CC6600;">int</span> i=0; i&lt;PADDLE_WIDTH; i++) {
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">draw_line</span>(x+i,rightPaddleY,x+i,rightPaddleY+PADDLE_HEIGHT,1);
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;<span style="color: #7E7E7E;">//draw left paddle</span>
&nbsp;&nbsp;leftPaddleY&nbsp;=&nbsp;((wheelTwoPosition&nbsp;/8)&nbsp;*&nbsp;(TV.vert_res()-PADDLE_HEIGHT))/&nbsp;128;
&nbsp;&nbsp;x&nbsp;=&nbsp;LEFT_PADDLE_X;
&nbsp;&nbsp;<span style="color: #CC6600;">for</span>(<span style="color: #CC6600;">int</span> i=0; i&lt;PADDLE_WIDTH; i++) {
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">draw_line</span>(x+i,leftPaddleY,x+i,leftPaddleY+PADDLE_HEIGHT,1);
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;<span style="color: #7E7E7E;">//draw score</span>
&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_char</span>(LEFT_SCORE_X,SCORE_Y,<span style="color: #006699;">'0'</span>+leftPlayerScore);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_char</span>(RIGHT_SCORE_X,SCORE_Y,<span style="color: #006699;">'0'</span>+rightPlayerScore);
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #7E7E7E;">//draw ball</span>
&nbsp;&nbsp;
&nbsp;&nbsp;TV.<span style="color: #CC6600;">set_pixel</span>(ballX, ballY, 2);
}
&nbsp;
<span style="color: #7E7E7E;">//player&nbsp;==&nbsp;LEFT&nbsp;or&nbsp;RIGHT</span>
<span style="color: #CC6600;">void</span> playerScored(<span style="color: #CC6600;">byte</span> player) {
&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(player == LEFT) leftPlayerScore++;
&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(player == RIGHT) rightPlayerScore++;
&nbsp;
&nbsp;&nbsp;<span style="color: #7E7E7E;">//check for win</span>
&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(leftPlayerScore == PLAY_TO || rightPlayerScore == PLAY_TO) {
&nbsp;&nbsp;&nbsp;&nbsp;state&nbsp;=&nbsp;GAME_OVER;
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;ballVolX&nbsp;=&nbsp;-ballVolX;
}
&nbsp;
&nbsp;
&nbsp;
&nbsp;<span style="color: #CC6600;">void</span> drawBox() {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">clear_screen</span>();
&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">//draw net</span>
&nbsp;&nbsp;<span style="color: #CC6600;">for</span>(<span style="color: #CC6600;">int</span> i=1; i&lt;TV.vert_res() - 4; i+=6) {
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">draw_line</span>(TV.horz_res()/2,i,TV.horz_res()/2,i+3,1);
&nbsp;&nbsp;}
&nbsp;&nbsp;<span style="color: #7E7E7E;">// had to make box a bit smaller to fit tv </span>
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">draw_line</span>(0, 0, 0,95,1 );  <span style="color: #7E7E7E;">// left</span>
&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">draw_line</span>(0, 0, 126,0,1 ); <span style="color: #7E7E7E;">// top</span>
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">draw_line</span>(126, 0, 126,95,1 ); <span style="color: #7E7E7E;">// right</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">draw_line</span>(0, 95, 126,95,1 ); <span style="color: #7E7E7E;">// bottom</span>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;state&nbsp;=&nbsp;IN_GAMEB;
}
&nbsp;
&nbsp;
<span style="color: #CC6600;">void</span> drawMenu() {
&nbsp;&nbsp;x&nbsp;=&nbsp;0;
&nbsp;&nbsp;y&nbsp;=&nbsp;0;
&nbsp;&nbsp;<span style="color: #CC6600;">char</span> volX =3;
&nbsp;&nbsp;<span style="color: #CC6600;">char</span> volY = 3;
&nbsp;&nbsp;TV.<span style="color: #CC6600;">clear_screen</span>();
&nbsp;&nbsp;TV.select_font(_8X8);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_str</span>(10, 5, <span style="color: #006699;">"Arduino Pong"</span>);
&nbsp;&nbsp;TV.select_font(_5X7);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_str</span>(22, 35, <span style="color: #006699;">"Please Wait"</span>);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_str</span>(30, 45, <span style="color: #006699;">"To Start"</span>);
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #CC6600;">delay</span>(10000);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">clear_screen</span>();
&nbsp;&nbsp;<span style="color: #7E7E7E;">//while(button1Status&lt;500) {</span>
&nbsp;&nbsp;&nbsp;&nbsp;processInputs();
&nbsp;&nbsp;&nbsp;&nbsp;TV.delay_frame(3);
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(x + volX &lt; 1 || x + volX &gt; TV.horz_res() - 1) volX = -volX;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(y + volY &lt; 1 || y + volY &gt; TV.vert_res() - 1) volY = -volY;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(TV.<span style="color: #CC6600;">get_pixel</span>(x + volX, y + volY)) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">set_pixel</span>(x + volX, y + volY, 0);
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(TV.<span style="color: #CC6600;">get_pixel</span>(x + volX, y - volY) == 0) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;volY&nbsp;=&nbsp;-volY;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">else</span> <span style="color: #CC6600;">if</span>(TV.<span style="color: #CC6600;">get_pixel</span>(x - volX, y + volY) == 0) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;volX&nbsp;=&nbsp;-volX;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">else</span> {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;volX&nbsp;=&nbsp;-volX;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;volY&nbsp;=&nbsp;-volY;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">set_pixel</span>(x, y, 0);
&nbsp;&nbsp;&nbsp;&nbsp;x&nbsp;+=&nbsp;volX;
&nbsp;&nbsp;&nbsp;&nbsp;y&nbsp;+=&nbsp;volY;
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">set_pixel</span>(x, y, 1);
&nbsp;<span style="color: #7E7E7E;">// }</span>
&nbsp;
&nbsp;
&nbsp;
&nbsp;&nbsp;TV.select_font(_5X7);
&nbsp;&nbsp;state&nbsp;=&nbsp;IN_GAMEA;
}
&nbsp;
<span style="color: #CC6600;">void</span> <span style="color: #CC6600;"><b>setup</b></span>()  {
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;"><b>Serial</b></span>.<span style="color: #CC6600;">begin</span>(9600);
&nbsp;&nbsp;x=0;
&nbsp;&nbsp;y=0;
&nbsp;&nbsp;TV.start_render(<span style="color: #006699;">_NTSC</span>);       <span style="color: #7E7E7E;">//for devices with only 1k sram(m168) use TV.begin(_NTSC,128,56)</span>
&nbsp;
&nbsp;&nbsp;ballX&nbsp;=&nbsp;TV.horz_res()&nbsp;/&nbsp;2;
&nbsp;&nbsp;ballY&nbsp;=&nbsp;TV.vert_res()&nbsp;/&nbsp;2;
&nbsp;
<span style="color: #7E7E7E;">//&nbsp;&nbsp;pinMode(BUTTON_ONE_PIN,&nbsp;INPUT);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;sets&nbsp;the&nbsp;digital&nbsp;pin&nbsp;as&nbsp;output</span>
}
&nbsp;
<span style="color: #CC6600;">void</span> <span style="color: #CC6600;"><b>loop</b></span>() {
&nbsp;&nbsp;processInputs();

&nbsp;
&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(state == IN_MENU) {
&nbsp;&nbsp;&nbsp;&nbsp;drawMenu();
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">digitalWrite</span>(led, <span style="color: #006699;">LOW</span>);
&nbsp;&nbsp;}
&nbsp;<span style="color: #CC6600;">if</span>(state == IN_GAMEA) {
&nbsp;&nbsp;&nbsp;&nbsp;drawBox();
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">digitalWrite</span>(led, <span style="color: #006699;">HIGH</span>);
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(state == IN_GAMEB) {
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(frame % 3 == 0) { <span style="color: #7E7E7E;">//every third frame</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ballX&nbsp;+=&nbsp;ballVolX;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ballY&nbsp;+=&nbsp;ballVolY;
&nbsp;<span style="color: #CC6600;">digitalWrite</span>(led, <span style="color: #006699;">HIGH</span>);
&nbsp;<span style="color: #7E7E7E;">// change if hit top or bottom</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(ballY &lt;= 1 || ballY &gt;= TV.vert_res()-1)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;ballVolY&nbsp;=&nbsp;-ballVolY;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">delay</span>(100);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">tone</span>( 2000,50  );   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #7E7E7E;">// test left side for wall hit    </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(ballVolX &lt; 0 &amp;&amp; ballX == LEFT_PADDLE_X+PADDLE_WIDTH-1 &amp;&amp; ballY &gt;= leftPaddleY &amp;&amp; ballY &lt;= leftPaddleY + PADDLE_HEIGHT) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ballVolX&nbsp;=&nbsp;-ballVolX;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ballVolY&nbsp;+=&nbsp;2&nbsp;*&nbsp;((ballY&nbsp;-&nbsp;leftPaddleY)&nbsp;-&nbsp;(PADDLE_HEIGHT&nbsp;/&nbsp;2))&nbsp;/&nbsp;(PADDLE_HEIGHT&nbsp;/&nbsp;2);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">delay</span>(100);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">tone</span>(2000,50 );   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;<span style="color: #7E7E7E;">// test right side for wall hit     </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(ballVolX &gt; 0 &amp;&amp; ballX == RIGHT_PADDLE_X &amp;&amp; ballY &gt;= rightPaddleY &amp;&amp; ballY &lt;= rightPaddleY + PADDLE_HEIGHT) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ballVolX&nbsp;=&nbsp;-ballVolX;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ballVolY&nbsp;+=&nbsp;2&nbsp;*&nbsp;((ballY&nbsp;-&nbsp;rightPaddleY)&nbsp;-&nbsp;(PADDLE_HEIGHT&nbsp;/&nbsp;2))&nbsp;/&nbsp;(PADDLE_HEIGHT&nbsp;/&nbsp;2);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">delay</span>(100);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">tone</span>( 2000,50  );   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">//limit vertical speed</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(ballVolY &gt; MAX_Y_VELOCITY) ballVolY = MAX_Y_VELOCITY;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(ballVolY &lt; -MAX_Y_VELOCITY) ballVolY = -MAX_Y_VELOCITY;
&nbsp;&nbsp;
&nbsp;<span style="color: #7E7E7E;">// Scoring</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(ballX &lt;= 1) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playerScored(RIGHT);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">// sound </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">delay</span>(1000);
&nbsp;&nbsp;TV.<span style="color: #CC6600;">tone</span>( 500,500 );   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(ballX &gt;= TV.horz_res() - 1) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playerScored(LEFT);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #7E7E7E;">// sound </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">delay</span>(1000);
&nbsp;TV.<span style="color: #CC6600;">tone</span>(  500,500 );
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<span style="color: #7E7E7E;">//&nbsp;&nbsp;&nbsp;&nbsp;if(button1Status)&nbsp;Serial.println((int)ballVolX);</span>
&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;drawGameScreen();
&nbsp;&nbsp;}
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(state == GAME_OVER) {
&nbsp;&nbsp;&nbsp;&nbsp;drawGameScreen();
&nbsp;&nbsp;&nbsp;&nbsp;TV.select_font(_8X8);
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_str</span>(29,25,<span style="color: #006699;">"GAME"</span>);
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_str</span>(68,25,<span style="color: #006699;">"OVER"</span>);
&nbsp;&nbsp;&nbsp;&nbsp;TV.select_font(_5X7);
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_str</span>(32,50,<span style="color: #006699;">"Reset"</span>);
&nbsp;&nbsp;&nbsp;&nbsp;TV.<span style="color: #CC6600;">print_str</span>(70,50,<span style="color: #006699;">"Game"</span>);
&nbsp;&nbsp;<span style="color: #7E7E7E;">/* }</span>
<span style="color: #7E7E7E;">&nbsp;&nbsp;&nbsp;&nbsp;TV.select_font(_5X7);&nbsp;//reset&nbsp;the&nbsp;font</span>
<span style="color: #7E7E7E;">&nbsp;&nbsp;&nbsp;&nbsp;//reset&nbsp;the&nbsp;scores</span>
<span style="color: #7E7E7E;">&nbsp;&nbsp;&nbsp;&nbsp;leftPlayerScore&nbsp;=&nbsp;0;</span>
<span style="color: #7E7E7E;">&nbsp;&nbsp;&nbsp;&nbsp;rightPlayerScore&nbsp;=&nbsp;0;</span>
<span style="color: #7E7E7E;">&nbsp;&nbsp;&nbsp;&nbsp;state&nbsp;=&nbsp;IN_MENU;&nbsp;*/</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #CC6600;">digitalWrite</span>(led, <span style="color: #006699;">LOW</span>);
&nbsp;&nbsp;}
&nbsp;
&nbsp;&nbsp;TV.delay_frame(1);
&nbsp;&nbsp;<span style="color: #CC6600;">if</span>(++frame == 60) frame = 0; <span style="color: #7E7E7E;">//increment and/or reset frame counter</span>
}

</pre>
        
    </div>
    
    </body>

</html>