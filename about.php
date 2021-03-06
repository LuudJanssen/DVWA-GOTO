<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'About' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'about';

$templateVars = getPageVariables($page);
$templateVars = array_merge($templateVars, [
    'title' => $page['title'],
    'dvwaVersion' => dvwaVersionGet(),
    'dvwaReleaseDate' => dvwaReleaseDateGet()
]);

echo renderPage('about', $templateVars);

exit;

?>
