
<ul>
<?php
if($users){



foreach ($users->result() as $usuario) {
?>
  
	<li><?php echo $usuario->user_nicename;?></li>

<?php

	}
}else{
	echo "usuario o contraseña incorrectos";
}
?>
</ul>

