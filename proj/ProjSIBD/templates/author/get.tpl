{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Ver Autor</h1>

  <ul>
    <li><strong>Id:</strong> {$author.aid}</li>
    <li><strong>Nome:</strong> {$author.aname}</li>
    <li><strong>Email:</strong> {$author.aemail}</li>
    <li><strong>Telefone:</strong> {$author.aphone}</li>
    <li><strong>Idade:</strong> {$author.aage}</li>
  </ul>

  <p>[<a class="navtext" href="get.php?id={$author.aid+1}">Próximo</a>] 
{if $s_type == "admin"}
     [<a class="navtext" href="edit.php?id={$author.aid}">Editar</a>] 
     [<a class="navtext" href="delete.php?id={$author.aid}">Apagar</a>]
{/if}
  </p>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
