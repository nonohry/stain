<?php
/*
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 * 		
 * 		created by ibnu yahya <ibnu.yahya@toroo.org>
 * 
 */
defined('PATH') or die('Can\'t access!');



if (!isset($_SESSION[user])) {	
	$tpl = new tcake_view('themes/toroo/login.html');
}else {
	$tpl = new tcake_view('themes/toroo/main.html');
}


if ($tpl) {
	$title = "System Informasi Akademik STAIN Palu";
	$nav = $tpl-> navigator(array('Home' => HOSTNAME.'index.php', 'Logout' => HOSTNAME.'index.php/logout'));
	$define = array (
				'head_nav' => $nav, 
				'title' => $title,
				'style' => $style,
				'script' => $script,
				'jq_content' => $jq_content,
				'menujq' => $menujq,
				'menunav' => $menunav,
				'tabsjq' => $tabsjq,
				'hostname' => HOSTNAME,
				'css' => $css,
				'form_css' => $form_css,
				'stylecss' => $stylecss,
				'stylelogin' => $stylelogin,
				'scriptlogin' => $scriptlogin,
				'content' => $content
                );
	$tpl-> define_tag($define);
	$tpl-> show_themes();
}
