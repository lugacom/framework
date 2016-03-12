<?php defined('SYSPATH') or die('No direct script access.');

 class Model_Menu extends Model {

    public function menu() {
	return array(
	    'Главная',
	    'Первая',
	    'Вторая',
	    'Форум',
	    'Wiki',
	);
    }

}
