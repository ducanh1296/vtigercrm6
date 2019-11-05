<?php
//Add cuschdir('..');tom field in main table
include_once('vtlib/Vtiger/Module.php'); // this is mandatory
require_once("vtlib/Vtiger/Block.php");
require_once("vtlib/Vtiger/Field.php");
$fields = array(
    'Contacts' => array(
        'LBL_CUSTOM_INFORMATION' => array( //block
            'cf_760' => array(
                'label' => 'Verification',
                'uitype' => 33,
                'table' => 'vtiger_contactscf',
                'picklistvalues' => array('ERP', 'BL', 'CC', '19', '20'),
            ),
        ),
    ),
);
foreach ($fields as $ml => $mv) {
    $module = Vtiger_Module::getInstance($ml);
    if ($module) {
        foreach ($mv as $bl => $bv) {
            $block = Vtiger_Block::getInstance($bl, $module);
            if (!$block) {
                $block = new Vtiger_Block();
                $block->label = $bl;
                $block->__create($module);
            } else {
                // $block->__delete();
            }
            foreach ($bv as $fn => $fv) {
                $field = Vtiger_Field::getInstance($fn, $module);
                if (!$field) {
                    $field = new Vtiger_Field();
                    $field->name = $fn;
                    $field->label = $fv['label'];
                    $field->uitype = $fv['uitype'];
                    $field->table = $fv['table'];
                    $field->__create($block);

                    // uitype
                    if ($fv['uitype'] == 15 || $fv['uitype'] == 16 || $fv['uitype'] == 33) {
                        $field->setPicklistValues($fv['picklistvalues']);
                    }
                    if ($fv['uitype'] == 10) {
                        $field->setRelatedModules($fv['relatedModules']);
                    }

                    echo "Field " . $fv['label'] . " is created!<br>";
                } else {
                    if ($fv['uitype'] == 15 || $fv['uitype'] == 16 || $fv['uitype'] == 33) {
                        $field->setPicklistValues($fv['picklistvalues']);
                    }
                    // $field->__delete();
                    echo "Field " . $fv['label'] . " exist!<br>";
                }
            }
        }
    }
}

