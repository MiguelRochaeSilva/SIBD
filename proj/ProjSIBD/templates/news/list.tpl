{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Listar Notícias</h1>

  <table>
    <tr>
      <th class="left">Título</th>
      <th class="left">Data</th>
      <th class="center">Autor</th>
      <th class="center">Estado</th>
    </tr>
{foreach from=$news item=news1}
    <tr>
      <td class="left"><a href="get.php?id={$news1.nid}">{$news1.ntitle}</a></td>
      <td class="left">{$news1.ndate}</td>
      <td class="center"><a href="../author/get.php?id={$news1.nauthor}">{$news1.aname}</a></td>
      <td class="center">{$news1.nstatus}</td>
    </tr>
{/foreach}
  </table>

  <p>[<a class="navtext" href="list_page.php">Paginar</a>]</p>

{if $s_type == "admin"}
  <p>[<a class="navtext" href="insert.php">Inserir</a>]</p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
