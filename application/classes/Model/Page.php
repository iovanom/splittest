<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM{
    
    protected $_belongs_to = array(
        'project' => array(
            'model' => 'Project',
            'foreign_key' => 'project_id',
        )
    );
}