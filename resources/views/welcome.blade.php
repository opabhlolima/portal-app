<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programador de Sistemas</title>
    <style>
        span {
            font-weight: 800;
            font-size: larger;
        }

        .red {
            color: red;
        }

        #green {
            color: green;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- container que serve so organizar  -->
    <div class="container">
        <div class="row d-flex">
            <div class="col-4">
                <!-- Titulo -->
                <h3>Ola mundo</h3>
                <h2>Meu nome é fulano!</h2>
                <h2 id="green">Senges PR</h2>
            </div>
            <div class="col-8">
                <!-- Texto -->
                <p class="red">Paragrafo</p>
                <span>Uso para dar destaque a um texto</span>
            </div>
        </div>
    </div>
    <script>
        console.log('Ola mundo!')
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>