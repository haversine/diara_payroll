<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dash extends Controller_Main {

	public function action_index()
	{
        $this->template->content = View::factory('dash/index');

        $year=$this->request->query('year');
        $this->template->content->year = $year;
        $this->template->content->summary = Model_Employee::get_year_summary($year);

	}

    public function action_adduser()
    {
        $form_data = $this->request->post('user');
      //  Notify::success(count($form_data));
        //Notify::success($form_data["name"]);
        Model_Dash::create_new_user($form_data);


        Notify::success("user added");
        $this->redirect('dash?year='.date("Y"));

    }

} // End Welcome
