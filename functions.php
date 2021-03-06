<?php
    function sectionInclude($file, $cssClass)
    {
        if (file_exists($file))
        {
            return '<div class="w3-panel w3-center '.$cssClass.'">'.file_get_contents($file).'</div>';
        }
    }

    function sectionIncludeHtml($file, $text, $htmlBefore, $htmlAfter)
    {
        if (file_exists($file))
        {
            return $htmlBefore.'<a href="'.$file.'">'.$text.'</a>'.$htmlAfter;
        }
    }

    function sponsorexists($sponsor, $sponsorURL)
    {
        if (file_exists("files/".$sponsor))
        {
            return '<a href="'.$sponsorURL.'"><img src="files/'.$sponsor.'" height="200"></a>';
        }
    }

    function classexists($class)
    {
        $strReturn = "";

        // Check mens class
        if (file_exists("files/".$class.".php"))
        {
            $strReturn .= '<b><a href="files/'.$class.'.php">'.$class.'</a></b>';
        }
        else
        {
            $strReturn .= $class;
        }

        $strReturn .= "&nbsp;/&nbsp;";

        // Check womens class
        if (file_exists("files/".$class."L.php"))
        {
            $strReturn .= '<b><a href="files/'.$class.'L.php">'.$class.'L</a></b>';
        }
        else
        {
            $strReturn .= $class."L";
        }

        return $strReturn;
    }

    function fileexists($file, $name = "", $show = TRUE)
    {
        if (file_exists("files/".$file))
        {
            return '<b><a href="files/'.$file.'">'.$name.'</a></b>';
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
