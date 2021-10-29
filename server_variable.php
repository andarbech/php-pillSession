<div class="container mb-3 ">
    <?php
require ("./Layout/header.php");
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
session_start();

$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['time'] = time();
echo "<pre>";
print_r($_SESSION);
echo "<pre>";
echo "<p>Cookie: PHPSESSID=98653j550ii593g4gfinfflpla</p>";
echo "<div class='mb-5'></div>";
require("./Layout/footer.php")
?>
</div>