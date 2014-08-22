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
	'author' => array( 'Rufus Post', 'Aaron Schulz' ),
	'description-msg' => 'daddio-desc',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Daddio',
);

$wgValidSkinNames['daddio'] = 'Daddio';
$wgAutoloadClasses['SkinDaddio'] = dirname( __FILE__ ) . "/Daddio.class.php";
$wgMessagesDirs['SkinDaddio'] = __DIR__ . '/i18n';