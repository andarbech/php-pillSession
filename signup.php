<?php

include("./clases/connect.php");
include("./clases/signup.php");
$email = "";
$password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signup = new Signup();
    $result = $signup->evaluate($_POST);
    if ($result != "") {
        echo "<div></div>";
        echo $result;
    } else {
        header("Location:index.php");
        die;
    }

    $email = $_POST["email"];
    $password = $_POST["password"];


    //checked value with data
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> Andrecito signUp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/assembler/php-pillSession">Home</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <form class="px-4 py-3" action="/assembler/php-pillSession/signup.php" method="POST">
            <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="adriancito@email.com">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="1234">
            </div>
            <button type="submit" class="btn btn-primary">Registrate lo estas deseando </button>
        </form>

    </main>
    <footer class="bg-dark text-center text-white   fixed-bottom  ">
        © <?= date("Y") ?> Copyright: Andrecito
    </footer>
</body>

</html>