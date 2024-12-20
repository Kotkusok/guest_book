<?php
    function get_ip()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    function get_bro()
    {
        $user_agent = $_SERVER["HTTP_USER_AGENT"]; 
        //echo $user_agent;
        if (strpos($user_agent, "Firefox") !== false) $browser = "Mozilla Firefox"; 
        elseif (strpos($user_agent, "OPR") !== false) $browser = "Opera"; 
        elseif (strpos($user_agent, "Edg") !== false) $browser = "Microsoft Edge"; 
        elseif (strpos($user_agent, "Chrome") !== false) $browser = "Google Chrome"; 
        elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer 7"; 
        elseif (strpos($user_agent, "Trident") !== false) $browser = "Internet Explorer"; 
        elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari"; 
        else $browser = "Неизвестный"; 
        return $browser;
    }
?>