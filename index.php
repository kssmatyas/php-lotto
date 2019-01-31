<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
        <?php
            //lottohuzas
            $kihuzottak=0;
            while($kihuzottak<5)
            {
                $sorsoltszam=rand(1,90);
                if(!isset($tomb[$sorsoltszam]))
                {
                    $tomb[$sorsoltszam]=1;
                    $kihuzottak++;
                }
            }
            var_dump($tomb);
        echo "itt már a php script fut";
        ?>
    </body>
</html>
