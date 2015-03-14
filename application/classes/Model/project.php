<?php defined('SYSPATH') or die('No direct script access.');

class Model_Project extends ORM{
    
    protected $_belongs_to = array(
      'user' => array(
          'model'=>'user',
          'foreign_key' => 'user_id'
      )  
    );
    
    protected $_has_many = array(
        'page' => array(
            'model' => 'page',
            'trough' => 'projects_pages'
        )
    );
    
}
