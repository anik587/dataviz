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
 *  external API
 *
 * @package    local_customapi
 * @category   external
 * @copyright  2020 Dnyaneshwar K.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 3.1
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir . '/externallib.php');
require_once("$CFG->libdir/externallib.php");
require_once("$CFG->dirroot/mod/assign/locallib.php");
/**
 *  external functions
 *
 * @package    customapi
 * @category   external
 * @copyright  2020 Dnyaneshwar <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class local_customapi_external extends external_api {

    /**
     * Describes the parameters for add_course_rating.
     *
     * @return external_function_parameters
     * @since Moodle 3.1
     */
    public static function addcourserating_parameters() {
         return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Course ID'),
                'userid' => new external_value(PARAM_INT, 'User ID'),
                'rating' => new external_value(PARAM_INT, 'Rating'),
            )
         );
    }
    
    /** 
     * Returns description of method result
     * @return external_description
     */
    public static function addcourserating_returns() {
       $structure = new external_single_structure(array(
            'userid' => new external_value(PARAM_INT, 'status'),
           'rating' => new external_value(PARAM_INT, 'rating')
        ));
        
        return new external_multiple_structure($structure);
    }
    
    
    /**
     * Add course rating
     * @param int $courseid
     * @param  int $userid
     * $param int $rating
     * @throws invalid_parameter_exception
     */
    public static function addcourserating($courseid,$userid,$rating) {
        global  $DB;
        $return_arr = array();
        if(isset($rating)){
            $transaction = $DB->start_delegated_transaction(); 
            $ratings = new stdClass();
            $ratings->id = '';
            $ratings->courseid = $courseid;
            $ratings->userid = $userid;
            $ratings->rating = $rating;
            $ratings->timestamp = time();
          
            $success = $DB->insert_record("local_course_rating", $ratings); 
           
            $return_arr[] = array(
                'userid' => $userid,
                'rating' => $rating 
            );
            
            
            $transaction->allow_commit();
            return $return_arr;
        }
    }
    
    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function getcourserating_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'ID of courseid'),
            )
        );
    }

    /** 
     * Returns description of method result
     * @return external_description
     */
    public static function getcourserating_returns() {
        $structure = new external_single_structure(array(
           'rating' => new external_value(PARAM_INT, 'rating')
        ));
        
        return new external_multiple_structure($structure);
    }
    
     /**
     * Get rating by courses
     * @param int $courseid 
     * 
     * @throws invalid_parameter_exception
     */
    public static function getcourserating($courseid) {
        global $DB;
         
        $avgRating = 0;
        $return_arr = array();
        $courseRatings =  $DB->get_records_sql("SELECT rating from {local_course_rating} WHERE courseid = ?", array($courseid));
        $totalRecord =  $DB->count_records("local_course_rating", array("courseid" => $courseid));
        foreach($courseRatings as $ratings){
            $totalRate = $ratings->rating;
            $max = ($max + $totalRate);
            $avgRating = ceil($max / $totalRecord);
            $return_arr[] = array(
                 'rating' => $avgRating 
            );
        }
        return $return_arr;
    }
    
      /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function getuserrating_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'ID of courseid'),
                'userid' => new external_value(PARAM_INT, 'ID of user'),
            )
        );
    }

    /** 
     * Returns description of method result
     * @return external_description
     */
    public static function getuserrating_returns() {
        $structure = new external_single_structure(array(
           'rating' => new external_value(PARAM_INT, 'rating')
        ));
        
        return new external_multiple_structure($structure);
    }
    
     /**
     * Get rating by courses
     * @param int $courseid 
     * 
     * @throws invalid_parameter_exception
     */
    public static function getuserrating($courseid,$userid) {
        global $DB;
         
        $avgRating = 0;
        $return_arr = array();
        $courseRatings =  $DB->get_records_sql("SELECT rating from {local_course_rating} WHERE courseid = ? AND userid = ?", array($courseid,$userid));
       
        foreach($courseRatings as $ratings){
            $totalRate = $ratings->rating;
            $return_arr[] = array(
                 'rating' => $totalRate 
            );
        }
        return $return_arr;
    }

    public static function createsession_parameters() {
         return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Course ID'),
                'userid' => new external_value(PARAM_INT, 'Course ID'),
                'name' => new external_value(PARAM_TEXT, 'User ID'),
                'introformat' => new external_value(PARAM_INT, 'Rating'),
                'meetingid' => new external_value(PARAM_TEXT, 'Rating'),
                'openingtime' => new external_value(PARAM_TEXT, 'Rating'),
                'closingtime' => new external_value(PARAM_TEXT, 'Rating'),
                'userlimit' => new external_value(PARAM_INT, 'Rating'),
            )
         );
    }
    
    /** 
     * Returns description of method result
     * @return external_description
     */
    public static function createsession_returns() {
        
       $structure = new external_single_structure(array(
            'meetingid' => new external_value(PARAM_INT, 'meetingid')
        ));
        
        return new external_multiple_structure($structure);
    }
    
    public static function createsession($courseid,$userid,$name,$introformat ,$meetingid,$openingtime,$closingtime,$userlimit) {

        global  $DB, $CFG;
         require_once($CFG->dirroot . '/course/lib.php');
        $return_arr = array();
        if(isset($courseid)){
            $transaction = $DB->start_delegated_transaction(); 
            $session = new stdClass();
            $session->modulename='bigbluebuttonbn';
            $session->course = $courseid;
            $session->section  = '1';
            $session->visible = '1';
            $session->name = $name;
            $session->introformat = $introformat;
            $session->meetingid = $meetingid;
            $session->userlimit = $userlimit;
            $session->participants = $participants;
            $session->openingtime = $openingtime;
            $session->closingtime = $closingtime;
            $session->timecreated = time();
            $session->introeditor = array('text' => '','format' => 1);
            $participants = '[{"selectiontype":"role","selectionid":"3","role":"moderator"}]';
            $session->participants = $participants;
            $lastid = create_module($session);

            $return_arr[] = array(
                'meetingid' => $lastid->id
            );
            
            
            $transaction->allow_commit();
            return $return_arr;
        }
    }

     public static function assign_save_submission_parameters() {
        global $CFG;
        $instance = new assign(null, null, null);
        $pluginsubmissionparams = array();

        foreach ($instance->get_submission_plugins() as $plugin) {
            if ($plugin->is_visible()) {
                $pluginparams = $plugin->get_external_parameters();
                if (!empty($pluginparams)) {
                    $pluginsubmissionparams = array_merge($pluginsubmissionparams, $pluginparams);
                }
            }
        }

        return new external_function_parameters(
            array(
                'assignmentid' => new external_value(PARAM_INT, 'The assignment id to operate on'),
                'userid' => new external_value(PARAM_INT, 'The assignment id to operate on'),
                'tabhelp' => new external_value(PARAM_TEXT, 'The assignment id to operate on'),
                'tabhint' => new external_value(PARAM_TEXT, 'The assignment id to operate on'),
                'tabsolution' => new external_value(PARAM_TEXT, 'The assignment id to operate on'),
                'time' => new external_value(PARAM_TEXT, 'The assignment id to operate on'),
                'plugindata' => new external_single_structure(
                    $pluginsubmissionparams
                )
            )
        );
    }

    /**
     * Save a student submission for a single assignment
     *
     * @param int $assignmentid The id of the assignment
     * @param array $plugindata - The submitted data for plugins
     * @return array of warnings to indicate any errors
     * @since Moodle 2.6
     */
    public static function assign_save_submission($assignmentid, $userid ,$tabhelp,$tabhint,$tabsolution,$time, $plugindata) {
        global $CFG, $USER;
        
        $params = self::validate_parameters(self::assign_save_submission_parameters(),
                                            array('assignmentid' => $assignmentid,
                                                    'userid' => $userid,
                                                    'tabhelp' => $tabhelp,
                                                    'tabhint' => $tabhint,
                                                    'tabsolution' => $tabsolution,
                                                    'time' => $time,
                                                  'plugindata' => $plugindata));
        
        list($assignment, $course, $cm, $context) = self::validate_assign($params['assignmentid']);

        $notices = array();

        $assignment->update_effective_access($params['userid']);
        if (!$assignment->submissions_open($params['userid'])) {
            $notices[] = get_string('duedatereached', 'assign');
        } else {
            $submissiondata = (object)$params['plugindata'];
            $assignment->assign_save_submission($submissiondata, $notices, $userid ,$tabhelp,$tabhint,$tabsolution,$time);
            $return_arr[] = array(
                'message' => get_string('eventassessablesubmitted', 'assign')
            );
            return $return_arr;
        }
        
        $warnings = array();
        foreach ($notices as $notice) {
            $warnings[] = self::generate_warning($params['assignmentid'],
                                                 'couldnotsavesubmission',
                                                 $notice);
        }

        return $warnings;
    }

    public static function generate_warning($assignmentid, $warningcode, $detail) {
        $warningmessages = array(
            'couldnotlock'=>'Could not lock the submission for this user.',
            'couldnotunlock'=>'Could not unlock the submission for this user.',
            'couldnotsubmitforgrading'=>'Could not submit assignment for grading.',
            'couldnotrevealidentities'=>'Could not reveal identities.',
            'couldnotgrantextensions'=>'Could not grant submission date extensions.',
            'couldnotrevert'=>'Could not revert submission to draft.',
            'invalidparameters'=>'Invalid parameters.',
            'couldnotsavesubmission'=>'Could not save submission.',
            'couldnotsavegrade'=>'Could not save grade.'
        );

        $message = $warningmessages[$warningcode];
        if (empty($message)) {
            $message = 'Unknown warning type.';
        }

        return array('item' => s($detail),
                     'itemid'=>$assignmentid,
                     'warningcode'=>$warningcode,
                     'message'=>$message);
    }

    /**
     * Describes the return value for save_submission
     *
     * @return external_single_structure
     * @since Moodle 2.6
     */
    public static function assign_save_submission_returns() {
        $structure = new external_single_structure(array(
            'message' => new external_value(PARAM_TEXT, 'retun success message')
        ));
        
        return new external_multiple_structure($structure);
    }

    /**
     * Utility function for validating an assign.
     *
     * @param int $assignid assign instance id
     * @return array array containing the assign, course, context and course module objects
     * @since  Moodle 3.2
     */
    protected static function validate_assign($assignid) {
        global $DB;

        // Request and permission validation.
        $assign = $DB->get_record('assign', array('id' => $assignid), 'id', MUST_EXIST);
        list($course, $cm) = get_course_and_cm_from_instance($assign, 'assign');

        $context = context_module::instance($cm->id);
        // Please, note that is not required to check mod/assign:view because is done by validate_context->require_login.
        self::validate_context($context);
        $assign = new assign($context, $cm, $course);

        return array($assign, $course, $cm, $context);
    }

}
