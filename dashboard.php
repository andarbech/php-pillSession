<?php
session_start();
// echo "</pre>";
// print_r($_SESSION);
// echo "</pre>";
include("./clases/connect.php");
include("./clases/login.php");
echo "any";
var_dump($_SESSION['myfirstbd_userId']);
if (isset($_SESSION['myfirstbd_userId']) && is_numeric($_SESSION['myfirstbd_userId'])) {

    $id = $_SESSION['myfirstbd_userId'];
    $login = new Login();
    $result = $login->checkLogin($id);
    if ($result) {
        echo "every  is fine";
    } else {
        header("Location:index.php");
        echo "every  is fine";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inside</h1>
</body>

</html>