<?
error_reporting(0);
$qs =  array();
$file = fopen('quests.csv', 'r');

array_push($qs,$list);

fclose($file);
unset($q)
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Тест </title>  
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="content">
   <div class="content-top">
      <div class="content-top-category">Тест на жизнестойкость по методу Мадди</div>
   	  <div class="content-top-text">
        <img src="img/Безымянный2.png">
      </div>
  </div>
  
<form action="grade.php" method="post" id="quiz">
  <?
  foreach ($qs as $q) {
  ?>

<div class="test__title">Начало тестирования</div>
 
<div class="quiz-body" id="q1">
            <p>"Я всегда контролирую ситуацию настолько, насколько это необходимо". </p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option10">
    <input type="radio"  name="1" id="option10"  value="0" class="no"/>
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
        
  
  <label for="option11">
    <input type="radio"  name="1" id="option11" value="1" class="rather not"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body2" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
    
      </svg>
  </label>
                      
  <label for="option12">
      <input type="radio"  name="1" id="option12" value="2" class="rather yes"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body3" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <circle class="mouth" cx="-50" cy="-38"  r="6" />
      </svg>
  </label>
    
  <label for="option13">
    <input type="radio"  name="1" id="option13" value="3" class="yes"/>
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
</div>

<div class="quiz-body" id="q2">
            <p>"Я предпочитаю ставить перед собой труднодостижимые цели и добиваться их" </p>
  <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
  <label for="option14">
      <input type="radio"  name="2" id="option14"  value="0" class="no"/>
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
        
  
  <label for="option15">
    <input type="radio"  name="2" id="option15" value="1" class="rather not"/>
       <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
          <circle class="body2" cx="-50" cy="-50" r="30" />
          <circle class="eye" cx="-60" cy="-55" r="3" />
          <circle class="eye" cx="-40" cy="-55" r="3" />
          <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
        </svg>
  </label>

  <label for="option16"> 
    <input type="radio"  name="2" id="option16" value="2" class="rather yes"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body3" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <circle class="mouth" cx="-50" cy="-38"  r="6" />
      </svg>
  </label>
    
  <label for="option17">
    <input type="radio"  name="2" id="option17" value="3" class="yes"/>
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
</div>

<div class="quiz-body" id="q3">
            <p>"Я всегда уверен, что смогу воплотить в жизнь то,что задумал" </p>
  <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
  <label for="option18">
    <input type="radio"  name="3" id="option18"  value="0" class="no"/>
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
        
  
  <label for="option19">
    <input type="radio"  name="3" id="option19" value="1" class="rather not"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body2" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
      
      </svg>
  </label>

  
  <label for="option20"> 
    <input type="radio"  name="3" id="option20" value="2" class="rather yes"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body3" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <circle class="mouth" cx="-50" cy="-38"  r="6" />
      </svg>
  </label>
    
  <label for="option21">
    <input type="radio"  name="3" id="option21" value="3" class="yes"/>
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
</div>

<div class="quiz-body" id="q4">
            <p>"Испытав поражение, я буду пытаться взять реванш"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option22">
    <input type="radio"  name="4" id="option22"  value="0" class="no"/>
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
  
  <label for="option23">
    <input type="radio"  name="4" id="option23" value="1" class="rather not"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body2" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
      </svg>               
  </label>

  <label for="option24">
    <input type="radio"  name="4" id="option24" value="2" class="rather yes"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body3" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <circle class="mouth" cx="-50" cy="-38"  r="6" />
      </svg>
  </label>
    
  <label for="option25">
    <input type="radio"  name="4" id="option25" value="3" class="yes"/>
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
 </div>

<div class="quiz-body" id="q5">
            <p>"Я всегда могу повлиять на результат того, что происходит вокруг"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option26">
     <input type="radio"  name="5" id="option26"  value="0" class="no"/>
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
        
  <label for="option27">
    <input type="radio"  name="5" id="option27" value="1" class="rather not"/>
        <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
          <circle class="body2" cx="-50" cy="-50" r="30" />
          <circle class="eye" cx="-60" cy="-55" r="3" />
          <circle class="eye" cx="-40" cy="-55" r="3" />
          <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
        
        </svg>                     
  </label>

  <label for="option28">
    <input type="radio"  name="5" id="option28" value="2" class="rather yes"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body3" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <circle class="mouth" cx="-50" cy="-38"  r="6" />
       </svg>
  </label>
    
  <label for="option29">
    <input type="radio"  name="5" id="option29" value="3" class="yes"/>
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
</div>

<div class="quiz-body" id="q6">
            <p>"Друзья уважают меня за упорство и непреклонность"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
   <label for="option30">
      <input type="radio"  name="6" id="option30"  value="0" class="no"/>
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
        
  <label for="option31">
    <input type="radio"  name="6" id="option31" value="1" class="rather not"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body2" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
      </svg>     
  </label>

  <label for="option32">
    <input type="radio"  name="6" id="option32" value="2" class="rather yes"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body3" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <circle class="mouth" cx="-50" cy="-38"  r="6" />
        
      </svg>
  </label>
    
  <label for="option33">
    <input type="radio"  name="6" id="option33" value="3" class="yes"/>
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
</div>

<div class="quiz-body" id="q7">
            <p>"Я часто не уверен в собственных решениях"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
  <label for="option34">
    <input type="radio"  name="7" id="option34"  value="0" class="no"/>
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
  
  <label for="option35">
    <input type="radio"  name="7" id="option35" value="1" class="rather not"/>
      <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body2" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
      </svg>    
  </label>

  <label for="option36">
    <input type="radio"  name="7" id="option36" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
        <circle class="body3" cx="-50" cy="-50" r="30" />
        <circle class="eye" cx="-60" cy="-55" r="3" />
        <circle class="eye" cx="-40" cy="-55" r="3" />
        <circle class="mouth" cx="-50" cy="-38"  r="6" />
      </svg>
  </label>
    
  <label for="option37">
                        <input type="radio"  name="7" id="option37" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q8">
            <p>"Часто я предпочитаю 'плыть по течению' "</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option38">
                        <input type="radio"  name="8" id="option38"  value="0" class="no"/>
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
        
  
              <label for="option39">
                        <input type="radio"  name="8" id="option39" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option40">
                      <input type="radio"  name="8" id="option40" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option41">
                        <input type="radio"  name="8" id="option41" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q9">
            <p>"Я меняю свои планы в зависимости от обстоятельств"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option42">
                        <input type="radio"  name="9" id="option42"  value="0" class="no"/>
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
        
  
              <label for="option43">
                        <input type="radio"  name="9" id="option43" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option44">
                      <input type="radio"  name="9" id="option44" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option45">
                        <input type="radio"  name="9" id="option45" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q10">
            <p>"Непредвиденные трудности порой сильно утомляют меня"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option46">
                        <input type="radio"  name="10" id="option46"  value="0" class="no"/>
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
        
  
              <label for="option47">
                        <input type="radio"  name="10" id="option47" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option48">
                      <input type="radio"  name="10" id="option48" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option49">
                        <input type="radio"  name="10" id="option49" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q11">
            <p>"Иногда меня пугают мысли о будущем"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option50">
                        <input type="radio"  name="11" id="option50"  value="0" class="no"/>
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
        
  
              <label for="option51">
                        <input type="radio"  name="11" id="option51" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option52">
                      <input type="radio"  name="11" id="option52" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option53">
                        <input type="radio"  name="11" id="option53" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q12">
            <p>"Возникающие проблемы часто кажутся мне неразрешимыми"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option54">
                        <input type="radio"  name="12" id="option54"  value="0" class="no"/>
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
        
  
              <label for="option55">
                        <input type="radio"  name="12" id="option55" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option56">
                      <input type="radio"  name="12" id="option56" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option57">
                        <input type="radio"  name="12" id="option57" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q13">
            <p>"Если проблема требует больших усилий,я предпочитаю отложить её до лучших времен"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option58">
                        <input type="radio"  name="13" id="option58"  value="0" class="no"/>
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
        
  
              <label for="option59">
                        <input type="radio"  name="13" id="option59" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option60">
                      <input type="radio"  name="13" id="option60" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option61">
                        <input type="radio"  name="13" id="option61" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q14">
            <p>"Я довольно часто откладываю на завтра то,что трудно осуществимо,или то,в чем я уверен"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option62">
                        <input type="radio"  name="14" id="option62"  value="0" class="no"/>
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
        
  
              <label for="option63">
                        <input type="radio"  name="14" id="option63" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option64">
                      <input type="radio"  name="14" id="option64" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option65">
                        <input type="radio"  name="14" id="option65" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q15">
            <p>"Порой мне кажется,что все мои усилия тщетны"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option66">
                        <input type="radio"  name="15" id="option66"  value="0" class="no"/>
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
        
  
              <label for="option67">
                        <input type="radio"  name="15" id="option67" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option68">
                      <input type="radio"  name="15" id="option68" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option69">
                        <input type="radio"  name="15" id="option69" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q16">
            <p>"У меня нет возможности влиять на неожиданные проблемы"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option70">
                        <input type="radio"  name="16" id="option70"  value="0" class="no"/>
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
        
  
              <label for="option71">
                        <input type="radio"  name="16" id="option71" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option72">
                      <input type="radio"  name="16" id="option72" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option73">
                        <input type="radio"  name="16" id="option73" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q17">
            <p>"Бывает, на меня наваливается столько проблем, что просто руки опускаются"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option74">
                        <input type="radio"  name="17" id="option74"  value="0" class="no"/>
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
        
  
              <label for="option75">
                        <input type="radio"  name="17" id="option75" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option76">
                      <input type="radio"  name="17" id="option76" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option77">
                        <input type="radio"  name="17" id="option77" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q18">
            <p>"Я постоянно занят,и мне это нравится"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option78">
                        <input type="radio"  name="18" id="option78"  value="0" class="no"/>
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
        
  
              <label for="option79">
                        <input type="radio"  name="18" id="option79" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option80">
                      <input type="radio"  name="18" id="option80" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option81">
                        <input type="radio"  name="18" id="option481" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q19">
            <p>"Я стараюсь быть в курсе всего происходящего вокруг меня"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option82">
                        <input type="radio"  name="19" id="option82"  value="0" class="no"/>
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
        
  
              <label for="option83">
                        <input type="radio"  name="19" id="option83" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option84">
                      <input type="radio"  name="19" id="option84" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option85">
                        <input type="radio"  name="19" id="option85" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q20">
            <p>"Я люблю знакомиться с новыми людьми"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option86">
                        <input type="radio"  name="20" id="option86"  value="0" class="no"/>
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
        
  
              <label for="option87">
                        <input type="radio"  name="20" id="option87" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option88">
                      <input type="radio"  name="20" id="option88" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option89">
                        <input type="radio"  name="20" id="option89" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q21">
            <p>"Когда кто-то жалуется,что жизнь скучна,это значит,что он не умеет видеть интересное"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option90">
                        <input type="radio"  name="21" id="option90"  value="0" class="no"/>
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
        
  
              <label  for="option91">
                        <input type="radio"  name="21" id="option91" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option92">
                      <input type="radio"  name="21" id="option92" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option93">
                        <input type="radio"  name="21" id="option93" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q22">
            <p>"Мне всегда есть чем заняться"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option94">
                        <input type="radio"  name="22" id="option94"  value="0" class="no"/>
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
        
  
              <label  for="option95">
                        <input type="radio"  name="22" id="option95" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option96">
                      <input type="radio"  name="22" id="option96" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option97">
                        <input type="radio"  name="22" id="option97" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q23">
            <p>"Как правило,окружающие слушают меня внимательно"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option98">
                        <input type="radio"  name="23" id="option98"  value="0" class="no"/>
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
        
  
              <label  for="option99">
                        <input type="radio"  name="23" id="option99" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option100">
                      <input type="radio"  name="23" id="option100" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option101">
                        <input type="radio"  name="23" id="option101" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q24">
            <p>"Окружающие меня недооценивают"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option102">
                        <input type="radio"  name="24" id="option102"  value="0" class="no"/>
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
        
  
              <label  for="option103">
                        <input type="radio"  name="24" id="option103" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option104">
                      <input type="radio"  name="24" id="option104" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option105">
                        <input type="radio"  name="24" id="option105" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q25">
            <p>"Иногда мне кажется,что никому нет до меня дела "</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option106">
                        <input type="radio"  name="25" id="option106"  value="0" class="no"/>
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
        
  
              <label for="option107">
                        <input type="radio"  name="25" id="option107" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option108">
                      <input type="radio"  name="25" id="option108" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option109">
                        <input type="radio"  name="25" id="option109" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q26">
            <p>"Порой я так устаю,что уже ничто не может заинтересовать меня"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option110">
                        <input type="radio"  name="26" id="option110"  value="0" class="no"/>
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
        
  
              <label  for="option111">
                        <input type="radio"  name="26" id="option111" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option112">
                      <input type="radio"  name="26" id="option112" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option113">
                        <input type="radio"  name="26" id="option113" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q27">
            <p>"Порой все,что я делаю,кажется мне бесполезным"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option114">
                        <input type="radio"  name="27" id="option114"  value="0" class="no"/>
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
        
  
              <label  for="option115">
                        <input type="radio"  name="27" id="option115" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option116">
                      <input type="radio"  name="27" id="option116" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option117">
                        <input type="radio"  name="27" id="option117" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q28">
            <p>"Часто,даже хорошо выспавшись,я с трудом заставляю себя встать с постели"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option118">
                        <input type="radio"  name="28" id="option118"  value="0" class="no"/>
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
        
  
              <label  for="option119">
                        <input type="radio"  name="28" id="option119" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option120">
                      <input type="radio"  name="28" id="option120" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option121">
                        <input type="radio"  name="28" id="option121" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q29">
            <p>"Вечером я часто чувствую себя совершенно разбитым"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option122">
                        <input type="radio"  name="29" id="option122"  value="0" class="no"/>
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
        
  
              <label  for="option123">
                        <input type="radio"  name="29" id="option123" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option124">
                      <input type="radio"  name="29" id="option124" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option125">
                        <input type="radio"  name="29" id="option125" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q30">
            <p>"Мне трудно сближаться с другими людьми"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option126">
                        <input type="radio"  name="30" id="option126"  value="0" class="no"/>
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
        
  
              <label  for="option127">
                        <input type="radio"  name="30" id="option127" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option128">
                      <input type="radio"  name="30" id="option128" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option129">
                        <input type="radio"  name="30" id="option129" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q31">
            <p>"Я всегда могу повлиять на результат того,что происходит вокруг"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option130">
                        <input type="radio"  name="31" id="option130"  value="0" class="no"/>
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
        
  
              <label  for="option131">
                        <input type="radio"  name="31" id="option131" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option132">
                      <input type="radio"  name="31" id="option132" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option133">
                        <input type="radio"  name="31" id="option133" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q32">
            <p>"Мне не хватает упорства закончить начатое"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option134">
                        <input type="radio"  name="32" id="option134"  value="0" class="no"/>
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
        
  
              <label  for="option135">
                        <input type="radio"  name="32" id="option135" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option136">
                      <input type="radio"  name="32" id="option136" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option137">
                        <input type="radio"  name="32" id="option137" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q33">
            <p>"Бывает, жизнь кажется мне скучной и бесцветной"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option138">
                        <input type="radio"  name="33" id="option138"  value="0" class="no"/>
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
        
  
              <label  for="option139">
                        <input type="radio"  name="33" id="option139" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option140">
                      <input type="radio"  name="33" id="option140" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option141">
                        <input type="radio"  name="33" id="option141" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q34">
            <p>"Как правило,я работаю с удовольствием"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option142">
                        <input type="radio"  name="34" id="option142"  value="0" class="no"/>
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
        
  
              <label for="option143">
                        <input type="radio"  name="34" id="option143" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option144">
                      <input type="radio"  name="34" id="option144" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option145">
                        <input type="radio"  name="34" id="option145" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q35">
            <p>"Иногда я чувствую себя лишним даже в кругу друзей"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option146">
                        <input type="radio"  name="35" id="option146"  value="0" class="no"/>
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
        
  
              <label  for="option147">
                        <input type="radio"  name="35" id="option147" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option148">
                      <input type="radio"  name="35" id="option148" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option149">
                        <input type="radio"  name="35" id="option149" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q36">
            <p>"Я охотно берусь воплощать новые идеи"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option150">
                        <input type="radio"  name="36" id="option150"  value="0" class="no"/>
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
        
  
              <label  for="option151">
                        <input type="radio"  name="36" id="option151" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option152">
                      <input type="radio"  name="36" id="option152" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option153">
                        <input type="radio"  name="36" id="option153" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q37">
            <p>"Неожиданности дарят мне интерес к жизни"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option154">
                        <input type="radio"  name="37" id="option154"  value="0" class="no"/>
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
        
  
              <label  for="option155">
                        <input type="radio"  name="37" id="option155" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option156">
                      <input type="radio"  name="37" id="option156" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option157">
                        <input type="radio"  name="37" id="option157" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q38">
            <p>"Меня раздражают события,из за которых я вынужден менять свой распорядок дня"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option158">
                        <input type="radio"  name="38" id="option158"  value="0" class="no"/>
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
        
  
              <label  for="option159">
                        <input type="radio"  name="38" id="option159" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option160">
                      <input type="radio"  name="38" id="option160" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option161">
                        <input type="radio"  name="38" id="option161" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q39">
            <p>"Лучше синица в руках,чем журавль в небе"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option162">
                        <input type="radio"  name="39" id="option162"  value="0" class="no"/>
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
        
  
              <label  for="option163">
                        <input type="radio"  name="39" id="option163" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option164">
                      <input type="radio"  name="39" id="option164" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option165">
                        <input type="radio"  name="39" id="option165" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q40">
            <p>"Мне кажется,я не живу полной жизнью,а только играю роль"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option166">
                        <input type="radio"  name="40" id="option166"  value="0" class="no"/>
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
        
  
              <label  for="option167">
                        <input type="radio"  name="40" id="option167" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option168">
                      <input type="radio"  name="40" id="option168" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option169">
                        <input type="radio"  name="40" id="option169" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q41">
            <p>"Мне кажется, если бы в прошлом у меня было меньше разочарований и невзгод, мне было бы сейчас легче жить на свете"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option170">
                        <input type="radio"  name="41" id="option170"  value="0" class="no"/>
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
        
  
              <label for="option171">
                        <input type="radio"  name="41" id="option171" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option172">
                      <input type="radio"  name="41" id="option172" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option173">
                        <input type="radio"  name="41" id="option173" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q42">
            <p>"Я часто сожалею о том, что уже сделано"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option174">
                        <input type="radio"  name="42" id="option174"  value="0" class="no"/>
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
        
  
              <label  for="option175">
                        <input type="radio"  name="42" id="option175" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option176">
                      <input type="radio"  name="42" id="option176" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label for="option177">
                        <input type="radio"  name="42" id="option177" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q43">
            <p>"Если бы я мог, я многое изменил бы в прошлом"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option178">
                        <input type="radio"  name="43" id="option178"  value="0" class="no"/>
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
        
  
              <label  for="option179">
                        <input type="radio"  name="43" id="option179" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option180">
                      <input type="radio"  name="43" id="option180" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option181">
                        <input type="radio"  name="43" id="option181" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q44">
            <p>"Мои мечты редко сбываются"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label  for="option182">
                        <input type="radio"  name="44" id="option182"  value="0" class="no"/>
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
        
  
              <label  for="option183">
                        <input type="radio"  name="44" id="option183" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label for="option184">
                      <input type="radio"  name="44" id="option184" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option185">
                        <input type="radio"  name="44" id="option185" value="3" class="yes"/>
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
</div>
<div class="quiz-body" id="q45">
            <p>"Порой я мечтаю о спокойной размеренной жизни"</p>
 <!-- <input type="radio" class="btn-check" name="options<?=$q['qid'];?>" id="option1<?=$q['qid'];?>" value="1" autocomplete="off" />
  <label class="btn btn-secondary btn-danger" for="option1<?=$q['qid'];?>">Абсолютно<br> не согласен(а)</label> -->
 <label for="option186">
                        <input type="radio"  name="45" id="option186"  value="0" class="no"/>
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
        
  
              <label  for="option187">
                        <input type="radio"  name="45" id="option187" value="1" class="rather not"/>
                           <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body2" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
 <rect class="mouth" x="-60" y="-40" width="20" height="5" rx="2" />
 
                           </svg>
                        
                    </label>
                      <label  for="option188">
                      <input type="radio"  name="45" id="option188" value="2" class="rather yes"/>
     <svg class="gingerbread" width="100" height="100" viewBox="-100 -100 100 100">
  <circle class="body3" cx="-50" cy="-50" r="30" />

  <circle class="eye" cx="-60" cy="-55" r="3" />
  <circle class="eye" cx="-40" cy="-55" r="3" />
  <circle class="mouth" cx="-50" cy="-38"  r="6" />
   
    </svg>
                     </label>
    
                                        <label  for="option189">
                        <input type="radio"  name="45" id="option189" value="3" class="yes"/>
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
</div>
<?}?>
  <label>
  <input class="submit" type="submit" value="Посчитать результат">
  </label>
</form>
</div>
</body>
</html>
