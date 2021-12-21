<?php require_once( 'couch/cms.php' ); ?>

<!DOCTYPE html>

<html lang="en">

<head>

	<!--LIST_VIEW.PHP — LIST VIEW-->

	<cms:embed 'gtag-head.html' />

	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>
		<cms:get_custom_field 'page_title' masterpage='globals.php' />
	</title>

	<meta name="description" content="<cms:get_custom_field 'seo_desc' masterpage='globals.php' />">
	<meta name="theme-color" content="#111111">

	<!-- Open Graph data -->
	<meta property="og:title" content="<cms:get_custom_field 'seo_title' masterpage='globals.php' />">
	<meta property="og:url" content="<cms:show k_page_link />">
	<meta property="og:type" content="website">
	<meta property="og:description" content="<<cms:get_custom_field 'seo_desc' masterpage='globals.php' />">
	<meta property="og:image" content="<cms:get_custom_field 'seo_img' masterpage='globals.php' />">

	<!-- Twitter card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="<cms:get_custom_field 'seo_title' masterpage='globals.php' />">
	<meta name="twitter:description" content="<cms:get_custom_field 'seo_desc' masterpage='globals.php' />">
	<meta name="twitter:image" content="<cms:get_custom_field 'seo_img' masterpage='globals.php' />">

	<cms:embed 'favicons.html' />

	<link href="/static/sitemain.css" rel="stylesheet" type="text/css">
	<link href="/webfonts/unisans.css" rel="stylesheet" type="text/css">

	<cms:set load_true="<cms:get_cookie 'load_true' />" />

	<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
	<script src="/static/scripts/script.js"></script>

	<cms:embed 'font-copyright.html' />


</head>


<body>

	<cms:embed 'gtag-body.html' />

	<cms:embed 'slide.php' />

	<input type="checkbox" id="togglebox" />

	<nav id="offcanvas-menu">

		<cms:get_custom_field 'about_me' masterpage='globals.php' />

	</nav>


	<div id="contentarea">

		<main id="grid_container">

			<!-- --------- -->

			<cms:pages masterpage='index.php'>

				<div id="grid_content">

					<a href="<cms:show k_page_link />">

						<h1 class="overlay">
								<cms:show k_page_title />
						</h1>

						<img src="<cms:show project_heroimage />" class="imgfill" alt="<cms:show heroimage_alt />">

					</a>

				</div>

			</cms:pages>

			<!-- --------- -->

			<cms:embed 'copyright.html' />

		</main>

		<cms:embed 'menu.html' />

	</div>

</body> <!-- BODY END TAG -->

</html>

<?php COUCH::invoke(); ?>
