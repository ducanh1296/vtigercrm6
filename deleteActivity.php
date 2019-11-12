<?php

include_once 'include/database/PearDatabase.php';
include_once 'include/Webservices/Relation.php';
include_once 'vtlib/Vtiger/Module.php';
include_once 'includes/main/WebUI.php';

$db = PearDatabase::getInstance();
$myfile = fopen("deleteActivity.txt", "w");

$result = $db->pquery('SELECT crmid from vtiger_crmentity WHERE setype=? AND deleted=? AND createdtime < NOW() - INTERVAL 60 DAY ', array('Calendar', 0));
$num_rows = $db->num_rows($result);

for($i=0; $i<$num_rows; $i++) {
    $id = $db->query_result($result, $i,'crmid');
    $txt ="$id\n";
    $db->pquery('UPDATE vtiger_crmentity SET deleted=? WHERE crmid=?', array(1,$id));
    fwrite($myfile, $txt);
}
fclose($myfile);
?>