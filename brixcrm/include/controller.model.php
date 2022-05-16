<?php

//checking if there is array in POST.
if(array_key_exists('actived', $_POST)){
    $allowed = $_POST['actived'];
    simActivateAllowed($allowed);
}

//checking what you got in the POST.
function simActivateAllowed($allow){
    if($allow == '1'){
        echo "<script>alert('het is toegestaan om simcard te activeren')</script>";
    } else {
        echo "<script>alert('het is niet toegestaan om simcard te activeren')</script>";
    }
}