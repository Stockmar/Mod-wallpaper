<?php
/*
* Version			: 1.0.1
* Created by		: Stockmar
* Email				: info@stockmar.dk
* Created on		: 01-02-2013
* Last Modified 	: 01-02-2013
* URL				: http://stockmar.dk
* License			: GPLv2
* Copyright			: 2012 stockmar.dk
* License 			: GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
* 
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the helper.
 require_once __DIR__ . '/helper.php';

 $hello = modHWallPaperHelper::getWallPaper( $params );

// $wallpaperSetup = WallPaperHelper::getWallPaper( $params );

JHtml::_('jquery.framework');
	$doc 				=& 		JFactory::getDocument();
	$modulePath 		= 		JURI::base() . 'module/mod_wallpaper/';
	$mediaPath 			= 		JURI::base() . 'media/mod_wallpaper/';
	$fadeSpeed 			= 		$params->get('fadeSpeed');
	$duration 			= 		$params->get('duration');
	$wallpaperType 		= 		$params->get('wallpaperType');
	$wallpaperStatic 	= 		$params->get('wallpaperStatic');

// add the jquery
$doc->addScript($mediaPath.'js/jquery.backstretch.min.js');

// Parameters
$imgpath 				= 		JURI::base() . 'images/wallpapers/';
$wallpaperStatic 		= 		$params->get('wallpaperStatic');
$wallpaperStatic2 		=		$imgpath.$wallpaperStatic;
$random 				= 		$params->get('random');

// SLIDESHOW  WALLPAPER IMAGE SETUP 
$wallpaperone 			= 		$params->get('wallpaperone');
$wallpapertwo 			= 		$params->get('wallpapertwo');
$wallpaperthree 		= 		$params->get('wallpaperthree');
$wallpaperfour 			= 		$params->get('wallpaperfour');
$wallpaperfive 			= 		$params->get('wallpaperfive');

$wallpapers = array( );

if (!empty($wallpaperone)) 		{$wallpapers["wallpaperone"] 	= "$imgpath"."$wallpaperone";};
if (!empty($wallpapertwo)) 		{$wallpapers["wallpapertwo"] 	= "$imgpath"."$wallpapertwo";};
if (!empty($wallpaperthree)) 	{$wallpapers["wallpaperthree"] 	= "$imgpath"."$wallpaperthree";};
if (!empty($wallpaperfour)) 	{$wallpapers["wallpaperfour"] 	= "$imgpath"."$wallpaperfour";};
if (!empty($wallpaperfive)) 	{$wallpapers["wallpaperfive"] 	= "$imgpath"."$wallpaperfive";};
if ($random==1) : shuffle($wallpapers);
  endif;

require(JModuleHelper::getLayoutPath('mod_wallpaper', $params->get('layout', 'default')));

?>