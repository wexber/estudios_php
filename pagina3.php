<html>
<head>
    <title>pagina3</title>
    <meta charset="UTF-8">
</head>
<body>
  <?php
$conexion =mysqli_connect("localhost","root","","base1") or die("error de conexion".mysqli_error($conexion));
$registros=mysqli_query($conexion,"update cursos 
                                    set nombrecurso='$_REQUEST[nombrecurso]'
                                    where codigo='$_REQUEST[codigo]'")or die
                                    ("error en el update:".mysqli_error($conexion));
echo "el curso fue modificado";



  ?>  
</body>
</html>