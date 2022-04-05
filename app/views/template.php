<!doctype html>
<html language="pt-br">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<thead>
		<title>Estaciona Local - SISTEMA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/style_dataTable.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>/assets/css/auxiliar.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/style.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/footers.css">
		
		<!-- SCRIPT VALIDAÇÂO -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("input").blur(function(){
				if($(this).val() == "")
					{
						$(this).css({"border" : "1px solid #F00", "padding": "2px"});
					}
				});
				$("#botao").click(function(){
				var cont = 0;
				$("#form input").each(function(){
					if($(this).val() == "")
						{
							$(this).css({"border" : "1px solid #F00", "padding": "2px"});
							cont++;
						}
					});
				if(cont == 0)
					{
						$("#form").submit();
					}
				});
			});
		</script>



		
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		<script src="<?php echo URL_BASE ?>/assets/js/jquery.min.js"></script>
		

	</thead>
	
	<body>
		
    
    <!-- aqui entra a view  cabecalho.php-->
    <?php include_once "cabecalho.php"; ?>

	

	<div class="conteudo">
         <?php $this->load($view,$viewData); ?>
	</div>

				<!-- aqui entra a view  rodape.php-->
				<?php include_once "rodape.php"; ?>
	<!---->
		<script src="<?php echo URL_BASE ?>/assets/js/jquery-ui.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/datatables/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/js.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/componentes/js_modal.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/componentes/js_data_table.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	</body>
</html>