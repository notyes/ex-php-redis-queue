<?php
namespace Tasks\Update;



class dbTest
{

    public function perform()
    {
        

        $db_config = array('hostname' => 'localhost',
           'username' => 'root',
           'password' => 'password',
           'database' => 'AA',
           'dbdriver' => 'mysqli',
           'pconnect' => false,
           'db_debug' => true
           );
        \ActiveRecord\ActiveDatabase::addConfig("read", $db_config);
        $db = \ActiveRecord\ActiveDatabase::get("read");


        $db->set( 'avatar_url', 'url' );
        $db->update('users');


        echo '<pre>';
        print_r( $this->args );
        echo '</pre>';
        

        echo '<pre>';
        print_r( date( 'Y-m-d H:i:s' ) );
        echo '</pre>';
        die();


        // echo $this->args['db'];
    }

}