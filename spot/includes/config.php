<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1[index.php] = "Home";
$nav1[dates.php] = "Date";
$nav1[about.php] = "About";
$nav1[info.php] = "Information";

switch('THIS_PAGE')
{
    case "index.php":
        $title = "Home page title";
        $pageID = "Home Page";
        break;

    case "dates.php":
        $title = "Date page";
        $pageID = "Date";
        break;
    case "about.php":
        $title = "About page";
        $pageID = "About";
        break;
    case "info.php":
        $title = "Information page";
        $pageID = "Information";
        break;
    default:
        $title = THIS_PAGE;
        $pageID = "";

}
function makeLinks($ar)
{
$myReturn = '';
    foreach($ar as $url => $label)
    {
    echo '<li><a href="about.html">ABOUT</a></li>';
    
    
    }


}

return $myReturn;

/*
<ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="services.html">SERVICES</a></li>
            <li><a href="works.html">WORKS</a></li>
            <li><a data-toggle="modal" data-target="#myModal"  href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
          </ul>







*/
?>