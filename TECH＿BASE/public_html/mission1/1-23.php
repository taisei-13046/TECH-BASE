<?php
    $coworker = array("Ken"=>"same", 
                    "Alice"=>"same",
                    "Judy"=>"same",
                    "BOSS"=>"old",
                    "Bob"=>"same"
                    );
    foreach ($coworker as $name => $age)
    {
        if ($age == "same")
            echo "Hi! ${name}<br>";
        else
            echo "Good Morning ${name}!<br>";
    }

?>