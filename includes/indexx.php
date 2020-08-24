<?php
function savl_pagina_save_bd_frontend(){
?>
	<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Importar TXT</title>
	</head>
	<body>
		<h1>Importar dados do arquivo TXT</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			
			<input type="submit" value="Importar">
		</form>
	</body>
</html>
<?php
}
function savl_pagina_save_bd_register(){

    add_options_page('SAVL save bd', 'SAVL SaveBD','manage_options', 'savl','savl_pagina_save_bd_frontend');

}

add_action('admin_menu','savl_pagina_save_bd_register'  );

function savl_carregando_settings_api(){

    register_setting('savl_op','savl_op_bd');

}

add_action('admin_init','savl_carregando_settings_api');
?>
