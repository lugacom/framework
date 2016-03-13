<?php defined('SYSPATH') or die('No direct script access.');

Route::set('widgets', 'widgets(/<controller>(/<param>))', array('param' => '.+'))
	->defaults(array(
	    'directory' => 'widgets',
	    'action' => 'index',
	));

Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))')
	->defaults(array(
            'directory'  => 'admin',
            'controller' => 'main',
            'action'     => 'index',
	));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
	    'directory' => 'index',
	    'controller' => 'main',
	    'action' => 'index',
	));


