{* The header file with the main logo and stuff *}
{include file='header.tpl'}
 
  <h1>Protótipo MyNews</h1>

<p><b>Especificação:</b> <a href="http://web.fe.up.pt/~jlopes/doku.php/teach/sibd/prototype/" alt="Vai para página externa">Especificação do prototipo de aplicação Web MyNews</a>
</p>
<p><b>Implementação:</b> <a href="http://web.fe.up.pt/~jlopes/lib/exe/fetch.php/teach/sibd/prototype/mynews.tgz" alt="Donwload arquivo com o código">mynews.tgz</a></p>

<pre>
Current version: 1.4
Date:   Tue Dec 12 19:07:01 2011

Changes for v1.4 (2011.12.12):
1. Paginação em news/list_page.php

Changes for v1.3 (2011.12.10):
1. home page
2. pequenas melhorias no tratamento de erros (database not open)

Changes for v1.2 (2011.12.03):
1. verificar permissões de ADM em users
2. utilização do schema "news"
3. alterações de cosmética

Changes for v1.1 (2011.11.28):
1. tratamento de erros do utilizador com PHP (s_errors['generic'][] + s_erros['field])
2. tratamento de erros do utilizador com JS em author/insert_js.php
3. tratamento de erros do utilizador com atributos HTML5
4. melhoramentos no CSS

Changes for v1.0 (2011.11.23):
1. de acordo com a especificação
2. exemplos de tratamento de domínios (enumerados) e relacionamentos N->1 entre tabelas
3. mais funcionalidades implementadas: inserir, editar e remover notícias
4. melhor tratamento dos erros
5. alguns bugs retirados

Changes for v0.9 (2011.11.13)
1. adaptado do framework do A. Restivo
2. usear PDO em vez de MDB2
3. Usar um estilo à lá REST
</pre>


{* The footer file with the address and stuff *}
{include file='footer.tpl'}
