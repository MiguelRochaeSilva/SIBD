{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Editar Autor</h1>

  <form action="edit_action.php" method="post">
    <input type="hidden" name="aid" value="{$author.aid}" />
    <fieldset>
    <label for="aname">Nome:</label>
    <input type="text" size="50" name="aname" id="aname" value="{$author.aname}" required="required" />
    <span class="error">{$s_errors.aname}</span>
    <br />
    <label for="aemail">Email:</label>
    <input type="text" size="32" name="aemail" id="aemail" value="{$author.aemail}" required="required" />
    <span class="error">{$s_errors.aemail}</span>
    <br />
    <label for="aphone">Telefone:</label>
    <input type="text" size="16" name="aphone" id="aphone" value="{$author.aphone}" required="required" />
    <span class="error">{$s_errors.aphone}</span>
    <br />
    <label for="aage">Idade:</label>
    <input type="text" size="2" name="aage" id="aage" value="{$author.aage}" />
    <span class="error">{$s_errors.aage}</span>
    <br />
    <p><input type="submit" value="Editar" /></p>
    </fieldset>
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
