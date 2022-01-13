<?
error_reporting(0);
$qs =  array();
$file = fopen('quests.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  $list = array( 
	"prompt" =>  $line[2],
 	"qid" => $line[0] ,
	"group" => $line[1]
);
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
    
<header>
  <h1><span>Тест на ваш</span><br>Денежный архетип</h1>
</header>
<aside>
<div class="card">
<img src="./cf.svg" alt="выбери насколько согласен с утравждением" style="
    max-width: 100%;
">
</div>
</aside>
<main>
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
         <input type="radio" name="<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" class="super-sad"/>
         <svg viewBox="0 0 24 24">
            <path d="M19,15H23V3H19M15,3H6C5.17,3 4.46,3.5 4.16,4.22L1.14,11.27C1.05,11.5 1,11.74 1,12V14A2,2 0 0,0 3,16H9.31L8.36,20.57C8.34,20.67 8.33,20.77 8.33,20.88C8.33,21.3 8.5,21.67 8.77,21.94L9.83,23L16.41,16.41C16.78,16.05 17,15.55 17,15V5C17,3.89 16.1,3 15,3Z" />
         </svg>
      </label>
      <label for="option2<?=$q['qid'];?>">
         <input type="radio" name="<?=$q['qid'];?>" id="option2<?=$q['qid'];?>" value="2" class="sad"/>
         <svg viewBox="0 0 24 24">
            <path d="M19,15V3H23V15H19M15,3A2,2 0 0,1 17,5V15C17,15.55 16.78,16.05 16.41,16.41L9.83,23L8.77,21.94C8.5,21.67 8.33,21.3 8.33,20.88L8.36,20.57L9.31,16H3C1.89,16 1,15.1 1,14V12C1,11.74 1.05,11.5 1.14,11.27L4.16,4.22C4.46,3.5 5.17,3 6,3H15M15,5H5.97L3,12V14H11.78L10.65,19.32L15,14.97V5Z" />
         </svg>
      </label>
      <label for="option3<?=$q['qid'];?>">
         <input type="radio" name="<?=$q['qid'];?>" id="option3<?=$q['qid'];?>" value="3" class="neutral"/>
         <svg viewBox="0 0 24 24">
            <path d="M22.5,10H15.75C15.13,10 14.6,10.38 14.37,10.91L12.11,16.2C12.04,16.37 12,16.56 12,16.75V18A1,1 0 0,0 13,19H18.18L17.5,22.18V22.42C17.5,22.73 17.63,23 17.83,23.22L18.62,24L23.56,19.06C23.83,18.79 24,18.41 24,18V11.5A1.5,1.5 0 0,0 22.5,10M12,6A1,1 0 0,0 11,5H5.82L6.5,1.82V1.59C6.5,1.28 6.37,1 6.17,0.79L5.38,0L0.44,4.94C0.17,5.21 0,5.59 0,6V12.5A1.5,1.5 0 0,0 1.5,14H8.25C8.87,14 9.4,13.62 9.63,13.09L11.89,7.8C11.96,7.63 12,7.44 12,7.25V6Z" />
         </svg>
      </label>
      <label for="option4<?=$q['qid'];?>">
         <input type="radio" name="<?=$q['qid'];?>" id="option4<?=$q['qid'];?>" value="4" class="happy"/>
         <svg viewBox="0 0 24 24">
            <path d="M5,9V21H1V9H5M9,21A2,2 0 0,1 7,19V9C7,8.45 7.22,7.95 7.59,7.59L14.17,1L15.23,2.06C15.5,2.33 15.67,2.7 15.67,3.11L15.64,3.43L14.69,8H21C22.11,8 23,8.9 23,10V12C23,12.26 22.95,12.5 22.86,12.73L19.84,19.78C19.54,20.5 18.83,21 18,21H9M9,19H18.03L21,12V10H12.21L13.34,4.68L9,9.03V19Z" />
         </svg>
      </label>
      <label for="option5<?=$q['qid'];?>">
         <input type="radio" name="<?=$q['qid'];?>" id="option5<?=$q['qid'];?>" value="5" class="super-happy"/>
         <svg viewBox="0 0 24 24">
            <path d="M23,10C23,8.89 22.1,8 21,8H14.68L15.64,3.43C15.66,3.33 15.67,3.22 15.67,3.11C15.67,2.7 15.5,2.32 15.23,2.05L14.17,1L7.59,7.58C7.22,7.95 7,8.45 7,9V19A2,2 0 0,0 9,21H18C18.83,21 19.54,20.5 19.84,19.78L22.86,12.73C22.95,12.5 23,12.26 23,12V10M1,21H5V9H1V21Z" />
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
</div>
</div>
</div>
<hr>
<?}?>
<div class="card">
<div class="rating-container">
   <div class="rating">
<label>
<input type="submit" value="Посчитать результат">
</label>
</div>
</div>
</div>
</form>
</main>
  </body>
</html>
