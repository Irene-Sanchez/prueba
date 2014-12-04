<?php
    class Encode{
        public function encode_this($string)
        {
            $string=utf8_encode($string);
            $control='irene';
            $string=$control.$string.$control;
            $string=base64_encode($string);
            return $string;

        }

        public function decode_get($string)
        {
            $cad=explode("?",$string);
            $string=$cad[1];
            $string=base64_decode($string);
            $control='irene';
            $string=str_replace($control,"","$string");
            $cad_get=explode("&",$string);
            foreach($cad_get as $value)
            {
                $val_get=explode("=",$value);
                $_GET[$val_get[0]]=utf8_decode($val_get[1]);
            }
        }
    }
?>