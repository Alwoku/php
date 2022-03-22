<link rel="stylesheet" href="../../css/style.css">
<center>
<div class = "conteiner mb-3 px-3">
<div class="row">
		<div class="col-md-8 ">
      <h5 class="mt-3 mb-3">Форма авторизации</h5>
  			<form  action="/auth" method="POST">
          <input type="text" name="login_au" id="login" class="form-control mt-5 mb-3" placeholder="Введите логин" value="<?=$_POST['login_au']?>">
          <input type="password" name="pass_au" id="pass" class="form-control mb-3" placeholder="Введите пароль" value="<?=$_POST['pass_au']?>">

            <div  id="error"> <?=$data["mess"]?> </div>

          <button type="submit" id="auth_us" class="btn btn-primary mt-5">Войти</button>
        </form>
  	</div>
 </div>
</div>
</center>