  <?php require_once('view/header.php');?>
<div class="header">
    <div class="header__nav">
        <a class="header__log">Вхід</a>
    </div>
    <h1 class="header__title">Комп'ютерні системи штучного інтелекту</h1>
</div>

<div class="content" id="content">
  <div class="content__wraper" id="content_wraper">
    <ul class="lab-list">
      <?php
        if (isset($data))
        {
          foreach ($data as $key)
          {
        ?>
      <li class="lab-list__lab">
        <a href="lab-<?=$key['lab_id'];?>" class="lab-list__a">Лабораторна робота №<?=$key['lab_id'];?></a>
        <div class="lab-list__lab_cont" id="lab-<?=$key['lab_id'];?>">
          <span class="lab-list__title"><?=$key['lab_name'];?></span>
            <a href="/lab<?=$key['lab_id'];?>" class="lab-list__lab_btn"><div>Відкрити лабораторну роботу</div></a>

          <?php
                $file = LABS . '/lab' .$key['id'].'.docx';
                if(file_exists($file)) {
                  ?>
                  <a href="/labs/lab<?=$key['id'];?>.docx" class="lab-list__lab_btn"><i class="fa fa-download" aria-hidden="true"></i><span>Завантажити звіт</span></a>
                  <?php
                }
              ?>
          </div>
      </li>
      <?php
          }
        }
      ?>
    </ul>
  </div>
</div>
<?php require_once('view/footer.php');
