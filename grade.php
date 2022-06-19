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
                $control = 0;
                $commitment = 0;
                $challenge = 0;

                foreach($_POST as $key=>$value)
                {
                $points = $points + $value;
                if ($key = 1  || $key = 2 || $key = 3 || $key = 4  || $key = 5 || $key = 6 || $key = 7  || $key = 8 || $key = 9 || $key = 10  || $key = 11 || $key = 12 || $key = 13  || $key = 14 || $key = 15 || $key = 16  || $key = 17 || $key = 18 ) { $control=$control+$value; }

                }
                echo $points;
                echo $control

                $arhs = array(
                  "control"=> $control,
                  "commitment"=> $commitment,
                  "challenge"=> $challenge,
                );
                ?>
        </div>
    </body>
</html>
