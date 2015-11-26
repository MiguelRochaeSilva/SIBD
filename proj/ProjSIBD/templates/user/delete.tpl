{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Remover Utilizador</h1>

  <ul>
    <li><strong>Login:</strong> {$user.id_user}</li>
    <li><strong>Nome:</strong> {$user.nome}</li>
    <li><strong>Password:</strong> {$user.password}</li>
  </ul>

{if $s_type == "admin"}
  <p>Tem a certeza? 
    [<a class="navtext" href="delete_action.php?id={$user.id_user}">Sim</a>]
    [<a class="navtext" href="get.php?id={$user.id_user}">Não</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
