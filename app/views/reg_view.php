<link rel="stylesheet" href="../../css/style.css">
<center>
<div class = "conteiner mb-3 px-3">
<div class="row">
		<div class="col-md-8 ">
      <h5>Форма регистрции</h5>
  			<form  action="/reg" method="POST">
          <input type="email" name="email" id="email" class="form-control mb-3 mt-3" placeholder="Введите email" value="<?=$_POST['email']?>">
          <input type="text" name="login" id="login" class="form-control mb-3" placeholder="Введите логин" value="<?=$_POST['login']?>">
          <input type="password" name="pass" id="pass" class="form-control mb-3" placeholder="Введите пароль" value="<?=$_POST['pass']?>">

            <div id="error"> <?=$data["messenge"]?> </div>

          <button  id="reg_us" class="btn btn-primary mt-5">Регистрация</button>
        </form>
  	</div>
 </div>
</div>
</center>