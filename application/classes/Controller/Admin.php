<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Base {

    public $template = 'admin/v_base';

    public function before() {
	parent::before();
	$top_menu = Widget::load('TopMenuAdmin');
	$left_menu = Widget::load('LeftMenuAdmin');

	// Вывод в шаблон

	$this->template->styles[] = 'media/css/reset.css';
	$this->template->styles[] = 'media/css/site.css';
	$this->template->top_menu = $top_menu;
	$this->template->block_left = array($left_menu);
    }

}
