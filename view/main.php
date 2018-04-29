<?require_once('view/header.php');?>

<div class="content" id="content">
  <div class="content__wraper" id="content_wraper">
    <ul class="lab-list">
      <?
        if (isset($data))
        {
          foreach ($data as $key)
          {
            ?>
              <li class="lab-list__lab">
                <a href="lab-<?=$key[0];?>" class="lab-list__num">Лабораторна робота №<?=$key[0];?></a>
                <div class="lab-list__lab_cont" id="lab-<?=$key[0];?>">
                  <h3 class="lab-list__title"><?=$key[1];?></h3>
                    <a href="/lab<?=$key[0];?>" class="lab-list__lab_btn">Відкрити лабораторну роботу</a>
                  </div>
              </li>
            <?
          }
        }
      ?>
    </ul>
  </div>
</div>

<?require_once('view/footer.php');
