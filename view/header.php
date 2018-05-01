<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>
        <?if(isset($_GET['lab']))
        {
            echo "Лабораторна робота №" . $data[0]." - ";
        }
        ?>
        Комп'ютерні системи штучного інтелекту
        <?if(!isset($data))
        {
            echo "- Лабораторні роботи";
        }?>

    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="./assets/img/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="./assets/img/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="./assets/img/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="./assets/img/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="./assets/img/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="./assets/img/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="./assets/img/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="./assets/img/favicons/favicon-128.png" sizes="128x128" />


    <link rel="stylesheet" href="./assets/css/common.css?v0.1">
</head>

<body>

    <div class="header <?if(isset($_GET['lab'])) echo 'header--lab';?>">
        <div class="header__nav">
            <?
                if(isset($_GET['lab']))
                {
                    echo '<a href="/" class="header__to_home">На головну</a>';
                }
            ?>
        </div>
        <h1 class="header__title">Комп'ютерні системи штучного інтелекту</h1>
        <?
            if(isset($_GET['lab']))
            {
                echo "<h2 class=\"header__lab_title\">Лабораторна робота №".$data[0]."</h2>";
                echo "<h2 class=\"header__lab_theme\">".$data[1]."</h2>";
            }
        ?>
    </div>