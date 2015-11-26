{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Remover Autor</h1>

  <ul>
    <li><strong>Id:</strong> {$author.aid}</li>
    <li><strong>Nome:</strong> {$author.aname}</li>
    <li><strong>Email:</strong> {$author.aemail}</li>
    <li><strong>Telephone:</strong> {$author.aphone}</li>
    <li><strong>Age:</strong> {$author.aage}</li>
  </ul>

{if $s_type == "admin"}
  <p>Tem a certeza? 
     [<a class="navtext" href="delete_action.php?id={$author.aid}">Sim</a>] 
     [<a class="navtext" href="get.php?id={$author.aid}">Não</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
