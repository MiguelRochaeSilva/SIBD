<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <title>SIBD :: Os Meus Exames</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
{* additional CSS for this page only *}
{if isset($css)}
  {$css}
{/if}
{* external JS for this page only *}
{if isset($js)}
  {$js}
{/if}
</head>
<body>

  <!-- header tag -->
  <header>
    <p><a href="../">SIBD</a> :: Os Meus Exames</p>
  </header>

  <!-- nav tag -->
  <nav>

{include file="login.tpl"}
  </nav>
  
  <!-- page content  -->
  <div id="content">

{* uncomment to show the debug console *}
{* {debug} *}

{include file="messages.tpl"}
{include file="errors.tpl"}
