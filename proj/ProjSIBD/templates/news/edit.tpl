{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Editar Notícia</h1>

  <form action="edit_action.php" method="post">
    <fieldset>
    <input type="hidden" name="nid" value="{$news1.nid}" />
    <label for="ntitle">Título:</label>
    <input type="text" size="30" name="ntitle" id="ntitle" value="{$news1.ntitle}" required="required" />
    <span class="error">{$s_errors.ntitle}</span>
    <br />
    <label for="nbody">Corpo:</label>
    <textarea rows="5" cols="50" name="nbody" id="nbody" required="required">{$news1.nbody}</textarea>
    <span class="error">{$s_errors.nbody}</span>
    <br />
    <label for="ndate">Data:</label>
    <input type="text" size="10" name="ndate" id="ndate" value="{$news1.ndate}" />
    <br />
    <label for="nauthor">Autor:</label>
    <select name="nauthor" id="nauthor">
{foreach from=$authors item=author}
      <option value="{$author.aid}"{if $news1.nauthor==$author.aid} selected="selected"{/if}> {$author.aname}</option>
{/foreach}
    </select>
    <br />
    <label for="nstatus">Estado:</label>
{foreach $status as $item}
    <input type="radio" name="nstatus" id="nstatus" align="middle"
    value="{$item}"{if $item==$news1.nstatus} checked="checked"{/if}> {$item}
{/foreach}
    <p><input type="submit" value="Editar" /></p>
    </fieldset>
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}

