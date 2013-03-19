<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Employees extends Controller_Main {

    public function action_view()
    {
        $this->template->content = View::factory('employees/view');
        $this->template->content->employee = ORM::factory('User', $this->request->param('id'));

        $month = $this->request->query('month');
        $this->template->content->month = $month;

        $year = $this->request->query('year');
        $this->template->content->year = $year;


        $this->template->content->tasks = ORM::factory('Task')
            ->where('user_id', '=', $this->request->param('id'))
            ->and_where(DB::expr('MONTH(created)'), '=', $month)
            ->and_where(DB::expr('YEAR(created)'), '=', $year)->find_all();

        // SELECT * FROM tasks WHERE user_id = <user-id> AND MONTH(created) = <month> AND YEAR(created) = <year>;

    }

} // End Welcome