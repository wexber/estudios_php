<html>
<head>
    <title>pagina3</title>
    <meta charset="UTF-8">
</head>
<body>
  <?php
$conexion =mysqli_connect("localhost","root","","base1") or die("error de conexion");
mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso)
values('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[radio1]')") 
or die("error en el insert ".mysqli_error($conexion));
mysqli_close($conexion);
echo "el alumno fue registrado"



?>  
</body>
</html>