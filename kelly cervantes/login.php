
<?php
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
session_start();
$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","revistas",'3306','');

$consulta="SELECT*FROM usuario where usuario='$usuario' AND contrasena='$contrasena'";

$enviar=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($enviar);

if ($filas>0){
    
    header("location:inicio.php");
}
else{
    ?>
    <?php   
    include("index.html");
    ?>
    <h1 class='bad' > ERROR EN LA AUTENTIFICACION </h1>
    <?php
}
mysqli_free_result($enviar);
mysqli_close($conexion);
?>
<style>
    .bad {
	text-align: center;
	width: 500%;
	background-color: #a22;
	color: #fff
}
</style>
