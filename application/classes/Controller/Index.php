<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Index extends Controller_Base {

    public $template = 'index/v_base';

    public function before() {
	parent::before();

	$top_menu = Widget::load('TopMenu');
	$left_menu = Widget::load('LeftMenu');

	$this->template->styles[] = 'media/css/site.css';
	$this->template->top_menu = $top_menu;
	$this->template->block_left = array($left_menu);
    }

}
