{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Remover Notícia</h1>

  <ul>
    <li><strong>Id:</strong> {$news1.nid}</li>
    <li><strong>Título:</strong> {$news1.ntitle}</li>
    <li><strong>Corpo:</strong> {$news1.nbody}</li>
    <li><strong>Data:</strong> {$news1.ndate}</li>
    <li><strong>Autor:</strong> {$news1.nauthor}</li>
    <li><strong>Estado:</strong> {$news1.nstatus}</li>
  </ul>

{if $s_type == "admin"}
  <p>Tem a certeza? 
     [<a class="navtext" href="delete_action.php?id={$news1.nid}">Sim</a>] 
     [<a class="navtext" href="get.php?id={$news1.nid}">Não</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
