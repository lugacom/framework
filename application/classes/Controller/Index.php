<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Index extends Controller_Base {

    public function before() {
	parent::before();

	$left_menu = Request::factory('widgets/LeftMenu')->execute();
	$top_menu = Request::factory('widgets/TopMenu')->execute();

	$this->template->block_left = array($left_menu);
	$this->template->block_topmenu = array($top_menu);
    }

    public function action_index() {

	$this->template->page_title = 'Главная';

	$block_center = view::factory('v_index');
	$this->template->block_center = array($block_center);
    }

}
