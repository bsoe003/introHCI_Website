<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment 3">
    <title>HCI Design: Assignment 3</title>

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
          <a class="navbar-brand" href="../../index.html">HCI Design</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="../../index.html">Home</a></li>
            <li><a href="../../index.html#calendar">Calendar</a></li>
            <li><a href="../../studio.html">Studio</a></li>
            <li ><a href="../../mobile_app_tips.html">Development Resources</a></li>
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
                    <h1>Assignment 3: Prototyping</h1>
                </div>
                <div id="brief" class="sidenav-anchor">
                    <br><h2>Brief</h2>
                    <p>This is the first team assignment. Review and share the user needs you brainstormed. This week, your team will develop blueprints for your mobile web app, fleshing out your design ideas by creating a point of view, seeking inspiration, storyboarding, and making paper prototypes.</p>
                </div>
				<div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                </div>
                <div id="pov" class="sidenav-anchor">
                    <h4>Step 1: Make a Team Point of View</h4>
                    <p>First, your team should write down a point of view (that relates to the brief) in a sentence or two.</p>
					<p><b>What's a point of view?</b> It's your take on a high-level design strategy, before actually designing a solution.</p>
                    <ul>
						<li>For example, if you wanted to improve the check-out experience at the grocery store, your point of view might be: "waiting in line is intrinsic, but the boredom is not". This would lead to design solutions like showing news or playing games while waiting in line.</li>
						<li>Alternatively your point of view might be "with a good scheduling interface, no one should have to wait in line." This might lead to better ways for employees to staff registers and consumers to pick them.</li>
						<li>Or, you might have a totally different point of view: let's make grocery stores more like farmers' markets, where payment is distributed across the stands that have the food.</li>
					</ul>
					<p>All of these are valid points of view---they do suggest different possibilities and have different implications/entailments for what constitutes a good design. They do not restrict your thinking to one solution - they are general enough to give scope for multiple solutions.</p>
					<p><b>What makes a good point of view?</b> It should clearly express the problem/opportunity. Be human-centered: that problem/opportunity should be a deep user need (the underlying issue), rather than a surface  need (what people say first). A good point of view makes clear what a good solution would accomplish. Write yours down.</p>
					<p>Remember that you will work on this project for the rest of the quarter. Thus, coming up with a good point of view that you can successfully tackle in the remaining weeks is crucial. The most common regreat that students tell me at the end of the quarter is that they wish they'd spent more time on ideation and prototyping. It's easy to get enamored of the first cool idea that you think of, but that doesn't mean it creatively addresses a deep user need. Pushing harder now means better design work later.</p>
                </div>
                <div id="inspirationboard" class="sidenav-anchor">
                    <h4>Step 2: Make an Inspiration board</h4>
                    <p>There's a saying in science that "a year in the lab can save you an hour in the library." If that sounds backwards, it is :). The same is true in design. Here, the world is your library. Rather than reinventing the wheel, learn from what's out there! What's the best way that a user could solve your design's 'deep need' today? How will your design be better/different than that? And what can it borrow? Are there analogous applications that inspire you to try a similar strategy for a different setting?</p>
                    <p>Inspiration can be existing applications, artifacts, products, services, or anything that relates to your concept. Here, web search is your friend (potentially useful sites include Google, Google Scholar, the ACM Digital Library, TechCrunch, Engadget...). Some things you find will be quite related, but it is important to interpret "related" broadly. The relationship could be very concrete or very abstract. It may be that a carrot-peeler or a measuring cup is your inspiration for an elegant and ergonomic software interface design. You may be inspired to improve upon an existing service or go in a totally different direction. Cast the net wide and find as much (i.e., diverse inspirations) as you can. An "inspiration board" is a tool to help you do this.</p>
					<p><b>Team Inspiration Board:</b></p>
					<ol>
						<li>Start an inspiration board by listing 5-10 words that relate to your design idea or point of view. These words can be anything -- from similar designs to feelings that the idea evokes.</li>
						<li>Once you’ve listed your words, come up with at least five inspirations, and share them by providing links or images within your assignment submission. For each inspiration, give a brief (1-2 sentences) and insightful explanation of why you chose it (What did you take away from it? What did you learn from it?... In other words, why did it inspire you?). Each of these inspirations should offer a different perspective to the design you are working on.</li>
					</ol>
					<p><b>Benefits of Inspiration Boards:</b></p>
					<ul>
						<li>Making an inspiration board helps you understand the existing landscape, sort of like a competitive analysis.
						<li>Inspiration boards help inspire you to do things you wouldn’t have otherwise thought of.</li>
					</ul>
					<p>As an example, if you were making a travel app, your words could be: relaxing, paradise, getaway, Europe, blue, etc. Then, some inspirations could be tripadvisor.com, souvenirs, twitter, Bank of America mobile banking app, and so on. You should not be submitting inspirations with tripadvisor.com, travelocity.com, expedia.com, as these websites all offer the same type of services and therefore, do not add anything “diverse” to the set.
                    While it’s true that Google has a clean minimal layout and the iPhone has a beautiful design, citing those as inspiration wouldn’t be very specific.</p>
					<p><a href="https://drive.google.com/file/d/0B83mQAPNBiV3VEVzY2JwM1dmRFU/view?usp=sharing">Here's a concrete example</a> of an inspiration board, found below the overview section, where you can see the existing products/systems/etc. that help establish the problem space being explored. On the right are the words that related to the designer's design ideas.</p>
					<p>Remember to be creative. Think big, then focus in with an insightful and specific explanation of how your inspirations <i>inspired</i> you.</p>
                </div>
                <div id="storyboard" class="sidenav-anchor">
                    <h4>Step 3: Create 2 Storyboards</h4>
                    <p>Next, use your inspiration to come up with <u>two</u> <u><b>different</b></u> design ideas that address/engage your point of view to address a user need. Illustrate each of these ideas with a storyboard.</p>
					<p>A storyboard is a comic-strip-like set of drawings about what your interface does and how it is used to accomplish tasks in a real usage scenario. Feeling stumped about how to show your ideas visually? Check out <a href="http://books.google.com/books?id=tUwqbo48lp4C">"Understanding Comics"</a> by Scott McCloud, and Amal Dar Aziz's excellent <a href="http://spark-public.s3.amazonaws.com/hci/assignment_ressources/assignment3_storyboard_notes.pdf">Guide to Storyboarding</a>. A good storyboard should clearly demonstrate who the user is, the usage situation, and the user's motivations for using the interface. It should show what the user can accomplish with your interface, but it needn't (and often shouldn't) show a specific user interface design. For a storyboard including an app screen, the details of the screen are not relevant, but what those screens enable you to accomplish is. Check out these <a href="https://class.coursera.org/hciucsd-005/lecture/21">lecture videos</a> to learn more.</p>
					<p>Each storyboard should comprise 5-8 panels and fit on two 8.5" x 11" sheets of paper. Use a thick pen like a Sharpie---ballpoint pen or pencil is not acceptable. A thick pen is a good reminder to focus on the high-level and not sweat the details at this point. (Don't worry, in a few weeks you'll have plenty of time to sweat the details.)</p>
					<p>Remember that the two storyboards should diverge, meaning that they each represent different design ideas that address the same point of view. As an example, the following storyboards both address the point of view "Through clever scheduling, homework doesn't have to be a time-consuming and dreaded process:" <a href="https://s3.amazonaws.com/coursera-uploads/user-c062cb137e8c3ccd320a5278/971604/asst-19/9d6cdd0a8f48a2e50db265312c8bf5be.jpeg">Storyboard 1</a>, depicts a way to prioritize tasks, <a href="https://s3.amazonaws.com/coursera-uploads/user-c062cb137e8c3ccd320a5278/971604/asst-19/59d984931b4cc72ea93c01d837076dcc.jpeg">
					Storyboard 2</a>, depicts a way to factor in breaks.</p>
                </div>
                <div id="paperprototype" class="sidenav-anchor">
                    <h4>Step 4: Build 2 Paper Prototypes</h4>
                    <p>For step 4, lay out your storyboards so the team can see them. Take some time to discuss the different ideas you've had. Make sure you discuss the strengths and weaknesses of each design, and how well they achieve the goals set out by your point of view. Buy-in and joint ownership are critical here. If the discussion takes a while, that's cool. Disenfranchisement at this point is way bad, as it means you'll be up alone pulling late nights, while your teammate is sleeping, angry you didn't pick their idea.</p>
                    <p>Working as a group, make two paper prototypes. Each should clearly connect to your point of view, but do so in a different way. (Can you see we really value enumerating alternatives?) Quite likely, each prototype will instantiate one of your storyboards, but that's not required. A paper prototype concretely shows <u>all</u> the essential elements of a user interface, except that it's implemented with pen on paper, as opposed to pixels and code. Paper prototypes must be hand-drawn. No computers and printers are allowed. Again, it helps focus on the concepts, and saves you from wasting hours twiddling pixels. Years after taking this course, students often come back and tell us that paper prototyping was their favourite part of the class because of its effectiveness for rapid ideation.</p>
                    <p>For example, if you were designing a mobile transit application, your two prototypes could take two different approaches to addressing the point of view that users should be able to find out when the next bus will come. The prototypes should be complete enough to "run" a new user through each task. When you're done, everyone on your team should sign the prototypes. (Note: the story here is very linear, but your process doesn't have to be. You can start making a paper prototype, then change your mind. Align your prototype with your storyboard as much as you can; no need to be perfect. Don't try to split up the work just to get the assignment done, where one person makes the storyboard while the other makes the prototype. That's not very effective.) Your prototype interface should enable people to navigate, recover from errors, and change their mind. Check out the <a href=" http://www.youtube.com/watch?v=GrV2SZuRPv0">Hanmail video</a> for an awesome example and inspiration.</p>
                    <p>Your paper prototypes should show sketches for all important areas of your site. If X is an area of your site that's not very relevant to your task (like maybe the copyright policy of piazza isn't very important for designing the use case of this class) then you don't need to show it. Remember, this prototype is all hand-drawn (no computer tools), so it should be really fast to come up with ideas. In fact, that's precisely the point of this assignment: now is the time to do the hard conceptual work of figuring out your information architecture and functionality.</p>
                </div>
                <div id="reada4" class="sidenav-anchor">
                    <h4>In Studio</h4>
                    <p>You will present your storyboards/prototypes. Also, you'll be assigned 3 evaluators from different groups. You will need to arrange time to meet with these evaluators before lecture next week. See <a href="http://d.ucsd.edu/class/intro-hci/2015/assignments/A4/">Assignment 4</a> for details.</p>
                </div>
				<div id="whatsthisfor" class="sidenav-anchor">
                    <h2><i>What’s this for? A UX agency perspective</i></h2>
                    <p><i>by Mike Davison, UX Project Manager</i></p>
					<p><i>Agencies use storyboards to convey to clients potential solutions to a given problem....problems discovered during needfinding. Doing it this way allows you to tell a story and explain how a user will interact with your design, without the need to draw a single pixel or code a single line. Storyboards are generally used during the discovery phase of a project, or during pitching activities when we are trying to dazzle a client with our creative thinking!</i></p>
                </div>
				<div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p>Here are three student examples from previous years. Keep in mind that the assignment was slightly different.</p>
                    <ul>
                        <li><a href="../examples/a03example1.html">Example 1</a> - They did a great job brainstorming inspiration. The storyboards were not above and beyond, but they did a thorough inspiration board.</li>
                        <li><a href="../examples/a03example2.html">Example 2</a> - This project had a great inspiration board, and nice captions for the prototypes. The organization and formatting of the prototype section was poor, but the ideas were still good.</li>
                        <li><a href="https://ucsd.coursera.org/introhci-001/wiki/StudentExamplesAssignment2">Examples 3 &amp; 4</a> - This link has two project examples. The first shows two prototypes that are too similar, and a disjointed link between POV and storyboards. The second has a great POV, and markedly distinct prototypes that each address the POV in their own way.</li>
                    </ul>
                </div>
				<div id="faq" class="sidenav-anchor">
					<h2>Frequently Asked Questions</h2>
					<div class="row">
						<div class="col-md-4">
							<strong>How complete should our prototypes be?</strong>
						</div>
						<div class="col-md-8">
							<p> Your paper prototypes should show sketches for all important areas of your site. If X is an area of your site that's not very relevant to your task (like maybe the copyright policy of piazza isn't very important for designing the use case of this class) then you don't need to show it. Remember, this prototype is all hand-drawn (no computer tools), so it should be really fast to come up with ideas. In fact, that's precisely the point of this assignment: now is the time to do the hard conceptual work of figuring out your information architecture and functionality.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<strong>What target platform should we be designing for?</strong>
						</div>
							<div class="col-md-8">
								<p> <b><u>The final project will be a mobile web app</u></b>. You'll use web technologies to build a web app for a mobile device. </p>
							</div>
						</div>
					<div class="row">
						<div class="col-md-4">
							<strong>Does the storyboard have to be on a piece of a paper?</strong>
						</div>
						<div class="col-md-8">
							<p> You need to bring paper storyboards to studio. If you choose to use a different medium (such as a whiteboard), you will need to print out photos of the storyboards to bring to studio.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<strong>What should an inspiration board look like?</strong>
						</div>
						<div class="col-md-8">
							<p> For this assignment, the stated list of words and existing inspirations will suffice. However, in practice, inspiration boards can consist of a digital compilation of the apps/websites/articles that inspire the project, sketches and words that relate to the design idea, or a physical rendering such as <a href="http://www.minimallyminimal.com/blog/america-elect">this</a>. In this example, you can see the existing products/systems/etc. that help establish the problem space being explored. On the right are the words that relate to his design ideas. </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<strong>What level of detail should our prototypes have?</strong>
						</div>
						<div class="col-md-8">
							<p> We need to be able to get the gist of what's going on from your prototype. This means that a random person who you might test it on would "get it," and also that a developer could use the prototype to create a functional application with a defined flow. </p>
						</div>
					</div>
                </div>
				<div id='iwish' class='sidenav-anchor'>
					<h2>Common "I wish" Feedback</h2>
					<p>The most frequent way that submissions come off the rails is by addressing a surface user need rather than a deep user need. Here is some other common feedback given on this assignment. We call these statements "I wish" feedback because they are a way to express things that you wish the assignment had contained. You could think of these as common problems to avoid.</p>
					<ul>
						<li>Point of view should more clearly express the problem/opportunity.</li>
						<li>Inspirations should be more diverse.</li>
						<li>Storyboards should more clearly relate to the POV.</li>
						<li>Storyboards should show more divergent design solutions.</li>
						<li>Storyboards should be easier to follow, try adding _____.</li>
						<li>Prototype interfaces should be more different.</li>
						<li>I wish the prototype had more details.</li>
						<li>Storyboards do not address _____(user problem/need), you might want to add _____.</li>
					</ul>
                </div>
				<div id='instudio' class='sidenav-anchor'>
					<h2>In Studio</h2>
					<p>In studio this week, we will prepare for A4, Heuristic Evaluations, which will involve a great deal of scheduling and logistics. Be prepared to identify times to meet with your team and other members of the studio.</p>
				</div>
                <div id="submit" class="sidenav-anchor">
                    <h2>Team Submission</h2>
                    <p>For this assignment (and all future assignments), <b><u>ONE</u></b> person will submit the assignment for their team, listing every group member's student ID number in the assignment submission. Remember to bring your storyboards to class.</p>
                    <p>Your write-up will contain:</p>
                    <ul>
                        <li>A brief description of the activity you observed last assignment (or, if your group chose a new design direction, what activity you observed this week), how it connects to your studio theme, and what <b>point of view</b> you chose.</li>
                        <li>5-10 words that relate to your design idea. <b>(Inspiration Quality)</b></li>
                        <li>Five existing inspirations that relate to your thinking and explanations of why you chose those designs. <b>(Inspiration Quality)</b></li>
                        <li>A comprehensive set of digital photos or scans of both of your storyboards. Remember that the two storyboards should diverge, meaning that they each represent different design ideas that address your point of view.<b>(Storyboard #1, Storyboard #2)</b></li>
                        <li>A comprehensive set of digital photos or scans of both of your paper prototypes. <b>(Prototype #1, Prototype #2)</b></li>
                    </ul>
					<a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>
                <br><div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation Criteria &amp; Grading Rubric</h2>
                    <p>The rubric below contains criteria that are worth one point each and will be graded independently and in a binary fashion.</p>
                    <?php
                        $result = file_get_contents("http://www.ucsd-hci.com/api/assignment/3");
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
                    <!-- <div id ="rubric" class="ordered-list">
                    <? include "rubric.html" ?>                       
                    </div> -->
                    <br>
                    <h2>Self Assessment</h2>
                    <br>
                    <a class='btn btn-primary' href="https://docs.google.com/forms/d/1143xXrrUyGG-cX37UiZNHr7vBuQueGWVfagg-iJTBig/viewform">During studio, click here to assess your group's work as a collective unit.</a>
                    </br>
                    <a style="margin-top:10px" class='btn btn-primary' href="https://docs.google.com/forms/d/1l_qafh8NnUaRyVzXoJTezeW57qxTyoE366nlkVjF32Q/viewform"> During studio, click here to assess your own work and each of your team member's work.</a>
                </div>
            </div>
        </div>
		<br>
        <footer>
			<p>This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and the teaching staff, You can see  <a href='http://cs147.stanford.edu'>Michael's version of the course here</a>.</p>
		</footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/hci.js"></script>
  </body>
</html>
