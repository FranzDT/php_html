<?php 
        session_start();
        $_SESSION["choice"] = $_POST["choice"] ?? "asd";
        // var_dump($option);die;
?>

<?php if($_SESSION['choice'] == "PYRAMID")  { ?>
    <form action="index.php" method="POST">
        <input type="text" name="pyr_val">
        <input type="submit" value="ENTER">
    </form>
<?php }elseif($_SESSION['choice']== "MULT"){ 
        header("Location: index.php");
        }elseif($_SESSION['choice'] == "FIBONACCI"){
    ?>      
    <form action="index.php" method="POST">
        <input type="text" name="fib_val">
        <input type="submit" value="ENTER">
    </form>
<?php
        }elseif($_SESSION['choice']=="PALINDROME"){
?>
        <form action="index.php" method="POST">
        <input type="text" name="pal_val">
        <input type="submit" value="ENTER">
    </form>
<?php   }else{
        header("Location: index.php");
        }
?>
