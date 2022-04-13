<?php 
    
    $i =0;
    if ($i == 1) {
    echo '
        <div class="section-1">
        <h1 class="section-1__h1">Популярные направления:</h1>
        <div class="section-1__favorite"><span class="section-1__p">Москва-Питер</span><span class="section-1__p_cost">от 1400р</span></div>
        <div class="section-1__favorite"><span class="section-1__p">Москва-Питер</span><span class="section-1__p_cost">от 1000р</span></div>
        <div class="section-1__favorite"><span class="section-1__p">Москва-Питер</span><span class="section-1__p_cost">от 1600р</span></div>
        <div class="section-1__favorite"><span class="section-1__p">Москва-Питер</span><span class="section-1__p_cost">от 1500р</span></div>
    </div>

    <div class="news">
        <h1 class="news__h1">Новости</h1>
        <div class="wrapper-news">
            <div class="first__news">
                <p>Более 400 дополнительных поездов будут курсировать в майские праздники</p>
            </div>
            <div class="first__news">
                <p>Движение скоростных поездов «Аллегро» между Россией и Финляндией приостанавливается с 28 марта</p>
            </div>
            <div class="first__news">
                <p>Железнодорожный тур к цветущим степям Калмыкии ждет путешественников в апреле</p>
            </div>
        </div>
    </div>';
    }
    

    $sel1 = $_POST['selphpIN'];
    $sel2 = $_POST['selphpOUT'];
    $sel3 = $_POST['dateout'];
    $sel4 = $_POST['datein'];
        
    $bd = mysqli_connect('localhost', 'root', '', 'test8');
    if (!$bd) { echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error(); } else { echo 'Соединение выполнено успешно' . '<br>'; }
    
                  
    //Функция, выводящая массив данных
    $quer1 = mysqli_query($bd, "SELECT outDate FROM `search` WHERE outC = '$sel3'");   
    $quer2 = mysqli_query($bd, "SELECT inDate FROM `search` WHERE outC = '$sel4'");   
    $quer3 = mysqli_query($bd, "SELECT outTime FROM `search`");
    $quer4 = mysqli_query($bd, "SELECT inTime FROM `search`");
    $quer5 = mysqli_query($bd, "SELECT outC FROM `search` WHERE outC = '$sel1'");
    $quer6 = mysqli_query($bd, "SELECT inC FROM `search` WHERE inC = '$sel2'");
                  
  $res1 = mysqli_fetch_assoc($quer1);
  $res2 = mysqli_fetch_assoc($quer2);
  $res3 = mysqli_fetch_assoc($quer3);
  $res4 = mysqli_fetch_assoc($quer4);
  $res5 = mysqli_fetch_assoc($quer5);
  $res6 = mysqli_fetch_assoc($quer6);
    
    if ($quer1 == false or $quer2 == false or $quer5 == false or $quer6 == false) {
    echo " Произошла ошибка при выполнении запроса";
} else {
        echo 'Запрос успешно выполнен' . '<br>';
    }
   while($sel1 = mysqli_fetch_array($quer5) and $sel2 = mysqli_fetch_array($quer6) and $sel3 = mysqli_fetch_array($quer3) and $sel4 = mysqli_fetch_array($quer4)){ 
    echo '<div style="background-color: white; height: 100%; margin: 20px auto; border-radius: 25px; padding: 30px; font-size: 20px; width: 1050px; display: grid; grid-template-columns: repeat(4, 100px);">';
    
    echo "<div style='font-size: 30px; margin-right: 3px;'></div>" . $res5['outC'];
    echo "<div style='font-size: 30px; margin-right: 3px;'></div>" . $res6['inC'] ;
    echo "<div style='font-size: 30px; margin-right: 3px;'></div>" . $res3['outTime'] ;
    echo "<div style='font-size: 30px; margin-right: 3px;'></div>" . $res4['inTime'] ;
  //  echo '<span class="main-header__logo-text"><img class="main-header__img-cab" src="/common.blocks/main-header/codicon_account.png"></span>';
   // echo "<span style='font-size: 20px; margin-right: 3px;  margin-left: 100px;'>Прибытие в: </span>" . $res2['INC']; 

    echo '</div>';  
         $i++ ;
    }

        ?>