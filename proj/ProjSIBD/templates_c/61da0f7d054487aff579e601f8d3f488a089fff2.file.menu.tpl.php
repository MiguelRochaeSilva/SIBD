<?php /* Smarty version Smarty-3.1.5, created on 2015-11-24 19:31:26
         compiled from "../templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12819923495654acfed46162-43282010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61da0f7d054487aff579e601f8d3f488a089fff2' => 
    array (
      0 => '../templates/menu.tpl',
      1 => 1448387370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12819923495654acfed46162-43282010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5654acfed67fe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654acfed67fe')) {function content_5654acfed67fe($_smarty_tpl) {?>    <!-- nav menu -->
    <div id="menu">
      <div class="title">Menu</div>
      <ul>
	  <li><a href="../news/list.php">Notícias</a></li>
		<li><a href="../author/list.php">Autores</a></li>
		<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
		<li><a href="../user/list.php">Utilizadores</a></li>
		<?php }?>
      </ul>
    </div>
<?php }} ?>