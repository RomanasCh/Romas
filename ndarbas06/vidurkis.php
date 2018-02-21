<?php
    function vidurkis($mas) {
        $n = count($mas);
        if($n > 0) {
            return array_sum($mas) / $n;
        }
            return 0;
    }

?>




