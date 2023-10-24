<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once("style.php");
    ?>
</head>

<body>
    <?php
    require_once("header.php");
    /*
    //print file_get_contents("fruits.txt");
    //print "<pre>";
    $Fruits=array_unique(file("fruits.txt"));

    sort($Fruits);


    //print_r($Fruits);

    print "<ul>";
    foreach($Fruits as $value)
    {

        print "<li>";
        print $value;
        print "</li>";
        
    }
    print "</ul>";

    //print "</pre>";

    //var_dump($Fruits);

    $file = fopen("sample.txt", "r");
    $content = fread($file, filesize("sample.txt"));
    fclose($file);
    echo $content;
    */


    $file = fopen("sample.txt", "a");
    fwrite($file, "Hello, World!");
    fclose($file);
    ?>

</body>

</html>