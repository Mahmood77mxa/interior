<?php

$con=new mysqli('localhost','root','0000','signup');


if ($con) {
    echo "connection successfull";
}
else {
    echo "not connected to database";
}
?>
