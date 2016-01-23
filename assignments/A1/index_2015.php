<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>Intro to HCI: Assignment 1</title>

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
          <a class="navbar-brand" href="../../index.html">Intro to HCI</a>
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
                        <h1>Assignment 1: Design Thinking</h1>
                    </div>

                    <p class="lead"><i>"How many designers does it take to replace a light bulb?"<br/>
                    Designer: "Does it have to be a light bulb?"</i></p>

                <div id="brief" class="sidenav-anchor">
                    <br><h2>Brief</h2>
                    <p>Think about some of the designs that you consider to be great innovations. Quite likely, they came about because the design team was able to see a new problem or opportunity, or reframe things in a new way. As the light bulb joke illustrates, an important strategy of successful designers is to reframe things so that... we can see things in a new light. In this first exercise, you’ll build your needfinding, brainstorming, and reframing "muscles". It’s an opportunity for you stretch your creativity and have fun as you settle back into campus to begin the quarter. Also, the steps that you go through this week -- needfinding, prototyping, evaluation -- give you a mini preview of the design process we’ll go through during the quarter. This way, during the main course project, the steps of the design process will be more familiar.
                    </p>

                    <p>In studio this Friday (and every Friday), you’ll self-assess your work with the rubric below. Read the rubric carefully before starting; it’s your guide to success. The great thing about design is that you can meet the criteria for success in lots of different ways. Not all designs are good, but lots of very different designs can all be good, and you’ll see that diversity in your studio peers’ work.
                    </p>

                    <p>Here are two important take-aways we hope you’ll glean from this first week’s design experience. First, the early stages are worth their weight in gold because it takes just as much time to implement a lousy idea as it does a great idea. It’s worth putting extra time and energy into the first few weeks; it’ll pay a lot of downstream benefits. Second, while design is a lot of work, it’s also a lot of fun. Last year, many students reported that this was their favorite class at UC San Diego, and we hope it will be for you too!
                    </p>    
                </div>

                <div id='your-mission' class='sidenav-anchor'>
                  <h2>Your Mission</h2>
                  <ul>
                    <li>Finish the gift-giving exercise that we started in class on Tuesday. Bring your <b>completed worksheet</b> and the <b>prototype</b> that you created to your studio. Messy and “bad drawing” are just fine. This is about getting ideas out there, not having a ‘pretty submission’.
                    </li>
                    <li><b>Watch the videos</b> posted underneath lecture 1 on the homepage and <b>write two comments or questions</b> that you have related to the subject matter in the videos. (That's two overall, not two per video.) Write these comments on the back of your Gift Giving handout.</li>
                    <li>Arrive at Thursday’s lab with a laptop that you have set up with these steps. (Link to Prelab)
                    </li>
                  </ul>
                </div>

                <div id="submit" class="sidenav-anchor">
                    <br><h2>Assignment Submittion</h2>
                    <ul>
                      <li>Turn in your completed worksheet and the prototype in Friday studio</li>
                      <li>Two questions about video content written on the back of worksheet</li>
                    </ul>
                    <hr>
                    <p>Note on prototypes: Prototypes should be something your partner can physically interact with or a scenario that you can take them through</p>
                    <p>If your solution is an app, your prototype should be one or two 'screens' that are drawn on paper that will help give your partner a feel. If your solution is a service or experience, you can draw 3 or 4 scenes that will help your partner simulate that experience so you can get feedback from them.</p>
                    <p>Remember <b>we're not designing a GIFT</b>, you're designing a gift giving experience</p>
                </div>
				
				<div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <ul>
                        <li>This student was detailed yet concise with their interview, and had a creative and refining iteration process: <a href="http://d.ucsd.edu/class/intro-hci/2015/assignments/examples/a01e1.pdf">Example 1</a> 
                        </li>
                    </ul>
                </div>

                <div id="evaluation" class="sidenav-anchor">
                    <br><h2>Evaluation criteria &amp; Grading rubric</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th id="guiding" valign="top">Category</th>
                                  <th id="unsatisfactory" valign="top">Nope</th>
                                  <th id="minimum" valign="top">Weak</th>
                                  <th id="satisfactory" valign="top">Proficient</th>
                                  <th id="above" valign="top">Mastery</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td headers="guiding">Interview/(Section 1-4 on worksheet)<br><i><span style="color:lightGray;">3 points</span></i></td>
                                  <td headers="unsatisfactory">No interview information written(or no sheet brought).</td>
                                  <td headers="minimum">
                                      Took notes on partner’s experience, but point of view is unconnected to interview. OR used Photoshop, computers, or spent too much time ‘neatening’.
                                    </td>
                                    <td headers="satisfactory">Took notes on partner’s experience. Point of view is connected to interview.</td>
                                  <td headers="above">Took notes on partner’s experience. Point of view is connected to interview. Messy is good :)
                                </td>
                                </tr>

                                <tr>
                                  <td headers="guiding">
                                  Ideate and Iterate (sec. 5-7)
                                  <br><i><span style="color:lightGray;">3 points</span></i></td>
                                  <td headers="unsatisfactory">No ideation or iteration content submitted (or no sheet brought).</td>
                                  <td headers="minimum">
                                  Brought sheet w/sections completed.  OR used Photoshop, computers, or spent too much time ‘neatening’.
                                  </td>
                                  <td headers="satisfactory">
                                  Sections are completed and demonstrate iterative thought based on partner’s response.
                                  </td>
                                  <td headers="above">
                                  Sections are completed and demonstrate iterative thought based on partner’s response. Messy is good :)
                                  </td>
                                </tr>

                                <tr>
                                  <td headers="guiding">
                                  Prototype (sec. 8)
                                  <br><i><span style="color:lightGray;">2 points</span></i></td>
                                  <td headers="unsatisfactory">
                                  None submitted (or no sheet brought).
                                  </td>
                                  <td headers="minimum">Brought sheet w/weak prototype.  OR used Photoshop, computers, or spent too much time ‘neatening’. </td>
                                  <td headers="satisfactory">
                                  Prototype submitted that is clearly connected to previous sections.
                                  </td>
                                  <td headers="above">
                                  Prototype submitted that is clearly connected to previous sections. 
                                  </td>
                                </tr>
                                <tr>
                                  <td headers="guiding">
                                    Reflection (sec. 9)
                                    <br><i><span style="color:lightGray;">2 points</span></i></td>
                                    <td headers="unsatisfactory">
                                    None submitted (or no sheet brought).
                                    </td>
                                    <td headers="minimum">Brought sheet w/weak solution.  OR used Photoshop, computers, or spent too much time ‘neatening’.</td>
                                    <td headers="satisfactory">
                                    Solution submitted; demonstrates deep reflection on partner’s response
                                    </td>
                                  <td headers="above">
                                  Solution submitted demonstrated deep reflection on partner’s response and insight about the design process.
                                  </td>
                                </tr>
                                <tr>
                                  <td headers="guiding">Video Questions
                                  <br><i><span style="color:lightGray;">2 points</span></i></td>
                                  <td headers="unsatisfactory">No questions submitted from video, or questions minimally related to video</td>
                                    <td colspan=2 headers="minimum">Questions reflect a basic understanding of the video. 
                                    </td>
                                    <td headers="above">
                                    Questions reflect a strong understanding of video material and critical thinking that would enrich class discussion.
                                    </td>
                                </tr>
                                    <tr>
                                      <td headers="guiding">Lab prep<br><span style="color:lightGray;"><span style="color:lightGray;">2 points.</span></td>
                                      <td>
                                      Prep not started before Thursday’s lab began.
                                      </td>
                                      <td colspan=2>
                                      Prep not completed before Thursday’s lab began.
                                      </td>
                                      <td>Prep completed before Thursday’s lab began</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor'>
                  <h3>Self Assessment</h3>
                  <a href='https://docs.google.com/a/eng.ucsd.edu/forms/d/1YsZ2W2w-ORiZFjaRUeu67YlsZMM1IbWU1HXIwKnJ0JY' class='btn btn-primary'>During studio, click here to self assess your work.</a>

                </div>

                <div id="faq" class="sidenav-anchor">
                  <br><h3>Frequently asked questions</h3>
                  <div class="row">
                    <div class="col-md-4">
                      <strong> What kind of materials should be used to prototype and test?</strong>
                    </div>
                    <div class="col-md-8">
                      <p>Your prototype should be really rapid -- marker on index cards or similar. Remember you need to be able to build it within 7 minutes! You should create an experience that your partner can engage and interact with. </p>
                    </div>
                  </div>

                <div class="row">
                    <div class="col-md-4">
                      <strong> Given that this is a HCI course, does the design solution need to include a computer or technological component?</strong>
                    </div>
                    <div class="col-md-8">
                      <p>Your redesign doesn't need to involve a 'computer'. There does need to be a <strong>design solution</strong>, however. This is your chance to warm up for the quarter and practice a complete cycle of human-centered design. All designs are fair game and the only limit is your creativity.
                      </p>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-md-4">
                      <strong>I got added to the class late and don't have a partner OR my partner dropped the class. What should I do?</strong>
                    </div>
                    <div class="col-md-8">
                      <p>Do the assignment with your roommate or just anyone you can borrow an hour of their time. Another idea is to post on Piazza and see if anyone else is lacking a partner.
                      </p>
                    </div>
                  </div>

                </div>


            </div>
        </div>

      <footer>
        <p>
          This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and the teaching staff, You can see  <a href='http://cs147.stanford.edu'>Michael's version of the course here</a>.
        </p>
      </footer>


    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/hci.js"></script>
  </body>
</html>
