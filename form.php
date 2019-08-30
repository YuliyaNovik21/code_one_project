<?php 
    $title = 'Обработчик формы';
    include("header.php"); 
?>
<div>
<?php 
    // d( $_GET );
    // d( $_POST );


    if(isset($_POST['fio'])){
        $db = mysqli_connect('localhost', 'mysql', 'mysql','webdev_13052019_26');
        mysqli_set_charset($db, 'utf8');


        $sql = "INSERT INTO `clients`(`id`, `fio`, `email`, `comment`, `phone`) 
        VALUES (NULL,'{$_POST['fio']}','{$_POST['email']}','{$_POST['comment']}','{$_POST['phone']}')";

        // echo $sql;

         $result = mysqli_query($db, $sql);

        if( $result == true ){
        echo "<div>Спасибо, {$_POST['fio']} за вашу заявку.</div>";
        }else{
        echo "Введенные вами данные не корректны";
        }
    }

?>
</div>
<?php include("footer.php"); ?>