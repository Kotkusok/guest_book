
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="jquery.tablesorter.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("table").tablesorter({ widgets: ['zebra']});
});
</script>

<h1>Список</h1>
<?php
    require_once 'config.php';
    error_reporting(0);
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if (!$link) {
        die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
    }
    //echo "<p>Вы подключились к MySQL!</p><br>";
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
    echo '<table>
        <thead>
            <tr>
                <td>User Name</td>
                <td>E-mail</td>
                <td>Homepage</td>
                <td>Text</td>
                <td>IP</td>
                <td>Browser</td>
            </tr>
        </thead>
        <tbody>';
    while ($row = mysqli_fetch_row($res))
    {
        echo '<tr>';
        for($i=0; $i<count($row); $i++)
        {
            echo "<td>".$row[$i]."</td>";
        }
        echo '</tr>';
    }
    echo "
        </tbody>
        </table>";
    mysqli_close($link);
?>