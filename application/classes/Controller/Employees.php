<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Employees extends Controller_Main {

    public function action_view()
    {
        $this->template->content = View::factory('employees/view');
        $this->template->content->tasks = ORM::factory('Task')->find_all();

       //$this->template->content->employee = ORM::factory('User', $this->request->param('id'));

        $month = $this->request->query('month');
        $this->template->content->month = $month;

        $year = $this->request->query('year');
        $this->template->content->year = $year;
        //$this->template->content->month = $month;

        //$year = $this->request->query('year');
       // $this->template->content->year = $year;
    }

} // End Welcome