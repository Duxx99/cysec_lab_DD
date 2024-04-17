<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Vulnerability: Directory/Path Traversal' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'dt';
$page[ 'help_button' ]   = 'dt';
$page[ 'source_button' ] = 'dt';

dvwaDatabaseConnect();

$vulnerabilityFile = '';
switch( $_COOKIE[ 'security' ] ) {
	case 'low':
		$vulnerabilityFile = 'low.php';
		break;
	case 'medium':
		$vulnerabilityFile = 'medium.php';
		break;
	case 'high':
		$vulnerabilityFile = 'high.php';
		break;
	default:
		$vulnerabilityFile = 'impossible.php';
		break;
}

require_once DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/dt/source/{$vulnerabilityFile}";

// if( count( $_GET ) )
if( isset( $file ) )
	include( "/var/www/html/vulnerabilities/dt/" . $file );
else {
	header( 'Location:?page=include.php' );
	exit;
}

dvwaHtmlEcho( $page );

?>
