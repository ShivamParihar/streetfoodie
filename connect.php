<?php

try {
    $con = mysqli_connect("localhost", "u870292363_love", "asdfghjkl@123", "u870292363_food");
} catch (Exception $err) {
    echo $err->getMessage();
}
?>