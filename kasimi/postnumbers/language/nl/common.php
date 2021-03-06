<?php

/**
 *
 * @package phpBB Extension - Post Numbers
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'POSTNUMBERS_COPY_TITLE'		=> 'Kopieer de bericht link naar het klembord',
	'POSTNUMBERS_COPY_MANUALLY'		=> 'Kopieer naar klembord: Ctrl/Cmd+C, Enter',
	'POSTNUMBERS_COPIED'			=> 'Gekopieerd!',
));
