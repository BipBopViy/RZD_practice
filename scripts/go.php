<?php
if (isset($_POST["train1"]) && isset($_POST["train2"])) {
      
    $conn = mysqli_connect("localhost", "root", "", "testgo");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    
    $id = $conn->real_escape_string($_POST["train1"]);
    $tip = $conn->real_escape_string($_POST["train2"]);
    $sql = "INSERT INTO go (id, tip) VALUES ('$id', '$tip')";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
} else {
    echo 'Обратитесь к главному программисту Сереженко А.М';
}

?>
