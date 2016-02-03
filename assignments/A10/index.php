<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>HCI Design&thinsp;&middot;&thinsp;A10&thinsp;&middot;&thinsp;Show&there4;&&thinsp;Tell</title>

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
                    <h1>Assignment 10: Show & Tell</h1>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                    <h4>Your team will</h4>
                    <ul>
                        <li>give a 30 second elevator pitch of your app to the audience and jurors (with one slide displayed behind you)</li>
                        <li>discuss and demonstrate your app in the subsequent poster session</li>
                    </ul>
                    <h4>Pitch: Share problem & insight w/ everyone</h4>
                    <p>First, decide what features of your prototype, process, and research you want to communicate. What is the unique <i>point of view</i> that your design expresses? This is not a marketing spiel. It's about communicating a conceptual insight: what is your clear and novel value proposition? Do users know what they're there for, what they can do, and why your design hits a user need better that existing alternatives?</p>
                    <p>Consider the two visual deliverables you are creating, the slide and your poster, and how their content should differ. Your poster (and demo) should convey your design decisions, iterations, and what you learned from users. Take the core concepts and communicate them rather than explaining every detail. Your pitch should boil your work down to its essence. The slide is a high-level look to entice people to come and learn about your project, and it should show a screen (or two) of the user interface that you worked so hard to create.</p>
                    <p>Prepare for your slide and pitch by thinking about how you want to introduce your prototype for the first time. You have thirty seconds, and most of the audience has never seen your application before. How can you provide a high-level understanding of what your application does, or what needs it addresses? Find the "hook" that will interest people and persuade them to find your poster later on. Imagine you are trying to impress a new potential investor on a happenstance elevator ride. We recommend scripting your presentation and practicing it many times until it is smooth. We will have a timer running, and any presentation that goes over 30 seconds will be cut off.</p>
                    <p>The show opens with your pitches to give you a chance to share your work with all your fellow students, staff, and visitors. Make sure to share your key design insight.</p>
					<p><a class="btn btn-primary" href="http://web.stanford.edu/group/eweek/2010/media/Presentation_Design_handout.pdf">Presentation Design Handout</a></p>
                    <h4>Poster & Demo</h4>
                    <p>How you are going to explain your prototype to people? Will you hand your mobile Web application to visitors to try, or will you walk them through a demo? Why did you make that decision? What are you going to say to them? What part of your design do you want to emphasize? Keep in mind that attendees don't have all the background and insight into your application. Present them with the user need first, show your solution, and explain why your work is unique. Your poster should stand on its own without explanation. There will be many people there and you will not be able to engage every single person who will look at your poster.</p>
                    <p>Finally, prepare a 1-minute demo of your prototype. Keep it short, while showing off all the features of your application. When jurors and visitors come to your poster, your quick demo should inspire them to pick up the phone and continue to play around with your app. It is important to have a demo rehearsed. There will be many people there and it is important to come across as prepared and knowledgeable to your visitors.</p>
                    <p>Each poster will be visited by two critics (staff and/or jurors).</p>
                    <p>Your poster will be kept by the staff for archival and display purposes. </p>
                    
                </div>
				<div id="examples" class="sidenav-anchor">
                    <h4>In Studio</h4>
                    <p>Studio attendance is important this week, as you will be giving your rehearsed demo to your studio and studio leader, and you will be evaluated based on this.</p>
                </div>
				<div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p><a href="http://d.ucsd.edu/class/intro-hci/2014/assignments/examples/a10examples.html" target="_blank">Here are several student examples of slides and posters from previous years. </a> These are electronic versions, but yours will be on butcher paper. Be sure to make it clear what your app actually does in your poster and demo.</p>
                </div>
				
                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>Fill out the Final App form (One per group): <a href="http://goo.gl/forms/Lf07KYIGGA">http://goo.gl/forms/Lf07KYIGGA</a> </li>
                        <li>A URL to your final functional prototype.</li>
                        <li>A zipped file of your latest functional code (for archival/educational purposes).</li>
                        <li>Your Slide: 1 JPG/PNG file, 1024x768 showing your interface. No audio or animation. 30 seconds only. After 30 seconds, it will automatically advance to the next group's slide.</li>
                        <li>A photo of your poster. Posters will be hung on the wall. Your poster will be 24" wide and 30" high, in portrait orientation. We suggest using the butcher paper we gave you in studio. People will view your poster from both far away and up close. If you show photos, make sure everything is visible and legible.</li>
                    </ul>
                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit a zipped file here including everything listed above</a>
                </div>
                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <!--<p>The rubric below contains criteria that are worth one point each and will be graded independently and in a binary fashion.</p>
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
                    ?>-->
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th id="guiding" valign="top">Category</th>
                                    <th id="unsatisfactory" valign="top">Nope</th>
                                    <th id="minimum" valign="top">Adequacy</th>
                                    <th id="satisfactory" valign="top">Proficiency</th>
                                    <th id="above" valign="top">Mastery</th>
                                </tr>
                                <tr>
                                    <td>Pitch<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>Presentation is unplanned and confusing.</td>
                                    <td>Presentation sufficient to convey project concept.</td>
                                    <td>Presentation had a good flow, was memorable and creative. People wanted to visit your poster</td>
                                    <td>Presentation was very well planned and had unique and creative elements that made it stand out. The 30 seconds was memorable and the time carefully utilized. People clamored to visit your poster.</td>
                                </tr>
                                <tr>
                                    <td>Poster<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>No poster created.</td>
                                    <td>Poster is poorly made and sparsely communicates the basics of the application. The poster requires the team to be there to explain the details of the application.</td>
                                    <td>Poster clearly communicates the key points of the application and the design process that led there. The poster can stand on it's own, but the visual layout and content do not sufficiently convey the point of view.</td>
                                    <td>Poster creatively communicates the design process, the design goal, and conveys the point of view. The poster stands on its own and there is no filler content on the poster.</td>
                                </tr>
                                <tr>
                                    <td>Demo<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>The demo wasn't shown to the TA or the demo hasn't been planned out or rehearsed. It is a total mess and doesn't present any useful information.</td>
                                    <td>The demo has been planned out, but not rehearsed at all. The demo shows one of the following items: main point of the app, creative view point, and a compelling scenario.</td>
                                    <td>The demo has been planned out, but is not well rehearsed. The demo shows two of the following items: main point of the app, creative view point, and a compelling scenario.</td>

                                    <td>The demo has been clearly rehearsed and carefully planned out. The TA can immediately answer the following questions after your demo: What is the problem your app solves? Does your app take a creative point of view? Do you show a compelling scenario? Is your app different/better than other ways people could solve the same problem?</td>
                                </tr>
                                <tr>
                                    <td>Visual Design<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>Prototype not submitted.</td>
                                    <td>Prototype exists but has a few lingering bugs. Interface appears rough. Evolution of the application throughout the quarter is minimal.</td>
                                    <td>Prototype functions smoothly, but may still have an "unfinished" feel. Clear progress has been made throughout the quarter to improve the interface.</td>
                                    <td>Prototype is high quality and simulates the experience of a fully-formed application. The user experience is smooth and realistic. Significant progress has been throughout the quarter to improve the user experience and help the user accomplish the task at hand.</td>
                                </tr>
                                <tr>
                                    <td>User Need<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>The Pitch/Poster/<wbr>Demo don't clearly articulate a user need.</td>
                                    <td>While the team articulates <i>a</i> user need, it isn't that compelling. It may be a gadget doesn't fill a <i></i>real user need.</td>
                                    <td>The pitch, demo, and poster clearly articulate a real user need, but the design doesn't fully address that need.</td>
                                    <td>The pitch, demo, and poster clearly articulate a real user need, and the design elegantly addresses that need.</td>
                                </tr>
                                <tr>
                                    <td>Point of View<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>Unclear from the Pitch/Poster/Demo what the point of view is.</td>
                                    <td>Pitch/Poster/Demo have a point of view, but it's run-of-the mill. It's not clear what's unique about this prototype.</td>
                                    <td>The prototype has a clear point of view, but it doesn't quite line up with a user need or fill a hole unmet by similar applications.</td>
                                    <td>The pitch, poster, and demo conveyed a clear and unique point of view. The point of view clearly conveys how the design differs from prior work.</td>
                                </tr>
								<!--
								<tr>
                                    <td>Database Extra Credit<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>No attempt at persistent database.</td>
                                    <td>Clear attempt at persistent database.</td>
									<td>Implemented persistent database, but not completely integrated in app.</td>
                                    <td>Fully integrated persistent database.</td>
                                </tr>
								/.nav-collapse -->
                                <tr>
                                    <td headers="guiding" valign=top colspan=2><a href=../../logistics.html>Out of the Box</a><span style="color:lightGray;"><span style="color:lightGray;">2 pts</span></td>
                                    <td colspan=3 align=right>The pitch memorably and creatively conveyed a user need and value proposition. The poster and demo clearly showed how the ptototype achieves that user need. The idea has a unique point of view.</td></tr>
                            </tbody>
                        </table>
                    </div>
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
