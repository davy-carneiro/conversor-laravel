<?php

function p ($argumento) {
    echo "<pre>";
    print_r($argumento);
    echo"</pre>";
}

function pb ($argumento) {
    echo "<pre>";
    print_r($argumento);
    echo"</pre>";
    die;
}

function remove($item,$array) {
    $result = true;

    if($array[0] != null || !empty($array[0]))
        $local = $array[0];
    else
        unset($array[0]);    
    
    while($result !== false) {
        $result = array_search($item,$array);
        unset($array[$result]);
    }

    if(!empty($local))
        $array[0] = $local;

    ksort($array);

    return $array;
}

function charInStr ($char, $str) {
    $string = $str;
    $character = $char;
    $result = strpos($string,strtolower($character));
    $type = gettype($result);

    if ($type == "boolean") return 0; else return 1;
}

function removerAspas($string) {

    $newString = "";
    $newString = str_replace('"', "", $string);
    $newString = str_replace("'", "", $newString);

    return $newString;

}

function excluir ($string, $argumento, $argumento2 = null, $excluiAspa = null) {
    $tamArg = strlen($argumento);
    $result1 = substr($string, strpos($string, $argumento) + $tamArg);
    
    $result2 = $result1;

    if(!empty($argumento2)) {

        $result2 = explode($argumento2, $result1)[0];
        
    }

    $result = $result2;

    return $result;
}
