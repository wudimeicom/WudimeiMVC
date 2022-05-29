<?php

function op_trans( $args )
{
    $code = ' $_ .= trans(' .  $args .');' ;
  //$code = ' $arr = ['.$args.']; ';
 // $code .= ' $__TPL .= "hello,".$arr[0]."!"; ';
  return $code;
}

