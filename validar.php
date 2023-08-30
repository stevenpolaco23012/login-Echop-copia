<?php
include('db.php');
$name = htmlspecialchars($_POST['Nombre completo']);
    $phone = htmlspecialchars($_POST['Numero de telefono']);
    $email = htmlspecialchars($_POST['Email']);
    session_start();
    $pass = htmlspecialchars($_POST['Contraseña']);


$conexion=mysqli_connect("localhost","root","","loggin");

$consulta="SELECT*FROM Nombre completo where Nombre completo='$name' and Contraseña='$pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:market-e-chop.web.app");

}else{
    ?>
    <?php
    include("index.html");

?>
<h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);