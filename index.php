
<?php
    //Get id
    $url = $_SERVER["REQUEST_URI"];
    $section = Explode('/', $url);
    $id = $section[count($section) - 1];       
       
    echo $id;

?>
