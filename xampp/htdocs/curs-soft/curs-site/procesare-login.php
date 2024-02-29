<?php
include("config.php");
?>
<?php

if($_POST["username"]=="test" && $_POST["parola"]=="test")
{
    $_SESSION["logat"]=1;
    $_SESSION["nume"]="Test";
    header("Location:index.php?m=1");
}
else 
{
    header("Location:login.php?error=1");
}
?>