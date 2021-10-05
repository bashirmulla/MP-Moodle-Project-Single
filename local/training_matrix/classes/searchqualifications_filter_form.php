<?php
// This file is part of eMailTest plugin for Moodle - http://moodle.org/
//
// eMailTest is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// eMailTest is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with eMailTest.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Sample plugin
 *
 * @package    training_matrix
 * @copyright  2020 Calm-solutions.com
 * @author     Bash & SAM Harun & Mahedi
 */

defined('MOODLE_INTERNAL') || die;
$pluginname = 'training_matrix';
require_once($CFG->libdir.'/formslib.php');

//$PAGE->requires->css(new moodle_url($CFG->wwwroot.'/local/'.$pluginname.'/js/datatables/datatables.min.css'));
//$PAGE->requires->js(new moodle_url($CFG->wwwroot.'/local/'.$pluginname.'/js/datatables/datatables-1.10.18/js/jquery.dataTables.min.js'),true);
//$PAGE->requires->js(new moodle_url($CFG->wwwroot.'/local/'.$pluginname.'/js/datatables/datatables-1.10.18/js/dateSort.js'));

$PAGE->requires->js(new moodle_url($CFG->wwwroot.'/local/'.$pluginname.'/js/searchqualifications.js'));


class searchqualifications_filter_form extends moodleform {

    public function definition() {
        global $USER,$CFG;

        $mform    = $this->_form;

        $mform->_maxFileSize = 90000000;

        $mform->_formname = "searchqualifications_filter_form";

        $mform->addElement('html', html_writer:: start_tag('fieldset',array('class'=>'scheduler-border')));
        $mform->addElement('html', html_writer:: tag('legend','Filters',array('class'=>'scheduler-border')));

        //start row
//        $mform->addElement('html', html_writer:: start_tag('div',array('class'=>'form-row')));

        $select = $mform->addElement('select', 'certificate_type', 'Certificate type', certificatetype_dropdown_list()," multiple size=200");
      //  $select->setMultiple(true);

//        $mform->addElement('html', html_writer:: end_tag('div'));
        //end row
        //start row
        $mform->addElement('html', html_writer:: start_tag('div',array('class'=>'form-row')));



        $mform->addElement('html', html_writer:: div('','col-md-5 col-lg-9 form-group-ele'));
        $mform->addElement('html', html_writer:: start_tag('div',array('class'=>'form-group col-md-7 col-lg-3 form-group-ele','style'=>'text-align:center;')));
        $mform->addElement('html', html_writer:: tag('button','Search',array('type'=>'button','id'=>'searchqualifications','class'=>'btn btn-primary','style' =>'margin-right:5px')));
        $mform->addElement('html', html_writer::tag('a', 'Reload', array('href'=>$CFG->wwwroot.'/local/training_matrix/searchqualifications.php?m=6_6','class'=>'btn btn-secondary')));
        $mform->addElement('html', html_writer:: end_tag('div'));

        $mform->addElement('html', html_writer:: end_tag('div'));
        //end row

        $mform->addElement('html', html_writer:: end_tag('fieldset'));


    }

}