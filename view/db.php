<?php require_once('view/header.php');

if(isset($data)){
  echo "<div class='labs'>
    <a href='/' class='to_home'>
      <i class='fa fa-arrow-left' aria-hidden='true'></i>
      <span>На головну</span>
    </a>
    <form class='' action='' method='post'>
      <button class='logOut' name='logOut'>
        <i class='fa fa-sign-out' aria-hidden='true'></i>
        <span>Вийти</span>
      </button>
    </form>
    <h2>Збережені лабораторні:</h2>";
  foreach ($data as $key) {
    ?>
    <div class="lab_edit">
      <a href="/lab<?=$key['id'];?>" class="edit">
        <i class="fa fa-eye" aria-hidden="true"></i>
        <span>Переглянути</span>
      </a>
        <form action="" method="post" id="form_<?=$key['id'];?>" enctype="multipart/form-data">
          <input type="hidden" name="old_id" value="<?=$key['id'];?>">
          <div class="inp_block">
            <div class="left">
              <input type="text" name="id" value="<?=$key['id'];?>">
              <input type="text" name="title" placeholder="Заголовок" value="<?=$key['title'];?>">
              <input type="file" name="lab_doc">
              <button name="update_btn">save</button>
              <button name="delete_btn">delete</button>
            </div>
            <div class="right">
              <textarea name="code" id="" cols="30" rows="10" placeholder="Код лабораторної">
              <?php
                $code = $key['code'];
                $symb = array("\'" => "'", '\"' => '"',"<br>" => "");
                echo strtr($code,$symb);
              ?>
              </textarea>
            </div>
          </div>
        </form><br>
      </div>
    <?php
  }
    ?>
    <div class="lab_add">
      <h2>Додати лабораторну:</h2>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="inp_block">
            <div class="left">
              <input type="text" name="title" placeholder="Заголовок">
              <input type="file" name="lab_doc">
              <button name="save_btn">save</button>
            </div>
            <div class="right">
              <textarea name="code" id="" cols="30" rows="10" placeholder="Код лабораторної"></textarea>
            </div>
          </div>
        </form>
    </div>
  </div>
     <?php

}

require_once('view/footer.php');?>
