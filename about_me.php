<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='About me' >

	<cms:editable name='about_me' type='richtext' />

</cms:template>

<cms:show about_me />

<?php COUCH::invoke(); ?>
