<?php
$idu=$_COOKIE['id'];
$acceso=$_COOKIE['acceso'];
if($idu=="" or $acceso=="")
{
    print"<meta http-equiv='refresh' content='0; url=index.php'>";
}

session_start();
$idu2=$_SESSION['id'];
$acceso2=$_SESSION['acceso'];
if($idu2=="" or $acceso2=="")
{
    print"<meta http-equiv='refresh' content='0; url=index.php'>";
}

    $respuesta1=$_POST['respuesta1'];
    $rb1=$_POST['rb1'];
    $rd1=$_POST['id1'];
    $respuesta2=$_POST['respuesta2'];
    $rb2=$_POST['rb2'];
    $rd2=$_POST['id2'];
    $respuesta3=$_POST['respuesta3'];
    $rb3=$_POST['rb3'];
    $rd3=$_POST['id3'];
    $respuesta4=$_POST['respuesta4'];
    $rb4=$_POST['rb4'];
    $rd4=$_POST['id4'];
    $respuesta5=$_POST['respuesta5'];
    $rb5=$_POST['rb5'];
    $rd5=$_POST['id5'];
    $respuesta6=$_POST['respuesta6'];
    $rb6=$_POST['rb6'];
    $rd6=$_POST['id6'];
    $respuesta7=$_POST['respuesta7'];
    $rb7=$_POST['rb7'];
    $rd7=$_POST['id7'];
    $respuesta8=$_POST['respuesta8'];
    $rb8=$_POST['rb8'];
    $rd8=$_POST['id8'];
    $respuesta9=$_POST['respuesta9'];
    $rb9=$_POST['rb9'];
    $rd9=$_POST['id9'];
    $respuesta10=$_POST['respuesta10'];
    $rb10=$_POST['rb10'];
    $rd10=$_POST['id10'];
$variables=array('calificacion1'=>$rb1,'respuesta1'=>$respuesta1,'id1'=>$rd1,'calificacion2'=>$rb2,'respuesta2'=>$respuesta2,'id2'=>$id2,
'calificacion3'=>$rb3,'respuesta3'=>$respuesta3,'id3'=>$rd3,'calificacion4'=>$rb4,'respuesta4'=>$respuesta4,'id4'=>$id4,
'calificacion5'=>$rb5,'respuesta5'=>$respuesta5,'id5'=>$rd5,'calificacion6'=>$rb6,'respuesta6'=>$respuesta6,'id6'=>$id6,
'calificacion7'=>$rb7,'respuesta7'=>$respuesta7,'id7'=>$rd7,'calificacion8'=>$rb8,'respuesta8'=>$respuesta8,'id8'=>$id8,
'calificacion9'=>$rb9,'respuesta9'=>$respuesta9,'id1'=>$rd9,'calificacion10'=>$rb10,'respuesta10'=>$respuesta10,'id10'=>$id10);

view('calificacion',$variables);
?>