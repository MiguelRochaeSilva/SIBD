<?php /* Smarty version Smarty-3.1.5, created on 2015-11-24 19:31:26
         compiled from "../templates/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18397692725654acfedd7996-26033944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe4725ae38b3c1ca55f1dc2f9f71e5e75db4ce4' => 
    array (
      0 => '../templates/messages.tpl',
      1 => 1321703998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18397692725654acfedd7996-26033944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5654acfee0324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654acfee0324')) {function content_5654acfee0324($_smarty_tpl) {?>  <!-- warning messages -->
  <div id="messages">
<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
    <span class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
<?php } ?>
  </div>
<?php }} ?>