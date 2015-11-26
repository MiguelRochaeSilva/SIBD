{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Inserir Notícia</h1>

  <form action="insert_action.php" method="post">
    <fieldset>
    <label for="ntitle">Título:</label>
    <input type="text" name="ntitle" id="ntitle" value="{$news1.ntitle}" required="required" />
    <span class="error">{$s_errors.ntitle}</span>
    <br />
    <label for="nbody">Corpo:</label>
    <textarea rows="5" cols="52" name="nbody" id="nbody" required="required">{$news1.nbody}</textarea>
    <span class="error">{$s_errors.nbody}</span>
    <br />
    <label for="nauthor">Autor:</label>
    <select name="nauthor" id="nauthor">
{foreach from=$authors item=author}
      <option value="{$author.aid}"{if $news1.nauthor==$author.aid} selected="selected"{/if}> {$author.aname}</option>
{/foreach}
    </select>
    <br />
    <p><input type="submit" value="Inserir" /></p>
    </fieldset>
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}

