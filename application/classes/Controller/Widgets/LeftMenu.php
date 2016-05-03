<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_LeftMenu extends Controller_Widgets {

    public $template = 'widgets/w_left_menu';

    public function action_index() {

	$menu = Model::factory('Menu')->find_all();
	$this->template->left_menu = $menu;
    }

}
