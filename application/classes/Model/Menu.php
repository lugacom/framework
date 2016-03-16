<?php defined('SYSPATH') or die('No direct script access.');

 class Model_Menu extends Model {

    public function menu() {
	$query = DB::select()
		->from('menu');
	return $query->execute();
    }

}
