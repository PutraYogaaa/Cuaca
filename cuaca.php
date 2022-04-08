<?PHP
$file = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Sorong" .
    "&appid=90865d487d6b5457ae900eb37f266435");
$cuaca = json_decode($file, true);

?>


<html>

<head>
    <style>
    body {
        background-image: url("img/cuaca.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        padding-top: 4%;
        text-align: center;
    }
    </style>
</head>

<body>
    <h1>Cuaca di Sorong Hari ini </h1>
    <img src="http://openweathermap.org/img/wn/
<?= $cuaca['weather'][0]['icon'] ?>@4x.png" alt="">
    <h2>
        <?php
        echo strtoupper($cuaca['weather'][0]['description']);
        ?>
    </h2>
    <h4>Kecepatan angin : <?php
                            echo $cuaca['wind']['speed'];
                            ?> meter/detik
    </h4>
    <h4>
        Temperatur : <?php
                        echo $cuaca['main']['temp'];
                        ?> Kelvin
    </h4>

    <h4>
        Kelembaban : <?php
                        echo $cuaca['main']['humidity'];
                        ?> %
    </h4>
</body>

</html>