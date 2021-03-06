<?php
/**
 * Created by JetBrains PhpStorm.
 * User: madis
 * Date: 3/21/13
 * Time: 2:15 PM
 * To change this template use File | Settings | File Templates.
 */
class Controller_Tasks extends Controller_Main
{


    public function action_delete()
    {
        $id = $this->request->param('id');
        ORM::factory('Task')->where('id','=', $id)->find()->delete();
        Notify::success("Task deleted");
        $this->redirect('dash?year='.date("Y"));

    }

    public function action_edit()
    {
        $this->template->content = View::factory('tasks/view');
        $this->template->content->task_edit = ORM::factory('Task')->where('id', '=',$this->request->param('id'))->find();
    }

    public function action_create_new()
    {
        $form_data = $this->request->post('task');
        Notify::success(count($form_data));
        Notify::success($form_data["id"]);
        Model_Task::create_new($form_data);


        Notify::success("Task added");
        $this->redirect('dash?year='.date("Y"));

    }

    public function action_update()
    {
        $form_data = $this->request->post('edit');
        //Notify::success($this->request->param('id'));
       Notify::success($form_data["notes"]);
        Model_Task::task_update($form_data);


        Notify::success("Task edited");
        $this->redirect('dash?year='.date("Y"));

    }


}
