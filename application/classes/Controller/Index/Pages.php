<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Pages extends Controller_Index {

    public function action_about() {
        $block_center = View::factory('index/pages/about');

        // Вывод в шаблон
        $this->template->page_title = 'Осайте';
        $this->template->block_center = array($block_center);
    }
    
    public function action_contacts() {
        $block_center = View::factory('index/pages/contacts');

        // Вывод в шаблон
        $this->template->page_title = 'Контакты';
        $this->template->block_center = array($block_center);
    }
}

