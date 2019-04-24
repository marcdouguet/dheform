<?php

function clean($string) {

    // $string = mb_strtolower($string, "UTF-8");
    $string = strtolower($string);
    $string = str_replace(
      array("À","Á","Â","Ä","È","É","Ê","Ë","Ì","Í","Î","Ï","Ò","Ó","Ô","Ö","Ù","Ú","Û","Ü","Œ","Æ"),
      array("à","á","â","ä","è","é","ê","ë","ì","í","î","ï","ò","ó","ô","ö","ù","ú","û","ü","œ","æ"),
      $string
    );
    $string = str_replace(array(
	".",
	",",
	";",
	":",
	"?",
	"!",
	"…",
	'"'
    ) , "", $string);
    $string = str_replace("oe", "œ",$string);
    $string = trim($string);
    return $string;
}
function roman($num) {

    $n = intval($num);
    $res = '';

    /*** roman_numerals array  ***/
    $roman_numerals = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
    foreach ($roman_numerals as $roman => $number) {

        /*** divide to get  matches ***/
        $matches = intval($n / $number);

        /*** assign the roman char * $matches ***/
        $res.= str_repeat($roman, $matches);

        /*** substract from the number ***/
        $n = $n % $number;
    }

    /*** return the res ***/
    return $res;
}

?>
