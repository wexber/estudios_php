<html>
<head></head>
<body>
<form action="pagina3.php" method="post">
ingrese nombre
<input type="text" name="nombre" size="20">
<br>
ingrese su email
<input type="text" name="email">
<br>
seleccione curso
<br>
<?php
$conexion = mysqli_connect("localhost","root","","base1") or die("error de conexion");
$registrar = mysqli_query($conexion,"select codigo,nombrecurso from cursos ") 
or die("problemas en el insert".mysqli_error($conexion));
while($reg=mysqli_fetch_array($registrar)){
echo "<input type=\"radio\" name=\"radio1\" value=\"$reg[codigo]\">".$reg['nombrecurso']."<br>";
}
?>
<br>
<input type="submit" value="registrar">
</form>
</body>
</html> 