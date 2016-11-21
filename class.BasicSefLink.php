<?php

/**
 * Created by Muhammed ZAİM
 * mail: info@muhammedzaim.com
 * web: muhammedzaim.com
 * github: @muhammedzaimtr
 * twitter: @muhammedzaimtr
 */
class BasicSefLink
{
    function basicselflink($zaim) {
        $turk = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
        $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
        $zaim = str_replace($turk,$eng,$zaim);
        $zaim = strtolower($zaim);
        $zaim = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $zaim);
        $zaim = preg_replace('/\s+/', '-', $zaim);
        $zaim = preg_replace('|-+|', '-', $zaim);
        $zaim = preg_replace('/#/', '', $zaim);
        $zaim = str_replace('.', '', $zaim);
        $zaim = trim($zaim, '-');
        return $zaim;
    }
}