<?php /* Smarty version Smarty-3.1.7, created on 2019-11-11 02:41:25
         compiled from "C:\xamppold\htdocs\vtigercrm6.5\includes\runtime/../../layouts/vlayout\modules\Calendar\CalendarView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138675dc8ca5581d370-16139667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c47b4066ef57a81a6ff8deb279957a4ceb3ebfec' => 
    array (
      0 => 'C:\\xamppold\\htdocs\\vtigercrm6.5\\includes\\runtime/../../layouts/vlayout\\modules\\Calendar\\CalendarView.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138675dc8ca5581d370-16139667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5dc8ca558350b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc8ca558350b')) {function content_5dc8ca558350b($_smarty_tpl) {?>
<input type="hidden" id="currentView" value="<?php echo getPurifiedSmartyParameters('view');?>
" /><input type="hidden" id="activity_view" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('activity_view');?>
" /><input type="hidden" id="time_format" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('hour_format');?>
" /><input type="hidden" id="start_hour" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('start_hour');?>
" /><input type="hidden" id="date_format" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('date_format');?>
" /><div class="container-fluid"><div class="row-fluid"><div class="span12"><p><!-- Divider --></p><div id="calendarview"></div></div></div></div><?php }} ?>