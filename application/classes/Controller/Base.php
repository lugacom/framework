<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'v_base';

    public function before() {
	parent::before();

	$site_config = Kohana::$config->load('settings');
	$site_name = $site_config->get('site_name');
	$site_description = $site_config->get('site_description');

	//View::set_global('site_description', $site_description);
	//View::set_global('site_name', $site_name);

	$this->template->site_name = $site_name;
	$this->template->site_description = $site_description;
	$this->template->page_title = null;

	$this->template->styles = array('media/css/site.css');
	$this->template->scripts = array();

	$this->template->block_topmenu = null;
	$this->template->block_left = null;
	$this->template->block_center = null;
    }

}
