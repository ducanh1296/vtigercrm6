<?php /* Smarty version Smarty-3.1.7, created on 2019-11-06 02:15:09
         compiled from "C:\xamppold\htdocs\vtigercrm6.5\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\SalutationDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288825dc22cade59701-05362723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '555b1121a8ddbf77bdad1a33eaa0f60c5581855a' => 
    array (
      0 => 'C:\\xamppold\\htdocs\\vtigercrm6.5\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\SalutationDetailView.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288825dc22cade59701-05362723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5dc22cade6aa6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc22cade6aa6')) {function content_5dc22cade6aa6($_smarty_tpl) {?>


<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>