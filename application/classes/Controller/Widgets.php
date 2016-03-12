<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets extends Controller_Template {

    public function before() {
	parent::before();

	$widget_name = Request::current()->controller();       // название виджета
	$controller = Request::initial()->controller();    // контроллер
	$action = Request::initial()->action();	    // экшен
	// Загружаем файл конфигураций
	$widget_config = Kohana::$config->load("widgets.$widget_name.$controller");

	// Запрещаем вывод виджета в экшенах, указанных в конфигах
	if ($widget_config != NULL) {
	    if (in_array($action, $widget_config)) {
		$this->auto_render = FALSE;
		return NULL;
	    }
	}
    }

}
