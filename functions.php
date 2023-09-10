<?php
$charCount = isset($_GET["charCount"]) ? intval($_GET["charCount"]) : 8;

function generateRandomString($charCount = 8)
{
    if ($charCount > 0) {
        $randomString = '';

        $lettersCount = ceil($charCount / 2);
        $numbersCount = $charCount - $lettersCount;

        for ($i = 0; $i < $lettersCount; $i++) {
            $generateLetter = rand(65, 90);
            $randLetter = chr($generateLetter);
            $randomString .= $randLetter;
        }

        for ($i = 0; $i < $numbersCount; $i++) {
            $generateNumber = rand(0, 9);
            $randomString .= $generateNumber;
        }

        $randomString = str_shuffle($randomString);
        return $randomString;
    } else {
        return "Il numero di caratteri deve essere maggiore di zero.";
    }
}

$randomPassword = generateRandomString($charCount);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row text-center d-flex justify-content-center">
            <h1>Password Generator</h1>
            <div class="col-6 pt-5">
                <h3 class="text-success">La tua password è: </h3>
                <h5><?php echo $randomPassword ?></h5>
            </div>
        </div>
    </div>
</body>

</html>