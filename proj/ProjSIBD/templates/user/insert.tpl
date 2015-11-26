{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Inserir Utilizador</h1>

  <form action="insert_action.php" method="post">
    <fieldset>
    <label for="uuser">Login:</label>
    <input type="text" size="10" name="uuser" id="uuser" value="{$user.uuser}" required="required" />
    <span class="error">{$s_errors.uuser}</span>
    <br />
    <label for="upass">Password:</label>
    <input type="password" size="10" name="upass" id="upass" value="{$user.upass}" required="required" />
    <span class="error">{$s_errors.upass}</span>
    <br />
    <label for="uname">Nome:</label>
    <input type="text" size="40" name="uname" id="uname" value="{$user.uname}" required="required" />
    <span class="error">{$s_errors.uname}</span>
    <br />
    <p><input type="submit" value="Inserir" /></p>
    </fieldset>
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
