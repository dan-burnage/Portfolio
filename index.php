<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Portfolio' clonable='1'>

	<cms:editable name='project_description' label='Project description' type='richtext' css='/static/wysiwyg.css | /webfonts/unisans.css' order='3' />

	<cms:editable name='project_categories' label='Project categories' desc='Check all applicable' opt_values='UI & UX | Branding | Marketing | Print | Typography | Product Design | Motion Graphics | Videography' type='checkbox' order='4' />

	<cms:editable name='project_color' label='Project colour' desc='Project colour #HEX' maxlength='7' width='100' type='text' no_xss_check='1' order='5' />

	<cms:editable name='project_heroimage' label='Hero image' type='image' order='6' show_preview='1' preview_width='175' width='275' />

	<cms:editable name='heroimage_alt' label='Hero image alt text' type='text' order='7' />

	<cms:editable name='project_video' label='Video' desc='Check for correct Vimeo or YouTube embed link' type='text' no_xss_check='1' order='8' />

	<cms:repeatable name='project_images' label='Project images' order='9'>

		<cms:editable type='image' name='image' label='Project Images' show_preview='1' preview_width='175' input_width='275' col_width='300' />
		<cms:editable type='textarea' name='image_alt' label='Image alt text' no_xss_check='1' />

	</cms:repeatable>

	<cms:editable name='seo_group' label='SEO information' desc='SEO, Open Graph and Twitter card data' type='group' order='10' />

	<cms:editable name='page_title' label='Page title' desc='If different from global title' group='seo_group' type='text' />

	<cms:editable name='seo_title' label='SEO title' desc='Recomended length: 55–60 characters' maxlength='60' group='seo_group' type='text' />

	<cms:editable name='seo_desc' label='SEO description' desc='Recomended length: 150–155 characters' maxlength='155' group='seo_group' type='textarea' />

	<cms:editable name='seo_img' label='SEO image' desc='Recomended size: 1200px x 630px' group='seo_group' type='image' />


</cms:template>


<cms:if k_is_page >


	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html lang="en">

	<head>

		<!--INDEX.PHP — DETAILS TEMPLATE VIEW-->

		<cms:embed 'gtag.html' />

		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>

			<cms:if page_title >
				<cms:show page_title />
				<cms:else />
				Dan Burnage | Designer
			</cms:if>

		</title>

		<cms:if seo_desc><meta name="description" content="<cms:show seo_desc />"></cms:if>
		<meta name="theme-color" content="<cms:if project_color><cms:show project_color /><cms:else />#111111</cms:if>">

		<!-- Open Graph data -->
		<cms:if seo_title><meta property="og:title" content="<cms:show seo_title />"></cms:if>
		<meta property="og:url" content="<cms:show k_page_link />">
		<meta property="og:type" content="website">
		<cms:if seo_desc><meta property="og:description" content="<cms:show seo_desc />"></cms:if>
		<cms:if seo_img><meta property="og:image" content="<cms:show seo_img />"></cms:if>

		<!-- Twitter card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="">
		<cms:if seo_title><meta name="twitter:title" content="<cms:show seo_title />"></cms:if>
		<cms:if seo_desc><meta name="twitter:description" content="<cms:show seo_desc />"></cms:if>
		<cms:if seo_img><meta name="twitter:image" content="<cms:show seo_img />"></cms:if>

		<cms:embed 'favicons.html' />

		<link async href="/static/sitemain.css" rel="stylesheet" type="text/css" media="all">
		<link aysnc href="/webfonts/unisans.css" rel="stylesheet" type="text/css" media="all">

		<cms:set load_true="<cms:get_cookie 'load_true' />" />

		<script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
		<script defer src="/static/scripts/script.js"></script>

		<cms:embed 'font-copyright.html' />


	</head>



	<body>

		<cms:embed 'slide.php' />

		<input type="checkbox" id="togglebox" />

		<nav id="offcanvas-menu">

			<cms:get_custom_field 'about_me' masterpage='globals.php' />

		</nav>


		<div id="contentarea">

			<div id="grid_container">

				<div id="flex_wrapper">


					<div id="grid_title">

						<span>

							<h1>
								<cms:show k_page_title />
							</h1>

						</span>

						<div id="grid_title_divider" style="background-color:<cms:if project_color><cms:show project_color /><cms:else />var(--brand-color);opacity:0.4;</cms:if>"></div>


						<cms:if project_categories>

							<span>

								<h3>

									<cms:each project_categories as='cat'>

										<cms:show cat /><span>&nbsp; | &nbsp;</span>

									</cms:each>

								</h3>

							</span>

						</cms:if>

					</div>


					<div id="grid_desc">

						<cms:show project_description />

						<a href="/" class="link_wrapper">

							<img src="/static/images/icon_arrow.svg" class="link_icon">
							<p class="link">Back to projects</p>

						</a>

					</div>

				</div>

				<cms:if project_video>

					<div id="video_wrapper">

						<iframe src="<cms:show project_video />" frameborder="0" allow="autoplay; fullscreen" allowfullscreen class="video"></iframe>

					</div>

				</cms:if>

				<div id="grid_content">

					<img src="<cms:show project_heroimage />" class="staticimg" alt="<cms:show heroimage_alt />">

				</div>

				<cms:show_repeatable 'project_images'>

					<div id="grid_content"><img src="<cms:show image />" class="staticimg" alt="<cms:show image_alt />"></div>

				</cms:show_repeatable>

				<div id="grid_copyright">

					<p>Copyright &copy; Dan Burnage &nbsp;<cms:date format='Y' />&nbsp; &nbsp;  | &nbsp;
					</p>

					<a href="https://www.instagram.com/dan.burnage/" >
						<img src="/static/images/icon_instagram2.svg" class="social_icon">
					</a>

					<a href="https://www.linkedin.com/in/dan-burnage-27b074112/" >
						<img src="/static/images/icon_linkedin2.svg" class="social_icon">
					</a>

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
