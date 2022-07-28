<?php
$user='AdmonINBAS';
$pass='Inb@s*6345/';
if(isset($_POST['usuario']) AND $_POST['usuario']!=''){
	if($_POST['usuario']==$user AND $_POST['pass']==$pass){
		setcookie("acceso", "ok", time() + 3600);
		echo'<meta http-equiv="refresh"
   content="0; url=http://inbas.mx/backend/">';
	}else{
		echo 'LOS DATOS INGRESADOS SON INCORRECTOS, INTENTELO DE NUEVO.';
	}
}
include'script/pdocrud.php';


echo '<div class="container">';
echo '<div class="row">';



if(isset($_COOKIE['acceso'])){
	$pdocrud = new PDOCrud(false, "pure", "pure");
$pdocrud->fieldNotMandatory("titulo");
$pdocrud->fieldNotMandatory("contrato");
$pdocrud->fieldNotMandatory("obra");
$pdocrud->fieldNotMandatory("descripcion");
$pdocrud->fieldNotMandatory("monto");
$pdocrud->fieldNotMandatory("fecha_inicio");
$pdocrud->fieldNotMandatory("fecha_terminacion");
$pdocrud->fieldNotMandatory("cliente");
$pdocrud->fieldNotMandatory("responsable");
$pdocrud->fieldNotMandatory("plazo_ejecucion");
$pdocrud->fieldNotMandatory("imagen");
$pdocrud->fieldNotMandatory("video");
$pdocrud->addPlugin("summernote");//to add plugin          
$pdocrud->fieldCssClass("descripcion", array("summernote"));
$pdocrud->fieldTypes("imagen", "FILE_NEW");//change type to image
$pdocrud->setSettings("actionBtnPosition", "left");
$pdocrud->setSettings("tableCellEdit", true);
echo $pdocrud->dbTable("proyectos")->render(); 
echo $pdocrud->loadPluginJsCode("summernote",".summernote");
}else{
	?>
	
	<center>
	<form class="form-control" method="post" action="">
		<label>USUARIO</label><br>
		<input style="    height: 45px;
    border-radius: 10px;
    width: 250px;
    padding: 15px;" class="form-control" type="text" name="usuario" required placeholder="Ingrese USUARIO"><br><br>
		<label for="">Contraseña</label><br>
		<input style="    height: 45px;
    border-radius: 10px;
    width: 250px;
    padding: 15px;" class="form-control" type="password" name="pass" required placeholder="Ingrese CONTRASEÑA">
			<br><br>
			<input style="height: 45px;
    border-radius: 5px;
    width: 250px;
    padding: 15px;
    background-color: #000;
    color: #fff;" class="form-control" type="submit" value="Ingresar">
	</form>
	</center>
	
	<?php
}







echo '</div>';
echo '</div>';


?>