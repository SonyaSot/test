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
                if ($key = 1  || $key = 1 ) { $control=$control+$value; }

                }
                echo $points;

                $arhs = array(
                  "control"=> $control,
                  "commitment"=> $commitment,
                  "challenge"=> $challenge,
                );
                ?>
        </div>
    </body>
</html>
