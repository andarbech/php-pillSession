<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //checked value with data
    echo "<pre>";
print_r($_POST);
echo "</pre>";
}

?>
<?php require "./Layout/header.php" ?>
<!-- action="./modules/login.php" -->
<div class="container mt-5">
    <form class="px-4 py-3" action="./index.php" method="POST">
        <div class="form-group">
            <label for="exampleDropdownFormEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="dropdownCheck">
            <label class="form-check-label" for="dropdownCheck">
                Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <div>
    <a >Sing Up</a>
        <a class="dropdown-item" href="/assembler/php-pillSession/signup.php">New around here? Sign up</a>
        <a class="dropdown-item" href="#">Forgot password? te jodiste :( no me dio tiempo</a>
    </div>
</div>

<?php require "./Layout/footer.php" ?>