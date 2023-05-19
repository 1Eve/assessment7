<?php

/**
*@package assessment7 
*/

namespace Inc\Api\CallBacks;

use Inc\Base\BaseController;

class AdminCB extends BaseController
{
    public function AddEmployee(){
        return require_once $this->plugin_path.'templates/AddEmployee.php'; 
    }

    public function ViewEmployee(){
        return require_once $this->plugin_path.'templates/ViewEmployee.php'; 
    }
}