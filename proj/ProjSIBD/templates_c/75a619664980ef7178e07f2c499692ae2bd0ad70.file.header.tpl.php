<?php /* Smarty version Smarty-3.1.5, created on 2015-11-26 15:30:25
         compiled from "../templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11065124505654acfeca8947-37593322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a619664980ef7178e07f2c499692ae2bd0ad70' => 
    array (
      0 => '../templates/header.tpl',
      1 => 1448548223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11065124505654acfeca8947-37593322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5654acfed295e',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654acfed295e')) {function content_5654acfed295e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <title>SIBD :: Os Meus Exames</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
<?php if (isset($_smarty_tpl->tpl_vars['css']->value)){?>
  <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['js']->value)){?>
  <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

<?php }?>
</head>
<body>

  <!-- header tag -->
  <header>
    <p><a href="../">SIBD</a> :: Os Meus Exames</p>
  </header>

  <!-- nav tag -->
  <nav>

<?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </nav>
  
  <!-- page content  -->
  <div id="content">

<?php echo $_smarty_tpl->getSubTemplate ("messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>