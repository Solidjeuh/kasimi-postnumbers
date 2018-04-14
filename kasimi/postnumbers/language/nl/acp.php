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
	'POSTNUMBERS_ENABLED_VIEWTOPIC'			=> 'Toon post nummers bij het bekijken van onderwerpen',
	'POSTNUMBERS_ENABLED_REVIEW_REPLY'		=> 'Toon post nummers in topic voorbeeld bij het opstellen van een antwoord',
	'POSTNUMBERS_ENABLED_REVIEW_MCP'		=> 'Toon post nummers in MCP onderwerp voorbeeld',
	'POSTNUMBERS_SKIP_NONAPPROVED'			=> 'Sla niet goedgekeurde berichten over',
	'POSTNUMBERS_SKIP_NONAPPROVED_EXP'		=> 'Geef geen post nummers aan niet goedgekeurde en tijdelijk verwijderde berichten (Soft deleted)',
	'POSTNUMBERS_DISPLAY_IDS'				=> 'Toon bericht ID’s in plaats van post nummers',
	'POSTNUMBERS_DISPLAY_IDS_EXP'			=> 'Indien ingeschakeld, wordt de bovenstaande instelling <span style="font-style: italic;">Niet-goedgekeurde berichten overslaan</span> genegeerd',
	'POSTNUMBERS_LOCATION'					=> 'Locatie van post nummers',
	'POSTNUMBERS_LOCATION_AUTHOR'			=> 'Voor de bericht afbeelding en de bericht auteurs naam',
	'POSTNUMBERS_LOCATION_SUBJECT'			=> 'In bericht onderwerp',
	'POSTNUMBERS_CLIPBOARD'					=> 'Kopieer de bericht link naar het klembord wanneer u op het postnummer klikt',
	'POSTNUMBERS_CLIPBOARD_EXP'				=> 'Alleen relevant als post nummers worden weergegeven vóór de naam van de afbeelding en de naam van de auteur. Werkt alleen in moderne browsers, tenminste: Chrome 43, Firefox 41, IE 9, Opera 29, Safari 10. Niet-ondersteunde browsers geven in plaats daarvan een pop-up weer met de bericht link.',
	'POSTNUMBERS_BOLD'						=> 'Maak post nummers/ID’s vetgedrukt',
	'POSTNUMBERS_BOLD_EXP'					=> 'Alleen relevant als post nummers worden weergegeven vóór de naam van de afbeelding en de naam van de auteur.',
));
