<?php
function loadComponents($name){
    // include "/Optical%20System%20Project/_components/$name.php";
    include $_SERVER['DOCUMENT_ROOT']."/Optical System Project/_components/$name.php";
    //print($_SERVER['DOCUMENT_ROOT']."/Optical System Project/_components/$name.php");
}
?>