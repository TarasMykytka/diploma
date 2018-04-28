<?php require_once('view/header.php');?>
<div class="content">
  <div class="wraper">
    <a href="/" class="to_home">
      <i class="fa fa-arrow-left" aria-hidden="true"></i>
      <span>На головну</span>
    </a>
    <?php /*
  <h3>Реєстрація</h3>
   <form class="reg" action="" method="post">
      <input type="text" name="login" value="" placeholder="Login">
      <input type="password" name="password" value="Password">
      <button name="registration_submit">Зареєструватись</button>
    </form>
    <br>*/?>
    <h3>Увійти на сайт</h3>
    <form class="login" action="" method="post">
      <input type="text" name="login" placeholder="Логін">
      <input type="password" name="password" placeholder="Пароль">
      <button name="login_submit">Увійти</button>
    </form>
  </div>
</div>
<?php
require_once('view/footer.php');
