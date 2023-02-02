<?php

    function calculfactu($units) {
        
        if($units <= 50) {
            $result = $units * 3.50;
        } else if ($units > 50 AND $units <= 100) {
            $result = $units * 4.00;
        } else if ($units > 100) {
            $result = $units * 5.20;
        } else if ($units > 250) {
            $result = $units * 6.50;
        }

        return $result;
    }

?>