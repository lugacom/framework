<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Index extends Controller_Base {

    public function before() {
	parent::before();

	$left_menu = $this->widget_load('LeftMenu');

	$this->template->block_left = array($left_menu);
    }

    public function action_index() {

	$this->template->page_title = 'Главная';

	$block_center = view::factory('v_index');
	$this->template->block_center = array($block_center);
    }

}
