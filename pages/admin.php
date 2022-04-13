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

    <?php
    
?>

    <!--Скрипты-->

    <?php
        
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
                </div>
            </div>
        </header>
    </div>

<!--Система Добавления данных-->
<h1>Система добавления данных о составе</h1>
<form class="" method="post" action="../scripts/go.php">
   
   <label for="basic-url" class="form-label">Поезд</label>
        <input type="text" name="train1" class="form-control" placeholder="Введите номер поезда">
        <input type="text" name="train2" class="form-control" placeholder="Краткое описание поезда/тип поезда" >
       <input type="submit" value="Завершить составление состава">
    </form>
    <label for="basic-url" class="form-label">Работники</label>
        <input type="text" class="form-control" placeholder="Номер бригады" aria-label="Username" aria-describedby="basic-addon1">
        <input type="text" class="form-control" placeholder="Введите фамилию машиниста" aria-label="Username" aria-describedby="basic-addon1">
        <input type="text" class="form-control" placeholder="Введите фамилии работников" aria-label="Username" aria-describedby="basic-addon1">>

       <label for="basic-url" class="form-label">Маршрут</label>
        <input type="text" name="road1" class="form-control" placeholder="Откуда отправка поезда" aria-label="Username" aria-describedby="basic-addon1">
        <input type="text" name="road2" class="form-control" placeholder="Куда направляется поезд" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" name="road3" class="form-control" placeholder="Дата отправления" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" name="road4" class="form-control" placeholder="Дата прибытия" aria-label="Username" aria-describedby="basic-addon1">
        <input type="time" name="road5" class="form-control" placeholder="Время отправления" aria-label="Username" aria-describedby="basic-addon1">
        <input type="time" name="road6" class="form-control" placeholder="Время прибытия" aria-label="Username" aria-describedby="basic-addon1">
        <input type="number" name="road6" class="form-control" placeholder="Цена билета - купе" aria-label="Username" aria-describedby="basic-addon1">
        <input type="number" name="road7" class="form-control" placeholder="Цена билета - бизнес класс" aria-label="Username" aria-describedby="basic-addon1">
        <input type="submit" name="road8" value="Завершить составление состава">


</body>

</html>
