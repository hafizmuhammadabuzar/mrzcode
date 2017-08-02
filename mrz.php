<?php
$mrz = 'P<UTOERIKSSON<<ANNA<MARIA<<<<<<<<<<<<<<<<<<<
L898902C<3UTO6908061F9406236ZE184226B<<<<<14';

// $str = array_values(array_filter(explode('<', $mrz)));
$str = explode('<', $mrz);


if (strpos($str[count($str)-2], 'F') !== false) {
    echo '2nd last Female';
    $dates = $str[count($str)-2];
}
else if (strpos($str[count($str)-3], 'F') !== false){
    echo '3rd last Female';
}
else if (strpos($str[count($str)-2], 'M') !== false) {
    echo '2nd last Male';
}
else if (strpos($str[count($str)-3], 'M') !== false){
    echo '3rd last Male';
}

echo '<pre>';
print_r($str);
print_r($dates);


 ?>