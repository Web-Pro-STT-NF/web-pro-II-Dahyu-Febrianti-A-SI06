<?php
    require_once "class_persegipanjang.php"

    $LuasPersegi = new  persegipanjang();
    echo "panjang : " . $LuasPersegi->setPanjang(10);
    echo "<br/>lebar : " . $LuasPersegi->setLebar(5);
    echo "<br/>"$LuasPersegi->luasp();
    echo "<br/>"$LuasPersegi->kelilingp();
?>