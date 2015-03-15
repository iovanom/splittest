<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Stats extends Controller{
    // ------action to add visitors on page--------
    public function action_visitors()
    {
        $id = $this->request->param('id');
        if($id AND $this->request->is_ajax())
        {
            $page = ORM::factory('Page')->where('id', '=', (int)$id)->find();
            $page->visitors = $page->visitors + 1;
            $page->save();
            $this->response->body("{response : true}");
        }else{
            HTTP::redirect(URL::site());
        }
        
    }
    
// -------action to add the active visitors on page--------
    public function action_activeVisitors()
    {
        $id = $this->request->param('id');
        if($id )
        {
            $page = ORM::factory('Page')->where('id', '=', (int)$id)->find();
            $page->active_visitors = $page->active_visitors + 1;
            $page->save();
            $this->response->body("{response : true}");
        }else{
            HTTP::redirect(URL::site());
        }
    }
}

