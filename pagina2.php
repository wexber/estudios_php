<html>
<head></head>
<body>
<?php
$conexion =mysqli_connect("localhost","root","","base1") or die("fallo la conexion");
$registros =mysqli_query($conexion,"select * from cursos where codigo='$_REQUEST[codigo]'") or die
("error en el select :".mysqli_error($conexion));
if($reg = mysqli_fetch_array($registros)){
?>
<form action="pagina3.php" method="post">
ingrese su nuevo curso
<input type="text" name="nombrecurso" value="<?php echo$reg['nombrecurso']?>">
<br>
<input type="hidden" name="codigo" value="<?php echo$reg['codigo']?>">
<br>
<input type="submit" value="modificar">

</form>
<?php
}else{

echo "no existe el curso con dicho mail";

}

  ?>
</body>
</html> 