<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Main extends Controller_Index {

    public function action_index() {
	$articles = Model::factory('Articles')->get_articles();
        $block_center = View::factory('index/main/v_main_index', array('articles'=>$articles,));
	
        // Вывод в шаблон
        $this->template->page_title = 'Главная';
        $this->template->block_center = array($block_center);
    }
}

