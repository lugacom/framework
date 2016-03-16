<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Article extends Controller_Index {

    public function action_index() {
	$id = (int) $this->request->param('id');
	
	$article = Model::factory('Articles')->single_article($id);
        $block_center = View::factory('index/main/v_single_article', array('article'=>$article));
	
        // Вывод в шаблон
        $this->template->page_title = $article['title'];
        $this->template->block_center = array($block_center);
    }
}

