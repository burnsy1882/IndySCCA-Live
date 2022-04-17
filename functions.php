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
 * @return string
 */
function sectionInclude($file, $cssClass)
{
    if (file_exists($file))
    {
        return '<div class="w3-panel w3-center '.$cssClass.'">'.file_get_contents($file).'</div>';
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
 * @return string
 */
function sectionLinkInclude($file, $cssClass, $text)
{
    if (file_exists($file))
    {
        return '<div class="w3-panel w3-center '.$cssClass.'"><b><a href="'.$file.'">'.$text.'</a></b></div>';
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
 * @param string $name Long form name of class
 * @return string
 */
function classExists($class, $name)
{
    $strReturn = "";
    $exists = false;

    // Check class
    if (file_exists("files/".$class.".php"))
    {
        $strReturn .= '<b><a href="files/'.$class.'.php">'.$name.'</a></b>';
        $exists = true;
    }
    else
    {
        $strReturn .= $name;
    }

    if ($GLOBALS['hiddenClasses'])
    {
        if ($exists == true)
        {
            return $strReturn;
        }
        else
        {
            return "&nbsp;";
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
