<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!--Cтили шрифт и bootstrap-->  
   
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
<!--Стили declaration.css-->
   
    <link rel="stylesheet" href="/common.blocks/main-header/declaration.css">
    <link rel="stylesheet" href="/common.blocks/section-popular/declaration.css">
    <link rel="stylesheet" href="/common.blocks/footer/declaration.css">
    <link rel="stylesheet" href="/common.blocks/news/declaration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Serezhenko TM</title>
</head>

<body>

<!--Скрипты-->  


<!--Лого--> 
   
    <div class="wrapper">
        <header class="main-header">
            <div class="main-header__navbar">
                <div class="main-header__TM-logo">
                    <h1 class="main-header__logo-text">Serezhenko TM</h1>
                    <span class="main-header__logo-text"><img class="main-header__img-logo" src="https://img.icons8.com/dotty/80/000000/high-speed-train.png" /></span>
                </div>
                <div class="main-header__account">
                    <a href="" class="main-header__acc">Личный кабинет</a>
                    <span class="main-header__logo-text"><img class="main-header__img-cab" src="/common.blocks/main-header/codicon_account.png"></span>
                </div>
            </div>
            
<!--Система поиска--> 

            <form action="../pages/tickets.php" method="post" class="grid-mother">
                    <select name="selphpIN" class="seldemo">
                        <option>Откуда</option> <option>Москва</option> <option>Санкт-Петербург</option> <option>Краснодар</option> <option>Железногорск</option>
                    </select>
                    <select name="selphpOUT" class="seldemo">
                        <option>Куда</option> <option>Санкт-Петербург</option> <option>Питер</option> <option>Краснодар</option> <option>Железногорск</option>
                    </select>

                    <input type="date" class="seldemo" name="dateout">

                    <input type="date" class="seldemo" name="datein">

                    <input type="submit" value="Найти" class="btncls" >
            </form>
            <img src="/common.blocks/main-header/background.jpg" class="main-header__bg">
        </header>
    </div>
    
<!--Доступные билеты-->    
    <div class="ticketsGenerator">
    <?php
        
    $sel1 = $_POST['selphpIN'];
    $sel2 = $_POST['selphpOUT'];
    $sel3 = $_POST['dateout'];
    $sel4 = $_POST['datein'];
        
    $bd = mysqli_connect('localhost', 'root', '', 'test8');
    if (!$bd) { echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error(); } else { echo 'Соединение выполнено успешно' . '<br>'; }
    
    $quer1 = mysqli_query($bd, "SELECT outDate FROM `search`");   
    $quer2 = mysqli_query($bd, "SELECT inDate FROM `search`");   
    $quer3 = mysqli_query($bd, "SELECT outTime FROM `search`");
    $quer4 = mysqli_query($bd, "SELECT inTime FROM `search`");
    $quer5 = mysqli_query($bd, "SELECT outC FROM `search`");
    $quer6 = mysqli_query($bd, "SELECT inC FROM `search`");
        
    $res1 = mysqli_fetch_assoc($quer1);
    $res2 = mysqli_fetch_assoc($quer2);
    $res3 = mysqli_fetch_assoc($quer3);
    $res4 = mysqli_fetch_assoc($quer4);
    $res5 = mysqli_fetch_assoc($quer5);
    $res6 = mysqli_fetch_assoc($quer6);
    print_r ($res5);
    print_r ($res6);
    
    if ($quer1 == false) {
    echo " Произошла ошибка при выполнении запроса";
} else {
        echo 'Запрос успешно выполнен' . '<br>';
    }
        
    while($res5 = mysqli_fetch_array($quer5) and $res6 = mysqli_fetch_array($quer6)){ 
    echo '<div style="background-color: white; height: 100%; margin: 20px auto; border-radius: 25px; padding: 30px; font-size: 20px; width: 1050px; display: grid; grid-template-columns: repeat(4, 100px);">';
    
    echo "<div style='font-size: 30px; margin-right: 3px;'></div>" . $res5['outC'] ;
    echo "<div style='font-size: 30px; margin-right: 3px;'></div>" . $res6['inC'] ;
    echo "<div style='font-size: 30px; margin-right: 3px;'></div>" . $res3['outTime'] ;
    echo "<div style='font-size: 30px; margin-right: 3px;'></div>" . $res4['inTime'] ;
  //  echo '<span class="main-header__logo-text"><img class="main-header__img-cab" src="/common.blocks/main-header/codicon_account.png"></span>';
   // echo "<span style='font-size: 20px; margin-right: 3px;  margin-left: 100px;'>Прибытие в: </span>" . $res2['INC']; 

    echo '</div>';  
    }
?>
    </div>
<!--Подвал-->  
   
    <div class="footer">
        <div class="footer__text-1">
            <div>8 800 775-00-00 звонок бесплатный для всех регионов РФ</div>
            <div>a.serezhenko@inbox.ru для вопросов, связанных с электронными билетами</div>
            <div class="main-header__TM-logo">
                <span class="main-header__logo-text">Serezhenko TM</span>
                <span class="main-header__logo-text"><img class="main-header__img-logo" src="https://img.icons8.com/dotty/80/000000/high-speed-train.png" /></span>
            </div>
        </div>
        <hr />
        <div class="footer__text-2">
            <div>© ОАО «РЖД», 2003 - 2022</div>
            <div>Свидетельство о регистрации СМИ Эл.№ФС77-25927 При использовании любых материалов ссылка на rzd.ru обязательна</div>
        </div>
    </div>
</body>
</html>
