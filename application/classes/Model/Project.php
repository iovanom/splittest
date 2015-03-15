<?php defined('SYSPATH') or die('No direct script access.');

class Model_Project extends ORM{
    
    protected $_belongs_to = array(
      'user' => array(
          'model'=>'User',
          'foreign_key' => 'user_id'
      )  
    );
    
    protected $_has_many = array(
        'page' => array(
            'model' => 'Page',
            'foreign_key' => 'project_id',
        )
    );
    
}
