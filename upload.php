<?php

if(isset($_POST['submit']) && isset($FILES['my_image'])) {
    echo "<pre>";
    print_r($FILES['my_image']);
    echo "</pre>";
}else {
    header("Location: uploadimg.php");
}


?>