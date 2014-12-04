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


require('bd/bd.php');
$califinal=0;
if($calificacion1==$respuesta1)
    {
        echo"<div class='alert alert-success' role='alert'>1)La respuesta correcta era</div>";
        $califinal++;

    }

  else
  {
   $sql03="SELECT * FROM preguntas WHERE idp=$id1";
   $result03=mysql_query($sql03)or die ('Error $sql03');
   $res1=mysql_result($result03,0,$respuesta1);
   $reb1=mysql_result($result03,0,$calificacion2);
   echo"<div class='alert alert-danger' role='alert'>1)Tu respuesta fue $res1 y la respuesta correcta es $reb1 </div>";

  }
    if(calificacion2==$respuesta2)
    {
        echo"<div class='alert alert-success' role='alert'>2)Tu respuesta fue correcta</div>";
        $califinal++;

    }

   else
   {
       $sql03="SELECT *FROM preguntas WHERE idp=$id2";
       $result03=mysql_query($sql03)or die ('Error $sql03');
       $res2=mysql_result($result03,0,$respuesta2);
       $reb2=mysql_result($result03,0,$calificacion2);
       echo"<div class='alert alert-danger' role='alert'>2)Tu respuesta fue $res2 y la respuesta correcta es $reb2 </div>";
   }
if(calificacion3==$respuesta3)
{
    echo"<div class='alert alert-success' role='alert'>3)Tu respuesta fue correcta</div>";
    $califinal++;

}

else
{
    $sql03="SELECT *FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res3=mysql_result($result03,0,$respuesta3);
    $reb3=mysql_result($result03,0,$calificacion3);
    echo"<div class='alert alert-danger' role='alert'>3)Tu respuesta fue $res3 y la respuesta correcta es $reb3 </div>";
}
if(calificacion4==$respuesta4)
{
    echo"<div class='alert alert-success' role='alert'>4)Tu respuesta fue correcta</div>";
    $califinal++;

}


else
{
    $sql03="SELECT *FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res4=mysql_result($result03,0,$respuesta4);
    $reb4=mysql_result($result03,0,$calificacion4);
    echo"<div class='alert alert-danger' role='alert'>4)Tu respuesta fue $res4 y la respuesta correcta es $reb4 </div>";
}
if(calificacion5==$respuesta5)
{
    echo"<div class='alert alert-success' role='alert'>5)Tu respuesta fue correcta</div>";
    $califinal++;

}

else
{
    $sql03="SELECT *FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res5=mysql_result($result03,0,$respuesta5);
    $reb5=mysql_result($result03,0,$calificacion5);
    echo"<div class='alert alert-danger' role='alert'>5)Tu respuesta fue $res5 y la respuesta correcta es $reb5 </div>";
}
if(calificacion6==$respuesta6)
{
    echo"<div class='alert alert-success' role='alert'>6)Tu respuesta fue correcta</div>";
    $califinal++;

}

else
{
    $sql03="SELECT *FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res6=mysql_result($result03,0,$respuesta6);
    $reb6=mysql_result($result03,0,$calificacion6);
    echo"<div class='alert alert-danger' role='alert'>6)Tu respuesta fue $res6 y la respuesta correcta es $reb6 </div>";
}
if(calificacion7==$respuesta7)
{
    echo"<div class='alert alert-success' role='alert'>7)Tu respuesta fue correcta</div>";
    $califinal++;

}

else
{
    $sql03="SELECT *FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res7=mysql_result($result03,0,$respuesta7);
    $reb7=mysql_result($result03,0,$calificacion7);
    echo"<div class='alert alert-danger' role='alert'>7)Tu respuesta fue $res7 y la respuesta correcta es $reb7 </div>";
}
if(calificacion8==$respuesta8)
{
    echo"<div class='alert alert-success' role='alert'>8)Tu respuesta fue correcta</div>";
    $califinal++;

}

else
{
    $sql03="SELECT *FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res8=mysql_result($result03,0,$respuesta8);
    $reb8=mysql_result($result03,0,$calificacion8);
    echo"<div class='alert alert-danger' role='alert'>8)Tu respuesta fue $res8 y la respuesta correcta es $reb8 </div>";
}
if(calificacion9==$respuesta9)
{
    echo"<div class='alert alert-success' role='alert'>9)Tu respuesta fue correcta</div>";
    $califinal++;

}

else
{
    $sql03="SELECT *FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res9=mysql_result($result03,0,$respuesta9);
    $reb9=mysql_result($result03,0,$calificacion9);
    echo"<div class='alert alert-danger' role='alert'>9)Tu respuesta fue $res9 y la respuesta correcta es $reb9 </div>";
}
if(calificacion9==$respuesta9)
{
    echo"<div class='alert alert-success' role='alert'>10)Tu respuesta fue correcta</div>";
    $califinal++;

}

else
{
    $sql03="SELECT *FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res10=mysql_result($result03,0,$respuesta10);
    $reb10=mysql_result($result03,0,$calificacion10);
    echo"<div class='alert alert-danger' role='alert'>10)Tu respuesta fue $res10 y la respuesta correcta es $reb10 </div>";
}
if($califinal>=8)
            {
              echo"<div class='alert alert-danger' role='alert'>Tu calificacion final es $califinal</div>";
            }

else
{
    echo"<div class='alert alert-danger' role='alert'>Tu calificacion final es $califinal</div>";
}


$sql03="SELECT * FROM usuarios WHERE id=$idu";
$result03=mysql_query($sql03)or die('Error $sql03');
$caliba=mysql_result($result03,0,'calif');
if($califinal<$caliba)
    {
        $sql="UPDATE usuarios SET califinal=$$califinal WHERE id='$idu'";
        $result03=mysql_query($sql03)or die('Error $sql03');

    }

        $sql04="SELECT * FROM usuarios WHERE id='$idu'";
        $result04=mysql_query($sql4)or die ('Error $sql04');
        $caliba2=mysql_result($result04,0,'calif');
        echo"<div class='alert alert-info' role='alert'>Tu calificacion maxima es $caliba2</div>";
?>