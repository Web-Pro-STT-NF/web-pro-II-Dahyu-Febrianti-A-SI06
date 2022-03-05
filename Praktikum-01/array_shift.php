<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["dahyu","febri","anti","ambar"];
    array_shift($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>
</body>
</html>