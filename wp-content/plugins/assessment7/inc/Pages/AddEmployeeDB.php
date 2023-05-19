<?php 
/**
*@package assessment7 
*/

namespace Inc\Pages;
//security check 
if(!defined('ABSPATH')){
    echo 'File not found';
    exit;
}

class AddEmployeeDB{
    function register(){
        $this->add_emplpoyee_to_db();
        $this->enter_employee_to_db();
    }
    function enter_employee_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'employee';

        $employee_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            employee_name text NOT NULL,
            employee_email text NOT NULL

        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($employee_details);
    }

    function add_emplpoyee_to_db(){
        if(isset($_POST[''])){
            $data =[
                'employee_name'=> $_POST['EmployeeName'],
                'employee_email'=> $_POST['EmployeeEmail']   
            ];

            global $wpdb;
            global $successmessage;
            global $errormessage;

            $successmessage = false;
            $errormessage = false;

            $table_name = $wpdb->prefix.'tickets';

            $result = $wpdb->insert($table_name, $data, $format=NULL);

            if($result == true){
                $successmessage = true;
            }else{
                $errormessage = true;
            }
        }
    }

   
    }
    



