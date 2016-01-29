<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Introduction to Human-Computer Interaction: Assignment 4">
		<title>HCI Design: Assignment 4</title>

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
	<body data-spy="scroll" data-target=".sidenav" data-offset=65>

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
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="../../index.html">HCI DESIGN</a>
			</div>
			<div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li class=""><a href="../../index.html">Home</a></li>
				<li><a href="../../index.html#calendar">Calendar</a></li>
				<li><a href="../../studio.html">Studio</a></li>
				<li ><a href="../../mobile_app_tips.html">Using on-device resources</a></li>
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Logistics <b class="caret"></b></a>
					<ul class="dropdown-menu">
					  <li><a href="../../logistics.html#prereqs">Prerequisites</a></li>
					  <li><a href="../../logistics.html#lab">Lab</a></li>
					  <li><a href="../../logistics.html#grading">Grading</a></li>
					  <li><a href="../../logistics.html#attendance">Attendance</a></li>
					  <li><a href="../../logistics.html#faq">FAQ</a></li>
					</ul>
				</li>
				<li><a href="../../index.html#calendar">Submit work</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="http://piazza.com/ucsd/winter2015/cogs120/home">Questions(Piazza forum)</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>

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
						<h1>Assignment 4: Heuristic evaluation</h1>
					</div>
				<!--
					<div style="color:red">
						<h2 style="color:red">Important notice — Read carefully</h2>
						<p>This week, you will start working on what will become your Web site. Remember, this class focuses on interaction, not implementation. We encourage you to make the coolest application you can, but don't require textual programming. If you're most comfortable with graphical tools, we recommend <a href="https://class.coursera.org/hci-004/wiki/view?page=DownloadingTools">Justinmind</a>. (You're of course welcome to use text tools if you prefer; the choice is yours.)</p>
						<p> Now is the time to think about what design tool you'll use. Consider what interactions are most important to your application and what prototyping tools support those interactions. Think about that now so you don't get surprised when designing later. &nbsp;Please note that you will not start using this tool until the next assignment (right now, you are just prototyping in Balsamiq or an equivalent low-fidelity tool); this is just about thinking for the future.</p>
					</div> -->
					<div id="brief" class="sidenav-anchor">
						<h2>Brief</h2>
						<p>As Carolyn Snyder writes, "Paper prototyping is a variation of usability testing where the representative users perform realistic tasks by interacting with a paper version of the interface that is manipulated by a person 'playing computer' who doesn't explain how the interface is intended to work." In this assignment, your will conduct heuristic evaluations (HEs) of <b>another</b> team's paper prototype. In studio, you will be assigned a group to evaluate.</p>
					</div>

					<div id="assignment" class="sidenav-anchor">
						<h2>Assignment</h2>
						<p>The heuristic evaluations will be a way to highlight usability issues in your rapid electronic prototypes. Heuristic evaluations will follow the <a href="http://www.nngroup.com/articles/how-to-conduct-a-heuristic-evaluation/" target="_blank">"How to Conduct a Heuristic Evaluation"</a> and <a href="http://www.nngroup.com/articles/ten-usability-heuristics/" target="_blank">"Ten Usability Heuristics"</a> readings by Jakob Nielsen. Using Nielsen's ten heuristics, you as an evaluator will list as many usability issues as possible. It is less important that the evaluators worry about exactly which heuristic the usability issues occur in. The heuristics are there to help evaluators find a variety of different types of usability issues. For each usability issue found the evaluator should capture a description of the issue written as concisely and as specifically as possible. For an thorough explanation of the heuristic evaluation process, see the course <a href="https://ucsd.coursera.org/introhci-001/lecture/27" target="_blank">videos.</a></p>
					</div>

					<div id="walkthrough" class="sidenav-anchor">
						<h4>Step 1: (Team) Conduct Multiple Walkthroughs</h4>
						<p>First of all, you need to master the skill of operating your paper prototypes. Don't embarrass yourself in front of your expert evaluators by taking five minutes to find the next bit of the prototype to swap in. The smoother your paper prototypes run, the better. All team members need to learn how to act as the computer behind the prototypes, so go through a couple practice runs of each of your two prototypes. Take turns, with one of you being the evaluator and one being the computer. Practice runs like these are called walkthroughs. Walkthroughs will get you comfortable operating the paper prototype and help you identify problems with it (for example missing pieces or dead ends).</p>
					</div>

					<div id="conduct" class="sidenav-anchor">
						<h4>Step 2: (Team) Receive 3 Heuristic Evaluations</h4>
						<p>Now that you have prepared yourself to run your paper prototypes smoothly, you are ready to conduct a heuristic evaluation (HE) session. At least two team members should be present for all sessions. To facilitate this we will assign 3 evaluators to your team in studio, and provide time during the next lecture for you to perform back-to-back evaluations (one at a time). We highly recommend that you finish your heuristic evaluations over the weekend, so that lecture time can be dedicated to step 4, which students have found the most difficult to schedule in the past.</p>
						<p>For each HE session, one person from your team will be the facilitator. What's a facilitator? The facilitator should greet the evaluator, explain how the session will work, and give a brief introduction to your prototypes. One (or more, if possible) person should be the computer. Once the evaluation has started, the facilitator (or more, if possible) should observe and take notes/pictures.</p>
						<p>Make things easy for your evaluator by printing a sheet of Nielsen's heuristics. Prepare a sheet for them to fill out while evaluating. (Try using <a href="http://d.ucsd.edu/class/intro-hci/2015/HeuristicsWorksheet.pdf" >this worksheet</a>.) A good idea is to set up a spreadsheet on a laptop that you and the evaluator can share. (This spreadsheet makes it easy for the evaluator to do his assignment and for you to improve the design.) Remember that the evaluator is the expert. Let them explore and evaluate the interface as they choose, but make sure that they go over each of your two proposed prototypes.</p>
						<p><b>For mobile apps of our course's scale, each evaluator should take about 20 minutes. </b></p>
					</div>


					<div id="evaluate" class="sidenav-anchor">
						<h4>Step 3: (Individual) Be an Expert Evaluator Once</h4>
						<p>As an evaluator, keep in mind that you are the expert and you should go through the interface the way that you would prefer to. Be thorough and write down all problems you can find. Don't try to be "nice" by not reporting problems, everything you find will help the team improve their interface. Since you are evaluating two prototypes, try to make your feedback comparative. For example, if a prototype had a big problem that you also found in the other prototype, make a note of it. If one prototype had a problem that, for some interesting reason or another, was solved or not an issue in the other prototype, make a note of that as well. You don't have to compare both prototypes in every sentence in your evaluation (and it's even fine if most of your feedback isn't comparative), but you should highlight enough similarities and differences between the two prototypes so that the group receiving your feedback will understand the advantages and drawbacks and each design. Your feedback should help the group understand and decide which features of which designs they should implement in the coming weeks.</p>
						<p>Use Nielsen's heuristics as a guide and specify what heuristic(s) each problem is related to. If you come across problems that don't fall neatly into particular heuristics, mark that no heuristics apply. As long as your discussion of the problems clearly shows that you understand and are trying to apply Nielsen's heuristics, you will get full credit in the heuristics category (see the grading rubric). Getting the problem written down with a severity rating is the more important part. Use Nielsen's <a href="http://www.nngroup.com/articles/how-to-rate-the-severity-of-usability-problems/" target="_blank">Severity Ratings for Usability Problems</a>.</p>
						<p>If you use a Google document, make sure that both you and the team you are evaluating has access to your evaluation. Go over both of the team's prototypes. You can use the comparison to inform your feedback. The evaluation will be part of your submission this week.</p>

						<p><b>For mobile apps of our courses scale, each evaluator should take about 20 minutes.</b></p>
					</div>

					<div id="meetwithothers" class="sidenav-anchor">
						<h4>Step 4: (Individual) Meet with Other Evaluators</h4>
						<p>Meet with the two (or more for uneven group sizes) other evaluators of the same prototypes and (at least) one member of the prototype's design team. Together, discuss the general characteristics of the UI you evaluated, and suggest potential improvements to address major usability problems that you identified. Aggregate your evaluation with the other evaluations for the prototypes. Did you agree on the most severe usability problems with the other evaluators? Come to an agreement on which problems are most important, then brainstorm potential solutions with the team you evaluated.</p>
						<p>Finally, with the other evaluators, distill all of this down to one paragraph where you address the major problems you all identified, as well as the potential solutions. Include a sentence or two reflecting on what kinds of things you found heuristic evaluation valuable for, and what kinds of things it's not very useful for. All evaluators of the same prototypes will submit the same paragraph.</p>
					</div>

					<div id="createhome" class="sidenav-anchor">
						<h4>Step 5: (Team) Create a Home Screen </h4>
						<p>To get your feet wet with web development of your app, create a home screen. It should include the suggestions your evaluators have.  It shouldn't be pretty yet: don't worry about styling.</p>
					</div>
          <div id="reada4" class="sidenav-anchor">
              <h4>In Studio</h4>
              <p>You will present your heurisitc evaluations, with the group that you evaluated with(not your usual project group). Prepare a 2-minute presentation of the things you learned:
              <ul>
                <li>What did you like about the prototype?</li>
                <li>What did you wish the group had done?</li>
                <li>What were some common findings you arrived at?</li>
              </ul>
              </p>
          </div>
					<div id="examples" class="sidenav-anchor">
						<h2>Student Examples</h2>
						<p><a href="http://d.ucsd.edu/class/intro-hci/2015/assignments/examples/pdfs/a04e1.pdf">Example 1</a> - This student did an incredibly thorough heuristic evaluation. We especially like how this student incorporated comparative feedback. Keep in mind that the this assignment was slightly different last year.</p>
						<p><a href="http://d.ucsd.edu/class/intro-hci/2015/assignments/examples/a04example2.html">Example 2</a> - This is a weak example of a heuristic evaluation, as it wasn’t very thorough. The general structure of this example is decent, however, where problems are listed for each prototype and the heuristics and severity scores are identified. This example would have benefitted more from comparison of the prototypes. </p>
					</div>

					<div id="faq" class="sidenav-anchor">
						<br><h2>Frequently Asked Questions</h2>
						<div class="row">
							<div class="col-md-4">
								<strong>How many heuristic violations should we find?</strong>
							</div>
							<div class="col-md-8">
								<p> We're not requiring an exact number of heuristic violations-- you can follow the assignment examples as a guideline for what we are expecting.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<strong>Do we need to differentiate between the prototypes in our evaluations?</strong>
							</div>
							<div class="col-md-8">
								<p> Yes, you should clearly label "Prototype 1" or "Prototype 2," and make your feedback as comparative as possible.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<strong>Can we change our paper prototypes between submitting A03 and getting heuristic evaluation done for A04?</strong>
							</div>
							<div class="col-md-8">
								<p> Yes. You might have received feedback in studio or from TA in your grades for A03 and you should feel free to modify your prototypes
								to get the best feedback during heuristic evaluation. </p>
							</div>
						</div>
					</div>

					<div id="submit" class="sidenav-anchor">
						<h2>Submit</h2>
						<p>This assignment will be submitted <b>individually</b>, in a single formatted pdf file with the following items:</p>
						<ul>
							<li>A typed heuristic evaluation of another group's two paper prototypes. This comprises a bulleted list of usability issues you found, along with their severity, for each prototype. Include comparative feedback between the two prototypes.<b>(Relation to Nielsen’s Heuristics, Volume of Feedback, Quality of Feedback, Severity Ratings)</b></li>
							<li>A paragraph, written jointly with the other evaluators, addressing the major problems identified with the prototypes and potential solutions. Include a sentence or two reflecting on what kinds of things you found heuristic evaluation valuable for, and what kinds of things it's not very useful for. All evaluators of the same prototypes will submit this paragraph. <b>(Aggregate Evaluation & Reflection)</b></li>
							<li>A link to the team's webapp home screen. <b>(Home Screen)</b></li>
						</ul>
						<p><a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a></p>
					</div>

					<div id="evaluation" class="sidenav-anchor">
						<h2>Evaluation Criteria &amp; Grading Rubric</h2>
						<p>The rubric below contains criteria that are worth one point each and will be graded independently and in a binary fashion.</p>
	                    <?php
	                        $result = file_get_contents("http://www.ucsd-hci.com/api/assignment/4");
	                        $json = json_decode($result, true);
	                        for ($x = 0; $x < count($json["criteria"]); $x++) {
	                            echo '<ul list-style-type:none>'.$json["criteria"][$x]["group"];
	                            echo '<ol>';
	                            $items = $json["criteria"][$x]["items"];
	                            for ($y = 0; $y < count($items); $y++) {
	                                echo '<li>'.$items[$y]["name"].'</li>';
	                            }
	                            echo '</ol>';
	                            echo '</ul>';
	                        }
	                    ?>
						<!-- <div class="table-responsive">
							<? include "rubric.html" ?>
						</div> -->
					</div>
					<div id='self-assessment' class='sidenav-anchor'>
						<h2>Self assessment</h2>
						<a class='btn btn-primary' href="https://docs.google.com/forms/d/14b3tCOoOcWpZgQa7523DIlJWz3SbHbA9H5y_71naNRQ/viewform">During studio, click here to self assess your work.</a>
                        <br/><br/>
						<h2>Mid-quarter evaluation</h2>
						<a class='btn btn-primary' href="https://docs.google.com/forms/d/1F8QM-8qMxfpnHOE3p9floMcOrEeerEuTKQLnN0kSixo/viewform">During studio, click here to evaluate the course.</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<footer>
			<p>This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, and revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and our teaching staffs. Instructors: you are welcome to use these materials for your own class, and dozens of courses around the world do. We share all course materials <a href=https://creativecommons.org/licenses/by/4.0/deed.en_US
			>through a CC-BY license</a>. Please let Scott know if you use them, and also any suggestions you have. We thank <a href=http://www.calit2.net/>CalIT2</a> and the <a href=http://www.jacobsschool.ucsd.edu/moxiecenter>Moxie Center</a> for helping support our studios.</p>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../../js/bootstrap.min.js"></script>
		<script src="../../js/hci.js"></script>
	</body>
</html>
