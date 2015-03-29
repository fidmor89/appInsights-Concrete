<?php  defined('C5_EXECUTE') or die("Access Denied.");


echo Loader::helper('concrete/dashboard')->getDashboardPaneHeaderWrapper(t('Application Insights'), false, '');?>

	<h3><?php  echo t('Set up Instrumentation Key')?></h3>
		<script type="text/javascript">
		function load(){
		//hacer una consulta y si devuelve null no se hace nada
		//si devuelve algo escribirla en 
		var texto = document.getElementById("txt");
		texto.value = "La IK obtenida de la BD";
		
		}
		function Save(){
		var texto = document.getElementById("txt");
			if (texto.value.length>=30)
			{
				//save IK
				//hacer un insert en la BD con la IK
				alert ("Save");
			}
			else
			{
				if (texto.value.length>0)
				{
					alert ("The Instrumentation Key length has to be between 30 and 36 characters!");
				}
				
			}
		}
		</script>
		<form class="form-stacked" method="post" id="add_IK">
			<?php  echo $this->controller->token->output('add_new_event')?>
			<input type="text" id="txt" name="event"  maxlength=36 placeholder="Enter Instrumentation Key" required/>
			<input type="button" value="Insert" id="BotonSave" name = "p" onclick = "Save();"/>
		</form>
	
<?php  echo Loader::helper('concrete/dashboard')->getDashboardPaneFooterWrapper(false);

