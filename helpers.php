<?php

function view($plantilla,$variable =array())
{
    extract($variables);
    require('views/'.$plantilla.'.tpl.php');
    }

    function controller($nombre)
    {
    if(empty($nombre))
        $nombre='home';


        $archivo = 'controllers/'.$nombre.'.php';

        if(file_exists($archivo))
            require($archivo);
        else
            echo'El archivo no se encuentra';

    }

?>