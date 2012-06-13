<?php
 
/**
 * Settings for the Aerie theme
 */

defined('MOODLE_INTERNAL') || die;

// Adds our page to the structure of the admin tree

if ($ADMIN->fulltree) { 

// Page Background colour setting
$name = 'theme_aerie/pagebackgroundcolor';
$title = get_string('pagebackgroundcolor','theme_aerie');
$description = get_string('pagebackgroundcolordesc', 'theme_aerie');
$default = '#e9e9e9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Inside Wrapper Background colour setting
$name = 'theme_aerie/insidebackgroundcolor';
$title = get_string('insidebackgroundcolor','theme_aerie');
$description = get_string('insidebackgroundcolordesc', 'theme_aerie');
$default = '#d8d8eb';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Frame colour setting
$name = 'theme_aerie/framecolor';
$title = get_string('framecolor','theme_aerie');
$description = get_string('framecolordesc', 'theme_aerie');
$default = '#b3b3d9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Block colour setting
$name = 'theme_aerie/blockcolor';
$title = get_string('blockcolor','theme_aerie');
$description = get_string('blockcolordesc', 'theme_aerie');
$default = '#b3b3d9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Navbar and dock colour setting
$name = 'theme_aerie/navbarcolor';
$title = get_string('navbarcolor','theme_aerie');
$description = get_string('navbarcolordesc', 'theme_aerie');
$default = '#b3b3d9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Custom menu bar colour setting
$name = 'theme_aerie/custommenucolor';
$title = get_string('custommenucolor','theme_aerie');
$description = get_string('custommenucolordesc', 'theme_aerie');
$default = '#b3b3d9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Custom menu mouseover hover colour setting
$name = 'theme_aerie/custommenuhovercolor';
$title = get_string('custommenuhovercolor','theme_aerie');
$description = get_string('custommenuhovercolordesc', 'theme_aerie');
$default = '#ffff80';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Course topic box colour setting
$name = 'theme_aerie/topiccolor';
$title = get_string('topiccolor','theme_aerie');
$description = get_string('topiccolordesc', 'theme_aerie');
$default = '#e3e3e3';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Course highlighted topic box colour setting
$name = 'theme_aerie/highlightedtopiccolor';
$title = get_string('highlightedtopiccolor','theme_aerie');
$description = get_string('highlightedtopiccolordesc', 'theme_aerie');
$default = '#ffcc66';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Logo file setting
$name = 'theme_aerie/logo';
$title = get_string('logo','theme_aerie');
$description = get_string('logodesc', 'theme_aerie');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// Block region width
$name = 'theme_aerie/regionwidth';
$title = get_string('regionwidth','theme_aerie');
$description = get_string('regionwidthdesc', 'theme_aerie');
$default = 200;
$choices = array(150=>'150px', 170=>'170px', 200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Foot note setting
$name = 'theme_aerie/footnote';
$title = get_string('footnote','theme_aerie');
$description = get_string('footnotedesc', 'theme_aerie');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);

// Show the credits to MoodleBites for Theme Designers
$name = 'theme_aerie/mbcredits';
$title = get_string('mbcredits','theme_aerie');
$description = get_string('mbcreditsdesc', 'theme_aerie');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Custom CSS file
$name = 'theme_aerie/customcss';
$title = get_string('customcss','theme_aerie');
$description = get_string('customcssdesc', 'theme_aerie');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}