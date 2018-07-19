<?php
include_once 'include/Webservices/Relation.php';
include_once 'vtlib/Vtiger/Module.php';
include_once 'vtlib/Vtiger/Link.php';
include_once 'vtlib/Vtiger/Field.php';
include_once 'includes/main/WebUI.php'; 
require_once('modules/ModTracker/ModTracker.php');
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE);


include_once('vtlib/Vtiger/Event.php');

//create custom field for supplier in user module
// Turn on debugging level
$Vtiger_Utils_Log = true;

// Include necessary classes
include_once('vtlib/Vtiger/Module.php');

// Define instances
$users = Vtiger_Module::getInstance('Users');

// Nouvelle instance pour le nouveau bloc
$block = Vtiger_Block::getInstance('LBL_MORE_INFORMATION', $users);


// Add field
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'Suppliername';
$fieldInstance->table = 'vtiger_users';
$fieldInstance->column = 'Suppliername';
$fieldInstance->label = 'Suppliername';
$fieldInstance->columntype = 'varchar';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$block->addField($fieldInstance);

die;

//add link for customoriicng js file
Vtiger_Link::addLink(56, "HEADERSCRIPT", "TITLE CAN BE ANY THING", "layouts/vlayout/modules/MODULENAME/resources/Custom.js", "", "", "");

die;


//add send email handler for expire pricing
Vtiger_Link::addLink(56, "DETAILVIEWBASIC", "Send notification", "javascript:Custom_Actions_Js.SendEmail('\$RECORD\$');", "", "0", "");

die;

//add event that will hit before save opp, its used for opp which has ben locked (request for pricing has been send and user are not allowed to edit theem)
Vtiger_Event::register('Potentials', 'vtiger.entity.beforedelete', 'PotentialsHandler', 'modules/Potentials/PotentialsHandler.php');

die;

//add event that will hit before save opp, its used for opp which has ben locked (request for pricing has been send and user are not allowed to edit theem)
Vtiger_Event::register('Potentials', 'vtiger.entity.beforesave', 'PotentialsHandler', 'modules/Potentials/PotentialsHandler.php');




//add custom Link on opp side bar
include_once('vtlib/Vtiger/Module.php');
$moduleInstance = Vtiger_Module::getInstance('MAIN MODULE');
$accountsModule = Vtiger_Module::getInstance('RELATED MODULE');
$relationLabel  = 'Custom Link';
$moduleInstance->setRelatedList(
      $accountsModule, $relationLabel, Array()
);
//add custom Link on opp side bar end

die;

//add updates widget on sidebar
include_once('modules/ModTracker/ModTracker.php');
$module = vtiger_module::getinstance("MODULENAME");
ModTracker::enabletrackingformodule(54);
die;

//required file to add comment field on summary page
//require_once 'modules/ModComments/ModComments.php';
//$commentsModule = Vtiger_Module::getInstance('ModComments');
//$fieldInstance = Vtiger_Field::getInstance('related_to', $commentsModule);
//$fieldInstance->setRelatedModules(array("MODULENAME"));// Give the Module name for which you want to add comment
//$detailviewblock = ModComments::addWidgetTo("MODULENAME");//Give the Module name for which you want to add comment


die;


//add link for customoriicng js file
Vtiger_Link::addLink(8, "HEADERSCRIPT", "CustomPricingJS", "layouts/vlayout/modules/Potentials/resources/CustomPricing.js", "", "", "");

die;

global $adb;
$adb->setDebug(true);
