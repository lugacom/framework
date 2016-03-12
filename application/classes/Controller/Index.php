<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Index extends Controller_Base {

    public function action_index() {

	$this->template->page_title = 'Главная';

	$block_center = view::factory('v_index');
	$this->template->block_center = array($block_center);
    }

}
