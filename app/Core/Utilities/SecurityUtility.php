<?php

namespace App\Core\Utilities;

class SecurityUtility
{
    /**
     * @param $string
     * @return string|string[]|null
     */
    public static function removeXSS($string)
    {
        $string = preg_replace('#&(?!\#[0-9]+;)#si', '&amp;', $string);
        $string = str_replace("<", "&lt;", $string);
        $string = str_replace(">", "&gt;", $string);
        $string = str_replace("\"", "&quot;", $string);
        $string = str_replace("'", "&quot;", $string);
        $preg_find = array('#javascript#i', '#vbscript#i');
        $preg_replace = array('java script', 'vb script');
        return trim(preg_replace($preg_find, $preg_replace, $string));
    }
}
