<?php
class Model_User extends Model_Auth_User
{

    public static function employee($employee){
        $employee = ucwords(str_replace('-',' ',$employee ));
        return $employee;
    }

    public static function month($month){
        $month = date("F", mktime(0, 0, 0, $month));
        return __($month);
    }

    public static function year($year){
        return $year;
    }

    public function rules()
    {
        return [
            'google_id' => [
                ['not_empty']
            ]
        ];
    }
}