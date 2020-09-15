<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Portfolio' clonable='1'>

	<cms:editable name='project_description' label='Project description' type='richtext' order='3' />

	<cms:editable name='project_heroimage' label='Hero image' type='image' order='4' />

	<cms:editable name='project_video' label='Video' desc='Video shown before hero image in list view.' type='text' no_xss_check='1' order='5' />

	<cms:repeatable name='project_images' label='Project images' order='6'>

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

		<cms:embed 'favicons.html' />

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

		<cms:embed 'font-copyright.html' />

	</head>



	<body>

		<input type="checkbox" id="togglebox" />

		<nav id="offcanvas-menu">

			<cms:get_custom_field 'about_me' masterpage='about_me.php' />

		</nav>


		<div id="contentarea">

			<div id="grid_container">

				<div id="grid_desc">

					<cms:show project_description />

				</div>

				<cms:if project_video>

					<div id="video_wrapper">

						<iframe src="<cms:show project_video />" frameborder="0" allowfullscreen class="video"></iframe>

					</div>

				</cms:if>

				<div id="grid_content">

					<img src="<cms:show project_heroimage />" class="staticimg">

				</div>

				<cms:show_repeatable 'project_images'>

					<div id="grid_content"><img src="<cms:show image />" class="staticimg"></div>

				</cms:show_repeatable>

				<div id="grid_desc">

					<p><a href="index.php">Click here for more work...</a></p>

				</div>

				<div id="grid_desc">

					<p class="copyright">Copyright &copy;
						<cms:date format='Y' /> &ndash; Dan Burnage
					</p>

				</div>

			</div>

			<cms:embed 'menu.html' />

		</div>

	</body> <!-- BODY END TAG -->


	</html>


	<cms:else />
	<cms:embed 'list_view.php' />
</cms:if>

<?php COUCH::invoke(); ?>
