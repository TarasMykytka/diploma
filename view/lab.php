<?php require_once('view/header.php');?>
<div class="content">
  <div class="content__wraper">
    <a href="/" class="content__to_home">
      <i class="fa fa-arrow-left" aria-hidden="true"></i>
      <span>На головну</span>
    </a>
    <?php
    if(isset($data)){
      foreach ($data as $key) {
      ?>
      <h1 class="title"><?=$key['title'];?></h1>
      <a href="/ins<?=$key['id'];?>" class="content__edit">
        <i class="fa fa-pencil" aria-hidden="true"></i>
        <span>Редагувати</span>
      </a>
      <sep></sep>
      <p class="code">
      <?php
        $code_pr = $key['code'];
        $symb = array("\'" => "'", '\"' => '"',"&lt" => "<","&gt" => ">");
        $code = strtr($code_pr,$symb);

          if ($key['id'] != 5){
        eval($code);}else{echo $code;}
        ?>
      </p>
      <?php


  }
    }else{
      echo "Error!!!";
    }

    ?>
  </div>
</div>
<?php
require_once('view/footer.php');
