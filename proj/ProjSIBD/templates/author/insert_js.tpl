{$css= '<link rel="stylesheet" type="text/css" href="../css/formval.css" media="screen" />'}
{$js= '<script type="text/javascript" src="../js/formval.js"></script>'} 

{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Inserir Autor</h1>

{* form validation with JS *}
  <noscript>
  <p>Javascript is not currently enabled on your browser. If you can enable it, your input will be checked as you enter it (on most browsers, at least). You may find this helpful. </p>
  </noscript>

  <script type="text/javascript">
  // Only script specific to this form goes here.
  // General-purpose routines are in a separate file.
    function validateOnSubmit() {
      var elem;
      var errs=0;
      // execute all element validations in reverse order, so focus gets
      // set to the first one in error.
      if (!validateAge    (document.forms.insert.aage,   'inf_aage', false)) errs += 1;
      if (!validateTelnr  (document.forms.insert.aphone, 'inf_aphone', true)) errs += 1;
      if (!validateEmail  (document.forms.insert.aemail, 'inf_aemail', true)) errs += 1; 
      if (!validatePresent(document.forms.insert.aname,  'inf_aname'))        errs += 1; 

      if (errs>1)  alert('Há campos que precisam de correção antes de enviar');
      if (errs==1) alert('Um campo precisa de correção antes de enviar');

      return (errs==0);
  };
</script>

  <form name="insert" onsubmit="return validateOnSubmit()" action="insert_action.php" method="post">
    <fieldset>
    <label for="aname">Nome:</label>
    <input type="text" size="42" name="aname" id="aname" value="{$author.aname}"  onchange="validatePresent(this, 'inf_from');" />
    <span class="info" id="inf_aname">Obrigatório</span>
    <span class="error">{$s_errors.aname}</span>
    <br />
    <label for="aemail">Email:</label>
    <input type="text" size="24" name="aemail" id="aemail" value="{$author.aemail}"  onchange="validateEmail(this, 'inf_aemail');" />
    <span class="info" id="inf_aemail">Obrigatório</span>
    <span class="error">{$s_errors.aemail}</span>
    <br />
    <label for="aphone">Telefone:</label>
    <input type="text" size="24" name="aphone" id="aphone" value="{$author.aphone}"  onchange="validateTelnr(this, 'inf_aphone');" />
    <span class="info" id="inf_aphone">Obrigatório</span>
    <span class="error">{$s_errors.aphone}</span>
    <br />
    <label for="aage">Idade:</label>
    <input type="text" size="2" name="aage" id="aage" value="{$author.aage}" onchange="validateAge(this, 'inf_aage');" />
    <span class="info" id="inf_aage">&nbsp; </span>
    <span class="error">{$s_errors.aage}</span>
    <br />
    <p><input type="submit" name="submit" value="Inserir" /></p>
    </fieldset>
  </form>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
