<?php defined('SYSPATH') or die('No direct script access.');

Route::set('widgets', 'widgets(/<controller>(/<param>))', array('param' => '.+'))
	->defaults(array(
	    'directory' => 'widgets',
	    'action' => 'index',
	));

Route::set('pages', '<action>(/<id>)', array('action' => 'about|contacts'))
	->defaults(array(
	    'directory' => 'index',
	    'controller' => 'pages',
	));

Route::set('article', '(<controller>)/<id>-<artname>', array('id' => '[0-9]+'), array('artname' => '.+'))
        ->defaults(array(
	    'directory' => 'index',
            'controller' => 'article',
            'action' => 'index',
        ));

Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))')
	->defaults(array(
	    'directory' => 'admin',
	    'controller' => 'main',
	    'action' => 'index',
	));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
	    'directory' => 'index',
	    'controller' => 'main',
	    'action' => 'index',
	));


