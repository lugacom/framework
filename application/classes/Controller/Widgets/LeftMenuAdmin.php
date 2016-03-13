<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Widgets_LeftMenuAdmin extends Controller_Widgets {

    public $template = 'widgets/w_left_menu';

    public function action_index() {

        $menu = Model::factory('Menu')->menu_admin();
        $this->template->left_menu = $menu;
    }

}