<?php
$conn = new mysqli('localhost', 'root', '123456', 'testdata');
$nametext=$_POST['nametext'];
// $email=$_POST['email'];
$sql="INSERT INTO `student` (`id`, `name`, `idf`) VALUES (NULL,'$nametext',2)";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>