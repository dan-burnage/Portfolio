<cms:if load_true = 'true' >

	<div id="transition_slide"></div>

<cms:else />

	<cms:set_cookie 'load_true' value='true' expire='300' />

	<div id="intro_slide">

		<img src="/img/marque.svg" class="intro_logo">

	</div>

</cms:if>
