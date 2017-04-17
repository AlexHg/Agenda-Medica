<?php
	$link = mysql_connect('localhost', 'root', '') or die('No se puede conectar: ' . mysql_error()); 
	$dbase_selected = mysql_select_db('agenda_medica', $link) or die ('No se pudo seleccionar la base de datos.'); 
	$dtable_selected = mysql_query("SELECT * FROM login_register") or die ('Lo sentimos la tabla no fue encontrada.');

	$user_login = trim($_POST["user-login"]); 
	$pass_login = trim($_POST["pass-login"]);

	$data_table = mysql_query('SELECT * FROM login_register where user like "'.$user.'"');
	$dregis = mysql_fetch_array($data_table);
	$data_id = $dregis['id_user'];
	$data_user = $dregis['user'];
	$data_pass = $dregis['pass'];
	$data_type = $dregis['tipo'];

	if(($user_login == $data_user)&&($pass_login == $data_pass))  {
		echo '<p>ACCESO PERMITIDO A</p>';
		echo '<p><span id="usuario0"> Usuario: '. $user.'</span></p>';
		//echo '<script>document.getElementById("usuario0").style="color:'.$color.';text-align:right;";</script>';
	}else{
		echo '<h4>ACCESO DENEGADO!</h4>';
	}
?>