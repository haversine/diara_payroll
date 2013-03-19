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

}