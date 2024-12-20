
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="text/css" rel="stylesheet" href="css\style.css" />

    <script type="text/javascript" src="js\jquery-3.7.1.js"></script>
    <script type="text/javascript" src="js\jquery.tablesorter.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function() { 
    	$("table").tablesorter({widgets: ['zebra']})
    });
    </script>

    <title>Document</title>
</head>
<body>
 
<h1>Список  <a href="form.php">Добавить</a></h1>
<?php
        
    require_once 'config.php';
    error_reporting(0);
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if (!$link) {
        die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
    }
    //echo "<p>Вы подключились к MySQL!</p><br>";
    $res = mysqli_query($link, "SELECT * FROM message ORDER BY date DESC");
    if (!$res)
    {
        echo "error res\n";
    //    exit;
    }
    else
    {
        echo "";
    }
    echo '<table class="tablesorter">
        <thead>
            <tr>
                <th>User Name</th>
                <th>E-mail</th>
                <th>Homepage</th>
                <th>Text</th>
                <th>IP</th>
                <th>Browser</th>
                <th>Date</th>
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

</body>
</html>