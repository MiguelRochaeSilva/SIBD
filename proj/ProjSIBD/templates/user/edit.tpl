{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Editar Utilizador</h1>

  <form action="edit_action.php" method="post">
    <input type="hidden" name="id_user" value="{$user.id_user}" />
    <fieldset>
    <label for="password">Password:</label>
    <input type="password" size="10" name="password" id="password" value="{$user.password}" required="required" />
    <span class="error">{$s_errors.password}</span>
    <br />
    <label for="nome">Name:</label>
    <input type="text" size="40" name="nome" id="nome" value="{$user.nome}" required="required" />
    <span class="error">{$s_errors.nome}</span>
    <br />
    <p><input type="submit" value="Editar" /></p>
    </fieldset>
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
