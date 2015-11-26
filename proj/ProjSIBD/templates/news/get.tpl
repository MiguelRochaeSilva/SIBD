{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Ver Notícia</h1>

  <ul>
    <li><strong>Id:</strong> {$news1.nid}</li>
    <li><strong>Título:</strong> {$news1.ntitle}</li>
    <li><strong>Corpo:</strong> {$news1.nbody}</li>
    <li><strong>Data:</strong> {$news1.ndate}</li>
    <li><strong>Autor:</strong> <a href="../author/get.php?id={$news1.nauthor}">{$authorname}</a></li>
    <li><strong>Estado:</strong> {$news1.nstatus}</li>
  </ul>

  <p>[<a class="navtext" href="get.php?id={$news1.nid+1}">Próxima</a>] 
{if $s_type == "admin"}
     [<a class="navtext" href="edit.php?id={$news1.nid}">Editar</a>] 
     [<a class="navtext" href="delete.php?id={$news1.nid}">Apagar</a>] 
{/if}
  </p>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
