<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Widgets_LeftMenu extends Controller_Widgets {

    public $template = 'widgets/w_categories';

    public function action_index() {

	$categories = Model::factory('Categories')->categories();
	$this->template->categories = $categories;
    }

}
