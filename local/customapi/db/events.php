<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('MOODLE_INTERNAL') || die();
$observers = array(
    array(
        'eventname' => 'core\event\user_created',
        'callback' => 'local_customapi_observer::update_user_data',
    )
);