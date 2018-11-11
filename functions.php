//Disable Frontend edittor visual composer

if ( in_array( 'js_composer/js_composer.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )
{	
	vc_disable_frontend();
}