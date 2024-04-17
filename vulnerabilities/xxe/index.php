<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Vulnerability: XXE' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'xxe';
$page[ 'help_button' ]   = 'xxe';
$page[ 'source_button' ] = 'xxe';

dvwaDatabaseConnect();

$vulnerabilityFile = '';
switch( 'low' ) {
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

require_once DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/xxe/source/{$vulnerabilityFile}";

// Check if folder is writeable
$WarningHtml = '';
if( !is_writable( $PHPUploadPath ) ) {
	$WarningHtml .= "<div class=\"warning\">Incorrect folder permissions: {$PHPUploadPath}<br /><em>Folder is not writable.</em></div>";
}
// Is PHP-GD installed?
if( ( !extension_loaded( 'gd' ) || !function_exists( 'gd_info' ) ) ) {
	$WarningHtml .= "<div class=\"warning\">The PHP module <em>GD is not installed</em>.</div>";
}

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Vulnerability: XXE</h1>

	{$WarningHtml}

	<div class=\"vulnerable_code_area\">
		<form method=\"post\" enctype=\"multipart/form-data\">
		<div class=\"mb-3\">
			<label for=\"formFile\" class=\"form-label\">Upload an XML file with the structure:<br>
				&lt;creds&gt; &lt;user&gt;username&lt;/user&gt; &lt;password&gt;password&lt;/password&gt;
				&lt;/creds&gt;
			</label>
			<input class=\"form-control\" type=\"file\" id=\"formFile\" name=\"uploaded_file\">
		</div>
		<div class=\"mb-3\">
			<button class=\" btn btn-outline-secondary\" type=\"submit\">Upload</button>
		</div>";

$page[ 'body' ] .= "
		</form>
		{$html}
		{$user}
		{$password}
	</div>

	<h2>More Information</h2>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/vulnerabilities/XML_External_Entity_(XXE)_Processing' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://portswigger.net/web-security/xxe' ) . "</li>
	</ul>
</div>";

dvwaHtmlEcho( $page );

?>
