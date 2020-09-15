<?php require_once( 'couch/cms.php' ); ?>

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

			<!-- --------- -->

			<cms:pages masterpage='index.php'>

				<div id="grid_content">

					<a href="<cms:show k_page_link />"><img src="<cms:show project_heroimage />" class="imgfill"></a>

					<div class="overlay"><span>
							<cms:show k_page_title /></span>
					</div>

				</div>

			</cms:pages>

			<!-- --------- -->

			<div id="grid_desc">

				<p class="copyright" >Copyright &copy; <cms:date format='Y'/> &ndash; Dan Burnage</p>

			</div>

		</div>

		<cms:embed 'menu.html' />

	</div>

</body> <!-- BODY END TAG -->

</html>

<?php COUCH::invoke(); ?>
