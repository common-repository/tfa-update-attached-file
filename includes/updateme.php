<?php
for ($i = 1; $i <= 10000; $i++) {
	
	$filename = basename( get_attached_file( $i ) );
	update_attached_file($i, $filename);
}

?>