<link rel="stylesheet" href="../../css/style.css">
 <main class="container mt-5">
	<div class="row">
		<div class="col-md-8 ">
      <h5>Обратная связь</h5>
  			<form  action="/contacts" method="POST">
          <input type="text" name="username" id="username" class="form-control mt-3 mb-3" placeholder="Введите имя" value="<?=$_POST['username']?>">
          <input type="mail" name="email" id="email" class="form-control mb-3" placeholder="Введите email" value="<?=$_POST['email']?>">
          <textarea name="text" id="text" class="form-control mb-3" placeholder="Введите текст сообщения"></textarea>

            <div class="alert alert-danger mt-2" id="errorBlock" style="display: none">
            <?=$data["messenge"]?>
            </div>
            
          <button type="submit" id="mess_bt" class="btn btn-success mt-5">Отправить</button>
        </form>
  	</div>

  </div>

</main>