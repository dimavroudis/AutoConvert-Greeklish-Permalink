<?php

?>
<div>
	<form action="options.php" method="post">
		<?php settings_fields( 'agp' ); ?>
		<?php do_settings_sections( 'agp' ); ?>
		<?php submit_button( __( 'Save Settings', 'agp' ) ); ?>
	</form>
</div>