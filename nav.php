<?php 
    $filename = basename($_SERVER['PHP_SELF']);
    $url = "$_SERVER[HTTP_HOST]" == "localhost:8000" ? '' : 'http://d.ucsd.edu/class/intro-hci/2016';
?>
<style type="text/css">
    li.dropdown:hover > ul.dropdown-menu {
        display: block;
    }
    li.dropdown:hover {
        color: #555;
        background-color: #e7e7e7;
        box-shadow: inset 0 3px 9px rgba(0,0,0,0.075);
        -webkit-box-shadow: inset 0 3px 9px rgba(0,0,0,0.075);
    }
    .sidenav-anchor {
        padding-top: 62px;
        margin-top: -62px; 
    }
</style>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                $a_href = $url.'/index.php';
                echo '<a class="navbar-brand" href="'.$a_href.'">HCI Design</a>';
            ?>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                    $li_start = $filename == "index.php" ? '<li class="active">' : '<li>';
                    $a_start = '<a href="'.$url.'/index.php">';
                    echo $li_start;
                    echo $a_start;
                    echo 'Home</a></li>';
                ?>
                <?php
                    $li_start = '<li>';
                    $a_start = '<a href="'.$url.'/index.php#calendar">';
                    echo $li_start;
                    echo $a_start;
                    echo 'Calendar</a></li>';
                ?>
                <?php
                    $li_start = $filename == "studio.php" ? '<li class="active">' : '<li>';
                    $a_start = '<a href="'.$url.'/studio.php">';
                    echo $li_start;
                    echo $a_start;
                    echo 'Studio</a></li>';
                ?>
                <?php
                    $li_start = $filename == "mobile_app_tips.php" ? '<li class="active">' : '<li>';
                    $a_start = '<a href="'.$url.'/mobile_app_tips.php">';
                    echo $li_start;
                    echo $a_start;
                    echo 'Development Resources</a></li>';
                ?>
                <?php
                    $li_start = $filename == "logistics.php" ? '<li class="dropdown" class="active">' : '<li class="dropdown">';
                    $a_href = $url."/logistics.php";
                    echo $li_start;
                    echo '<a href="'.$a_href.'" class="dropdown-toggle disabled" data-hover="dropdown">Logistics <b class="caret"></b></a>';
                    echo '<ul class="dropdown-menu">';
                    echo '<li><a href="'.$a_href.'#prereqs">Prerequisites</a></li>';
                    echo '<li><a href="'.$a_href.'#laptop">Equipment</a></li>';
                    echo '<li><a href="'.$a_href.'#lab">Lab</a></li>';
                    echo '<li><a href="'.$a_href.'#assignments">Assignments</a></li>';
                    echo '<li><a href="'.$a_href.'#grading">Grading</a></li>';
                    echo '<li><a href="'.$a_href.'#faq">FAQ</a></li>';
                    echo '</ul></li>';
                ?>
                <li><a href="http://www.ucsd-hci.com">Submit work</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://piazza.com/ucsd/winter2016/cogs120cse170/home">Question? (Piazza)</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
