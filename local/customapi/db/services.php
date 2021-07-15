<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External functions and service definitions.
 *
 * @package    local_lmsws
 * @copyright  2020 Dnyaneshwar K.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$functions = array(

    'local_customapi_addcourserating' => array(
        'classname'     => 'local_customapi_external',
        'methodname'    => 'addcourserating',
        'classpath'     => 'local/customapi/externallib.php',
        'description'   => 'Add course rating given by student.',
        'type'          => 'write',
        'services'      => "Moodle Custom API service"
    ),
    'local_customapi_getcourserating' => array(
        'classname'     => 'local_customapi_external',
        'methodname'    => 'getcourserating',
        'classpath'     => 'local/customapi/externallib.php',
        'description'   => 'get course rating given by student.',
        'type'          => 'write',
        'services'      => "Moodle Custom API service"
    ),
    'local_customapi_getuserrating' => array(
        'classname'     => 'local_customapi_external',
        'methodname'    => 'getuserrating',
        'classpath'     => 'local/customapi/externallib.php',
        'description'   => 'get own rating given by student to course.',
        'type'          => 'write',
        'services'      => "Moodle Custom API service"
    ),
    'local_customapi_createsession' => array(
        'classname'     => 'local_customapi_external',
        'methodname'    => 'createsession',
        'classpath'     => 'local/customapi/externallib.php',
        'description'   => 'create live BB Session.',
        'type'          => 'write',
        'services'      => "Moodle Custom API service"
    ),
    'local_customapi_createsession' => array(
        'classname'     => 'local_customapi_external',
        'methodname'    => 'createsession',
        'classpath'     => 'local/customapi/externallib.php',
        'description'   => 'create live BB Session.',
        'type'          => 'write',
        'services'      => "Moodle Custom API service"
    ),
    'local_customapi_verifyactivity' => array(
        'classname'     => 'local_customapi_external',
        'methodname'    => 'createsession',
        'classpath'     => 'local/customapi/externallib.php',
        'description'   => 'create live BB Session.',
        'type'          => 'write',
        'services'      => "Moodle Custom API service"
    ),
    'local_customapi_assign_save_submission' => array(
        'classname'     => 'local_customapi_external',
        'methodname'    => 'assign_save_submission',
        'classpath'     => 'local/customapi/externallib.php',
        'description'   => 'assignment submission.',
        'type'          => 'write',
        'services'      => "Moodle Custom API service"
    )

);

$services = array(
   'Moodle Custom API service'  => array(
        'functions' => array (
            'local_customapi_addcourserating',
            'local_customapi_getcourserating',
            'local_customapi_getuserrating',
            'local_customapi_createsession',
            'local_customapi_assign_save_submission',
            'core_completion_get_activities_completion_status',
            'core_completion_get_course_completion_status',
            'core_completion_mark_course_self_completed',
            'core_completion_update_activity_completion_status_manually',
            'core_course_get_activities_overview',
            'core_course_get_categories',
            'core_course_get_contents',
            'core_course_get_courses',
            'core_course_get_courses_by_field',
            'core_course_get_course_module',
            'core_course_get_course_module_by_instance',
            'core_course_search_courses',
            'core_course_view_course',
            'core_enrol_get_course_enrolment_methods',
            'core_enrol_get_enrolled_users',
            'core_enrol_get_users_courses', 
            'core_user_get_users',
            'enrol_manual_enrol_users',
            'core_user_get_users_by_field',
            'core_user_remove_user_device',
            'core_user_update_picture',
            'core_user_view_user_list',
            'core_user_view_user_profile',
            'core_webservice_get_site_info',
            'enrol_self_enrol_user',
            'enrol_self_get_instance_info',
            'mod_assign_get_assignments',
            'mod_scorm_get_scorms_by_courses',
            'mod_scorm_get_scorm_attempt_count',
            'mod_scorm_get_scorm_scoes',
            'mod_scorm_get_scorm_sco_tracks',
            'mod_scorm_get_scorm_user_data',
            'mod_scorm_insert_scorm_tracks',
            'mod_scorm_launch_sco',
            'mod_scorm_view_scorm',
            'core_user_create_users',
            'core_course_create_courses',
            'core_get_component_strings',   // Don't remove this, the app relies on this to check the min version.
        ),
        'enabled' => 1,
        'restrictedusers' => 0,
        'shortname' => 'local_lmsws',
        'downloadfiles' => 1,
        'uploadfiles' => 1
    ),
);