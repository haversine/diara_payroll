<?php
/**
 * Created by JetBrains PhpStorm.
 * User: madis
 * Date: 4/2/13
 * Time: 3:17 PM
 * To change this template use File | Settings | File Templates.
 */
class Model_Dash extends ORM
{

    public static function create_new_user($form_data)
    {
        $users = ORM::factory('User');
        $users->username = $form_data['name'];
        $users->google_id = 'a';
        $users->email = $form_data['email'];
        $users->logins = 0;
        $users->last_login = null;

        $users->save();
    }


}
