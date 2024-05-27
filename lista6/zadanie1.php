<?php
    $samples = array("dwa","jeden","trzy","siedem");
    echo "<ol><li>";
    echo implode("<li>", $samples) . "</li>";
    echo "</ol>";
?>