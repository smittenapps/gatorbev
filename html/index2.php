<?php

/**
 * Before we include index.php, we must first specify
 * $mode and $content_file to display the mode (or none)
 * and the 'content' of the file that includes it.
 */
if( !isset($content_file) ) {
	$content_file = 'common/content_home2.php';
	$mode = 'home';
}

include 'common/config.php';

include 'common/head2.php';

#include 'common/navbar.php';

// #content innerHTML
include 'common/get_content.php';

include 'common/foot2.php';

?>
