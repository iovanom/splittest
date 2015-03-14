<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
            $model = ORM::factory('User');
            $model->values(array(
                'username' => 'demo',
                'email' => 'demo@demo.de',
                'password' => 'demo123456',
                'confirm_password' => 'demo123456'
            ));
            $model->save();
            
            $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
    }

} // End Welcome
