<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>A7&thinsp;&middot;&thinsp;HCI Design</title>

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
                    <h1>Assignment 7: Ready for testing</h1>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Brief</h2>
                    <p>Crunch time! Your interactive prototypes have to be <b>ready for user testing</b> by the end of this week.</p>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                    <p>By the end of this week, your interactive prototypes should be fully functional. Your app should write JSON data as well as read it. (The JSON data will only be persistent until the node server restarts.) Your app should have several pages where users can submit and view data stored in JSON. Remember, we are not at the "making it pretty" phase yet, so don't procrastinate by playing with Photoshop. If you planned it out right and you have been doing your work, you should be in good shape. If not, it's time to step it up. You will get much less out of user testing if you are still struggling with bugs and a half finished interface. Now is also the time to make sure your app fits into a mobile form factor, <a href = "https://developer.chrome.com/devtools/docs/device-mode" target="_blank"> use Google device mode to help with this </a> or your own devices.</p>

                    <p>Keep on keeping on. Follow the development plan you created last week, and update it as you go. Mark tasks that have been completed and add new ones if you need to. Make sure that your next week is planned out with goals and who is responsible for each task. (If you'd like to give yourself the option of "late days", set an early deadline so your schedule has some flexibility.) Re-evaluate your stretch goals and what's feasible and what isn't. You may decide that your plan is too ambitious, or you may decide that your plan is too conservative; maneuver accordingly.</p>
                </div>
				
				<div id="submit" class="sidenav-anchor">
                    <h2>In Studio</h2>
					<p>In studio, to follow up this assignment, you will receive feedback in the form of a brief heuristic evaluation from another member of your studio directly. Your team will pool that feedback and update your implementation plan accordingly.</p>
				</div>
                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p>Here are some examples of development plans:<a href="https://docs.google.com/spreadsheet/ccc?key=0Ame-4omKIpLddDlvTGFqN0JqNEVXbGRGSndLc2NuTUE&usp=sharing" target="_blank"> (1) is very stylized</a>, dynamic, and mostly thorough,<a href="https://docs.google.com/spreadsheet/ccc?key=0AlCum_THvFsddGJlR1FrZ2xiSzlRdFZfUHBKcm9HUVE#gid=0" target="_blank"> (2) is fairly thorough</a>, colorful, but is missing time estimates and has only one stretch goal listed,
					<a href="https://docs.google.com/spreadsheet/ccc?key=0AkDAkl06cS84dDdoWnJKNmFPLVhNTUx4Ry1mYWZob2c&hl=en_US#gid=0" target="_blank"> (3) is a mediocre plan</a> that's mostly thorough, where most tasks are broken down into less than 1 hour chunks,
					<a href="https://docs.google.com/spreadsheet/ccc?key=0AnCm_JDaoi7ndG5fNl92YUFrWDgwdUxyVVB2azg5SVE#gid=2" target="_blank"> (4) is very thorough</a>, with time estimates and time costs, but some tasks could be more actionable,
					<a href="http://www.google.com/url?q=http%3A%2F%2Fspark-public.s3.amazonaws.com%2Fhci%2Fsource_videos%2FEvolutionOfAProjectPlan.mp4&sa=D&sntz=1&usg=AFQjCNECkSqe0VFyN4wOICycQIFhJoAslg" target="_blank"> (5) is a great video</a> of the dynamic nature of implementation plans throughout the project.</p>

                    <p><a href="../examples/images/a07e1p1.mp4">GradeSource++</a>: This example project from last year abstracts GradeSource for you and works with the data to show you where you are in a class. </p>
                    <p><a href="../examples/images/a07e2p1.mp4">Balancr</a>: This app helps people balance their time between work and play. They have done a wonderful job making the app functional-- you can create a sign-up, add activities, and see it reflected on the pie chart.</p>
					<p>For both examples above, the data that undergirds the functionality of the apps are pre-populated and updated from JSON. For instance, login information should be stored as JSON. You should have a pre-canned user that is persistent, and the ability for creating a new user whose credentials will be stored in JSON for the duration of the session. <a href="http://d.ucsd.edu/class/intro-hci/2015/lab/lab6/index.html" target="_blank"> Look to Lab 6 for the necessary machinery to implement this. </a></p>

                </div>

                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>The URL of the prototype version that you want us to see. Note: the URL must work at least until your assignment is graded. If it doesn't work, you'll receive no credit. Also, please let us know which mobile platform you tested it for: Andoid, iOS or mobile emulator on chrome or some other browser <b>(Functionality, Data/Templates, Mobile Design)</b></li>
                        <li>The shared Github URL for your project, JSON filename, template-using filename.<b>(Data & Templates)</b><br></li>
                        (Note: Templates were taught in Lab 4, slides 37-38, e.g: {{#each projects}}. We don't require using partials with handlebars right now (If you don't know what it means, it's all right! ))
                        <li>The PDF of your development plan that you submitted last week. <b>(Goals)</b></li>
                        <li>The PDF of your updated development plan. (<i>We recommend making a Google spreadsheet and saving it as a pdf; this gives you a snapshot for comparison.</i>) <b>(Updated Development Plan)</b></li>
                        <li>2-3 high level sentences outlining the task that you will have users do next week. This should include any needed login/password information. As an example, for an app concerning office hours: Make an appointment with a professor and mark it public so that other people can join. Then cancel this appointment and make a new one. You should not tell us what to click; tell us the task to accomplish.<b>(Task description)</b></li>
                    </ul>
                    <p>Note: since we may grade your assignment up to a few days after submission, per the honor code, we expect that the prototype URL show the state of your prototype at the time of submission. You will very likely be updating your prototype after submission, but please do so on another version.</p>
                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>
                <br>
                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <p>The rubric below contains criteria that are worth one point each and will be graded independently and in a binary fashion.</p>
                    <?php
                        $result = file_get_contents("http://www.ucsd-hci.com/api/assignment/7");
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

                <div id='self-assessment' class='sidenav-anchor' style='margin-top: 20px'>
                    <h2>Group Evaluation, Team Evaluation</h2>
                    <p>
                        <a target="_blank" class="btn btn-primary" href="https://docs.google.com/forms/d/1fHVNKvRHpM-lhLDc9hUeOqcmd72t7gsqoQywcRoI9UE/">During studio, click here to assess your group's work as a collective unit.</a>
                        </br>
                        <a target="_blank" class="btn btn-primary" style="margin-top:10px" href="https://docs.google.com/forms/d/1zhp4aQdu3FOqe9PnoW_gO4rrKunUBLXe1Fzo3BkLuDM/"> During studio, click here to assess your own work and each of your team member's work.</a>
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
