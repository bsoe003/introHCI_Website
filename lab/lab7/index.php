<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="1200"> <!-- force the page to update with new help  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Logistics">
    <title>Lab&thinsp;7&thinsp;&middot;&thinsp;HCI Design</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../css/hci.css" rel="stylesheet">
    <link href="http://yandex.st/highlightjs/7.5/styles/solarized_dark.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

   <!-- Fixed navbar -->
   <? include "../../nav.php" ?>

	<!-- this is a comment in HTML -->
	<div class="container">
    <div id="instructions" class="alert alert-info">
      When done, submit <a href="http://www.ucsd-hci.com/student_labs" class="alert-link">here</a>.
    </div>

    
  <div id="slide-1" class="row lab-slide">
    <div class="col-md-1">
      <h2>1</h2>
    </div>
    <img src="2016-lab-07-analytics.001.png" class="img-responsive col-md-6"
      title="1" />
    <div class="col-md-5">
      
      <div class="links">
        <h4>Student examples</h4>
        <ul>
          <li>Check out this awesome lab 6 stretch goal!</li>
        </ul>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-2" class="row lab-slide">
    <div class="col-md-1">
      <h2>2</h2>
    </div>
    <img src="2016-lab-07-analytics.002.png" class="img-responsive col-md-6"
      title="2" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-3" class="row lab-slide">
    <div class="col-md-1">
      <h2>3</h2>
    </div>
    <img src="2016-lab-07-analytics.003.png" class="img-responsive col-md-6"
      title="3" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-4" class="row lab-slide">
    <div class="col-md-1">
      <h2>4</h2>
    </div>
    <img src="2016-lab-07-analytics.004.png" class="img-responsive col-md-6"
      title="4" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-5" class="row lab-slide">
    <div class="col-md-1">
      <h2>5</h2>
    </div>
    <img src="2016-lab-07-analytics.005.png" class="img-responsive col-md-6"
      title="5" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>How will this lab help me?</h4>
        <div class="well well-sm">
          <span class="lead"><p>This lab will teach you how to run A/B testing using Google Analytics. This is a fundamental skill for testing user behavior on the web, and assignment 8, and especially assignment 9 includes these tasks!</p></span>
          <p></p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-6" class="row lab-slide">
    <div class="col-md-1">
      <h2>6</h2>
    </div>
    <img src="2016-lab-07-analytics.006.png" class="img-responsive col-md-6"
      title="6" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-7" class="row lab-slide">
    <div class="col-md-1">
      <h2>7</h2>
    </div>
    <img src="2016-lab-07-analytics.007.png" class="img-responsive col-md-6"
      title="7" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-8" class="row lab-slide">
    <div class="col-md-1">
      <h2>8</h2>
    </div>
    <img src="2016-lab-07-analytics.008.png" class="img-responsive col-md-6"
      title="8" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-9" class="row lab-slide">
    <div class="col-md-1">
      <h2>9</h2>
    </div>
    <img src="2016-lab-07-analytics.009.png" class="img-responsive col-md-6"
      title="9" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-10" class="row lab-slide">
    <div class="col-md-1">
      <h2>10</h2>
    </div>
    <img src="2016-lab-07-analytics.010.png" class="img-responsive col-md-6"
      title="10" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-11" class="row lab-slide">
    <div class="col-md-1">
      <h2>11</h2>
    </div>
    <img src="2016-lab-07-analytics.011.png" class="img-responsive col-md-6"
      title="11" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-12" class="row lab-slide">
    <div class="col-md-1">
      <h2>12</h2>
    </div>
    <img src="2016-lab-07-analytics.012.png" class="img-responsive col-md-6"
      title="12" />
    <div class="col-md-5">
      
      <div class="code">
        <h4>Sample event calls</h4>
        <pre class='pre-scrollable'><code>ga("send", "event", "friendsuggestion", "dismiss");
ga("send", "event", "friendsuggestion", "accept");
ga("send", "event", "humankind", "destroy");

ga("send", "event", &lt;Category&gt;, &lt;Action&gt;);</code></pre>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-13" class="row lab-slide">
    <div class="col-md-1">
      <h2>13</h2>
    </div>
    <img src="2016-lab-07-analytics.013.png" class="img-responsive col-md-6"
      title="13" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-14" class="row lab-slide">
    <div class="col-md-1">
      <h2>14</h2>
    </div>
    <img src="2016-lab-07-analytics.014.png" class="img-responsive col-md-6"
      title="14" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-15" class="row lab-slide">
    <div class="col-md-1">
      <h2>15</h2>
    </div>
    <img src="2016-lab-07-analytics.015.png" class="img-responsive col-md-6"
      title="15" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-16" class="row lab-slide">
    <div class="col-md-1">
      <h2>16</h2>
    </div>
    <img src="2016-lab-07-analytics.016.png" class="img-responsive col-md-6"
      title="16" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-17" class="row lab-slide">
    <div class="col-md-1">
      <h2>17</h2>
    </div>
    <img src="2016-lab-07-analytics.017.png" class="img-responsive col-md-6"
      title="17" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-18" class="row lab-slide">
    <div class="col-md-1">
      <h2>18</h2>
    </div>
    <img src="2016-lab-07-analytics.018.png" class="img-responsive col-md-6"
      title="18" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-19" class="row lab-slide">
    <div class="col-md-1">
      <h2>19</h2>
    </div>
    <img src="2016-lab-07-analytics.019.png" class="img-responsive col-md-6"
      title="19" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-20" class="row lab-slide">
    <div class="col-md-1">
      <h2>20</h2>
    </div>
    <img src="2016-lab-07-analytics.020.png" class="img-responsive col-md-6"
      title="20" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-21" class="row lab-slide">
    <div class="col-md-1">
      <h2>21</h2>
    </div>
    <img src="2016-lab-07-analytics.021.png" class="img-responsive col-md-6"
      title="21" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-22" class="row lab-slide">
    <div class="col-md-1">
      <h2>22</h2>
    </div>
    <img src="2016-lab-07-analytics.022.png" class="img-responsive col-md-6"
      title="22" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  
  <div class="row-lab-slide">
    <h2>&rarr; Your part starts here.</h2>
  </div>
  <hr />


  <div id="slide-23" class="row lab-slide">
    <div class="col-md-1">
      <h2>23</h2>
    </div>
    <img src="2016-lab-07-analytics.023.png" class="img-responsive col-md-6"
      title="23" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-24" class="row lab-slide">
    <div class="col-md-1">
      <h2>24</h2>
    </div>
    <img src="2016-lab-07-analytics.024.png" class="img-responsive col-md-6"
      title="24" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Goal</h4>
        <div class="well well-sm">
          <span class="lead"><p>Install pageview analytics on your portfolio.</p></span>
          <p></p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-25" class="row lab-slide">
    <div class="col-md-1">
      <h2>25</h2>
    </div>
    <img src="2016-lab-07-analytics.025.png" class="img-responsive col-md-6"
      title="25" />
    <div class="col-md-5">
      
      <div class="links">
        <h4>Links</h4>
        <ul>
          <li><a href='https://github.com/IntroHCI/lab7/fork' target="_blank">https://github.com/IntroHCI/lab7/fork</a></li>
        </ul>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-26" class="row lab-slide">
    <div class="col-md-1">
      <h2>26</h2>
    </div>
    <img src="2016-lab-07-analytics.026.png" class="img-responsive col-md-6"
      title="26" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-27" class="row lab-slide">
    <div class="col-md-1">
      <h2>27</h2>
    </div>
    <img src="2016-lab-07-analytics.027.png" class="img-responsive col-md-6"
      title="27" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-28" class="row lab-slide">
    <div class="col-md-1">
      <h2>28</h2>
    </div>
    <img src="2016-lab-07-analytics.028.png" class="img-responsive col-md-6"
      title="28" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-29" class="row lab-slide">
    <div class="col-md-1">
      <h2>29</h2>
    </div>
    <img src="2016-lab-07-analytics.029.png" class="img-responsive col-md-6"
      title="29" />
    <div class="col-md-5">
      
      <div class="links">
        <h4>Links</h4>
        <ul>
          <li><a href='http://localhost:3000' target="_blank">http://localhost:3000</a></li>
        </ul>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-30" class="row lab-slide">
    <div class="col-md-1">
      <h2>30</h2>
    </div>
    <img src="2016-lab-07-analytics.030.png" class="img-responsive col-md-6"
      title="30" />
    <div class="col-md-5">
      
      <div class="code">
        <h4>Heroku - Create</h4>
        <pre class='pre-scrollable'><code>heroku create <i>newapplicationname</i></code></pre>
      </div>
      
      <div class="code">
        <h4>Heroku - Push</h4>
        <pre class='pre-scrollable'><code>git push heroku master</code></pre>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-31" class="row lab-slide">
    <div class="col-md-1">
      <h2>31</h2>
    </div>
    <img src="2016-lab-07-analytics.031.png" class="img-responsive col-md-6"
      title="31" />
    <div class="col-md-5">
      
      <div class="links">
        <h4>Links</h4>
        <ul>
          <li><a href='http://analytics.google.com/analytics/' target="_blank">http://analytics.google.com/analytics/</a></li>
        </ul>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-32" class="row lab-slide">
    <div class="col-md-1">
      <h2>32</h2>
    </div>
    <img src="2016-lab-07-analytics.032.png" class="img-responsive col-md-6"
      title="32" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-33" class="row lab-slide">
    <div class="col-md-1">
      <h2>33</h2>
    </div>
    <img src="2016-lab-07-analytics.033.png" class="img-responsive col-md-6"
      title="33" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-34" class="row lab-slide">
    <div class="col-md-1">
      <h2>34</h2>
    </div>
    <img src="2016-lab-07-analytics.034.png" class="img-responsive col-md-6"
      title="34" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Tracking Code</h4>
        <div class="well well-sm">
          <span class="lead"><p>Where do I get my code again if I've lost it?</p></span>
          <p>Use the instructions on the next slide.</p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-35" class="row lab-slide">
    <div class="col-md-1">
      <h2>35</h2>
    </div>
    <img src="2016-lab-07-analytics.035.png" class="img-responsive col-md-6"
      title="35" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-36" class="row lab-slide">
    <div class="col-md-1">
      <h2>36</h2>
    </div>
    <img src="2016-lab-07-analytics.036.png" class="img-responsive col-md-6"
      title="36" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-37" class="row lab-slide">
    <div class="col-md-1">
      <h2>37</h2>
    </div>
    <img src="2016-lab-07-analytics.037.png" class="img-responsive col-md-6"
      title="37" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-38" class="row lab-slide">
    <div class="col-md-1">
      <h2>38</h2>
    </div>
    <img src="2016-lab-07-analytics.038.png" class="img-responsive col-md-6"
      title="38" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-39" class="row lab-slide">
    <div class="col-md-1">
      <h2>39</h2>
    </div>
    <img src="2016-lab-07-analytics.039.png" class="img-responsive col-md-6"
      title="39" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-40" class="row lab-slide">
    <div class="col-md-1">
      <h2>40</h2>
    </div>
    <img src="2016-lab-07-analytics.040.png" class="img-responsive col-md-6"
      title="40" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-41" class="row lab-slide">
    <div class="col-md-1">
      <h2>41</h2>
    </div>
    <img src="2016-lab-07-analytics.041.png" class="img-responsive col-md-6"
      title="41" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-42" class="row lab-slide">
    <div class="col-md-1">
      <h2>42</h2>
    </div>
    <img src="2016-lab-07-analytics.042.png" class="img-responsive col-md-6"
      title="42" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Goal</h4>
        <div class="well well-sm">
          <span class="lead"><p>Run an A/B test on a grid vs. the old vertical layout</p></span>
          <p></p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-43" class="row lab-slide">
    <div class="col-md-1">
      <h2>43</h2>
    </div>
    <img src="2016-lab-07-analytics.043.png" class="img-responsive col-md-6"
      title="43" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-44" class="row lab-slide">
    <div class="col-md-1">
      <h2>44</h2>
    </div>
    <img src="2016-lab-07-analytics.044.png" class="img-responsive col-md-6"
      title="44" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Troubleshoot</h4>
        <div class="well well-sm">
          <span class="lead"><p>It says "Cannot GET /grid"</p></span>
          <p>Did you add the route in app.js? (See Prev Slide)</p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-45" class="row lab-slide">
    <div class="col-md-1">
      <h2>45</h2>
    </div>
    <img src="2016-lab-07-analytics.045.png" class="img-responsive col-md-6"
      title="45" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Hint</h4>
        <div class="well well-sm">
          <span class="lead"><p>Hint: <a href='#slide-16'>Slide 16-Sending different data to the template</a> may have relevant information.</p></span>
          <p></p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-46" class="row lab-slide">
    <div class="col-md-1">
      <h2>46</h2>
    </div>
    <img src="2016-lab-07-analytics.046.png" class="img-responsive col-md-6"
      title="46" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-47" class="row lab-slide">
    <div class="col-md-1">
      <h2>47</h2>
    </div>
    <img src="2016-lab-07-analytics.047.png" class="img-responsive col-md-6"
      title="47" />
    <div class="col-md-5">
      
      <div class="code">
        <h4>Code</h4>
        <pre class='pre-scrollable'><code>
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;project col-md-4&quot; id=&quot;{{projects.0.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.0.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.0.image}}&quot; alt=&quot;Lorem Pixel image&quot;&gt;
			&lt;h4&gt;{{projects.0.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;project col-md-4&quot; id=&quot;{{projects.1.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.1.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.1.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.1.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;


&lt;div class=&quot;project col-md-4&quot; id=&quot;{{projects.2.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.2.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.2.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.2.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;project col-md-3&quot; id=&quot;{{projects.3.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.3.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.3.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.3.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;


&lt;div class=&quot;project col-md-3&quot; id=&quot;{{projects.4.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.4.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.4.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.4.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;


&lt;div class=&quot;project col-md-3&quot; id=&quot;{{projects.5.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.5.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.5.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.5.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;project col-md-3&quot; id=&quot;{{projects.6.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.6.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.6.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.6.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;project col-md-2&quot; id=&quot;{{projects.7.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.7.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.7.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.7.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;project col-md-2&quot; id=&quot;{{projects.8.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.8.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.8.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.8.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;project col-md-2&quot; id=&quot;{{projects.9.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.9.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.9.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.9.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;project col-md-2&quot; id=&quot;{{projects.10.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.10.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.10.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.10.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;project col-md-2&quot; id=&quot;{{projects.11.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.11.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.11.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.11.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;project col-md-2&quot; id=&quot;{{projects.12.id}}&quot;&gt;
	&lt;div class=&quot;thumbnail&quot;&gt;
		&lt;a href=&quot;/project/{{projects.12.id}}&quot;&gt;
			&lt;img src=&quot;images/{{projects.12.image}}&quot; alt=&quot;Lorem Pixel image&quot; class=&quot;img-responsive&quot;&gt;
			&lt;h4&gt;{{projects.12.title}}&lt;/h4&gt;
		&lt;/a&gt;
		&lt;button class=&quot;btn btn-default likeBtn&quot;&gt;Like&lt;/button&gt;						
		&lt;div class=&quot;details&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
      </div>
      
      <div class="debug">
        <h4>Troubleshoot</h4>
        <div class="well well-sm">
          <span class="lead"><p>It still looks the same!</p></span>
          <p>Restart node and maximize your browser window.</p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-48" class="row lab-slide">
    <div class="col-md-1">
      <h2>48</h2>
    </div>
    <img src="2016-lab-07-analytics.048.png" class="img-responsive col-md-6"
      title="48" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Hint</h4>
        <div class="well well-sm">
          <span class="lead"><p>How do I register a user click?</p></span>
          <p>Check back to <a href='../lab3/#slide-42'>Lab 3 slide 42-Listening to clicks</a></p>
        </div>
        <div class="well well-sm">
          <span class="lead"><p>How do I add the Google Analytics event?</p></span>
          <p>Remember back from <a href='#slide-12'>slide 12-Store any kind of event</a> on the form of <pre><code>ga("send", "event", &lt;Category&gt;, &lt;Action&gt;);</code></pre> Substitute out category <code>'like'</code> into <code>&lt;Category&gt;</code>, and our action <code>'click'</code> into <code>&lt;Action&gt;</code>, and place it in the click event handler.</p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-49" class="row lab-slide">
    <div class="col-md-1">
      <h2>49</h2>
    </div>
    <img src="2016-lab-07-analytics.049.png" class="img-responsive col-md-6"
      title="49" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-50" class="row lab-slide">
    <div class="col-md-1">
      <h2>50</h2>
    </div>
    <img src="2016-lab-07-analytics.050.png" class="img-responsive col-md-6"
      title="50" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-51" class="row lab-slide">
    <div class="col-md-1">
      <h2>51</h2>
    </div>
    <img src="2016-lab-07-analytics.051.png" class="img-responsive col-md-6"
      title="51" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-52" class="row lab-slide">
    <div class="col-md-1">
      <h2>52</h2>
    </div>
    <img src="2016-lab-07-analytics.052.png" class="img-responsive col-md-6"
      title="52" />
    <div class="col-md-5">
      
      <div class="code">
        <h4>GitHub - Commit</h4>
        <pre class='pre-scrollable'><code>git status
git add ... 
git commit -m "initial analytics lab"</code></pre>
      </div>
      
      <div class="code">
        <h4>Github - Push</h4>
        <pre class='pre-scrollable'><code>git push</code></pre>
      </div>
      
      <div class="code">
        <h4>Heroku - Push</h4>
        <pre class='pre-scrollable'><code>git push heroku master</code></pre>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-53" class="row lab-slide">
    <div class="col-md-1">
      <h2>53</h2>
    </div>
    <img src="2016-lab-07-analytics.053.png" class="img-responsive col-md-6"
      title="53" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-54" class="row lab-slide">
    <div class="col-md-1">
      <h2>54</h2>
    </div>
    <img src="2016-lab-07-analytics.054.png" class="img-responsive col-md-6"
      title="54" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-55" class="row lab-slide">
    <div class="col-md-1">
      <h2>55</h2>
    </div>
    <img src="2016-lab-07-analytics.055.png" class="img-responsive col-md-6"
      title="55" />
    <div class="col-md-5">
      
      <div class="code">
        <h4>Coin flip</h4>
        <pre class='pre-scrollable'><code>var random_num = Math.random();
console.log(random_num);

if (random_num > 0.5) {
  projects['grid'] = false;
  res.render('index', projects);
} else {
  res.redirect('/grid');
}</code></pre>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-56" class="row lab-slide">
    <div class="col-md-1">
      <h2>56</h2>
    </div>
    <img src="2016-lab-07-analytics.056.png" class="img-responsive col-md-6"
      title="56" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-57" class="row lab-slide">
    <div class="col-md-1">
      <h2>57</h2>
    </div>
    <img src="2016-lab-07-analytics.057.png" class="img-responsive col-md-6"
      title="57" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-58" class="row lab-slide">
    <div class="col-md-1">
      <h2>58</h2>
    </div>
    <img src="2016-lab-07-analytics.058.png" class="img-responsive col-md-6"
      title="58" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-59" class="row lab-slide">
    <div class="col-md-1">
      <h2>59</h2>
    </div>
    <img src="2016-lab-07-analytics.059.png" class="img-responsive col-md-6"
      title="59" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-60" class="row lab-slide">
    <div class="col-md-1">
      <h2>60</h2>
    </div>
    <img src="2016-lab-07-analytics.060.png" class="img-responsive col-md-6"
      title="60" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-61" class="row lab-slide">
    <div class="col-md-1">
      <h2>61</h2>
    </div>
    <img src="2016-lab-07-analytics.061.png" class="img-responsive col-md-6"
      title="61" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-62" class="row lab-slide">
    <div class="col-md-1">
      <h2>62</h2>
    </div>
    <img src="2016-lab-07-analytics.062.png" class="img-responsive col-md-6"
      title="62" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Troubleshoot</h4>
        <div class="well well-sm">
          <span class="lead"><p>How do I reference my new <code>gridExperiment</code> partials?</p></span>
          <p>Remember back to how we referenced the <code>googleAnalytics</code> partials!</p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-63" class="row lab-slide">
    <div class="col-md-1">
      <h2>63</h2>
    </div>
    <img src="2016-lab-07-analytics.063.png" class="img-responsive col-md-6"
      title="63" />
    <div class="col-md-5">
      
      <div class="code">
        <h4>GitHub - Commit</h4>
        <pre class='pre-scrollable'><code>git status
git add ... 
git commit -m "Added Experiment Header"</code></pre>
      </div>
      
      <div class="code">
        <h4>Github - Push</h4>
        <pre class='pre-scrollable'><code>git push</code></pre>
      </div>
      
      <div class="code">
        <h4>Heroku - Push</h4>
        <pre class='pre-scrollable'><code>git push heroku master</code></pre>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-64" class="row lab-slide">
    <div class="col-md-1">
      <h2>64</h2>
    </div>
    <img src="2016-lab-07-analytics.064.png" class="img-responsive col-md-6"
      title="64" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Troubleshoot</h4>
        <div class="well well-sm">
          <span class="lead"><p>Experiment code not found</p></span>
          <p>Make sure you inserted the code on step 3 inside the &lt;head&gt;...&lt;/head&gt; block of index.handlebars</p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-65" class="row lab-slide">
    <div class="col-md-1">
      <h2>65</h2>
    </div>
    <img src="2016-lab-07-analytics.065.png" class="img-responsive col-md-6"
      title="65" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-66" class="row lab-slide">
    <div class="col-md-1">
      <h2>66</h2>
    </div>
    <img src="2016-lab-07-analytics.066.png" class="img-responsive col-md-6"
      title="66" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Hint</h4>
        <div class="well well-sm">
          <span class="lead"><p>How do I clear my cookies so I can see an alternate version of the site?</p></span>
          <p>You can do this by going to google chrome's settings, Show Advanced Settings&rarr;Content settings&rarr;All Cookies and Site Data. From there, search your heroku URL and Remove the cookie, like below.<img src='troubleshoot/clear_cookie.png' style='width:90%; margin:auto;' /></p>
        </div>
      </div>
      
    </div>
  </div>
  <hr />
  


  <div id="slide-67" class="row lab-slide">
    <div class="col-md-1">
      <h2>67</h2>
    </div>
    <img src="2016-lab-07-analytics.067.png" class="img-responsive col-md-6"
      title="67" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-68" class="row lab-slide">
    <div class="col-md-1">
      <h2>68</h2>
    </div>
    <img src="2016-lab-07-analytics.068.png" class="img-responsive col-md-6"
      title="68" />
    <div class="col-md-5">
      
    </div>
  </div>
  <hr />
  


  <div id="slide-69" class="row lab-slide">
    <div class="col-md-1">
      <h2>69</h2>
    </div>
    <img src="2016-lab-07-analytics.069.png" class="img-responsive col-md-6"
      title="69" />
    <div class="col-md-5">
      
      <div class="debug">
        <h4>Stretch Goals</h4>
        <div class="well well-sm">
          <span class="lead"><p>Include analytic tracking for user timing.</p></span>
          <p></p>
        </div>
      </div>
      
      <div class="links">
        <h4>API</h4>
        <ul>
          <li><a href='https://developers.google.com/analytics/devguides/collection/analyticsjs/user-timings' target="_blank">User-Timings Dev Guide</a></li>
        </ul>
      </div>
      
    </div>
  </div>
  <hr />
  


    <div id="instructions-bottom" class="alert alert-info">
      When done, submit <a href="http://www.ucsd-hci.com/student_labs" class="alert-link">here</a>.
    </div>

	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://yandex.st/highlightjs/7.5/highlight.min.js"></script> <!-- syntax highlighting -->
    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>
