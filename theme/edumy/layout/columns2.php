<?php
defined('MOODLE_INTERNAL') || die();
include($CFG->dirroot . '/theme/edumy/ccn/ccn_themehandler.php');
array_push($extraclasses, "ccn_context_frontend");
$bodyclasses = implode(" ",$extraclasses);
$bodyattributes = $OUTPUT->body_attributes($bodyclasses);
include($CFG->dirroot . '/theme/edumy/ccn/ccn_themehandler_context.php');
echo $OUTPUT->render_from_template('theme_boost/columns2', $templatecontext);

$admins    = explode(",",$CFG->siteadmins);
$hidemenu  = true;
if(in_array($USER->id,$admins)) {
    $hidemenu = false;

}

if($hidemenu) {
    echo '<script language="JavaScript">
    $("#ccnSettingsMenuContainer").hide();
</script>';
}
