<?php
include "conecta.php";

$nombre = test_input($_POST["inombre"]);
$paterno = test_input($_POST["ipaterno"]);
$materno = test_input($_POST["imaterno"]);
$rfc = test_input($_POST["irfc"]);
$empresa = test_input($_POST["iempresa"]);
$correo = test_input($_POST["iemail"]);
$telefono = test_input($_POST["itelefono"]);
$curso = test_input($_POST["scurso"]);      

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $sql = "INSERT INTO users(nombre,paterno,materno,rfc,empresa,email,telefono,curso) values('$nombre','$paterno','$materno','$rfc','$empresa','$correo','$telefono',$curso)";

if ($mysqli->query($sql) === TRUE) {
    echo "<script type='text/javascript'>";
    echo "alert('Nuevo usuario agregado correctamente')";
    echo"</script>";
    echo "<script type='text/javascript'>";
    echo "window.location.href='../registro.html'";
    echo"</script>"; 

} else {
    if($mysqli->error == "Duplicate entry '$correo' for key 'email'"){
        echo "<script type='text/javascript'>";
        echo "alert('No se permiten correos electrónicos duplicados en la base de datos.')";
        echo"</script>"; 
        echo "<script type='text/javascript'>";
        echo "window.location.href='../registro.html'";
        echo"</script>"; 
    }
}

