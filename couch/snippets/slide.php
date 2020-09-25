<cms:if load_true = 'true' >

	<svg id="transition_slide"></svg>

	<div id="swupBody" class="transition-swup"></div>

<cms:else />

	<cms:set_cookie 'load_true' value='true' expire='300' />

	<div id="intro_slide">

		<img src="/static/images/marque.svg" class="intro_logo" alt="Dan Burnage introduction icon">

	</div>

	<div id="swupBody" class="transition-swup"></div>

</cms:if>
