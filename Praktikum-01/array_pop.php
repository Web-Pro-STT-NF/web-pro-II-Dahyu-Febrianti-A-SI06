<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["dahyu","febri","anti","ambar"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>
</body>
</html>