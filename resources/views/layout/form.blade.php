<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в админку</title>
</head>
<body>
  <h2 style="text-align:center;padding-top:100px">Вход в административную панель</h2>    
    <form action="app/Http/Controllers/Admins/admin.php" method="POST" style="text-align:center;padding-top:80px">
      <div class="form-group">
        <input type="text" placeholder="Введите логин" name="login">
      </div>
      <div class="form-group">
      <input type="text" placeholder="Введите пароль" name="password">
      </div>
      <button type="submit" class="btn">Войти</button>
    </form>

</body>
</html>