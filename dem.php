<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function in PHP</h1>
    <?php    

        function sayhello($name){
            echo "hello " . $name . "<br>";
        }

        sayhello("kartik");

        function showar($arr){
            print_r($arr);
        }

        showar([42,54,62,13]);
    ?>
</body>
</html>
