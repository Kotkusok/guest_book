<?php
    
    require_once 'config.php';
    require_once 'functions.php';

    print_r($_POST);
    /*
    echo '<br>';
    echo get_ip();
    echo '<br>';
    echo get_bro();
    echo '<br>';
    */
    error_reporting(0);
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if (!$link) 
    {
        die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
    }
    else
    {
        echo "DB+";
    }       
        $res = mysqli_query($link, "INSERT INTO `message`(`username`, `email`, `homepage`, `text`, `ip`, `browser`) 
                                        VALUES ('".$_POST['username']."','".$_POST['email']."','".$_POST['site']."','".$_POST['text']."','".get_ip()."','".get_bro()."')");
        if (!$res)
        {
            echo "error res\n";
        }
        else
        {
            echo 'res+';
        }
    mysqli_close($link);

    
?>