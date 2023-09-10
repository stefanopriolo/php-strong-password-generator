<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row text-center d-flex justify-content-center">
            <h1>Password Generator</h1>
            <div class="col-6 pt-5">
                <form>
                    <div class="mb-3">
                        <label for="customRange1" class="form-label">Scegli il numero di caratteri per la tua password:</label>
                        <input type="range" class="form-range" id="customRange1" min="5" max="15" step="1">
                        <span id="charCount">10</span> <!-- Mostra il valore selezionato qui -->
                    </div>
                    <button type="submit" class="btn btn-primary">Genera</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Aggiungi questo script per aggiornare il valore visualizzato
        const rangeInput = document.getElementById("customRange1");
        const charCountSpan = document.getElementById("charCount");

        rangeInput.addEventListener("input", function() {
            charCountSpan.textContent = rangeInput.value;
        });
    </script>
</body>

</html>

</html>