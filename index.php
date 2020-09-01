<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Portfolio' clonable='1'>

    <cms:editable name='project_description' type='richtext' />
    <cms:editable name='project_heroimage' type='image' />

    <cms:repeatable name='project_images' >

        <cms:editable type='image' name='image' label='Project Images' />

	</cms:repeatable>

</cms:template>

<cms:if k_is_page >
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Dan Burnage</title>
	<link href="css/sitemain.css" rel="stylesheet" type="text/css">
	<link href="css/webkit.scrollbar.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/unisanspack/unisanspack.css">
	<script> function myFunction(x) { x.classList.toggle("change"); }</script>

	<!--
	/**
	* @license
	* MyFonts Webfont Build ID 3074987, 2015-08-13T06:49:36-0400
	*
	* The fonts listed in this notice are subject to the End User License
	* Agreement(s) entered into by the website owner. All other parties are
	* explicitly restricted from using the Licensed Webfonts(s).
	*
	* You may obtain a valid license at the URLs below.
	*
	* Webfont: UniSansBook by Fontfabric
	* URL: http://www.myfonts.com/fonts/font-fabric/uni-sans/book/
	*
	* Webfont: UniSansSemiBold by Fontfabric
	* URL: http://www.myfonts.com/fonts/font-fabric/uni-sans/semi-bold/
	*
	*
	* License: http://www.myfonts.com/viewlicense?type=web&buildid=3074987
	* Licensed pageviews: 20,000
	* Webfonts copyright: Copyright (c) 2014 by &#x00A9; 2009 Designed by Svetoslav Simov
	* &#x00A9; Fontfabric, Inc. All rights reserved.
	*
	* © 2015 MyFonts Inc
	*/
	-->

</head>

<body> <!-- BODY START TAG -->

<input type="checkbox" id="togglebox" /> <!-- SIBLING #1 -->

<nav id="offcanvas-menu"> <!-- SIBLING #2 -->
<p class="UniSansSemiBold">My name is Daniel Burnage, and I am a designer with 2 and a half years of experience working as part of an in-house design team and over 5 years as a freelance designer outside of hours. Specialising in brand identity I believe great communication is the most vital part of any design. Without clear communication and a fundamental meaning, a design can sometimes lack functionality. And without functionality, design becomes a way of making something look pretty ...
<br><br>
Working closely with internal teams or direct with clients my design process aims to uncover the fundamental goals of any brief by finding the problem at its core.  This allows the delivery of high impact, meaningful creative solutions that solve problems and don't just look pretty.  I have a true passion for design and am fully committed to any brief I undertake, willing to face challenges, try ideas, and put maximum effort into any all designs I work on.
<br><br>
info@danburnage.com
<br>
+44 (0) 7749 999022.</p>
</nav>

<div id="contentarea"> <!-- SIBLING #3 -->

	<div id="grid_container">

        <div id="grid_desc"><cms:show project_description /></div>
        <div id="grid_content"><img src="<cms:show project_heroimage />" class="staticimg"></div>

        <cms:show_repeatable 'project_images' >
            <div id="grid_content"><img src="<cms:show image />" class="staticimg"></div>
        </cms:show_repeatable>

        <div id="grid_desc">
            <p class="UniSansSemiBold"><a href="index.php">Click here for more work...</a></p>
        </div>

        <div id="grid_desc">
            <p class="UniSansSemiBold" style="font-size:12px;">Copyright &copy; 2019 &ndash; Dan Burnage</p>
        </div>

    </div>

	<div id="oncanvas-menu">

		<label for="togglebox" style="width: 100%;">
			<div id="toggle" onclick="myFunction(this)">
				<div class="bar1"></div><div class="bar2"></div>
				<div style="color:#3737ff; font-size:12.5px; line-height:30px; text-align:center; letter-spacing:0px;" class="UniSansSemiBold">INFO</div>
			</div>
		</label>

		<a href="index.php" class="logo"><img src="img/logo.svg" class="logoscaler"></a>
	</div>

</div>

</body> <!-- BODY END TAG -->

</html>
<cms:else />

    <cms:embed 'list_view.php' />

</cms:if>

<?php COUCH::invoke(); ?>
