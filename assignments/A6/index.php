<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>HCI Design: Assignment 6</title>

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
            <li><a href="http://piazza.com/ucsd/winter2016/cogs120cse170/home">Questions(Piazza forum)</a></li>
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
                    <h1>Assignment 6: Meat on the bones</h1>
                </div>

                <div id="brief" class="sidenav-anchor">
                    <h2>Brief</h2>
                    <p>Functionality functionality functionality! Continue developing your interactive prototypes in accordance with your development plan. Also, update your development plan as you discover more about what you want to prioritize, what you can expect to implement, and what you may need to mock up. The goal is for you to complete the interaction flow this week.</p>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                    <p>This week is all about - that's right - functionality. You should be spending your time fleshing out your interactive prototype. Focus on getting the flow of your interaction working. Don't worry about making it look pretty yet. Don't stall or get too caught up in the look and feel of things. Fonts, colors, and pixel-perfect layout can come later. This week, you'll need to make good progress on the interaction design.</p>
					<p> Using <a href=http://d.ucsd.edu/class/intro-hci/2015/lab/lab4>the handlebars techniques you learned in lab</a>, read data from JSON to customize the presentation of pages and deliver rich interactivity. By now you should have a good idea the kinds of data your app will utilize. This week, your app should be able to read JSON data and use it to customize templated pages. (Eventually, your app will also persistently store data.) As you learned <a href=/class/intro-hci/2015/lab/lab5>in Lab 5</a>, this means you will have a file like data.json that has data pre-stored, and your job is to retrieve that data and populate your app with it and add new objects to the data variable. You do not need to dynamically update the data.json file with new data. As an example, imagine you're developing Yelp, then you should have a list for each restaurant and each restaurant page fully rendered, but no need to track ratings or reviews.</p>
                    <p>Follow the development plan you created last week, and update it as you go. Mark tasks that have been completed and add new ones if you need to. Make sure that your next week is planned out with goals and who is responsible for each task. (If you'd like to give yourself the option of "late days", set an early deadline so your schedule has some flexibility.) Re-evaluate your stretch goals and what's feasible and what isn't. You may decide that your plan is too ambitious, or you may decide that your plan is too conservative; maneuver accordingly.</p>
                </div>
				<div id="instudio" class="sidenav-anchor">
					<h2>In Studio</h2>
                    <p>When you arrive to studio this week, your studio leader will have your design loaded on a mobile device, plugged into the shared display. A member of your studio who is not on your team will walk through your prototype and think out loud as they do so. You will receive feedback, and then discuss your development plan with your studio.</p>
				</div>

                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p>Here are some examples of development plans:<a href="https://docs.google.com/spreadsheet/ccc?key=0Ame-4omKIpLddDlvTGFqN0JqNEVXbGRGSndLc2NuTUE&usp=sharing" target="_blank"> (1) is very stylized</a>, dynamic, and mostly thorough,<a href="https://docs.google.com/spreadsheet/ccc?key=0AlCum_THvFsddGJlR1FrZ2xiSzlRdFZfUHBKcm9HUVE#gid=0" target="_blank"> (2) is fairly thorough</a>, colorful, but is missing time estimates and has only one stretch goal listed,
					<a href="https://docs.google.com/spreadsheet/ccc?key=0AkDAkl06cS84dDdoWnJKNmFPLVhNTUx4Ry1mYWZob2c&hl=en_US#gid=0" target="_blank"> (3) is a mediocre plan</a> that's mostly thorough, where most tasks are broken down into less than 1 hour chunks,
					<a href="https://docs.google.com/spreadsheet/ccc?key=0AnCm_JDaoi7ndG5fNl92YUFrWDgwdUxyVVB2azg5SVE#gid=2" target="_blank"> (4) is very thorough</a>, with time estimates and time costs, but some tasks could be more actionable,
					<a href="http://www.google.com/url?q=http%3A%2F%2Fspark-public.s3.amazonaws.com%2Fhci%2Fsource_videos%2FEvolutionOfAProjectPlan.mp4&sa=D&sntz=1&usg=AFQjCNECkSqe0VFyN4wOICycQIFhJoAslg" target="_blank"> (5) is a great video</a> of the dynamic nature of implementation plans throughout the project.</p>
					
					<p>In this assignment, we want to emphasize the user task at this stage of development. The interface should be fluid with respect to a particular task made intuitively easy to step through as a user. <a href="http://iamherefor.com/index.html" target="_blank"> Here we see a good example of an app that is fully centered on the user's task. </a> For this assignment, this team would complete functionality by capturing all of the relevant information entered into the text boxes, and updating the content of each page with that new information.</p>
					
					<p><a href="../examples/images/a07e1p1.mp4">GradeSource++</a>: This example project from last year abstracts GradeSource for you and works with the data to show you where you are in a class. </p>
                    <p><a href="../examples/images/a07e2p1.mp4">Balancr</a>: This app helps people balance their time between work and play. They have done a wonderful job making the app functional-- you can create a sign-up, add activities, and see it reflected on the pie chart.</p>
					<p>For both examples above, simply imagine that the data that undergirds the functionality of the apps are only temporarily stored in a data variable that is pre-populated with data from a .json file.</p>
                </div>
                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>The URL of the prototype (preferably on heroku) that you want us to see. Note: the URL must work at least until your assignment is graded. If it doesn't work, you'll receive no credit. <b>(Interaction Flow, Use of Data in Prototype)</b></li>
                        <li>The PDF of your development plan that you submitted last week. <b>(Goals)</b></li>
                        <li>The PDF of your updated development plan. (<i>We recommend making a Google spreadsheet and saving it as a pdf; this gives you a snapshot for comparison.</i>) <b>(Updated Development Plan)</b></li>
                        <li>A ~2-sentence description of the task you'd like us to try. This should include any needed login/password information. <b>(Supporting Info)</b></li>
                        <li>The shared Github URL for your project. <b>(Supporting Info)</b></li>
                    </ul>
                    <p>Note: since we may grade your assignment up to a few days after submission, per the honor code, we expect that the prototype URL show the state of your prototype at the time of submission. You will very likely be updating your prototype after submission, but please do so on another version.</p>
                    <a href="http://ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>

                </div>

                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th id="guiding" valign="top">Category</th>
                                    <th id="unsatisfactory" valign="top">Nope</th>
                                    <th id="minimum" valign="top">Weak</th>
                                    <th id="satisfactory" valign="top">Proficient</th>
                                    <th id="above" valign="top">Mastery</th>
                                </tr>
                                <tr>
                                    <td>Interaction Flow<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>0: No pages are connected and interactive.</td>
                                    <td>1: Few pages are connected interactive. </td>
                                    <td>3: Most pages are connected and interactive.</td>
                                    <td>4: Overall flow and navigation are complete. Pages are fleshed out and interactive.</td>
                                </tr>
                                <tr>
                                    <td>Reading data w/JSON & Handlebars (or equivalent)<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>0: No pages read JSON data with Handlebars (or equivalent).</td>
                                    <td>1: A few pages read data. OR header/footer included programmatically, as opposed to copy&paste (either sufficient). Handlebars were used only sometimes.</td>
                                    <td>2: Most pages read JSON data OR login/other rich interactivity implemented (either sufficient). Handlebars were used.</td>
                                    <td>3: The entire prototype uses Handlebars to read JSON data and deliver rich interactivity.</td>
                                </tr>
                                <tr>
                                    <td>Goals Met<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>0: No goals were met.</td>
                                    <td>1: Only a few goals or equivalent were met.</td>
                                    <td>3: Most, but not all, of the goals or equivalent were met.</td>
                                    <td>4: All goals or equivalent were met. Stretch goals need not be met.</td>
                                </tr>
                                <tr>
                                    <td>Development Plan: Quality & Updates<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>No updates to plan.</td>
                                    <td>Aspects of the plan remain are not actionable or overly vague; changes were insufficient. For example, "working on the home page" is much too vague as a line item :)<br>And/or only one member did the majority of the work.</td>
                                    <td>Plan is mostly updated, but is lacking some detail or deadlines seem unreasonable. Only two members did the majority of the work, excepting external constraints that were identified.</td>
                                    <td>Plan items are comprehensive and actionable (like "Implement allergies as a search parameter"). Plan reflects progress, new tasks, and any changes to previous tasks. All three members contributed by taking into account external constraints and thoughtfully distributing workload.</td>
                                </tr>
                                <tr>
                                    <td headers="guiding" colspan=2><br>Supporting Info<br><span style="color:lightGray;"><span style="color:lightGray;">1 point.</span></td>
                                    <td colspan=3 align=right>Github Repo URL & 2-sentence task description present.</td>
                                </tr>
                                <tr>
                                    <td headers="guiding" colspan=2><br>Outside the Box<br><span style="color:lightGray;"><span style="color:lightGray;">1 pt. Reserved for unusually impressive submissions.</span></td>
                                    <td colspan=3 align=right>Pages are complete and all functionality is in place. Weekly stretch goals are met. The team is way ahead of the curve with respect to the interactions in their application.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor' style='margin-top: 20px'>
                    <h2>Group Evaluation, Team Evaluation</h2>
                    <p>
                        <a target="_blank" class="btn btn-primary" href="https://docs.google.com/a/eng.ucsd.edu/forms/d/1LclkizllpeAHFqAUDrlAzLDekO2I9MMFK3AETUlpwLY/edit">During studio, click here to assess your group's work as a collective unit.</a>
                        </br>
                        <a target="_blank" class="btn btn-primary" style="margin-top:10px" href="https://docs.google.com/a/eng.ucsd.edu/forms/d/1vLE2OjB8j2EHR8tprweCiGPop1201OpVKP5YRERkCCQ/edit"> During studio, click here to assess your own work and each of your team member's work.</a>
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
