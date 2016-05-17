<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Index extends Controller_Base {

    public $template = 'index/v_base';

    public function before() {
	parent::before();

	$top_menu = Widget::load('TopMenu');
	$left_menu = Widget::load('LeftMenu');
	$categories = Widget::load('Categories');

	$this->template->styles[] = 'media/css/reset.css';
	$this->template->styles[] = 'media/css/site.css';
	$this->template->top_menu = $top_menu;
	$this->template->block_left = array($left_menu, $categories);
    }

}
