<?php
    session_start();
    $input_pyr = $_POST['input_pyr'] ?? 0;
    $val = $_SESSION["choice"] ?? "";
    $pyr_val = $_POST['pyr_val'] ?? NULL;
    $fib_val = $_POST['fib_val'] ?? NULL;
    require "./table/table.php";
    require "./pyramid/pyramid.php";
    require "./fibonacci/fibonacci.php";
    require "./palindrome/palindrome.php";
    // require "./process.php";

?>

<html>
<head>
    <title>PHP HTML 
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
    <body>

            <div class="container fluid">
                <div class="col-xl-8 col-md-5">
                    <form action="process.php" method="POST">
                        <!-- <div class="container fluid"> -->
                            <div class="col-md-6">
                                <div class="dropdown menu">  
                                    <select name="choice">
                                        <option value="NONE"></option>
                                        <option value="PALINDROME">Palindrome</option>
                                        <option value="PYRAMID">Pyramid</option>
                                        <option value="MULT">Multiplication Table</option>
                                        <option value="FIBONACCI">Fibonacci</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" value="Choose" class="btn btn-primary">
                            </div>
                        <!-- </div> -->
                    </form>
                </div>
            </div>
        

        <div class="container-fluid">
            <div class="col-xl-8 col-md-3" >
                <?php
                    if($val =="PYRAMID" && $pyr_val >0){ 
                        pyramid($pyr_val);
                ?>
                        <form action="process.php" method="POST">
                            <input type="hidden" name="choice" value="PYRAMID">
                            <input type="submit" value="again">
                        </form>
                <?php
                    }elseif($val=="PYRAMID" && is_string($pyr_val)){
                        echo "INVALID INPUT!";
                    }elseif($val=="FIBONACCI" && $fib_val > 0){
                        fibonacci($fib_val); 
                ?>
                    <form action="process.php" method="POST">
                        <input type="hidden" name="choice" value="FIBONACCI">
                        <input type="submit" value="again">
                    </form>
                <?php }elseif($val=="FIBONACCI" && $fib_val = NULL || is_string($fib_val)){
                        echo "INVALID INPUT! <br>"; 
                ?>
                        <form action="process.php" method="POST">
                            <input type="hidden" name="choice" value="FIBONACCI">
                            <input type="submit" value="again">
                        </form>
                <?php
                    }elseif($val=="PALINDROME" && is_string($_POST['pal_val'])){
                        $palindrome = palindrome($_POST['pal_val']);
                        // var_dump(palindrome($POST['pal_val'])); die;
                        echo $palindrome; 
                ?>
                    <form action="process.php" method="POST">
                            <input type="hidden" name="choice" value="PALINDROME">
                            <input type="submit" value="again">
                    </form>
                <?php
                    }elseif($val=="PALINDROME" && is_int($_POST['pal_val'])){
                        echo "INVALID INPUT! <br>";
                ?>
            </div>
        </div>
                <?php
                    }elseif($val=="MULT"){
                        table();
                    }
                ?>
    </body>
</html>