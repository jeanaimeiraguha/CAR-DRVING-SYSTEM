<?php

$conn =mysqli_connect('localhost' , 'root' , '' ,'driving-company');
if ($conn) {
    # code...
    echo "connected to db";
}
else{
    echo "something wrong here";
}

?>