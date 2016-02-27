<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>A8&thinsp;&middot;&thinsp;HCI Design</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../css/hci.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".sidenav">

    <!--
    IntroHCI assignment template
    ------------------
    To create a new assignment:
    1) Write all the HTML as you normally would underneath the #assignment-description div.
    2) Anything that you want to appear in the navbar on the left needs to be enclosed
        in a <div id="unique-id" class="sidenav-anchor">. On page load, hci.js will look up
        anything enclosed in .sidenav-anchor, find the first header (h1-h6) inside it, and add
        it to the navigation pane on the left. Make sure it has a unique div id so that there is something
        to anchor the hyperlink to.
    3) I recommend going with Bootstrap's recommendation and putting any <table class="table"> elements enclosed in a
        <div class="table-responsive">.
    -->


    <!-- Fixed navbar -->
    <? include "../../nav.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidenav" data-spy="affix">
                    <ul class="nav nav-stacked" id="sidenav-content">
                    </ul>
                </div> <!-- /sidenav -->
            </div> <!-- /col-md-3 -->
            <div class="col-md-9" id="assignment-description">

                <div>
                    <h1>Assignment 8: Test your prototype</h1>
                </div>

                <div id="brief" class="sidenav-anchor">
                    <h2>Brief</h2>
                    <p>The goal of this assignment is to test your prototype with two people to further streamline your app and inform your A/B test question and design.</p>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                </div>

                <div id="protocol" class="sidenav-anchor">
                    <h4>Step 1: Develop a protocol</h4>
                    
                    <p>Protocols, or "usability scripts," help keep tests consistent across testers and facilitators. Write a user testing protocol that covers:</p>
                    
                    <ul>
                    <li>Preparation and setting up</li>
                    <li>Gaining informed consent <a href="http://www.indiana.edu/~usable/templates/Participant_consent_form.htm">using this form</a></li>
                    <li>Executing the test, identify who does what</li>
                    <li>Written instructions that you will read to the testers, and any other materials (e.g. questionnaires, interview questions) that will be used during the session</li>
                    <li>How your observations will be recorded</li>
                    <li>Debriefing the tester and a team debrief</li>
                    </ul>
                    
                    <p>Submit your testing protocol and signed consent form for each participant. Immediately after each test, do a quick debrief with your team and write down any reactions or thoughts that came up.</p>
				</div>
                
				<div id="usertests" class="sidenav-anchor">
					<h4>Step 2: Watch people use your prototype</h4>
                    <p>Observe <b>at least</b> two different people test your interactive prototype. Try to find representative testers who you would expect to use your app.</p>
                    <p>One person will facilitate the test and interact with the tester, and the rest of the team will be in charge of taking notes/photos/video/etc. This time your user will not be writing down the problems they find for you. It's your job to learn what the people testing your prototype are thinking; the feedback they provide you will be invaluable for your next iteration. Your goal is to find ways to improve your interface.</p>
                    <p>Submit a photo or sketch of each tester using your prototype. As with the needfinding assignment, these photos <b>with captions</b> should show breakdowns and design opportunities. Contextualize them by capturing the action, e.g. using over-the-shoulder shots, and the setting. Look for other breakdowns and pain points in your interface and try to understand what the problems are and how you might fix them. When possible, modify/update your prototype before running the next participant.</p>
                </div>
                
                <div id="results" class="sidenav-anchor">
                    <h4>Step 3: Compile your results</h4>
                    <p>After testing, take some time with your team to reflect on your findings. Go through all the notes and other records. Try to be objective; don't write problems off. Discuss as a team and define some general patterns in people's behavior. When you identify some interesting points, talk deeply about them - ask each other questions, recreate the different tests, analyze the decisions people made, other paths they could have taken, and so on.</p>
                    <p>Submit a detailed and understandable list of changes that you will implement as a result of your testing and discussion, with justifications. Fix the bugs that are either small and easy to fix, or too severe to ignore. Make sure that you do this before moving on to the next step of this assignment.</p>
                </div>
                
                <div id="altredesign" class="sidenav-anchor">
                    <h4>Step 4: Create a meaningful redesign for A/B testing</h4>
                    <p>A/B testing is a powerful web design tool that leverages random assignment and the easy-to-use chi-squared statistical test. It requires measuring counting data of some kind, e.g. number of clickthroughs, coin flips, or pageviews. From your user testing, you should have identified many design breakdowns or opportunities and their potential solutions. Each solution will manipulate, or have consequences, on the user’s interaction in some way. For instance, changing the size of a button may increase the likelihood that a user follows an optimal navigational path. In this case, you can measure the effect of this manipulation by counting the number of users to follow this path. Identify and redesign ONE component of your prototype that resolves a breakdown or leverages an opportunity with a countable outcome. The redesigned component needs to be significantly different from the original design. Design is often a slow and iterated process, so select something small and manageable in scope. <a href="https://ucsd.coursera.org/introhci-001/lecture/40">See the lecture videos for more information.</a></p>
                    <p>Creating simple paper mockups of your redesign is highly recommended. Then, electronically create and submit <b>two separate URLs</b> for your redesign and your original application - don't write over your old code!</p>
                    <p>Submit a description of the online test you will run for the <a href="../A9/">next assignment</a>. How will you measure your manipulation? What are the possible outcomes and their interpretations?</p>
                </div>
                
				<div id="instudio" class="sidenav-anchor">
                    <h4>In Studio</h4>
					<p>In studio, you will present your ideas informally to the other teams: What were some major findings? What changes did they translate to? What are you going to do moving forward? Then you will work with your studio leader to prepare for A/B testing!</p>
				</div>

                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p>Here are three student examples from last year.</p>
                    <ul>
                        <li><a href="../examples/a08example1.html">Example 1</a> - This is an example of an A+ level assignment. This group obviously put a lot of thought into their in-person test, and was able to motivate their redesign from the conclusions they drew from the in-person test.</li>
                        <li><a href="../examples/a08example2.html">Example 2</a> - This is an example of a B level assignment. This group lost points for not including their consent form for the in-person test. We also wished the feedback was more substantive beyond obvious usability bugs (one of which had been mentioned by the TA in a previous assignment). For the online test description, we were not convinced that measuring click rates was the right metric to measure success.</li>
                        <li><a href="../examples/a08example3.html">Example 3</a> - This is an example of an A level assignment. We liked the clean and well captioned photos for each participant testing their app. They also tested more than the required two users.</li>
                    </ul>
                </div>

				<div id="whatsthisfor" class="sidenav-anchor">
					<h2><i>What’s this for? A UX agency perspective</i></h2>
					<p><i>By Mike Davison, Community TA and UX Project Manager</i></p>
					<p><i>Testing your high fidelity prototype with users closes the circle. It is vital to ensure your solution meets the needs identified during the first assignment, and that the agency has not simply spent months drifting further from the problem.</i></p>
					<p><i>It also allows you third party reflection and suggestions for tweaks to the design. Everything we learn here and correct is a problem we don’t have to live with because it has already been coded and is too costly to change....it’s a valuable phase of the process.</i></p>
					<p><i>Remember this - feedback is not criticism, feedback is not personal. User centred design works best when pride is left aside, and the feedback of others is incorporated into your design thinking!</i></p>
				</div>
				
				<div id='ilike' class='sidenav-anchor'>
					<h2>Common "I like" Feedback</h2>
					<p>The following statements are common feedback given on this assignment. We call these statements 'I like' feedback because they are a way to express positive aspects of the submission. You could think of these as elements to aim for.</p>
					<ul>
						<li>Redesigned an interesting and useful part of their app</li>
						<li>Was thoughtful about the design breakdowns they found</li>
						<li>Ran well thought-out user tests</li>
						<li>Tested tasks important to users of the app</li>
						<li>Created a thorough set of testing materials (plan, script, etc.)</li>
						<li>Took interesting photographs</li>
						<li>Had prototypes that were well-designed and bug-free</li>
						
					</ul>
                </div>
				
                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>Your testing protocol and signed consent forms, as well as any materials you gave to the user as part of your tests (either as text, PDF or a scanned image). <b> (Testing Protocol & Documentation)</b></li>
						
						<li>Captioned photos for each participant testing your prototype. <b>(Photo Documentation)</b></li>

                        <li>A detailed list of changes you will implement in your next iteration, with justifications. <b> (Planned Changes Based on Test)</b></li>

                        <li>The URL of the original prototype you tested and the URL of the implemented alternative redesign of one interface element. Including submissions of the paper mockups would be very helpful. <b>(Alternative Design)</b></li>

                        <li>Description of online test. <b>(Description of Planned Online Test)</b></li>

                        <li>Copy of last week’s and this week’s plan submitted via PDF in a readable and easy-to-compare format. Link to Google Sheet with history should also be submitted to help with grading. <b>(Updated Development Plan)</b></li>
                    </ul>

                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>


                </div>
                <br>
                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <p>The rubric below contains criteria that are worth one point each and will be graded independently and in a binary fashion.</p>
                    <?php
                        $result = file_get_contents("http://www.ucsd-hci.com/api/assignment/8");
                        $json = json_decode($result, true);
                        $cur_item = 1;
                        for ($x = 0; $x < count($json["criteria"]); $x++) {
                            echo '<ul list-style-type:none>'.$json["criteria"][$x]["group"];
                            $items = $json["criteria"][$x]["items"];
                            echo '<ol start = '.$cur_item.'>';
                            for ($y = 0; $y < count($items); $y++) {
                                echo '<li>'.$items[$y]["name"].'</li>';
                                $cur_item++;
                            }
                            echo '</ol>';
                            echo '</ul>';
                        }
                    ?>
                </div>

                <div id='self-assessment' class='sidenav-anchor' style='margin-top: 10px'>
                    <h2>Group Evaluation, Team Evaluation</h2>
                    <p>
                        <a class="btn btn-primary" target="_blank"  href="https://docs.google.com/forms/d/14w-wx_UB_Ejogrmx1qevMB1lYCGIOwmRr6aARBweWeg/">During studio, click here to assess your group's work as a collective unit.</a></br>
                        <a class="btn btn-primary" target="_blank" style="margin-top: 10px" href="https://docs.google.com/forms/d/1q6tepXzwa9Mz5trskJWiJDWIX2LKR7UUz9Iz3os5DBM/"> During studio, click here to assess your own work and each of your team member's work.</a>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/hci.js"></script>
  </body>
</html>
