<?
error_reporting(0);
$qs =  array();
$file = fopen('quests.csv', 'r');

array_push($qs,$list);
}
fclose($file);
unset($q);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Тест на ваш денежный архетип</title>  
    <link rel="stylesheet" href="./style.css">

  </head>
  <body>
    <div class="content">
   <div class="content-top">
   	<div class="content-top-category">Тест на жизнестойкость по методу Мадди</div>
   	<div class="content-top-text">
     <img src="img/Безымянный1.png">

   </div>
   </div>
<div class="content-info-list">

</div>
<div class="test__title">Начало тестирования</div>
        <? foreach ($qs as $q) { ?>
  <!--    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?=$q['qid'];?>" aria-label="Slide <?=$q['qid'];?>"></button> -->
<?}?>

<form action="grade.php" method="post" id="quiz">
<?
foreach ($qs as $q) {
?>
<div class="card" id="q<?=$q['qid'];?>">
<h1 ><?php echo $q['prompt']; ?></h1>
<div class="rating-container">
   <div class="rating"  onclick="window.location='#q<?=$q['qid']+1;?>'">

 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option1<?=$q['qid'];?>">
                        <input type="radio"  name="<?=$q['qid'];?>" id="option1<?=$q['qid'];?>"  value="0" class="no"/>
    </svg>
                                                 <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body1" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <path class="mouth" 
  d="
   M -60 -30
   C -60 -49 -38 -44 -39 -30
   
    "
    />
    </svg>
                      
                    </label>
        
  
              <label for="option2<?=$q['qid'];?>">
                        <input type="radio" name="<?=$q['qid'];?>" id="option2<?=$q['qid'];?>" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option3<?=$q['qid'];?>">
                      <input type="radio" name="<?=$q['qid'];?>" id="option3<?=$q['qid'];?>" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option4<?=$q['qid'];?>">
                        <input type="radio"  name="<?=$q['qid'];?>" id="option4<?=$q['qid'];?>" value="3" class="yes"/>
                                                 <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body4" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <path class="mouth" 
  d="
   M -29 -42
   L -70 -42
   C -60 -20 -30 -30 -30 -41
   
    "
    />
    </svg>
                    </label>

      
<!--
  <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option2<?=$q['qid'];?>" value="2" autocomplete="off" />
  <label class="btn btn-secondary btn-warning" for="option2<?=$q['qid'];?>">Не согласен(а)</label>

  <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option3<?=$q['qid'];?>"  value="3" autocomplete="off" />
  <label class="btn btn-secondary  btn-light" for="option3<?=$q['qid'];?>">Нейтрально</label>

  <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option4<?=$q['qid'];?>" value="4" autocomplete="off" />
  <label class="btn btn-secondary btn-info" for="option4<?=$q['qid'];?>">Согласен(а)</label>

  <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option5<?=$q['qid'];?>" value="5" autocomplete="off" />
  <label class="btn btn-secondary btn-success" for="option5<?=$q['qid'];?>">Совершенно<br> согласен(а)</label>
-->

<hr>
<?}?>
<div class="card">
<div class="rating-container">
   <div class="rating">
<label>
<input type="submit" value="Посчитать результат">
</label>
	</div>
  </body>
</html>
