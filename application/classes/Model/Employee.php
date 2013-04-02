<?php
/**
 * Created by JetBrains PhpStorm.
 * User: madis
 * Date: 3/26/13
 * Time: 9:38 PM
 * To change this template use File | Settings | File Templates.
 */
class Model_Employee extends ORM
{

    public static function get_year_summary($year)
    {

        $summary= DB::select(array('users.username', 'username'),array(DB::expr('SEC_TO_TIME(SUM(TIME_TO_SEC(tasks.time)))'),'worktotal'),
            array(DB::expr('(MONTH(tasks.created))'),'month'))
            ->from('users')
            ->join('tasks','LEFT')->on('users.id','=','tasks.user_id')
            ->where(DB::expr('YEAR(tasks.created)'),'=', $year)
            ->group_by('users.id',DB::expr('MONTH(tasks.created)'))
            ->execute();
        $summary_array= $summary->as_array();
        $summary_array= Model_Employee::concatenate_rows($summary_array);

        return $summary_array;
    }

    public static function concatenate_rows($a)
    {

        $formatted_array = array();

        foreach( $a as $element ) {
            $formatted_array[ $element['username'] ][] = $element;
        }
        return $formatted_array;

    }





    public static function get_total_rounded_pay($row)
    {
        $sum = 0;

            $start = $row;
            $converted = ((int)(substr($start, 0, 2)) * 60);
            $sum += $converted;

        return $sum * 0.1;
    }

    public static function get_total_rounded_time($row)
    {
        return ((int)(substr($row, 0, 2)));
    }

    public static function name_to_id($user)
    {
        $user = ORM::factory('User')->where('username','=',$user)->find();
        return $user->id;
    }

}
