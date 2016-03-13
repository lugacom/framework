<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Widgets_TopMenuAdmin extends Controller_Widgets {

    public $template = 'widgets/w_top_menu';

    public function action_index() {

        $menu = Model::factory('Menu')->menu_admin();
        $this->template->top_menu = $menu;
    }

}
