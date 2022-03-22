<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cократ..</title>
  <link rel="stylesheet" href="http://localhost/css/style.css" >
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6266/6266888.png" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  function test(id)
  {
  $.ajax({
        url: '/delet',
        type: 'POST',
        cache: false,
        data: {'id' : id},
        dataType: 'html',
        success: function(id) {
            document.location.reload(true);
          }
      });

  }
  </script>

</head>
<body>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 mb-3 border-bottom">
      <div class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none">
      <h4>Сокращение ссылок</h4>
      </div>
  
      <div class="col-md-3 text-end">
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="/main">Главная</a>
        <a class="nav-link" href="/contacts">Контакты</a>
        <?php if($_COOKIE["login"] == ''): ?>
          <a class="nav-link" href="/auth">Войти</a>
        <?php else: ?>
          <a class="nav-link" href="/user">Кабинет пользователя</a>
        <?php endif; ?>  
      </nav>
      </div>
    </header>
  </div>

<div class="container">
  <?php include $content_view ?>
  </div>

<footer class="footer mt-auto py-3 ">
  <div class="container">
  
    <span class="text-muted">The end</span>
    <p><a href="/me">Немного о нас</a></p>
  
  </div>
</footer>


</body>
</html>
