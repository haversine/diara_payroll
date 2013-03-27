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
            array(DB::expr('(MONTHNAME(tasks.created))'),'month'))
            ->from('users')
            ->join('tasks','LEFT')->on('users.id','=','tasks.user_id')
            //->where(DB::expr('YEAR(tasks.created)'),'=', $year)
            ->group_by('users.id',DB::expr('MONTHNAME(tasks.created)'))
            ->execute();
        $summary_array= $summary->as_array();
        $summary_array= concatenate_rows($summary_array);

    return $summary_array;
    }

    public static function  concatenate_rows($a)
    {
        $ordered_a = array()
        $count = count($a);
        $o=0;

        for ($i = 0; $i < $count; $i++) {

        if($i==0)
        {
        $ordered_a[]=a[$i];
        }
            //IF row is not the second-to-last
            if($i<$count-1){
                    //IF first element of this row is the same as the next row's
                   if($a[$i][0]==$a[$i+1][0]){
                       $count2 = $a[$i];
                       //Iterate through subelements of current row
                       for ($j = 0; $j < $count2; $j++) {
                       //if the current element is empty
                       if($a[$i][$j]=null){
                       //add the value from the next row to our ordered array
                        $ordered_a[$o][$j]+=$a[$i+1][$j];
                       }


                       }
                     }
                    else{
                    $o++;
                    $ordered_a[]=a[$i];
                    }



            }


        }


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

}
