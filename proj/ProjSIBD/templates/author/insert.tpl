{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Inserir Autor</h1>

  <form action="insert_action.php" method="post">
    <fieldset>
    <label for="aname">Nome:</label>
    <input type="text" size="42" name="aname" id="aname" value="{$author.aname}" required="required" />
    <span class="error">{$s_errors.aname}</span>
    <br />
    <label for="aemail">Email:</label>
    <input type="text" size="24" name="aemail" id="aemail" value="{$author.aemail}" required="required" />
    <span class="error">{$s_errors.aemail}</span>
    <br />
    <label for="aphone">Telefone:</label>
    <input type="text" size="24" name="aphone" id="aphone" value="{$author.aphone}" required="required" />
    <span class="error">{$s_errors.aphone}</span>
    <br />
    <label for="aage">Idade:</label>
    <input type="text" size="2" name="aage" id="aage" value="{$author.aage}" />
    <span class="error">{$s_errors.aage}</span>
    <br />
    <p><input type="submit" value="Inserir" /></p>
    </fieldset>
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
