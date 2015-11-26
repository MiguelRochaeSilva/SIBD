<?php /* Smarty version Smarty-3.1.5, created on 2015-11-26 15:30:26
         compiled from "../templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4136569715654acfed82bb7-05579879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927222f66c1cabf1737d32d5161fdb6810b2fdcc' => 
    array (
      0 => '../templates/login.tpl',
      1 => 1448548207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4136569715654acfed82bb7-05579879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5654acfedbced',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654acfedbced')) {function content_5654acfedbced($_smarty_tpl) {?>    <!-- login form -->

    <div id="login">
      <div class="title">Login</div>
      <form action="../main/login_action.php" method="post">
        <label for="uuser">Username:</label>
        <input type="text" size="10" name="id_user" id="id_user"/>
        <label for="upass">Password:</label>
        <input type="password" size="10" name="password" id="password"/>
        <input type="submit" value="Login" />
      </form>
    </div>
<?php }} ?>