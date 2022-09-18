<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 04 - PHP Function</title>

    <style>
        * {
            margin: 0;
            border: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            padding: 30px;
            line-height: 20px;
        }

        .container {
            /* background-color: red; */
            max-width: 710px;
        }

       header {
        font-size: 24px;
        font-weight: 600;
        margin-top: 20px;
        margin-bottom: 40px;
        padding-left: 20px;
       }

       span {
        color: red;
        font-weight: 600;
       }

       li {
        word-spacing: 2px;
       }

       footer {
        text-align: center;
        margin-top: 50px;
       }

    </style>

</head>

<body>

    <?php
    function luasLingkaran($r)
    {
        $lL = 3.14 * $r * $r;
        return $lL;
    }

    function kelilingLingkaran($r)
    {
        $kL = 2 * 3.14 * $r;
        return $kL;
    }
    ?>
    <div class="container">
    <header>Praktikum 04 - PHP Function</header>

    <ol>
        <?php for ($i = 13; $i <= 21; $i+=2) {
            if ($i <= 17) {
                echo "<li>Jika ada lingkaran dengan nilai jari-jari $i, maka luas lingkaran tersebut adalah "?><span><?php echo luasLingkaran($i) ?></span>.</li>
            <?php }
            
            elseif ($i > 17) {
                echo "<li>Jika ada lingkaran dengan nilai jari-jari $i, maka keliling lingkaran tersebut adalah "?><span><?php echo kelilingLingkaran($i) ?></span>.</li>
            <?php } ?>
        <?php } ?>
    </ol>

    <footer>
        {212410102030} - {Muhamad Faisal Fachrul Ulum}
    </footer>
    </div>

</body>

</html>