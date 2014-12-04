<!--html>
<head></head>
<body>
<form action='calif' method='POST' enctype='multipart/form-data'>
    <p align='center'><?=$preguntas ?></p>
    <table class=table table-stripped>

   <? echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='1' value='r1' >".$respuesta1 ?></td></tr>
   <? echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='2' value='r2' >".$respuesta2 ?></td></tr>
   <? echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='3' value='r3' >".$respuesta3 ?></td></tr>
   <? echo "<tr><td align='center'><input type='text' name='contador' id='4' value='$contador' >" ?></input></td></tr>
   <? echo "<tr><td align='center'><input type='text' name='rb$contador' id='5' value='$rb' >" ?></input></td></tr>
   <? echo "<tr><td align='center'><input type='text' name='id$contador' id='6' value='$id' >" ?></input></td></tr>

   </tabla>
   </body>
   </html-->
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
    $sql02="SELECT * FROM pregunts ORDER BY RAND() LIMIT 10";
    $result02=mysql_query($sql02)or die ('Error $sql02');
    $contador=0;

    while($field3 = mysql_fetch_array($result02));
    {
        echo"<table class=table table-stripped>";
        $preguntas=$field3['pregunta'];
        $respuesta1=$field3['respuesta1'];
        $respuesta2=$field3['respuesta2'];
        $respuesta3=$field3['respuesta3'];
        $rb=$field3['rb'];
        $id=$field3['idp'];
        $contador++;
        echo"<form action='calif' method='POST' enctype='multipart/form-data'>";
        echo"<p align='center'>$contador) $preguntas </p>";
        echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='1' value='r1'  required=''> $respuesta1 </td></tr>";
        echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='2' value='r2' required=''> $respuesta2 </td></tr>";
        echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='3' value='r3' required=''> $respuesta3 </td></tr>";
        echo "<tr><td align='center'><input type='text' name='contador' id='4' value='$contador' > </input></td></tr>";
        echo "<tr><td align='center'><input type='text' name='rb$contador' id='5' value='$rb' ></input></td></tr>";
        echo "<tr><td align='center'><input type='text' name='id$contador' id='6' value='$id' ></input></td></tr>";

        echo"</table>";

    }

echo"<center><input type='submit' name=evaluar id=evaluar value='Evaluar'></input></center></form>";
?>