<?php
	$thisPath = $_SERVER['SCRIPT_NAME'];
	$pathElements = explode('/',$thisPath);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<?php
	if (!empty($title)) {
		echo '<title>alysonhurt.com &raquo; '.strtolower($title).'</title>';
	} else {
		echo '<title>alysonhurt.com</title>';
	}
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="alysonhurt.com is the professional Web site of online news designer Alyson Hurt, featuring her personal resume and portfolio." />
<link rel="stylesheet" href="/css/alyson.css" type="text/css" />
<script language="javascript" src="/js/rollovers.js" type="text/javascript"></script>

</head>

<body>

<table cellpadding="0" cellspacing="0" border="0" id="header">
  <tr>

<?php
	if ($pathElements[1] == 'index.php') {
		echo '<td><img src="/gifs/title_ahurt.gif" border="0" alt="alysonhurt.com" /></td>';
	} else {
		echo '<td><a href="/"><img src="/gifs/title_ahurt2.gif" border="0" alt="return to the home page of alysonhurt.com" /></a></td>';
	}
?>

    <td><a href="/resume/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('toplink1','','/gifs/link_resume_on.gif',0)"><img src="/gifs/link_resume.gif" border="0" name="toplink1" alt="Resume" /></a></td>
    <td><a href="/portfolio/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('toplink2','','/gifs/link_portfolio_on.gif',0)"><img src="/gifs/link_portfolio.gif" border="0" name="toplink2" alt="Portfolio" /></a></td>
  </tr>
</table>

<div id="content">

<?php
	if (count($pathElements) >= 3) {
		echo '<div id="breadcrumbs"><a href="/">home</a> &raquo; ';
		if ($pathElements[2] != 'index.php') {
			echo '<a href="/'.$pathElements[1].'/">'.$pathElements[1].'</a> &raquo; ';
		}
		if (count($pathElements) >= 4 && $pathElements[3] != "index.php") {
			echo '<a href="/'.$pathElements[1].'/'.$pathElements[2].'/">'.$pathElements[2].'</a> &raquo; ';
		}
		echo '</div>';
	}
?>