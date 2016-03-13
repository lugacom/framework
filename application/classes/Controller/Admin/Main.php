<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Admin_Main extends Controller_Admin {

    public function action_index() {

        $block_center = View::factory('admin/main/v_main_index');

        // Вывод в шаблон
        $this->template->page_title = 'Администрирование';
        $this->template->block_center = array($block_center);
    }
}

