<?php
$servername = 'localhost';
$username = 'bogdan';
$password = '123';
$dbname = 'library';
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="INSERT INTO autor(id_autor, imie, nazwisko) VALUES (NULL, '".$_POST['imie']."', '".$_POST['nazwisko']."') ";
mysqli_query($conn, $sql);
$id_autor = $conn->insert_id;
$sql="INSERT INTO tytul(id_tytul, tytul, isbn) VALUES (NULL, '".$_POST['tytul']."', '".$_POST['isbn']."') ";
mysqli_query($conn, $sql);
$id_tytul = $conn->insert_id;
$sql="INSERT INTO krzyzowa(id_krzyz, id_autor, id_tytul) VALUES (NULL, '$id_autor', '$id_tytul') ";
mysqli_query($conn, $sql);
mysqli_close($conn);
header('Location: index.php');
?>