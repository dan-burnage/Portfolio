<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Portfolio' clonable='1'>

	<cms:editable name='project_description' label='Project description' type='richtext' order='3' />

	<cms:editable name='project_heroimage' label='Hero image' type='image' order='4' />

	<cms:editable name='project_video' label='Video' desc='Video shown before hero image in list view.' type='text' no_xss_check='1' order='5' />

	<cms:repeatable name='project_images' label='Project images' order='6'>

		<cms:editable type='image' name='image' label='Project Images' />

	</cms:repeatable>

	<cms:editable name='seo_group' label='SEO information' desc='SEO, Open Graph and Twitter card data' type='group' order='7' />

	<cms:editable name='page_title' label='Page title' desc='If different from global title' group='seo_group' type='text' />

	<cms:editable name='seo_title' label='SEO title' desc='Recomended length: 55–60 characters' group='seo_group' type='text' />

	<cms:editable name='seo_desc' label='SEO description' desc='Recomended length: 150–155 characters' group='seo_group' type='textarea' />

	<cms:editable name='seo_img' label='SEO image' desc='Recomended size: 1200px x 630px' group='seo_group' type='image' />


</cms:template>


<cms:if k_is_page>


	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html>

	<head>

		<!--INDEX.PHP — DETAILS TEMPLATE VIEW-->

		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>

			<cms:if page_title>
				<cms:show page_title />
				<cms:else />
				Dan Burnage | Designer
			</cms:if>

		</title>

		<meta name="description" content="<cms:show seo_desc />">
		<meta name="theme-color" content="#222222">

		<!-- Open Graph data -->
		<meta property="og:title" content="<cms:show seo_title />">
		<meta property="og:url" content="https://www.danburnage.com/">
		<meta property="og:type" content="website">
		<meta property="og:description" content="<cms:show seo_desc />">
		<meta property="og:image" content="<cms:show seo_img />">

		<!-- Twitter card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="">
		<meta name="twitter:title" content="<cms:show seo_title />">
		<meta name="twitter:description" content="<cms:show seo_desc />">
		<meta name="twitter:image" content="<cms:show seo_img />">

		<cms:embed 'favicons.html' />

		<link href="static/sitemain.css" rel="stylesheet" type="text/css">
		<link href="fonts/unisanspack/unisanspack.css" rel="stylesheet" type="text/css">

		<cms:set load_true="<cms:get_cookie 'load_true' />" />

		<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
		<script>
			src = "/static/scripts/script.js"

		</script>

		<cms:embed 'font-copyright.html' />


	</head>



	<body>

		<cms:embed 'slide.php' />

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
