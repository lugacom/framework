<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_LeftMenu extends Controller_Template {

    public $template = 'widgets/w_left_menu';

    public function action_index() {

        $menu = Model::factory('Menu')->menu();
        $this->template->left_menu = $menu;
    }

}