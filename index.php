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
   
    <?php
        include 'scripts/connect.php';
        error_reporting(0);
    ?>

<!--Лого--> 
   
    <div class="wrapper">
        <header class="main-header">
            <div class="main-header__navbar">
                <div class="main-header__TM-logo">
                    <h1 class="main-header__logo-text">Serezhenko TM</h1>
                    <span class="main-header__logo-text"><img class="main-header__img-logo" src="https://img.icons8.com/dotty/80/000000/high-speed-train.png" /></span>
                </div>
                <div class="main-header__account">
                    <a href="/pages/tickets.php" class="main-header__acc">Личный кабинет</a>
                    <span class="main-header__logo-text"><img class="main-header__img-cab" src="/common.blocks/main-header/codicon_account.png"></span>
                </div>
            </div>
            
<!--Система поиска--> 

            <form action="pages/action.php" method="post" class="grid-mother">
                    <select name="selphpIN" class="seldemo">
                        <option>Откуда</option> <option>Воронеж</option> <option>Питер</option> <option>Краснодар</option> <option>Железногорск</option>
                    </select>
                    <select name="selphpOUT" class="seldemo">
                        <option>Куда</option> <option>Воронеж</option> <option>Питер</option> <option>Краснодар</option> <option>Железногорск</option>
                    </select>

                    <input type="date" class="seldemo" name="datein">

                    <input type="date" class="seldemo" name="dateout">

                    <input type="submit" value="Найти" class="btncls" action='/pages/tickets.php'>
            </form>
            <img src="/common.blocks/main-header/background.jpg" class="main-header__bg">
        </header>
    </div>
    
<!--Секция с популярными направлениями-->
   
    <div class="section-1">
        <h1 class="section-1__h1">Популярные направления:</h1>
        <div class="section-1__favorite"><span class="section-1__p">Москва-Питер</span><span class="section-1__p_cost">от 1400р</span></div>
        <div class="section-1__favorite"><span class="section-1__p">Москва-Питер</span><span class="section-1__p_cost">от 1000р</span></div>
        <div class="section-1__favorite"><span class="section-1__p">Москва-Питер</span><span class="section-1__p_cost">от 1600р</span></div>
        <div class="section-1__favorite"><span class="section-1__p">Москва-Питер</span><span class="section-1__p_cost">от 1500р</span></div>
    </div>

<!--Секция с новостями--> 
   
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
