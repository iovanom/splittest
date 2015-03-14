<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template{
    
    public $template = 'template';
    public $is_login = FALSE;
    
    
    public function before() {
        parent::before();
        if(Auth::instance()->logged_in()){
            $this->is_login = TRUE;
        }
        $this->template->is_login = $this->is_login;
    }


    public function action_index()
    {
        if(!Auth::instance()->logged_in()){
            HTTP::redirect(URL::site('/home/login'));
        }
        $this->template->content = 'test';
    }
    
    public function action_login()
    {
        if(Auth::instance()->logged_in()){
            HTTP::redirect(URL::site());
        }
        if($_POST){
            $post = $this->request->post();
            $user = ORM::factory('User');
            $status = Auth::instance()->login($post['username'], $post['password']);
            if($status){
                HTTP::redirect(URL::site());
            }else{
                echo "<h2 align='center' style='color:red'>FAILED</h2>";
            }
        }
        $this->template->content = View::factory('login');
    }
    
    public function action_logout()
    {
        Auth::instance()->logout();
        HTTP::redirect(URL::site());
    }
    
    public function action_registre()
    {
        if($_POST){
            $post = $this->request->post();
            $model = ORM::factory('User');
            $model->values(array(
                'username'  => $post['username'],
                'email'     => $post['email'],
                'password'  => $post['password'],
                'confirm_password' => $post['confirm_password']
            ));
            try
            {
                $model->save();
                $model->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
                HTTP::redirect(URL::site('/'));
            }
            catch(ORM_Validation_Exception $e)
            {
                echo $e;
            }
        }
        $this->template->content = View::factory('registre');
    }
    
}


