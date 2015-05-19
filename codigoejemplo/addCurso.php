<?php include 'conectarDB.php';
$CurNom = $_GET["CurNom"];
$CurCod = $_GET["CurCod"];
$queryInsert = "INSERT INTO cursos(nombre, codigo) VALUES ('$CurNom', '$CurCod')";
if (mysqli_query($conn, $queryInsert)) {
    echo $mysqli_insert_id;
} else {
    echo "Error";
}
?>
