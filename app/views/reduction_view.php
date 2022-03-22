
<link rel="stylesheet" href="../../css/style.css">
<div class = "conteiner mb-3 px-3">
<div class="row">
		<div class="col-md-8 ">
      <h5>Сокращение вашей ссылки</h5>
  			<form  action="/reduction" method="POST">
          <label for="link_r">Ссылка</label>
          <input type="text" name="link_r" id="link_r" class="form-control" value="<?=$_POST['link_r']?>">
          <label for="reduction">Сокращение</label>
          <input type="text" name="link_red" id="link_red" class="form-control" value="<?=$_POST['link_red']?>">

            <div id="errorBlock" >
            <?=$data["messenge"]?>
            </div>

          <button id="red_us" class="btn btn-primary mt-5">Записать</button>
          
              </div>
            </div>
            </div>
             
            <div class = "conteiner mb-3 px-3">
              <table>
          <?php for($i = 0 ; $i < count($data) ; $i++): ?>
            <tr>
              <td class = "rowid">

          </td>
            <div class="redu">
              <div class="col-md-8">
                  <span><?=$data[$i]['link_r']?></span>
                  <a href="<?=$data[$i]['link_r']?>"><span><?=$data[$i]['link_red']?></span></a>
                  <input type = button class = delete value = "delete" onclick="test(<?=$data[$i]['id']?>)">
              </div> 
            </div>
          </tr>
            <?php endfor;?>
              </table>
 </div>
 </form>
