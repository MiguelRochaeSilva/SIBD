{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Listar Utilizadores</h1>

  <table>
    <tr>
      <th class="left">Login</th>
      <th class="left">Nome</th>
    </tr>
{foreach from=$users item=user}
    <tr>
      <td class="left"><a href="get.php?id={$user.id_user}">{$user.id_user}</a></td>
      <td class="left">{$user.nome}</td>
    </tr>
{/foreach}
  </table>

{if $s_type == "admin"}
  <p>[<a class="navtext" href="insert.php">Inserir</a>]</p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
