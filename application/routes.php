<?php defined('SYSPATH') or die('No direct script access.');

Route::set('widgets', 'widgets(/<controller>(/<action>(/<id>)))')
	->defaults(array(
	    'directory' => 'widgets',
	    'action' => 'index',
	));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
	    'controller' => 'index',
	    'action' => 'index',
	));


