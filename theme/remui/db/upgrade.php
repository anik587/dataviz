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
 * Theme remui upgrade hook
 * @package   theme_remui
 * @copyright (c) 2020 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Yogesh Shirsath
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Fix wrongly names video field options
 *
 * @param int $customfieldid Custom field category id.
 */
function theme_remui_delete_old_custom_fields($customfieldid) {
    global $DB;
    $wrongnames = ['Course Intro Video Url', 'Course Intro Video Url (Embeded)', 'Course Intro Video Url (Embedded)'];

    foreach ($wrongnames as $wrongname) {
        $shortname = "edw" . strtolower(str_replace(' ', '', $wrongname));

        $record = array(
            'shortname' => $shortname,
            'name' => $wrongname,
            'categoryid' => $customfieldid
        );
        if ($DB->record_exists('customfield_field', $record)) {
            $DB->delete_records('customfield_field', $record);
        }
    }
}

/**
 * Process course custom field required for enrolment page layout .
 */
function theme_remui_course_custom_fields() {
    global $DB;
    // Create Custom Fields Required for enrollment page.
    $customfieldid = get_config('theme_remui', 'remui_customfield_catid');
    if (!$customfieldid || !$DB->record_exists('customfield_category', array('id' => $customfieldid))) {

        $customfieldid = theme_remui_create_customfield_category('RemUI Custom Fields');
        set_config('remui_customfield_catid', $customfieldid, 'theme_remui');
    }

    theme_remui_delete_old_custom_fields($customfieldid);

    $customfields = [
        [
            'fieldname' => 'Course Duration in Hours',
            'type' => 'text',
        ],
        [
            'fieldname' => 'Course Intro Video Url (Embedded)',
            'type' => 'text',
        ],
        [
            'fieldname' => 'Skill Level',
            'type' => 'select',
            'options' => [
                'options' => "Beginner\n Intermediate\n Advanced",
                'defaultvalue' => 'Beginner',
            ],
        ],
    ];

    foreach ($customfields as $customfield) {

        $replacefor = [' ', '(', ')'];
        $replacewith = ['', '', ''];
        $filteredname = str_replace($replacefor, $replacewith, $customfield['fieldname']);
        $shortname = "edw" . strtolower($filteredname);

        $options = [];
        if (isset($customfield['options'])) {
            $options = $customfield['options'];
        }

        // Make sure not to repeat the fields.
        if (!$DB->record_exists('customfield_field', array(
            'shortname' => $shortname,
            'name' => $customfield['fieldname'],
            'categoryid' => $customfieldid
            ))) {
            theme_remui_create_custom_field($customfieldid, $customfield['fieldname'], $customfield['type'], $options);
        }
    }
}

/**
 * upgrade this edwiserform plugin database
 * @param int $oldversion The old version of the edwiserform local plugin
 * @return bool
 */
function xmldb_theme_remui_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2019070203) {

        // Creating theme_remui_section_instance.
        $table = new xmldb_table('theme_remui_section_instance');
        $table->addField(new xmldb_field('id', XMLDB_TYPE_INTEGER, 10, null, true, true));
        $table->addField(new xmldb_field('sectid', XMLDB_TYPE_INTEGER, 10, null, true));
        $table->addField(new xmldb_field('name', XMLDB_TYPE_CHAR, 255, null, true));
        $table->addField(new xmldb_field('deleted', XMLDB_TYPE_INTEGER, 1, null, true, null, 0));
        $table->addField(new xmldb_field('visible', XMLDB_TYPE_INTEGER, 1, null, true, null, 1));
        $table->addField(new xmldb_field('timecreated', XMLDB_TYPE_INTEGER, 10, null, true));
        $table->addField(new xmldb_field('timemodified', XMLDB_TYPE_INTEGER, 10, null, true));
        $table->addField(new xmldb_field('configdata', XMLDB_TYPE_TEXT, null, null, false));
        $table->addField(new xmldb_field('draftconfig', XMLDB_TYPE_TEXT, null, null, false));
        $table->addKey(new xmldb_key('primary', XMLDB_KEY_PRIMARY, array('id')));

        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        set_config('createfrontpagesections', true, 'theme_remui');

        upgrade_plugin_savepoint(true, 2019070203, 'theme', 'remui');
    }


    if ($oldversion < 2021010701) {

        // Creating theme_remui_section_instance.
        $table = new xmldb_table('edublock');
        $table->addField(new xmldb_field('id', XMLDB_TYPE_INTEGER, 10, null, true, true));
        $table->addField(new xmldb_field('assignment', XMLDB_TYPE_INTEGER, 10, null, true));
        $table->addField(new xmldb_field('intro', XMLDB_TYPE_TEXT, null, null, false));
        $table->addField(new xmldb_field('help', XMLDB_TYPE_TEXT, null, null, false));
        $table->addField(new xmldb_field('hints', XMLDB_TYPE_TEXT, null, null, false));
        $table->addField(new xmldb_field('solution', XMLDB_TYPE_TEXT, null, null, false));
        $table->addField(new xmldb_field('block_library', XMLDB_TYPE_TEXT, null, null, false));
        $table->addField(new xmldb_field('timecreated', XMLDB_TYPE_INTEGER, 10, null, true));
        $table->addField(new xmldb_field('timemodified', XMLDB_TYPE_INTEGER, 10, null, true));
        $table->addKey(new xmldb_key('primary', XMLDB_KEY_PRIMARY, array('id')));

        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        upgrade_plugin_savepoint(true, 2021010701, 'theme', 'remui');
    }

    if ($oldversion < 2021010702) {
        // Define field hidegrader to be added to assign.
        $table = new xmldb_table('assign');
        $field = new xmldb_field('isedublock', XMLDB_TYPE_INTEGER, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, '0', null);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('instruction', XMLDB_TYPE_TEXT, null, null, false);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('help', XMLDB_TYPE_TEXT, null, null, false);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('hints', XMLDB_TYPE_TEXT, null, null, false);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('solution',XMLDB_TYPE_TEXT, null, null, false);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('block_library', XMLDB_TYPE_TEXT, null, null, false);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Assignment savepoint reached.
        upgrade_plugin_savepoint(true, 2021010702, 'theme', 'remui');
    }

    if ($oldversion < 2021010703) {
        // Define field hidegrader to be added to assign.
        $table = new xmldb_table('assignsubmission_onlinetext');
        $field = new xmldb_field('tabhelp', XMLDB_TYPE_CHAR, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null, null);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('tabhint', XMLDB_TYPE_CHAR, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null, null);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('tabsolution',  XMLDB_TYPE_CHAR, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null, null);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('time', XMLDB_TYPE_CHAR, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null, null);

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }


        // Assignment savepoint reached.
        upgrade_plugin_savepoint(true, 2021010703, 'theme', 'remui');
    }

    theme_remui_course_custom_fields();

    $customizer = theme_remui\customizer\customizer::instance();
    $customizer->import_user_tour();
    return true;
}
