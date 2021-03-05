<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='PHP Version' hidden='1' >
</cms:template>

<cms:if k_user_access_level = '10' >

	<?php phpinfo(); ?>

	<cms:else />

	<cms:redirect url='/' />

</cms:if>

<?php COUCH::invoke(); ?>
