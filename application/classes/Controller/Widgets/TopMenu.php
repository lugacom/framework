<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_TopMenu extends Controller_Template {

    public $template = 'widgets/w_top_menu';

    public function action_index() {

        $menu = Model::factory('Menu')->menu();
        $this->template->top_menu = $menu;
    }

}
