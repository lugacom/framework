<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'v_base';
    protected $widgets_folder = 'widgets';

    public function before() {
	parent::before();

	$site_config = Kohana::$config->load('settings');
	$site_name = $site_config->get('site_name');
	$site_description = $site_config->get('site_description');

	$this->template->site_name = $site_name;
	$this->template->site_description = $site_description;
	$this->template->page_title = null;
	$this->template->top_menu = $this->widget_load('TopMenu');

	$this->template->styles = array('media/css/site.css');
	$this->template->scripts = array();

	$this->template->block_topmenu = null;
	$this->template->block_left = null;
	$this->template->block_center = null;
    }

    public function widget_load($widget) {
	return Request::factory($this->widgets_folder . '/' . $widget)->execute();
    }

}
