<?php

// This file is part of the Carrington Theme Framework for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

// svn export https://carrington.googlecode.com/svn/blog/trunk carrington-blog-2.0
// svn export https://carrington.googlecode.com/svn/jam/trunk carrington-jam-1.1
// svn export https://carrington.googlecode.com/svn/mobile/trunk carrington-mobile-1.0

if (isset($argv[1]) && is_dir($argv[1])) {
	$dir = $argv[1];
	if (substr($dir, -1) !== '/') {
		$dir = $dir . '/';
	}

	define('THEME_PATH', $dir); // include trailing slash
}
else {
	die('Usage: php build.php path/to/theme/');
}
#define('THEME_PATH', '/Users/devesine/Desktop/favebusiness/'); // include trailing slash
define('ROOT_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');

header('Content-type: text/plain');

function cfct_write_readme($dir = '') {
	if (!empty($dir)) {
		$dir = $dir.'/';
	}
	$source = ROOT_PATH.$dir.'README.txt';
	if (file_exists($source)) {
		global $_template_keys, $_template_content;
		$content = file_get_contents($source);
		$content = str_replace($_template_keys, $_template_content, $content);
		if ('./' === $dir && file_exists(THEME_PATH.'carrington-core/README.txt')) {
			$fp = fopen(THEME_PATH.'carrington-core/README.txt', 'w');
		}
		else {
			$fp = fopen(THEME_PATH.$dir.'README.txt', 'w');
		}
		if ($fp) {
			return fwrite($fp, $content);
		}
	}
	return false;
}

// SET MASTER TEMPLATES

$_template_keys = array();
$_template_content = array();

$path = ROOT_PATH.'_data/';
if ($handle = opendir($path)) {
	while (false !== ($file = readdir($handle))) {
		if (is_file($path.$file) && strtolower(substr($file, -4, 4)) == ".txt") {
			$_template_keys[] = '{'.str_replace('.txt', '', strtolower($file)).'}';
			$_template_content[] = file_get_contents($path.$file);
		}
	}
}

// LOOP DIRS

if ($handle = opendir(ROOT_PATH)) {
	while (false !== ($dir = readdir($handle))) {
		if ($dir != '..' && is_dir(ROOT_PATH.$dir) && is_dir(THEME_PATH.$dir)) {
			if (cfct_write_readme($dir)) {
				echo 'Wrote README to: '.THEME_PATH.$dir."/README.txt\n";
			}
		}
	}
}

