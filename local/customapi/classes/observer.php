<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('MOODLE_INTERNAL') || die();

class local_customapi_observer {

    public static function update_user_data(\core\event\user_created $event) {
        global $DB, $CFG;
       
        $update_header = "UPDATE {user_preferences} SET auth_forcepasswordchange = '0' WHERE userid = '" . $event->objectid . "'";
 
        $DB->execute($update_header);
        
    }
}