<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Human-Computer Interaction Design">
    <title>HCI Design</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/hci.css" rel="stylesheet">
    <style type="text/css">
    .scrolloff {
        pointer-events: none;
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Fixed navbar -->
    <? include "nav.php" ?>
    <!-- this is a comment in HTML -->
    <div class="container">
        <div class="jumbotron" id='home'>
            <div class='row'>
                <div class='col-md-8'>
                    <h1>Human-Computer Interaction Design</h1>
                    <p>COGS120/CSE170 Scott Klemmer &middot; Winter 2016 UCSD</p>
                </div>
                <div class='col-md-4' style="font-size: 14px; background-color: white; padding: 20px 5px;">
                    <h5 style='text-align: center'>Announcements</h5>
                    <ul>
                        <li>
                            Check out <a href="http://piazza.com/ucsd/winter2016/cogs120cse170/home">Piazza</a> for current announcements.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="syllabus">
            <p class="lead">In this course, you will learn how to design technologies that bring people joy, rather than frustration. To do this, you'll learn techniques for rapidly prototyping and evaluating multiple interface alternatives — and why rapid prototyping and comparative evaluation are essential to excellent interaction design. You'll learn how to conduct fieldwork with people to help generate design ideas. You'll learn how to make paper prototypes and low-fidelity mock-ups that are interactive — and how to use these designs to get feedback from teammates, clients, and users. You'll learn principles of visual design, perception and cognition so that you can effectively organize and present information with your interfaces. And you'll learn how to perform and analyze controlled experiments online.</p>
            <p class="lead">Through a series of weekly assignments, you will complete a quarter-long project in teams of three. Each week, in small design studios, you present and discuss work with peers. The setting for the course is mobile web applications. The constraints of this small form factor set the stage for this challenge.</p>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <strong>Weekly schedule</strong>
                    <p>Lecture</p>
                    <span class="text-muted">
            Tuesdays 11:00am-12:20pm<br>
            CICC 101 (Copley International Conference Center)
          </span>
                </div>
                <div class="col-md-4">
                    <br>
                    <p>Labs</p>
                    <span class="text-muted">
            Thursdays 11:00am-12:20pm<br>
            CICC 101 (Copley International Conference Center)
          </span>
                </div>
                <div class="col-md-4">
                    <br>
                    <p>Studio Section</p>
                    <span class="text-muted">
            Fridays 8:50-10:00am, 10:10am-11:20am, 11:30am-12:40pm, 2:50pm-14:00pm, or 14:10pm-15:20pm<br>
            Atkinson Hall 5204, CogSci 272, HSS 1346, or Mande B-146
          </span>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class='col-md-4'>
                    <strong>Atkinson Hall location</strong>
                    <div id="atkinson_map">
                        <iframe id="atkiinson_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675.3110288831713!2d-117.2348361663194!3d32.88171777431913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc06c3ab289115%3A0x729ac9ce585ae8ea!2sAtkinson+Hall%2C+University+of+California+San+Diego%2C+Warren+College%2C+9500+Gilman+Dr%2C+La+Jolla%2C+CA+92093!5e0!3m2!1sen!2sus!4v1420763843399" width="380" height="300" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
                <div class='col-md-4'>
                    <strong>CogSci building location</strong>
                    <div id="cogsci_map">
                        <iframe id="cogsci_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675.3279750117358!2d-117.2386609963746!3d32.88082127449335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x298f7274570a6f7a!2sCognitive+Science+Building!5e0!3m2!1sen!2sus!4v1420763765089" width="380" height="300" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <strong>HSS building location</strong>
                    <div id="hss_map">
                        <iframe id="hss_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.747883848692!2d-117.243862184926!3d32.87838938094143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc06c72c4e35a7%3A0xcf03aa9bc2d53eb1!2sHumanities+and+Social+Sciences+Building!5e0!3m2!1sen!2sus!4v1452390831782" width="380" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <hr>
            <div class='row'>
                <h4>&nbsp;&nbsp;&nbsp;Office Hours</h4>
                <div class="col-md-3">
                    <strong> Monday OH (in Atkinson 5204)</strong>
                    <ul class="list-unstyled">
                        <li>
                            Jesse Qin<span class="text-muted"> 4:00pm-6:00pm</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <strong> Tuesday OH (in Atkinson 5204)</strong>
                    <ul class="list-unstyled">
                        <li>
                            Yasmine Kotturi<span class="text-muted"> 9:45am-10:45am</span>
                        </li>
                        <li>
                            Adam Rule<span class="text-muted"> 1:00pm-2:00pm</span>
                        </li>
                        <li>
                            Tricia Ngoon<span class="text-muted"> 3:00pm-4:00pm</span>
                        </li>
                        <li>
                            Bonnie Chinh<span class="text-muted"> 4:00pm-5:00pm</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <strong> Wednesday OH (in Atkinson 5204)</strong>
                    <ul class="list-unstyled">
                        <li>
                            Jasmine Roberts<span class="text-muted"> 1:00pm-3:00pm</span>
                        </li>
                        <li>
                            Kyung yul Lim<span class="text-muted"> 5:00pm-6:00pm</span>
                        </li>
                    </ul>
                </div>
                <div class='col-md-3'>
                    <strong> Thursday OH (in Atkinson 5204)</strong>
                    <ul class='list-unstyled'>
                        <li><a href="http://d.ucsd.edu/srk/">Prof. Scott Klemmer</a> <span class="text-muted"> 12:30pm-1:30pm</span></li>
                        <li>Robert Gougelet<span class="text-muted"> 1:30pm-2:30pm</li>
                        <li>Nida Hussain<span class="text-muted"> 3:00pm-4:00pm</span></li>
                        <li>Jesse Qin<span class="text-muted"> 5:00pm-6:00pm</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div id="calendar" class="anchor">
            <h3>Calendar <span style='font-size:15px; '>&#8226; Follow the lab/assignment link to submit work</span> <span style='font-size:15px;'> &#8226; Bring a fully-charged laptop to each class! </span></h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Week</td>
                            <th>Lecture</td>
                                <th>Lab</td>
                                    <th>Assignment</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6>1</h6></td>
                        <td>
                            <h6>January 5</h6>
                            <p>Introduction</p>
                            <ul>
                                <li>
                                    <a href="lectures/IntroHCI-2016-Week1.pdf">slides</a>
                                </li>
                                <li>
                                    <a href="assignments/FreshmanExperience.pdf" target="_blank">Design thinking handout</a>
                                </li>
                                <li>Participant Observation <a href="https://ucsd.coursera.org/introhci-001/lecture/20">video</a></li>
                                <li>Interviewing <a href="https://ucsd.coursera.org/introhci-001/lecture/1">video</a></li>
                                <li>Additional Needfinding Strategies <a href="https://ucsd.coursera.org/introhci-001/lecture/14">Video</a></li>
                            </ul>
                        </td>
                        <td>
                            <h6>January 7</h6>
                            <p>
                                <a href="lab/lab1/">Source control</a>
                            </p>
                        </td>
                        <td>
                            <h6>Due Thursday, 1/7, 11:59&thinsp;pm for online submission</h6>
                            <h6>Turn in Worksheets, prototypes, and questions at studio.</h6>
                            <p><a href="./assignments/A1">A1: Design thinking</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>2</h6></td>
                        <td>
                            <h6>January 12</h6>
                            <p>Needfinding</p>
                            <ul>
                                <li>
                                    <a href="lectures/IntroHCI-2016-Week2.pdf">slides</a>
                                </li>
                            </ul>
                            <p><b>Quiz 1</b></p>
                        </td>
                        <td>
                            <h6>January 14</h6>
                            <p><a href="lab/lab2/">Styling </a></p>
                        </td>
                        <td>
                            <h6>Due Thursday, 1/14, 11:59&thinsp;pm</h6>
                            <p><a href="./assignments/A2">A2: Needfinding</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>3</h6></td>
                        <td>
                            <h6>January 19</h6>
                            <p>Prototyping</p>
                            <ul>
                                <li><a href="lectures/IntroHCI-2016-Week3.pdf">slides</a></li>
                                <li>Paper Prototypes and Mockups <a href="https://ucsd.coursera.org/introhci-001/lecture/21">video</a></li>
                                <li>Faking it: Wizard of Oz <a href="https://ucsd.coursera.org/introhci-001/lecture/22">video</a></li>
                            </ul>
                        </td>
                        <td>
                            <h6>January 21</h6>
                            <p><a href="lab/lab3/">Client-side interactivity </a></p>
                        </td>
                        <td>
                            <h6>Due Thursday, 1/21, 11:59&thinsp;pm</h6>
                            <p><a href="./assignments/A3">A3: Prototyping</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>4</h6></td>
                        <td>
                            <h6>January 26</h6>
                            <p>Heuristic evaluation</p>
                            <ul>
                                <li><a href="lectures/IntroHCI-2016-Week4.pdf">slides</a></li>
                                <li>Heuristic Evaluation Why and How <a href="https://ucsd.coursera.org/introhci-001/lecture/27">video</a></li>
                                <li>Design Heuristics(Part 1/2) <a href="https://ucsd.coursera.org/introhci-001/lecture/28">video</a></li>
                                <li>Design Heuristics(Part 1/2) <a href="https://ucsd.coursera.org/introhci-001/lecture/29">video</a></li>
                            </ul>
                            <p><b>Quiz 2</b></p>
                        </td>
                        <td>
                            <h6>January 28</h6>
                            <a href="lab/lab4/">Servers</a>
                        </td>
                        <td>
                            <h6>Due Thursday, 1/28, 11:59&thinsp;pm</h6>
                            <p><a href="./assignments/A4">A4: Heuristic evaluation</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>5</h6></td>
                        <td>
                            <h6>February 2</h6>
                            <p>Mental models &amp; distributing cognition</p>
                            <ul>
                                <li><a href="lectures/IntroHCI-2016-Week5.pdf">slides</a></li>
                                <li>Mental Models <a href="https://ucsd.coursera.org/introhci-001/lecture/26">video</a></li>
                                <li>Distributing Cognition (Part 1/2) <a href="https://ucsd.coursera.org/introhci-001/lecture/10">video</a></li>
                                <li>Distributing Cognition (Part 2/2) <a href="https://ucsd.coursera.org/introhci-001/lecture/11">video</a></li>
                            </ul>
                        </td>
                        <td>
                            <h6>February 4</h6>
                            <p><a href="lab/lab5/">Putting it together</a></p>
                        </td>
                        <td>
                            <h6>Due Thursday, 2/4, 11:59&thinsp;pm</h6>
                            <p><a href="./assignments/A5">A5: Skeleton and a plan</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>6</h6></td>
                        <td>
                            <h6>February 9</h6>
                            <p>Visual design</p>
                            <ul>
                                <li><a href="lectures/IntroHCI-2016-Week6.pdf">slides</a></li>
                                <li>Visual Design <a href="https://ucsd.coursera.org/introhci-001/lecture/30">video</a></li>
                                <li>Typography <a href="https://ucsd.coursera.org/introhci-001/lecture/31">video</a></li>
                                <li>Grids and Alignment <a href="https://ucsd.coursera.org/introhci-001/lecture/32">video</a></li>
                                <li>Reading and Navigating<a href="https://ucsd.coursera.org/introhci-001/lecture/110">video</a></li>
                            </ul>
                            <p><b>Quiz 3</b></p>
                        </td>
                        <td>
                            <h6>February 11</h6>
                            <p><a href="lab/lab6/">AJAX</a></p>
                        </td>
                        <td>
                            <h6>Due Thursday, 2/11, 11:59&thinsp;pm</h6>
                            <p><a href="./assignments/A6">A6: Meat on the bones</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>7</h6></td>
                        <td>
                            <h6>February 16</h6>
                            <p>Running Experiments</p>
                            <ul>
                                <li>
                                    <a href="lectures/IntroHCI-2016-Week7.pdf"> slides</a>
                                </li>
                                <li>Assigning participants to conditions <a href="https://ucsd.coursera.org/introhci-001/lecture/35">video</a></li>
                                <li>In-Person Experiments <a href="https://ucsd.coursera.org/introhci-001/lecture/36">video</a></li>
                                <li>Comparing rates w/CHI-Squared<a href="https://ucsd.coursera.org/introhci-001/lecture/40">video</a></li>
                            </ul>
                            </p>
                        </td>
                        <td>
                            <h6>February 18</h6>
                            <p><a href="lab/lab7/">Analytics and A/B Testing</a></p>
                        
			    <p>And in case you're interested to check out the
			    old lab 7 ...</p>    
			    <p><a href="lab/lab_db">Databases</a></p> 
			</td>
                        <td>
                            <h6>Due Thursday, 2/18, 11:59&thinsp;pm</h6>
                            <p><a href="./assignments/A7">A7: Ready for testing</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>8</h6></td>
                        <td>
                            <h6>February 23</h6>
                            <p>
                                Input
                                 <ul>
                                    <li><a href="lectures/IntroHCI-2016-Week8.pdf">slides</a></li>
                                    <li>Finding, Filtering, &amp; Foraging <a href="https://www.coursera.org/learn/interaction-techniques/lecture/3dnn4">video</a></li>
                                    <li>Designing Effective Search <a href="https://www.coursera.org/learn/interaction-techniques/lecture/rZEiq/designing-effective-search">video</a></li>
                                </ul>
                            </p>
                            <p><b>Quiz 4</b></p>
                        </td>
                        <td>
                            <h6>February 25</h6>
                            <p><a href="lab/lab8/">Under construction...</a></p>
                        </td>
                        <td>
                            <h6>Due Thursday, 2/25, 11:59&thinsp;pm</h6>
                            <p><a href="./assignments/A8">A8: Test your prototype</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>9</h6></td>
                        <td>
                            <h6>March 1</h6>
                            <p>Social computing</p>
                            <p><b>Quiz 5</b></p>
                            
                        </td>
                         <td>
                            <h6>March 3</h6>
                            <p>Project Workshop (no&nbsp;submission)
                                <ul>
                                    <li>Writing up Experimental Results</li>
                                    <li>Composing your project pitch</li>
                                    <li>Designing your poster</li>
                                    <li>Tying up loose ends</li>
                                </ul>
                            </p>
                        </td>
                        <td>
                            <h6>Due Friday, 3/4, 3:30pm</h6>
                            <p><a href="./assignments/A9">A9: Results!</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>10</h6></td>
                        <td>
                            <h6>March 8</h6>
                            <p>Presenting design work</p>
                            <p>
                                <ul>
                                    <li>
                                        <a href="lectures/final_presentation.pdf">Stand and Deliver: Presenting Your Design Work</a>
                                    </li>
                                    <li>
                                        <a href="http://www.stanford.edu/group/eweek/2010/media/Presentation_Design_handout.pdf">Presentation Design &amp; Delivery Handout(Stanford Technology Ventures Program Forrest Glick)</a>
                                    </li>
                                </ul>
                            </p>
                        </td>
                    
                        <td>
                            <h6>March 11</h6>
                            <p><b><a href="#">Final Show</a></b></p>
                        </td>
                        <td>
                            <p><a href="./assignments/A10">A10: Show &amp; Tell</a> (Due Weds 3/9,&nbsp;11:59&thinsp;pm)</p>
                            <p><a href="./assignments/extracredit.php">Extra
			    Credit Work</a> (Due Sunday, 3/13,&nbsp;11:59&thinsp;pm)</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <footer>
            This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>. It incorporates revisions by <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a> and many TAs. Instructors: you are welcome to use these materials for your own class, and dozens of courses around the world do. We share all course materials <a href=h ttps://creativecommons.org/licenses/by/4.0/deed.en_US>through a CC-BY license</a>. Please let Scott know if you use them, and also any suggestions you have. We thank <a href=http://www.calit2.net/>CalIT2</a> and <a href=http://cogsci.ucsd.edu>CogSci</a> for providing our studio space.
        </footer>
        <br/>
        <br/>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#atkiinson_canvas').addClass('scrolloff');
        $("#cogsci_canvas").addClass('scrolloff');
        $("#hss_canvas").addClass('scrolloff');

        $('#atkinson_map').on('click', function() {
            $('#atkiinson_canvas').removeClass('scrolloff');
        });
        $("#atkiinson_canvas").mouseleave(function() {
            $('#atkiinson_canvas').addClass('scrolloff');
        });

        $('#cogsci_map').on('click', function() {
            $('#cogsci_canvas').removeClass('scrolloff');
        });
        $("#cogsci_canvas").mouseleave(function() {
            $('#cogsci_canvas').addClass('scrolloff');
        });

        $('#hss_map').on('click', function() {
            $('#hss_canvas').removeClass('scrolloff');
        });
        $("#hss_canvas").mouseleave(function() {
            $('#hss_canvas').addClass('scrolloff');
        });
    });
    </script>
</body>

</html>
