<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Форма <a href="list.php">Список</a></h1>
    <form action="insert.php" method="POST">
      Имя пользователя:
      <input type="text" name="username" size="10" /><br /><br />
      Эл. почта:
      <input type="text" name="email" size="10" /><br /><br />
      Сайт:
      <input type="text" name="site" size="10" /><br /><br />
      Текст:
      <input type="text" name="text" size="10" /><br /><br />
      <br /><br /><input type="submit" value="Сохранить" />
    </form>
  </body>
</html>
