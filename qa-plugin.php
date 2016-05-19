<?php

/*

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

/*
	Plugin Name: Custome Script
	Plugin URI: 
	Plugin Update Check URI: 
	Plugin Description: Inserts script code in the <head>.
	Plugin Version: 1.0
	Plugin Date: 2016-05-18
	Plugin Author: yuichi
	Plugin Author URI: 
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_layer('q2a-custom-script-layer.php', 'Custom Script');
	qa_register_plugin_module('module', 'q2a-custom-script-admin.php', 'q2a_custom_script_admin', 'Custom Script');
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
