<?php
//config.php file for BIG




//Here are the keys for the server: web-students.net
$siteKey = "6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX";
$secretKey = "6LeDaSoUAAAAACJ69mIHYOxL4atri9oPrjkIVMFv";

date_default_timezone_set('America/Los_Angeles');


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


    

$title = THIS_PAGE;

switch(THIS_PAGE)
{

    case 'index.php':
    $title = 'Christian\'s BIG HOME PAGE!';
    $logo = "fa-home";
    break;

    case 'exercises.php':
    $title = 'Christian\'s Contact Page!';
    $logo = "fa-universal-access";
    break;

    case 'contactme.php':
    $title = 'Christian\'s Contact Page!';
    $logo = "fa-paper-plane-o";
    break;

    default:
    $title = THIS_PAGE;
    $logo = '';//no icon by default
    break;    
}

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE)
{
    case 'index.php':
    $title = "Christian's Home Page";
    $logo = "fa-home";
    break;

    case 'exercises.php':
    $title = "Christian's Exercise Page";
    $logo = "fa-universal-access";
    $logo_color = ' style="color:blue"';
    break;
        
    case 'contactme.php':
    $title = "Contact Christian";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color:green"';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    
}

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}