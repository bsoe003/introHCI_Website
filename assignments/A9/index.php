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
                    <h1>Assignment 9: Test your prototype online</h1>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                </div>

                <div id="plan" class="sidenav-anchor">
                    <h4>Launch Rate Comparison</h4>
                    <p>We are going to be using <a href="http://woopra.com" target="_blank">Woopra</a> to run rate comparison you planned last week.</p>
                    
                    <p>Since you will be statistically analyzing the results, recruit <strong>at least 20 users</strong>. Put another way, that means that each person on your team should recruit at least 7 people each: a couple dorm-mates and a few family members and you're basically there. You can also use social media like Facebook and Twitter to recruit. You can even recruit other people in class! Make sure to launch your test several days before the deadline. How you schedule your analysis around your implementation plan is up to you. Do what's best for your app and your group. <a href=http://blog.optimizely.com/2013/04/30/71-things-to-ab-test>Here's some ideas from Optimizely.</a></p>
                </div>

                <div id="results" class="sidenav-anchor">
                    <h4>Results: Comparing Rates Online</h4>
                    <p>Collect your results from your A/B test that compares rates between conditions. You can use your A condition as the 'Expected' Value and the B condition as the 'Observed'. Present your data and the results: show the inputs to your Chi-squared analysis, your calculations, the Chi-squared result, and the p value. <a href="http://www.houseofkaizen.com/conversion-rate-optimisation/resources/calculators/split-test-significance"> This tool should help. </a> Remember that a Chi-squared test compares rates, not times. Discuss your findings: can you draw solid conclusions or are additional tests needed? What changes would you make based on these results?</p>
                    <p>Use Woopra to track the pages that users view on your app. (You do not need to use Woopra's funnel feature.)</p>
                </div>

                <div id="fitfinish" class="sidenav-anchor">
                    <h4>Fit and Finish</h4>
                    <p>For all you designers out there, get ready. It's time to make it pretty. Concentrate on completing the changes based on the results of your in-person test. Attention to detail will serve you well. Make sure the app is optimized for the mobile interface. Same drill as the other weeks, keep <strong>updating your development plan.</strong></p>
                </div>

                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>The data that you collected. Organize this information so that we can get a sense of the raw data that you gathered. Explicitly state how many participants were in each condition. What feedback (quantitative or qualitative) did you receive? We recommend organizing this information into a table or spreadsheet. <b>(Online Test Results)</b></li>

                        <li>Summary of your findings. You should present any statistical analysis that you performed, and any insights or discoveries that your test helped inform. <b>(Online Test Results)</b></li>

                        <li>List of the changes you would make (as a result of the online tests). We understand that your test may have concluded only recently, and you would have had time to only make small changes. But we would like you to think about additional features or improvements that are motivated by your results. Add these to your development plan if you have time to complete them. <b>(List of Potential Revisions)</b></li>

                        <li>The URL of the prototype version that you want us to see. Do not forget to give us login information. Note: the URL must work at least until your assignment is graded. If it doesn't work, you'll receive no credit. <b>(Fit and Finish)</b> </li>

                        <li>PDFs of your development plan from last week and updated development plan. (<i>We recommend making a Google spreadsheet and saving it as a pdf; this gives you a snapshot for comparison.</i>) <b>(Goals, Updated Development Plan)</b></li>
                    </ul>
                    <p>Note: since we may grade your assignment up to a few days after submission, per the honor code, we expect that the prototype URL show the state of your prototype at the time of submission. You will very likely be updating your prototype after submission, but please do so on another version.</p>
                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>

                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th id="guiding" valign="top">Category</th>
                                    <th colspan=5 id="unsatisfactory" valign="top">Nope</th>
                                    <th colspan=5 id="minimum" valign="top">Adequacy</th>
                                    <th colspan=5 id="satisfactory" valign="top">Proficiency</th>
                                    <th colspan=5 id="above" valign="top">Mastery</th>
                                </tr>
                                <tr>
                                    <td>Online Test Results<br /><span style="color:lightGray;">4 points</span></td>
                                    <td colspan=4>No conclusions listed.</td>
                                    <td colspan=4>Either only statistical analysis or insights are given.</td>
                                    <td colspan=4>Statistical analysis has errors. Two common errors: 1) using time as input to a CHI-squared test (CHI-squared compares rates). 2) assuming a 50% success rate as your 'expected', as opposed to using the rate in the A condition as 'expected'.</td>
                                    <td colspan=4>Statistical analysis is correct. Conclusions are trivial: they don't engage the content of the design.</td>
                                    <td colspan=4>Statistical analysis is correct, and includes a clear assessment on the strength of the data. Conclusions are clear and straightforward.</td>
                                </tr>
                                <tr>
                                    <td>List of Potential Revisions<br /><span style="color:lightGray;">4 points</span></td>
                                    <td colspan=5>No revisions listed.</td>
                                    <td colspan=5>The revisions are obvious or trivial. The major problems are not addressed by the revisions.</td>
                                    <td colspan=5>Revisions are made without much consideration to the user experience. The revisions are chosen to cater to a lower level of technical difficulty.</td>
                                    <td colspan=5>Several possible revisions are presented for different portions of the user interface. The revisions are creative and address the major problems. Changes are clearly justified and informed from the data gathered (both in person and online).</td>
                                </tr>

                                <tr>
                                    <td>Fit and Finish<br /><span style="color:lightGray;">2 points</span></td>
                                    <td colspan=6>Prototype is incomplete still has some bugs.</td>
                                    <td colspan=7>Prototype is complete, but may lack some details or polish.</td>
                                    <td colspan=7>Prototype is very polished, and ready to be presented.</td>
                                <tr>

                                </tr>
                                <tr>
                                    <td>Goals<br /><span style="color:lightGray;">3 points</span></td>
                                    <td colspan=5>No goals were met.</td>
                                    <td colspan=5>Only a few goals or equivalent were met.</td>
                                    <td colspan=5>Most, but not all, of the goals or equivalent were met.</td>
                                    <td colspan=5>All goals or equivalent were met. Stretch goals need not be met.</td>
                                </tr>
                                <tr>
                                    <td>Updated Development Plan<br /><span style="color:lightGray;">2 points</span></td>
                                    <td colspan=6>No updates or only minor changes to plan. </td>
                                    <td colspan=7>Plan is mostly updated, but is lacking some detail or deadlines seem unreasonable. </td>
                                    <td colspan=7>Plan is detailed and reflect progress, new tasks, and any changes to previous tasks.</td>
                                </tr>
                                <tr>
                                    <td headers="guiding" colspan=2><br>Outside the Box<br><span style="color:lightGray;"><span style="color:lightGray;">1 point. Up to 5% of submissions.</span></td>
                                    <td colspan=19 align=right>Not only are several possible revisions presented for different portions of the user interface, your revisions are extremely creative and approaches the problems in your interface in an effective and innovative way. An incredible amount of thought and consideration has gone into solving the underlying problems.</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor' style='margin-top: 20px'>
                    <h2>Group Evaluation, Team Evaluation</h2>
                    <p>
                        <a class="btn btn-primary" target="_blank" href="https://docs.google.com/a/eng.ucsd.edu/forms/d/1UDEDD-VkJaNlSkKz5q5htfU6_W1chiVzNvjt_a-qib8">During studio, click here to assess your group's work as a collective unit.</a></br>
                        <a class="btn btn-primary" target="_blank" style="margin-top: 20px" href="https://docs.google.com/a/eng.ucsd.edu/forms/d/1ixO49-zWN-zjxI_vp42_LVifxzv5PYrpZfMmTAZuLJo"> During studio, click here to assess your own work and each of your team member's work.</a>
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
