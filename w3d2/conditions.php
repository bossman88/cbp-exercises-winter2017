


<?php

$height = 140;
if ($height>180){
    echo "tall";

} elseif ($height>160){

    echo "average";
}else {
    echo "small";
}



?>

<?php


define ("OS", "efwefwe");
switch (OS){
    case "Windows":
    echo "Edge";
    break;

    case "Linux" :
    echo "Firefox";
    break;

    default:
    echo "Just use chrome";
    break;
}

?>