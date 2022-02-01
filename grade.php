<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Результаты</title>  
    <link rel="stylesheet" href="style.css">
  </head>
    <body>
        <div class="content">
            <div class="content-category">Результаты прохождения теста:</div>
        
            <?php
                $points = 0;
                foreach($_POST as $key=>$value)
                {
                $points = $points + $value;
                }
                echo $points;
                ?>
        </div>
    </body>
</html>
