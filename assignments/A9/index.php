<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>A9&thinsp;&middot;&thinsp;HCI Design</title>

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
                    <h1>Assignment 9: Results!</h1>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                </div>

                <div id="plan" class="sidenav-anchor">
                    <h4>Launch A/B Test</h4>
                    <p>We are going to be using <a href="http://analytics.google.com/analytics/" target="_blank">Google Analytics</a> to run rate comparison you planned last week.</p>

                    <p>Since you will be statistically analyzing the results, recruit <strong>at least 20 users</strong>. Put another way, that means that each person on your team should recruit at least 7 people each: a couple dorm-mates and a few family members and you're basically there. You can also use social media like Facebook and Twitter to recruit. You can even recruit other people in class! Make sure to launch your test several days before the deadline. How you schedule your analysis around your implementation plan is up to you. Do what's best for your app and your group. <a href=http://blog.optimizely.com/2013/04/30/71-things-to-ab-test>Here's some ideas from Optimizely.</a></p>
                </div>

                <div id="results" class="sidenav-anchor">
                    <h4>Results: Comparing Rates Online</h4>
                    <p>Collect your results from your A/B test which should be comparing the number of users who, for instance, either clicked through a navigational funnel or didn't, viewed a particular page or didn't, or pressed a button or didn't, in both your A and B conditions. Present your data and the results: show the inputs to your chi-squared test, your calculations, the resulting chi-squared value, and the p value. Tables of both your observed and expected values are the best way to visualize your data and calculations. <a href="http://www.houseofkaizen.com/conversion-rate-optimisation/resources/calculators/split-test-significance"> This tool</a> is a helpful resource for calculating the chi-square statistic (note that it corrects for small sample sizes). However, you <i>must</i> show your work for your calculations. <a href=https://www.coursera.org/learn/design-principles/lecture/tOvhD>Watch this video to see how it's done.</a> Remember that the chi-squared test compares numbers of users, not times. If you find yourself using a different measure, e.g. time spent on a page, then find the appropriate statistical test to show your calculations and interpret its results. The TA's will not help with anything other than the chi-squared test, so do so at your own risk.</p>
                    
                    Next, discuss your findings: can you draw solid conclusions or are additional experiments needed? What changes would you make based on these results? What other things would you test in the future?</p>
                    
                </div>

                <div id="fitfinish" class="sidenav-anchor">
                    <h4>Fit and Finish</h4>
                    <p>For all you designers out there, get ready. It's time to make it pretty. Concentrate on completing the changes based on the results of your in-person test. Attention to detail will serve you well. Make sure the app is optimized for the mobile interface. Same drill as the other weeks, keep <strong>updating your development plan.</strong></p>
                    <p>Also this is the time work on branding your application. Create a finalized app name that encompasses and brands the function of your app clear, and submit it with your PDF.</p>
                </div>

                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>

                        <li>The data that you collected. Organize this information so that we can get a sense of the raw data that you gathered. Explicitly state how many participants were in each condition. What feedback (quantitative or qualitative) did you receive? We recommend organizing this information into a table or spreadsheet. <b>(Online Test Results)</b></li>

                        <li>Summary of your findings. You should present any statistical analysis that you performed, and any insights or discoveries that your test helped inform. <b>(Online Test Results)</b></li>

                        <li>List of the changes you would make (as a result of the online tests). We understand that your test may have concluded only recently, and you would have had time to only make small changes. But we would like you to think about additional features or improvements that are motivated by your results. Add these to your development plan if you have time to complete them. <b>(List of Potential Revisions)</b></li>

                        <li>Your final app name. This is the name that will be used in your final presentation. <b>(Fit and Finish)</b> </li>

                        <li>The URL of the prototype version that you want us to see. Do not forget to give us login information. Note: the URL must work at least until your assignment is graded. If it doesn't work, you'll receive no credit. <b>(Fit and Finish)</b> </li>

                        <li>PDFs of your development plan from last week and updated development plan. (<i>We recommend making a Google spreadsheet and saving it as a pdf; this gives you a snapshot for comparison.</i>) <b>(Goals, Updated Development Plan)</b></li>
                    </ul>
                    <p>Note: since we may grade your assignment up to a few days after submission, per the honor code, we expect that the prototype URL show the state of your prototype at the time of submission. You will very likely be updating your prototype after submission, but please do so on another version.</p>
                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>

                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <p>The rubric below contains criteria that are worth one point each and will be graded independently and in a binary fashion.</p>
                    <?php
                        $result = file_get_contents("http://www.ucsd-hci.com/api/assignment/9");
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
                        <a class="btn btn-primary" target="_blank" href="https://docs.google.com/forms/d/1N3Zkc1ggX3lJc7hJTto-jIEfw2JLHACuGy7PiiLBcNE/viewform">During studio, click here to assess your group's work as a collective unit.</a></br>
                        <a class="btn btn-primary" target="_blank" style="margin-top: 20px" href="https://docs.google.com/forms/d/1YEHywUFrJDPbxXCSzoA8kYS3GB_Bq5oyi9Re2Rmr2YA/viewform"> During studio, click here to assess your own work and each of your team member's work.</a>
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
