<?php
$values = array(23, "23", 23.5, "23.5",'numer', null, true, false);
foreach ($values as $value) {
    echo "is_numeric(";
    var_export($value);
    echo ") = ";
    var_dump(is_numeric($value));
}
