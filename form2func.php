<?php
    function displayOption($options,$selectedvalues){
        foreach ($options as $option) {
            $option = strtolower($option);
            $selectd = '';
            if (in_array($option, $selectedvalues)) {
                $selectd = "selected";
            }
            printf("<option value= '%s' %s>%s</option>\n",$option,$selectd,ucwords($option));
        }
    }
?>