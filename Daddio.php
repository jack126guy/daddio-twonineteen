<?php
/**
 * Daddio skin.
 *
 * @file
 * @ingroup Skins
 * @author Rufus Post
 * @author Aaron Schulz
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 *
 * To install place the Daddio folder (the folder containing this file!) into
 * skins/ and add this line to your wiki's LocalSettings.php:
 * require_once("$IP/skins/Daddio/Daddio.php");
 */

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Daddio',
	// @todo FIXME: add a meaningful version number
	'author' => array( 'Rufus Post', 'Aaron Schulz' ),
	'description-msg' => 'daddio-desc',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Daddio',
);

$wgValidSkinNames['daddio'] = 'Daddio';
// *cough cough* assumptions...
if ( !isset( $wgAutoloadClasses['ModernTemplate'] ) ) {
	$wgAutoloadClasses['ModernTemplate'] = __DIR__ . '/../Modern/SkinModern.php';
}
$wgAutoloadClasses['SkinDaddio'] = __DIR__ . '/Daddio.skin.php';
$wgMessagesDirs['SkinDaddio'] = __DIR__ . '/i18n';

$wgResourceModules['skins.daddio'] = array(
	'styles' => array(
		// @Lcawte: this probably isn't the most kosher way to do this, but it's
		// how most/all ShoutWiki skins do it and it works for our setup at
		// least. Feel free to improve it :D
		'skins/Daddio/daddio/main.css' => array( 'media' => 'screen' ),
		'skins/Daddio/daddio/print.css' => array( 'media' => 'print' )
	),
	'position' => 'top',
	//'localBasePath' => __DIR__,
);
