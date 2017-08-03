<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='54.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='52.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<script>
<script type="text/javascript">
$(window).load(function() {
	$(".ball").fadeOut("slow");
})
</script>


<?php 
$uid=$_SESSION['id'];

$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q53']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
	  
}
if($found_user['q53']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>



<form action="53check.php?id=53" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<div id="ball"   class="ball" style="display:none;"></div>
<div id="ball1" class="ball1" style="display:none;"></div>
<p><h2>Space_Bound</h2></p>
<pre>

While searching for the location of the lost malaysian plane, 
searching crew reached a maze of boxes.The maze can be described 
as a square grid. The crew can move in one of the following 
directions-UP, DOWN , RIGHT , LEFT.
However , some boxes in the grid are restricted to 
visit, because they either have lakes or big rocks in them.

Since, the world is going mad about the fact that the
plane has not yet been found, the crew wants to reach
to the position of the plane , as soon as possible.

You have the prior information about the position of 
the plane, all you need to do is that , you need to 
find an optimal path from the initial position of any 
crew member to the final position of the plane.

NOTE- Grid Is 1-indexed and there is atleast path possible
for atleast one of the crew members.

Input- 
First Line- K (K*K grid)
Second Line - N (No. of crew members)
N lines follow, each line has two integer values,
(X,Y) , giving the position of each of the crew member.

Integer R - No. of restricted boxes.
R lines follow, giving the position of each restricted box.

After R lines, there is a line with (Xp, Yp), 
giving the position of the plane.

Output-
A single integer value , giving the weight of the optimal path
for any of the crew member to the position of the plane.
	
Limits-

2*2<=Size of the grid <= 100*100.
N<=10
Time Limit- 5 sec.

Example-

Input:

5
2
1 2
3 4
5
2 1
2 2
3 3
3 5
4 3
4 1

Output:
6
</pre>
<hr>
<p>
        
            <div class="content_box last_box">
            	<h2>Enter Your code here : </h2>
				<textarea id="code" name="code" rows="15" cols="70" class="required"></textarea>
				<br><br>
				<label for="lang">Select Language:</label>
                <select name="lang" id="lang">
                    <option value="7    ">Ada (gnat-4.3.2)</option>
                    <option value="13">Assembler (nasm-2.07)</option>
                    <option value="45">Assembler (gcc-4.3.4)</option>
                    <option value="104">AWK (gawk) (gawk-3.1.6)</option>
                    <option value="105">AWK (mawk) (mawk-1.3.3)</option>
                    <option value="28">Bash (bash 4.0.35)</option>
                    <option value="110">bc (bc-1.06.95)</option>
                    <option value="12">Brainf**k (bff-1.0.3.1)</option>
                    <option value="11">C (gcc-4.3.4)</option>
                    <option value="27">C# (mono-2.8)</option>
                    <option value="1" selected="selected">C++ (gcc-4.3.4)</option>
                    <option value="44">C++0x (gcc-4.5.1)</option>
                    <option value="34">C99 strict (gcc-4.3.4)</option>
                    <option value="14">CLIPS (clips 6.24)</option>
                    <option value="111">Clojure (clojure 1.1.0)</option>
                    <option value="118">COBOL (open-cobol-1.0)</option>
                    <option value="106">COBOL 85 (tinycobol-0.65.9)</option>
                    <option value="32">Common Lisp (clisp) (clisp 2.47)</option>
                    <option value="102">D (dmd) (dmd-2.042)</option>
                    <option value="36">Erlang (erl-5.7.3)</option>
                    <option value="124">F# (fsharp-2.0.0)</option>
                    <option value="123">Factor (factor-0.93)</option>
                    <option value="125">Falcon (falcon-0.9.6.6)</option>
                    <option value="107">Forth (gforth-0.7.0)</option>
                    <option value="5">Fortran (gfortran-4.3.4)</option>
                    <option value="114">Go (gc-2010-07-14)</option>
                    <option value="121">Groovy (groovy-1.7)</option>
                    <option value="21">Haskell (ghc-6.8.2)</option>
                    <option value="16">Icon (iconc 9.4.3)</option>
                    <option value="9">Intercal (c-intercal 28.0-r1)</option>
                    <option value="10">Java (sun-jdk-1.6.0.17)</option>
                    <option value="35">JavaScript (rhino) (rhino-1.6.5)</option>
                    <option value="112">JavaScript (spidermonkey) (spidermonkey-1.7)</option>
                    <option value="26">Lua (luac 5.1.4)</option>
                    <option value="30">Nemerle (ncc 0.9.3)</option>
                    <option value="25">Nice (nicec 0.9.6)</option>
                    <option value="122">Nimrod (nimrod-0.8.8)</option>
                    <option value="43">Objective-C (gcc-4.5.1)</option>
                    <option value="8">Ocaml (ocamlopt 3.10.2)</option>
                    <option value="119">Oz (mozart-1.4.0)</option>
                    <option value="22">Pascal (fpc) (fpc 2.2.0)</option>
                    <option value="2">Pascal (gpc) (gpc 20070904)</option>
                    <option value="3">Perl (perl 5.12.1)</option>
                    <option value="54">Perl 6 (rakudo-2010.08)</option>
                    <option value="29">PHP (php 5.2.11)</option>
                    <option value="19">Pike (pike 7.6.86)</option>
                    <option value="108">Prolog (gnu) (gprolog-1.3.1)</option>
                    <option value="15">Prolog (swi) (swipl 5.6.64)</option>
                    <option value="4">Python (python 2.6.4)</option>
                    <option value="116">Python 3 (python-3.1.2)</option>
                    <option value="117">R (R-2.11.1)</option>
                    <option value="17">Ruby (ruby-1.9.2)</option>
                    <option value="39">Scala (scala-2.8.0.final)</option>
                    <option value="33">Scheme (guile) (guile 1.8.5)</option>
                    <option value="23">Smalltalk (gst 3.1)</option>
                    <option value="40">SQL (sqlite3-3.7.3)</option>
                    <option value="38">Tcl (tclsh 8.5.7)</option>
                    <option value="62">Text (text 6.10)</option>
                    <option value="115">Unlambda (unlambda-2.0.0)</option>
                    <option value="101">Visual Basic .NET (mono-2.4.2.3)</option>
                    <option value="6">Whitespace (wspace 0.3)</option>
                </select>
            <!--    <center><a href="#"><img src="images/submit.png"></a></center>  -->

				<input id="q_submit" type="submit" value="submit">
				<br />
				<br />
				<br />
				<br />
				<h2>Discuss</h2>
				<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'microsoftcampusclub'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</p>

</div>
				
<!-- Form Ends here -->
</form>

<?php require_once("../includes/connection_close.php"); ?>