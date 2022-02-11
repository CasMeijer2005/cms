<?php
$con = mysqli_connect("localhost", "root", "", "cmstutorial");

if (!$con) {
    die(" not Connected");
} else {
    echo "connected";
}
