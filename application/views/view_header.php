<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>.:: <?php echo $position ?> - JMSZite ::.</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="Erwin Aligam - styleshout.com" />
<meta name="description" content="Site Description Here" />
<meta name="keywords" content="keywords, here" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />

<link rel="stylesheet" type="text/css" href="/lab/revisitugas01/root/css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript" src="/lab/revisitugas01/root/scripts/jquery-1.6.1.min.js"></script>

<link href="/lab/revisitugas01/root/images/favicon.gif" type='image/gif' rel='icon' />
<link rel="stylesheet" href="/lab/revisitugas01/root/css/nivodefault.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/lab/revisitugas01/root/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="/lab/revisitugas01/root/css/screen.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
</head>

<body>

<!-- wrap -->
<div id="wrap">

	<!-- header -->
	<div id="header">			
	
		<a name="top"></a>
		
		<h1 id="logo-text"><a href="index.html" title="">alexandros james wijaya</a></h1>		
		<p id="slogan">servus servorum dei - abdi dari abdi Allah</p>					
		
		<div  id="nav">
			<ul>
				<!--<li id="current"><a href="index.html">Home</a></li>
				<li><a href="style.html">Style Demo</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="archives.html">Archives</a></li>
				<li><a href="index.html">Support</a></li>
				<li><a href="index.html">About</a></li>-->
				<?php
                    foreach ($menu as $idx=>$value){
						if ($idx==$position) {
							echo "<li id='current'>".anchor($value, $idx)."</li>";
						}
						else
							echo "<li>".anchor($value, $idx)."</li>";
					}
                ?>
			</ul>		
		</div>		
				
		<form id="quick-search" action="index.html" method="get" >
			<p>
			<label for="qsearch">Search:</label>
			<input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
			<input class="btn" alt="Search" type="image" name="searchsubmit" title="Search" src="/lab/revisitugas01/root/images/search.png" />
			</p>
		</form>	
						
	<!-- /header -->					
	</div>