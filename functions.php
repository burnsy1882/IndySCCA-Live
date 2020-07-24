<?php
    function classexists($class)
    {
        if (file_exists($class.".php"))
        {
            return '<b><a href="'.$class.'.php">'.$class.'</a></b>';
        } else {
            return $class;
        }
    }

    function fileexists($file, $name = "", $show = TRUE)
    {
        if (file_exists($file))
        {
            return '<b><a href="'.$file.'">'.$name.'</a></b>';
        }
        else
        {
            if ($show)
            {
                return $name;
            }
            else
            {
                return "&nbsp;";
            }
        }
    }
?>
