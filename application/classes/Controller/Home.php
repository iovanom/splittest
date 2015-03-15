<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template{
    
    public $template = 'template';
    public $is_login = FALSE;
    public $user;
    
    
    public function before() {
        parent::before();
        if(Auth::instance()->logged_in()){
            $this->is_login = TRUE;
        }
        $this->template->is_login = $this->is_login;
        $this->user = Auth::instance()->get_user();
    }

//Display list of all projects
    public function action_index()
    {
        if(!Auth::instance()->logged_in()){
            HTTP::redirect(URL::site('/home/login'));
        }
        $projects = ORM::factory('Project')->where('user_id', '=', $this->user->id)->find_all();
        $view = View::factory('index');
        $view->projects = $projects;
        $this->template->content = $view;
    }
    
//Login action
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
    
//Logout action
    public function action_logout()
    {
        Auth::instance()->logout();
        HTTP::redirect(URL::site());
    }
    
//Registre action
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
    
// -----------Add new project action
    public function action_addProject()
    {
        if($this->is_login){
            if($this->request->method() === 'POST')
            {
                
                $post = $this->request->post();
                $project = ORM::factory('Project');
                $project->name = $post['name'];
                $project->user_id = $this->user->id;
                $project->save();
                $first_page = ORM::factory('Page');
                $first_page->url = $post['first_page'];
                $first_page->project_id = $project->id;
                $first_page->save();
                $second_page = ORM::factory('Page');
                $second_page->url = $post['second_page'];
                $second_page->project_id = $project->id;
                $second_page->save();
                
                HTTP::redirect(URL::site('/home/getScripts/' . $project->id));
                
            }else{
             
                $view = View::factory('addProject');
                $this->template->content = $view;
            }
            
        }else{
            HTTP::redirect(URL::site('/login'));
        }
    }
// --------page of project------------
    public function action_project()
    {
        $id = $this->request->param('id');
        if($id)
        {
            $project = ORM::factory('Project')->where('id', '=', (int)$id)->find();
            $pages = ORM::factory('Page')->where('project_id', '=', (int)$id)->find_all();
            $view = View::factory('project');
            $view->project = $project;
            $view->pages = $pages;
            $this->template->content = $view;
        }else{
            HTTP::redirect(URL::site());
        }
    }
    
// -------get scripts ------------
    public function action_getScripts()
    {
        $id = $this->request->param('id');
        if($id)
        {
            $project = ORM::factory('Project')->where('id', '=', (int)$id)->find();
            $pages = ORM::factory('Page')->where('project_id', '=', (int)$id)->find_all();
            foreach($pages as $page){
                $p[] = $page;
            }
            $view = View::factory('scripts');
            $view->project = $project;
            $view->pages = $p;
            $this->template->content = $view;
        }else{
            HTTP::redirect(URL::site());
        }
    }
}


