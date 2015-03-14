<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM{
    
    protected $_has_many = array(
        'project' => array(
            'model' => 'project',
            'trough' => 'projects_pages'
        )
    );
}