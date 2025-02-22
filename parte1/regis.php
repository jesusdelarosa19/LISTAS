<?php 
require_once 'db_conexion.php';
 ?>

<?php
# Inicia Código de REGISTRAR

if (isset($_POST['registrar'])) 
{  
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
	
	if (!empty($name) && !empty($email))
	{  
		$sql=$cnnPDO->prepare("INSERT INTO usuarios
			(name,email, phone) VALUES (:name, :email, :phone)");
		
		$sql->bindParam(':name',$name);
		$sql->bindParam(':email',$email);
		$sql->bindParam(':phone',$phone);
		

		$sql->execute();
		unset($sql);
		unset($cnnPDO);
	}
}
# Termina Código de REGISTRAR
?>