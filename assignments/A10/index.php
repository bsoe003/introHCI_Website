<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>A10&thinsp;&middot;&thinsp;HCI Design</title>

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
                    <h1>Assignment 10: Show & Tell</h1>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                    <h4>Your team will</h4>
                    <ul>
                        <li>prepare a 30 second elevator pitch of your app for the audience and jurors</li>
                        <li>create a slide that will be displayed as a visual aid alongside your pitch</li>
                        <li>prepare a 1 minute walkthrough of your app</li>
                        <li>discuss and demonstrate your app in the subsequent poster session</li>
                    </ul>
                    <h4>Pitch & Slide: Share problem & insight w/ everyone</h4>
                    <p>First, decide what features of your prototype, process, and research you want to communicate. What is the unique <i>point of view</i> that your design expresses in relation to your studio theme? This is not a marketing spiel. It's about communicating a conceptual insight: what is your clear and novel value proposition? Do users know what they're there for, what they can do, and why your design hits a user need better that existing alternatives? The pitch should boil your work down to its essence.</p>
                    <p>Next, create a visual aid for your pitch in the form of a single slide image (1024x768 JPG or PNG). The slide should include your app name as well as a high-level overview of the app. It should also include 1-2 screens of the user interface in order to communicate the main goals of the app as well as entice users to come and learn about your project. Refrain from using too many words or adding too much detail, as this will clutter your slide. The slide should not contain any audio or animation.</p>
                    <p>Prepare for your slide and pitch by thinking about how you want to introduce your prototype for the first time. You have thirty seconds, and most of the audience has never seen your application before. How can you provide a high-level understanding of what your application does, or what needs it addresses? Find the "hook" that will interest people and persuade them to find your poster later on. Imagine you are trying to impress a new potential investor on a happenstance elevator ride. What important concepts and points of the app would you explain to capture the investor's interest? We recommend scripting your presentation and practicing it many times until it is smooth. We will have a timer running, and any presentation that goes over 30 seconds will be cut off.</p>
                    <p>The show opens with your pitches to give you a chance to share your work with all your fellow students, staff, and visitors. Make sure to share your key design insight.</p>
                    <p><a class="btn btn-primary" href="http://web.stanford.edu/group/eweek/2010/media/Presentation_Design_handout.pdf">Presentation Design Handout</a></p>

                    <h4>Poster: Demonstrating your design process</h4>
                    <p>You will also be creating another visual deliverable in the form of a poster. The slide and the poster differ in content in that the slide aims to convey the main idea of your app while the poster illustrates your design process. Your poster should convey your design decisions, iterations, and what you learned from users. It should highlight the features that make your app's solution to a user problem unique. Take the core concepts and communicate them rather than explaining every detail.</p>
                    <p>Some things to think about for your poster: How are you going to explain your prototype to people? Will you hand your mobile Web application to visitors to try, or will you walk them through a demo? Why did you make that decision? What are you going to say to them? What part of your design do you want to emphasize? Keep in mind that attendees don't have all the background and insight into your application. Present them with the user need first, show your solution, and explain why your work is unique. Your poster should stand on its own without explanation. If you show photos, make sure everything is visible and legible. There will be many people there and you will not be able to engage every single person who will look at your poster.</p>
                    <p>The poster dimensions should be 24" wide, 30" high (portrait orientation). Butcher paper will be provided for you to make your poster.</p>
                    <p>Each poster will be visited by three critics (staff and/or jurors). After the presentation, your poster will be kept by the staff for archival and display purposes. </p>

                    <h4>Walkthrough</h4>
                    <p>Finally, prepare a 1-minute walkthrough of your prototype. Keep it short, while showing off all the features of your application. You will present your walkthrough to a TA who will video record you for 1-minute during the final presentations. This will also be good practice for when jurors visit your poster and app. Your quick walkthrough should inspire jurors to pick up the phone and continue to play around with your app. It is important to have a walkthrough rehearsed. There will be many people there and it is important to come across as prepared and knowledgeable to your visitors.</p>

                </div>
        <div id="examples" class="sidenav-anchor">
                    <h4>In Studio</h4>
                    <p>Studio attendance is important this week, as you will be giving your rehearsed walkthrough to your studio and studio leader, and you will be evaluated based on this.</p>
                </div>
        <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p><a href="http://d.ucsd.edu/class/intro-hci/2014/assignments/examples/a10examples.html" target="_blank">Here are several student examples of slides and posters from previous years. </a> These are electronic versions, but we will be providing butcher paper for the poster. Be sure to make it clear what your app actually does in your poster and walkthrough.</p>
                </div>

                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>A URL to your final functional prototype and a URL to your GitHub repository.</li>
                        <li>A zipped file of your latest functional code (for archival/educational purposes).</li>
                        <li>Your Pitch: The text to your pitch that will clearly take ~30 seconds to deliver.</li>
                        <li>Your Slide: 1 JPG/PNG file, 1024x768 showing your interface. No audio or animation.</li>
                        <li>A photo of your poster. Your poster will be 24" wide and 30" high, in portrait orientation. We suggest using the butcher paper we gave you in studio. People will view your poster from both far away and up close.</li>
                    </ul>
                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit a zipped file here including everything listed above</a>
                </div>
                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <?php
                        $result = file_get_contents("http://www.ucsd-hci.com/api/assignment/10");
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
                    <h2>Evaluations</h2>
                    <p>

                        <a href="https://docs.google.com/forms/d/1kzQA0U5W9EX7yyBTLnVokRvGWHFJPZAtlle9u6PQ9Uk/viewform"> During studio, click here to evaluate the Intro HCI Class.</a></br>
            <a href="https://ucsdsocialsciences.qualtrics.com/jfe/form/SV_3wLDEP7UfTzVACV"> During studio, click here to evaluate the course using the cog sci form (even if you are not a cog sci student).</a></br>
            <a href="https://docs.google.com/a/eng.ucsd.edu/forms/d/1dxBR4jzn4eKtpiO1gD2FXqMYPGhmcWhE9wTioroEzpQ/">During studio, click here to assess your group's work as a collective unit.</a></br>
                        <a href= "https://docs.google.com/a/eng.ucsd.edu/forms/d/1Rfyp9R0gjwyJFtRyVJVuJrAxHrNbs7ro1WZRCQNnIlY/"> During studio, click here to assess your own work and each of your team member's work.</a></br>
            <a href="https://docs.google.com/forms/d/1XaXeWkwGN5NcIz6lP6MqRrCHvwgmjYbSduNt1-qensI/viewform"> During studio, click here to give your views about learning.</a></br>
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
