<?php
class Model_Task extends ORM
{

    public function get_formatted_time($task)
    {
   // $formattedtime = substr($task,0,5);
    return substr($task,0,5);
    }

    public function get_earned_money($task)
    {
    $rate=0.1;
    $money=(substr($task,0,2)*60*$rate)+(substr($task,3,5)*$rate)." €";
    return $money;
    }

    public static function get_total_hours($tasks)
    {
        $sum = 0;

        foreach ($tasks as $time) {

            $start = $time->time;
            $converted = ((int)(substr($start, -7, 2)) * 60 + (int)(substr($start, 3, -3)));
            $sum += $converted;


        }
        return sprintf('%02d',(floor($sum/60))) . ':' . sprintf('%02d',$sum%60);
    }

    public static function get_total_pay($tasks)
    {
        $sum = 0;
        foreach ($tasks as $time) {

            $start = $time->time;
            $converted = ((int)(substr($start, -7, 2)) * 60 + (int)(substr($start, 3, -3)));
            $sum += $converted;


        }
        return $sum * 0.1;
    }

    public static function create_new($form_data)
    {
        $user = ORM::factory('User')->where('username','=',$form_data['id'])->find();

        $tasks = ORM::factory('Task');
        $tasks->name = $form_data['name'];
        $tasks->time = $form_data['time'];
        $tasks->notes = $form_data['notes'];
        $tasks->user_id = $user->id;
        $tasks->created = date("Y-m-d H:i:s",time());
        $tasks->save();
    }

}