<?php
/**
 * FM Channel
 *
 * Set this to the FM channel of your FM broadcaster if in use, eg. 98.5;
 * Leave at 0 if you do not utilize an FM broadcaster
 */
$fmChannel = 0;

/**
 * Class table styling
 *
 * If set to True, the classes table on the index page will be ordered horizontally
 * If set to False, the classes table on the index page will be ordered vertically
 * Default is True
 */
$horizontalClasses = true;

/**
 * Hide unused classes
 *
 * If set to true, the classes table on the index page will not show empty classes
 * Default is false
 */
$hiddenClasses = false;

/**
 * sectionInclude
 *
 * Function that takes a file's contents and inserts them in a new html div with a specified class.
 * Does not show the html div if the file does not exist.
 *
 * @param string $file Relative path to contents of file to insert.
 * @param string $cssClass Name to give inserted html div, used to stylize div. Add class name to stylesheet.css.
 *
 * @return null|string
 */
function sectionInclude($file, $cssClass)
{
    if (file_exists($file))
    {
        return '<div class="w3-panel w3-center '.$cssClass.'">'.file_get_contents($file).'</div>';
    }
    else
    {
        return null;
    }
}

/**
 * eventTitleInclude
 *
 * @param string $file Relative path to contents of file to insert.
 * @param string $cssClass Name to give inserted html div, used to stylize div. Add class name to stylesheet.css.
 *
 * @return null|string
 */
function eventTitleInclude($file, $cssClass)
{
    if (file_exists($file))
    {
        $contents = file($file);
        $html     = '<div class="w3-panel w3-center '.$cssClass.'">';

        foreach((array) $contents as $line)
        {
            $html .= $line;
            $html .= "</div>";
        }

        $html .= '</div>';
        return $html;
    }
    else
    {
        return null;
    }
}

/**
 * sectionLinkInclude
 *
 * Function that takes adds a link to a file in a new html div with a specified class.
 * Does not show the html div and link if the file does not exist.
 *
 * @param string $file Relative path to file to link to.
 * @param string $cssClass Name to give inserted html div, used to stylize div. Add class name to stylesheet.css.
 * @param string $text Text to use as html link in html div.
 *
 * @return null|string
 */
function sectionLinkInclude($file, $cssClass, $text)
{
    if (file_exists($file))
    {
        return '<div class="w3-panel w3-center '.$cssClass.'"><b><a href="'.$file.'">'.$text.'</a></b></div>';
    }
    else
    {
        return null;
    }
}

/**
 * classExists
 *
 * Function that creates a string with html links for autocross classes in the format of Mens / Womens.
 * Function will show the class text regardless if the respective class file exists, but if it does, it will make the text a html link.
 * Example: Input - CSP, Output - CSP / CSPL.
 *
 * @param string $class Text representation of a class, preferrably a shorthand version.
 *
 * @return string
 */
function classExists($class)
{
    $strReturn = "";
    $mens      = false;
    $womens    = false;

    // Check mens class
    $mensClass = similar_file_exists("files/".$class.".php");
    if ($mensClass)
    {
        $strReturn .= '<td><b><a href="'.$mensClass.'">'.$class.'</a></b>';
        // $strReturn .= '<td><b><a href="showClass.php?class='.$class.'">'.$class.'</a></b>';
        $mens       = true;
    }
    else
    {
        $strReturn .= "<td>".$class;
    }

    $strReturn .= "&nbsp;/&nbsp;";

    // Check womens class
    $womensClass = similar_file_exists("files/".$class."L.php");
    if ($womensClass)
    {
        $strReturn .= '<b><a href="'.$womensClass.'">'.$class.'L</a></b></td>';
        // $strReturn .= '<b><a href="showClass.php?class='.$class.'L">'.$class.'L</a></b></td>';
        $womens     = true;
    }
    else
    {
        $strReturn .= $class."L</td>";
    }

    if ($GLOBALS['hiddenClasses'])
    {
        if ($mens == true || $womens == true)
        {
            return $strReturn;
        }
    }
    else
    {
        return $strReturn;
    }
}

/**
 * tableFileExists
 *
 * Function to create a string with a html link or just text.
 *
 * @param string $file Relative path to contents of file to insert.
 * @param string $name Text to use as html link in html link.
 *
 * @return string
 */
function tableFileExists($file, $name)
{
    if (file_exists("files/".$file))
    {
        return '<b><a href="files/'.$file.'">'.$name.'</a></b>';
    }
    else
    {
        return $name;
    }
}

/**
 * Alternative to file_exists() that will also return true if a file
 * exists with the same name in a difference case.
 *
 * @param string $file Relative path to contents of file to insert.
 *
 * @return string
 */
function similar_file_exists($file)
{
    if (file_exists($file))
    {
        return $file;
    }

    $lowerFile = strtolower($file);

    foreach ((array)glob(dirname($file) . '/*') as $file)
    {
        if (strtolower($file) == $lowerFile)
        {
            return $file;
        }
    }
}
