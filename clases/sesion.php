<?php

require('encode.php');
class Session{
    private $msg;

    public function validarDatos($usuario,$pass){
        if($usuario=="" or $pass=="")

        {
            $msg="Por favor teclee usuario y password";
            echo"<div class='alert alert-danger' role='alert'>";
            echo"<br><strong>$msg</strong>";
            echo"</div>";

        }
        else{

            $sql="SELECT * FROM usuarios WHERE  usuario='$usuario' and pass='$pass'";
            $consulta=mysql_query($sql)or die("Error"+$sql);
            $cuantos=mysql_num_rows($consulta);
            if($cuantos==0)
            {
                $msg="El usuario o password no son validos";
                echo"<div class='alert alert-danger' role='alert'>";
                echo"<br><strong>$msg</strong>";
                echo"</div>";
            }
            else{
                $idu=mysql_result($consulta,0,'id');
                $activo=mysql_result($consulta,0,'estatus');
                if($activo!='1')
                {
                    $msg="El usuario no esta activo, consulte a su administrador";
                    echo"<div class='alert alert-danger' role='alert'>";
                    echo"<br><strong>$msg</strong>";
                    echo"</div>";
                }
                else{
                    $encode = new Encode ();
                    $id=$encode->encode_this("idu=$idu");
                    print"<meta http-equiv='refresh' content='0;url=index.php?$id>";
                }
            }
        }
    }
}


?>
