<?php
require_once "connect.php";
$works = mysqli_query($connect,"SELECT * FROM `awards`");
$works = mysqli_fetch_all($works);


?>
<!DOCTYPE html>

<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>магазин</title>
</head>
<body class="background">
  
  <header class="app">
  <div class="menu">MENU</div>
  <div class="search"><img src="./drawable/search.png"  width="15px"> </div>
  <div class="logo">awwwards.</div>
  <div class="registration_login">REGISTER / LOG IN</div>
  <div class="sumbit_your_site">SUMBIT YOUR SITE!</div>
  </header>



  <nav  class="container-1">
<div class="picture"><img src="./drawable/filter_alt_black_24dp.svg" width="80%"  > </div>
<div class="filter_by"><b>Filter By</b></div>
<div class="awards">AWARDS</div>
<div class="categories">CATEGORIES</div>
<div class="tags">TAGS</div>
<div class="tecnologies">TECHNOGIES</div>
<div class="colors">COLORS </div>
<div class="countries">COUNTRIES</div>
<div class="space_bar"></div>



  </nav>
<div class="grid">
  
    <?php
  foreach ($works as $work){
    ?>
    <article class="qweqwe">

      <div class="box1">
        <div class="piture_for_box">
        
        <img class="picture1" src="<?= $work[5]?>" width="421.05px"; height="275px"; >
      </div>
      <article>
      <div>
        <div class="name_work" >
          
          <?= $work[1] ?>
        </div>
        <article class="from_countrie_data">
              <div class="country">From <?=$work[2] ?></div>
              <div class="data"><?=$work[3] ?></div>
        </article>        
      </div>
    </article>

    <article class="black_line">
      <div class="box_line">

      </div>


    </article>

  <article class="cell3">
    <article class="piture_and_text">

<div class="piture_autor"><img class="piture_autor" src="./drawable/Снимок экрана 2022-03-11 143811.png" width="15px"; height="14px"; ></div>
<div class="by_autor">BY <?=$work[4] ?></div>
</article>
<article class="hp_dev_sotd">
  <div class="hm">HM </div> 
  <div class="dev">DEV </div>
  <div class="sotd">SOTD</div>
</article>



  </article>
    </article>


<?php
}
?>
</div>
 
</body>
</html>
