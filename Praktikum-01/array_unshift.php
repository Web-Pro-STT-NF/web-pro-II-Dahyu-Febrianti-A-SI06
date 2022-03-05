<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["dahyu","febri","anti","ambar"];
    array_unshift($tims,"risna","dahyoo");
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>
</body>
</html>