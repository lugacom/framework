<?php defined('SYSPATH') or die('No direct script access.');

 class Model_Articles extends Model {

    public function get_articles() {
	$query = DB::select('id', 'alt_title', 'title', 'intro', array(DB::expr("DATE_FORMAT(`date`, '%e %M %Y')"), 'date'))
		->from('articles')
		->order_by('date', 'DESC')
		->order_by('id', 'DESC');
	return $query->execute();
    }

    public function new_articles() {
	$query = DB::select('id', 'alt_title', 'title', array(DB::expr("DATE_FORMAT(`date`, '%e %M %Y')"), 'date'))
		->from('articles')
		->order_by('date', 'DESC')
		->order_by('id', 'DESC')
		->limit(3);
	return $query->execute();
    }

    public function single_article($id) {

	$id = (int) $id;

	$query = DB::select('id', 'alt_title', 'title', 'full', array(DB::expr("DATE_FORMAT(`date`, '%e %M %Y')"), 'date'))
		->from('articles')
		->where('id', '=', $id);
	$result = $query->execute();
	return $result[0];
    }

}
