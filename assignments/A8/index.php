<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>HCI Design: Assignment 8</title>

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
                    <p>The goal of this assignment is to test your prototype with people and learn from that experience. To get the kinks out of your application, first test it with a couple of people.</p>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                </div>

                <div id="usertests" class="sidenav-anchor">
                    <h4>Step 1: Watch people use your prototype</h4>
                    <p>Watch <strong>at least two different people</strong> use your interactive prototype. These do not have to be planned out ahead of time, but try to get people who are somewhat similar to the real people who will be using your application.</p>
                    <p>Just like when you conducted the <a href=../A4>Heuristic Evaluations</a>, each team member will have its own role during testing. One person will be the facilitator, one will be in charge of taking notes/photos/video/etc. Any team member who is not currently in one of those two roles should observe and take notes. This time your user will not be writing down the problems they find for you. It's your job to learn what the people testing your prototype are thinking; the feedback they provide you will be invaluable for your next iteration. <strong>Your goal is to find ways to improve your interface.</strong> Look for breakdowns and pain points in your interface and try to understand what the problems are and how you might fix them.</p>
                    <p>When possible, <strong>modify/update your prototype</strong> before running the next participant.</p>
				</div>
				<div id="protocol" class="sidenav-anchor">
					<h4>Step 2: Develop a protocol</h4>
                    <p>It is important you <strong>keep the task consistent</strong> between participants: use the same script, follow the same protocol, answer questions in the same way. This is a fast study, not a formal one. Still, any study requires a bit of planning: Prepare an outline of how the user test will be run, written instructions that you will read to the users, and any other materials (e.g. questionnaires, interview questions) that will be used during the session. This is called your experimental protocol, which is a step-by- step guide on how to run the experiment. It should be detailed enough that someone else could take the protocol and run your experiment without you being there. It ensures that you carry out the experiment in the same way for each participant.</p>
					
					<h5>Your experimental protocol should cover: </h5>
					<ol>
                    <li>Preparation and setting up</li>
                    <li>Gaining informed consent (Even if your participants are close friends, you will need to create a consent form. <a href="http://www.indiana.edu/~usable/templates/Participant_consent_form.htm">You can use this consent form</a> to create one if you find it helpful.)</li>
                    <li>Executing the test, who does what</li>
					<li>How your observations will be recorded</li>
					<li>Debriefing the participant and a team debrief</li>
                    </ol>
					<p>Submit your experimental protocol and signed consent form for each participant. Immediately after each test, do a quick debrief with your team and write down any reactions or thoughts that came up. You will most likely forget them, so it's important to write them down right after the test.</p>
                    <p><strong>Submit a photo or sketch of each participant testing your prototype.</strong> As with the needfinding assignment, these photos and captions should show breakdowns and design opportunities. How you compose your photo will depend on the app/task. If the key thing is that it happens in a particular location (say in a grocery store), make sure to show the context. If the key issue is what's on screen, take an over-the-shoulder shot of the person interacting.</p>
                </div>

                <div id="results" class="sidenav-anchor">
                    <h4>Step 3: Analyze your results</h4>
                    <p>After testing, take some time with your team to reflect on your findings. Go through all the notes and other recordings. Try to be objective; don't write problems off. Discuss as a team and try and define some general patterns in people's behavior.  When you identify some interesting points, talk deeply about them - ask each other questions, recreate the different tests, analyze the decisions people made, other paths they could have taken, and so on. Let your insights guide redesigns for your next prototype iteration. <strong>The end product of your discussion should be a list of changes that you will implement. Make this list detailed and understandable to people outside of your team.</strong> Of all the bugs that you have identified, fix the bugs that are either small and easy to fix or too severe to ignore. Make sure that you do this before moving on to the next step of this assignment. </p>
                </div>

                <div id="altredesign" class="sidenav-anchor">
                    <h4>Step 4: Create an alternative design</h4>
                    <p>Select <strong>ONE</strong> component of your prototype and come up with a redesign for that part. The redesigned component needs to be significantly different from the original design and likely to satisfy a real user need either not satisfied or satisfied differently in the original design. This is <strong>NOT</strong> meant to be a huge redesign of your prototype. We want you to select something small and manageable in scope (similar to the alternative website designs shown in lecture). Designers often go through many many different versions of prototypes before their final design, so we want you to get familiar with the process (given our time constraints for the course). Mock up a few screens of your redesign that you will be able to use with a user, and <a href="http://en.wikipedia.org/wiki/KISS_principle">keep it simple</a>. Electronically create and submit a URL to your redesign (build the interactive screens from your paper prototype). Remember to keep the URL to this redesign separate from your original application (you will need both for testing). As you think about how to revise your design, it may help you to sketch it on paper before you implement it in code.</p>
				</div>
				<div id="studyplan" class="sidenav-anchor">
                    <h4>Step 5: Plan to test that alternative online</h4>
                    <p>Next week, you will use the Web to gather usage data about your application by launching an A/B test online. Refer to the lecture notes regarding controlled web experiments (e.g. A/B testing, control groups, etc.). Think about what you are asking, and how to prepare a study to answer it. <strong>Try to think of A/B tests that will give you information that this week's user testing didn't (or couldn't).</strong> Next week, when you launch your A/B test online, the alternative redesign you implemented this week will be the 'B' of your A/B test. You will need to have access to both versions of this component to run your online tests - don't write over your old code!</p>
                </div>
				<div id="instudio" class="sidenav-anchor">
                    <h4>In Studio</h4>
					<p>In studio, you will present your ideas informally to the other teams: What were some major findings? What changes did they translate to? What are you going to do moving forward? Then you will work with your studio leader to prepare for A/B testing!</p>
				</div>

                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p>Here are two student examples from last year. Keep in mind that last year, students had to submit paper prototypes of their redesign in addition to the implemented version.</p>
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
						<li>The URL of the original prototype you tested.</li>
                        <li>Your experimental protocol and signed consent forms, as well as any materials you gave to the user as part of your tests (either as text, PDF or a scanned image). Examples may include scripts you read aloud to the user, questionnaires, surveys or other materials you wrote.<b> (Experimental Protocol & Documentation)</b></li>
						
						<li>Captioned photos for each participant testing your prototype. <b>(Photo Documentation)</b></li>

                        <li>A list of changes you will implement in your next iteration. For each change, include a brief explanation for why you selected it. Describe it with enough detail that someone outside of your team can understand it. <b>(Planned Changes Based on Test)</b></li>

                        <li>URL of the implemented alternative redesign of one interface element. <b>(Alternative Design)</b></li>

                        <li>Description of online test. In 2 to 3 sentences, describe the online test you will run for the <a href="../A9/">next assignment</a>. How will you measure which alternative is better? Remember, what people do is different than what they say. <b>(Description of Planned Online Test)</b></li>

                        <li>Last week and this week's PDF of development plan. We recommend submitting a PDF of your Google Spreadsheet. This gives you a snapshot for comparison. <b>(Updated Development Plan)</b></li>
                    </ul>

                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>


                </div>

                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <div class="table-responsive">
<? include "rubric.html" ?>                        
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor' style='margin-top: 20px'>
                    <h2>Group Evaluation, Team Evaluation</h2>
                    <p>
                        <a class="btn btn-primary" target="_blank"  href="https://docs.google.com/a/eng.ucsd.edu/forms/d/1Tkx91b09KVt1IYpvusnxig2BdmtbNHw9w8oHaNm7AMk/edit">During studio, click here to assess your group's work as a collective unit.</a></br>
                        <a class="btn btn-primary" target="_blank" style="margin-top: 10px" href="https://docs.google.com/a/eng.ucsd.edu/forms/d/1RVZbm6zWwH0O39JiJWt3TjwbfBfaoVyu95kvM_RZSuE"> During studio, click here to assess your own work and each of your team member's work.</a>
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
