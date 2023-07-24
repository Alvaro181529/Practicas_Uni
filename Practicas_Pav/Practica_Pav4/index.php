<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    
    <style>
        .error {
            color: yellow;
            align-items: center;
        }

        textarea {
            resize: none;
            width: 100%;
        }

        body {
            background: url("https://fondosmil.com/fondo/52705.jpg") no-repeat rgba(49, 33, 49, .9) center center fixed;
            background-size: 100%;
            color: aliceblue;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
        }

        ::placeholder {
            color: #000;
            text-align: center;
        }

        input.tex {
            border-radius: 20px;
            width: 100%;
            height: 40px;
        }
        header,
        header h2 {
            text-align: center;
            text-transform: uppercase;
        }

        .centro {
            background-color: rgba(51, 0, 51, .5);
            margin: 0 30px 0 30px;
            padding: 40px;
            width: 25%;
            height: 550px;
            box-shadow: 10px 10px 10px #000;
        }


        .center {
            background-color: rgba(0, 0, 0, .8);
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0;
            pointer-events: none;
            transition: all 1s;
        }

        .targ {
            background-color: rgba(57, 16, 82, .6);
            width: 25%;
            margin: 15% auto;
            padding: 40px;
            box-shadow: 10px 10px 10px #000;
            position: relative;

        }

        #enter:target {
            opacity: 1;
            pointer-events: auto;
        }

        #an {
            text-decoration: none;
            color: aliceblue;
        }

        .buton:hover,
        #ani:hover {
            background: rgba(103, 73, 128, .8);
            color: aliceblue;
            border: none;
            border-radius: 12px;
        }

        #ani {
            text-decoration: none;
        }

        .buton {
            align-items: center;
            width: 50%;
            height: 40px;
            border-radius: 12px;
        }

        @media (max-width: 600px) {

            body {
                background: url("https://fondosmil.com/fondo/52920.jpg") no-repeat rgba(49, 33, 49, .9) center center fixed;
                background-size: 100%;
                color: aliceblue;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                font-family: 'Jost', sans-serif;
                font-size: 12px;
            }

            .centro {
                background-color: rgba(7, 0, 51, .6);
                margin: 0 30px 0 30px;
                padding: 40px;
                width: 80%;
                height: 550px;
                box-shadow: 10px 10px 10px #000;
            }

            .targ {
                background-color: rgba(57, 16, 82, .6);
                width: 70%;
                margin: 20% auto;
                padding: 40px;
                box-shadow: 10px 10px 10px #000;
                position: relative;

            }
            input.tex {
            border-radius: 20px;
            width: 100%;
            height: 25px;
        }


        }
    </style>
</head>

<body>
    <div class="centro">
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Se requiere Nombre";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "Se requiere Email";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                    $websiteErr = "Invalid URL";
                }
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "No seleccionado";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <header>
            <h2>Ejemplo de validacion</h2>
        </header>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="tex" type="text" name="name" placeholder="Nombre" value="<?php echo $name; ?>" autofocus>
            <span class="error"><?php echo $nameErr; ?></span>
            <br><br>
            <input class="tex" type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
            <br><br>
            <input class="tex" type="text" name="website" placeholder="Sitio Web" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr; ?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
            <br><br>
            Genero:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="Mujer">Mujer
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="Varon">Varon
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>

            <a id="ani" href="#enter"><button class="buton" type="submit" name="submit" value="">Ingresar datos</a>
        </form>
    </div>



    <div id="enter" class="center">
        <div class="targ">
            <a id="an" href="#"> x </a>
            <?php
            echo "<h2>Datos ingresados:</h2>";
            echo "nombre: ";
            echo $name;
            echo "<br>";
            echo "email: ";
            echo $email;
            echo "<br>";
            echo "sitio web: ";
            echo $website;
            echo "<br>";
            echo "comentario: ";
            echo $comment;
            echo "<br>";
            echo "genero: ";
            echo $gender;
            ?>
        </div>
    </div>
</body>

</html>