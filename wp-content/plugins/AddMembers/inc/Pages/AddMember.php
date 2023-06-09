<?php
/**
 * @package AddMembersPlugin
 */

namespace Inc\Pages;

class AddMember{
    public function register(){
        $this->create_table_to_db();
        $this->add_member_to_db();
    }

    //CREATING THE TABLE IN DATABASE
    function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'members';

        $member_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            name varchar(200) NOT NULL AUTO_INCREMENT,
            phone_number text NOT NULL,
            email text NOT NULL
        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($member_details);
        echo 'Created';
    }

    function add_member_to_db(){
        if(isset($_POST['submitbtn'])){
            $data =[
                'name'=> $_POST['fname'],
                'phone_number'=> $_POST['p_number'],
                'email'=> $_POST['email']
            ];

            global $wpdb;
            global $addmsg;
            global $errormsg;

            $addmsg = false;
            $errormsg = false;

            $table_name = $wpdb->prefix.'members';

            $results = $wpdb->insert($table_name, $data, $format=NULL);

            if($results == true){
                $addmsg = true;
                echo "<script> alert('Member added successfully!'); </script>";
            }else{
                $errormsg = true;
                echo "<script> alert('failed!!!'); </script>";
            }
        }
    }
}