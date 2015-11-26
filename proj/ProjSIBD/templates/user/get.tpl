{* The header file with the main logo and stuff *}
{include file='header.tpl'}
 
  <h1>Ver Utilizador</h1>

  <ul>
    <li><strong>Login:</strong> {$user.utilizador}</li>
    <li><strong>Nome:</strong> {$user.nome}</li>
    <li><strong>Password:</strong> {$user.upass}</li>
  </ul>

{if $s_type == "admin"}
  <p>[<a class="navtext" href="edit.php?id={$user.utilizador}">Editar</a>] 
     [<a class="navtext" href="delete.php?id={$user.utilizador}">Apagar</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
