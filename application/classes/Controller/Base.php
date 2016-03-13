<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public function before() {
	parent::before();

	$settings = Kohana::$config->load('settings');

	$this->template->site_name = $settings->site_name;
	$this->template->site_description = $settings->site_description;
	$this->template->page_title = null;

	$this->template->styles = array();
	$this->template->scripts = array();

	$this->template->block_left = null;
	$this->template->block_center = null;
    }

}
