<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dash extends Controller_Main {

	public function action_index()
	{
        $this->template->content = View::factory('dash/index');

        $year=$this->request->query('year');
        $this->template->content->year = $year;
        $this->template->content->summary = Model_Employee::get_year_summary($year);
	}

} // End Welcome
