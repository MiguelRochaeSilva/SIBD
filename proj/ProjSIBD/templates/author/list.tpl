{* The header file with the main logo and stuff  *}
{include file='header.tpl'}

  <h1>Listar Autores</h1>

  <table>
    <tr>
      <th class="left">Nome</th>
      <th class="left">Email</th>
      <th class="left">Telefone</th>
      <th class="center">Idade</th>
    </tr>
{foreach from=$authors item=author}
    <tr>
      <td class="left"><a href="get.php?id={$author.aid}">{$author.aname}</a></td>
      <td class="left">{$author.aemail}</td>
      <td class="left">{$author.aphone}</td>
      <td class="center">{$author.aage}</td>
    </tr>
{/foreach}
  </table>

{if $s_type == "admin"}
  <p>[<a class="navtext" href="insert.php">Inserir</a>] 
     [<a class="navtext" href="insert_js.php">Inserir com JS</a>]
  </p>
{/if}

{* The footer file with the address and stuff  *}
{include file='footer.tpl'}
