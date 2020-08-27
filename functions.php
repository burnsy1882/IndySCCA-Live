<?php
    function classexists($class)
    {
        $strReturn = "";

        // Check mens class
        if (file_exists("classes/".$class.".php"))
        {
            $strReturn .= '<b><a href="classes/'.$class.'.php">'.$class.'</a></b>';
        }
        else
        {
            $strReturn .= $class;
        }

        $strReturn .= " / ";

        // Check womens class
        if (file_exists("classes/".$class."L.php"))
        {
            $strReturn .= '<b><a href="classes/'.$class.'L.php">'.$class.'L</a></b>';
        }
        else
        {
            $strReturn .= $class."L";
        }

        return $strReturn;
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
