<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Portfolio' clonable='1'>

	<cms:editable name='project_description' type='richtext' />
	<cms:editable name='project_heroimage' type='image' />

	<cms:repeatable name='project_images'>

		<cms:editable type='image' name='image' label='Project Images' />

	</cms:repeatable>

</cms:template>


<cms:if k_is_page>


	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Dan Burnage | Designer</title>

		<meta name="description" content="Freelance designer based in Cambrdige specialising in brand and identity design">
		<meta name="theme-color" content="#222222">

		<!-- Open Graph data -->
		<meta property="og:title" content="Dan Burnage | Designer">
		<meta property="og:url" content="https://www.danburnage.com/">
		<meta property="og:type" content="website">
		<meta property="og:description" content="Freelance designer based in Cambrdige specialising in brand and identity design">
		<meta property="og:image" content="">

		<!-- Twitter card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="">
		<meta name="twitter:title" content="Dan Burnage | Designer">
		<meta name="twitter:description" content="Freelance designer based in Cambrdige specialising in brand and identity design">
		<meta name="twitter:image" content="">

		<!-- Favicons -->
		<link rel="shortcut icon" href="/static/favicons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="57x57" href="/_____.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/_____.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/_____.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/_____.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/_____.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/_____.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/_____.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/_____.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/_____.png">
		<link rel="icon" type="image/png" href="/_____.png" sizes="16x16">
		<link rel="icon" type="image/png" href="/_____.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/_____.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/_____.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/_____.png" sizes="192x192">

		<meta name="msapplication-square70x70logo" content="/_____/smalltile.png">
		<meta name="msapplication-square150x150logo" content="/_____/mediumtile.png">
		<meta name="msapplication-wide310x150logo" content="/_____/widetile.png">
		<meta name="msapplication-square310x310logo" content="/_____/largetile.png">

		<link href="css/sitemain.css" rel="stylesheet" type="text/css">
		<link href="css/webkit.scrollbar.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/unisanspack/unisanspack.css">

		<script>
			function myFunction(x) {
				x.classList.toggle("change");
			}

		</script>

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
		*//
	-->

	</head>



	<body>
		<!-- BODY START TAG -->

		<input type="checkbox" id="togglebox" />

		<!-- SIBLING #1 -->

		<nav id="offcanvas-menu" class="UniSansSemiBold">

			<!-- SIBLING #2 -->

			<p> Hi &#128075; ... I'm Dan Burnage, a designer specialising in communication, branding and identity design with experience working both inhouse, agency-side and as a freelancer.</p>

			<p>So you appear to have found yourself on my website, a showcase of select projects I have worked on both independently and for past clients or employers. Having worked as part of an internal design team and for a creative agency, I have experience in working to plan and deliver multi-channel marketing campaigns, brand identities, brand guidelines, websites, motion graphics and much more. </p>

			<p>Want to find gout more about my previous projects? Then don't hesitate to get in touch with the details below and we can grab a coffee &#9749; to talk about future projects, how I can help you, or even just to chat about design. </p>

			<p></p>

			<p>info@danburnage.com</p>

			<p>+44 (0) 7749 999022</p>

		</nav>

		<div id="contentarea">

			<!-- SIBLING #3 -->

			<div id="grid_container">

				<div id="grid_desc">

					<cms:show project_description />

				</div>

				<div id="grid_content">

					<img src="<cms:show project_heroimage />" class="staticimg">

				</div>

				<cms:show_repeatable 'project_images'>

					<div id="grid_content"><img src="<cms:show image />" class="staticimg"></div>

				</cms:show_repeatable>

				<div id="grid_desc">

					<p class="UniSansSemiBold"><a href="index.php">Click here for more work...</a></p>

				</div>

				<div id="grid_desc">
					<p class="UniSansSemiBold" style="font-size:12px;">Copyright &copy; 2020 &ndash; Dan Burnage</p>
				</div>

			</div>

			<div id="oncanvas-menu">

				<label for="togglebox" style="width: 100%;">

					<div id="toggle" onclick="myFunction(this)">

						<div class="bar1"></div>
						<div class="bar2"></div>
						<div style="color:##222222; font-size:12.5px; line-height:30px; text-align:center; letter-spacing:1.5px;" class="UniSansSemiBold">INFO</div>

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
