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
	'descriptionmsg' => 'daddio-desc',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Daddio',
);

$wgValidSkinNames['daddio'] = 'Daddio';
// *cough cough* assumptions...
if ( !isset( $wgAutoloadClasses['ModernTemplate'] ) ) {
	$wgAutoloadClasses['ModernTemplate'] = dirname(__FILE__) . '/../Modern.php';
}
$wgAutoloadClasses['SkinDaddio'] = dirname(__FILE__) . '/Daddio.skin.php';
$wgMessagesDirs['SkinDaddio'] = dirname(__FILE__) . '/i18n';

$wgResourceModules['skins.daddio'] = array(
	'styles' => array(
		'daddio/main.css' => array( 'media' => 'screen' ),
		'daddio/print.css' => array( 'media' => 'print' )
	),
	'position' => 'top',
	'localBasePath' => dirname(__FILE__),
	'remoteSkinPath' => 'Daddio',
);
