<?php

    /**
     * FM Channel
     *
     * Set this to the FM channel of your FM broadcaster if in use, eg. 98.5;
     * Leave at 0 if you do not utilize an FM broadcaster
     */
    $fmchannel = 0;

    /**
     * Class table styling
     *
     * If set to True, the classes table on the index page will be ordered horizontally
     * If set to False, the classes table on the index page will be ordered vertically
     * Default is True
     */
    $horizontal_classes = True;

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
            return $htmlBefore.'<a href="'.$file.'" target="_blank" rel="noopener noreferrer">'.$text.'</a>'.$htmlAfter;
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
        if (file_exists("files/L".$class.".php"))
        {
            $strReturn .= '<b><a href="files/L'.$class.'.php">L'.$class.'</a></b>';
        }
        else
        {
            $strReturn .= "L".$class;
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
