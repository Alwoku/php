<link rel="stylesheet" href="../../css/style.css">
<h4>Приветсвуем тебя в личном кабинете, <?=$_COOKIE["login"]?></h4>
<form action="/user" method="POST">
    <input type="hidden" name="ex_bt">
<button type="submit" name="btn_exit" class="btn-primary mt-5">Выйти</button>
</form>
