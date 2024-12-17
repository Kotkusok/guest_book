<?php
    error_reporting(0);
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '1234';
    $db_name = 'guest_book';
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if (!$link) {
        die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
    }
    echo "<p>Вы подключились к MySQL!</p><br>";
    $res = mysqli_query($link, "SELECT * FROM message");
    if (!$res)
    {
        echo "error res\n";
    //    exit;
    }
    else
    {
        echo "";
    }
    echo '<table border="1">
        <tr>
            <td>User Name</td>
            <td>E-mail</td>
            <td>Homepage</td>
            <td>Text</td>
            <td>IP</td>
            <td>Browser</td>
        </tr>
        <tr>';
    while ($row = mysqli_fetch_row($res))
    {
        for($i=0; $i<count($row); $i++)
        {
            echo "<td>".$row[$i]."</td>";
        }
    }
    echo "</tr>
        </table>";
?>