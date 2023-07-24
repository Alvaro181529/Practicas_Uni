<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body {
            font-family: 'Kalam', cursive;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: #a1a1a1;
        }

        .mar {
            margin: 3px;
        }

        .shad {
            box-shadow: 10px 10px 10px #d1d1d1;
        }

        .intro {
            margin: 7px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .navbar {
            background: linear-gradient(180deg, rgba(250, 250, 250, 1), rgba(250, 250, 250, 0));
            ;
        }
    </style>
</head>

<body style="background: #fae18e; background: linear-gradient(to right, #fae18e, #fff9e3);">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">Crear Usuario</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">