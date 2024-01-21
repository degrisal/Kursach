<?php



require_once 'config/connect.php';

print_r($_POST);


$name = $_POST['name'];
$secondname = $_POST['secondname'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$description = $_POST['description'];
$photo = $_POST['photo'];
$pricelist = isset($_POST['pricelist']) ? intval($_POST['pricelist']) : null;
$executor = isset($_POST['executor']) ? intval($_POST['executor']) : null;


    

mysqli_query($connect,"INSERT INTO `Description of the problem` (`id`, `name`, `secondname`, `telephone`, `email`, `description`, `photo`, `pricelist`, `executor`) VALUES (NULL, '$name', '$secondname', '$telephone', '$email', '$description', '$photo', '$pricelist', '$executor')");


if ($result) {
    echo "Данные успешно добавлены в базу данных!";
} else {
    echo "Ошибка: " . mysqli_error($connect);
}
header('Location: /');