<?php
    $value = "";
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : "";
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : "";
    $operation = isset($_POST['operation']) ? $_POST['operation'] : "";
    if(isset($_POST['submit'])){
        if($num1 == "" || $num2 == ""){
            $value = "Please Enter an Input";
        }else if(!is_numeric($num1) || !is_numeric($num2)){
            $value = "Please Enter a Number Data type";
        }else{
            switch ($operation){
                case "multiply":
                $value = $num1 * $num2;
                break;
                case "divide":
                $value = $num1 / $num2;
                break;
                case "add":
                $value = $num1 + $num2;
                break;
                case "sub":
                $value = $num1 - $num2;
                break;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CALCULATOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Simple PHP Caluculator</h1>
    <br>
    <h3><?php echo $value?></h3>
    <br>
    <div class="container">
        <form action="index.php" method='post'>
            <div class="wrapper">
                <input type="text" name="num1" id="num1" value="<?php echo $num1?>">
            </div>
            <div class="wrapper">
                <input type="text" name="num2" id="num2" value="<?php echo $num2?>">
            </div>
            <div class="wrapper">
                <select name="operation">
                    <option value="multiply" <?php if($operation == 'multiply') echo 'selected'?>>Multiply</option>
                    <option value="divide" <?php if($operation == 'multiply') echo 'selected'?>>Divide</option>
                    <option value="add" <?php if($operation == 'add') echo 'selected'?>>Add</option>
                    <option value="sub" <?php if($operation == 'sub') echo 'selected'?>>Subtract</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Calculate">
        </form>
    </div>
</body>
</html>