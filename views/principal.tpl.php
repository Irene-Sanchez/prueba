<?php
$idu=$_COOKIE['id'];
$acceso=$_COOKIE['acceso'];
if($idu=="" or $acceso=="")
{
    print"<meta http-equiv='refresh' content='0; url=index.php'>";
}
    $idu2=$_SESSION['id'];
    $acceso2=$_SESSION['acceso'];
    if($idu2=="" or $acceso2=="")
    {
        print"<meta http-equiv='refresh' content='0; url=index.php'>";
    }
    echo"<div class='alert alert-succes' role='alert'>";
    echo"<br><strong>$msg</strong>";
    echo"</div>";
?>