<?php defined('SYSPATH') or die('No direct script access.');

 class Model_Categories extends Model {

    public function categories() {
	$query = DB::select()
		->from('categories');
	return $query->execute();
    }

}
