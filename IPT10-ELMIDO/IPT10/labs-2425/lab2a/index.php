<?php
require "helpers/helper-functions.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css">
</head>
<body>
    <section class="p-section--hero">
        <div class="row--50-50-on-large">
            <div class="col">
                <div class="p-section--shallow">
                    <h1>Laboratory Activity #2<br>PHP Sessions and Functions</h1>
                    <h2>Integrative Programming and Technologies</h2>
                </div>
                <div class="p-section--shallow">
                    <p>
                        This simple web application demonstrates handling of data passed through multiple PHP files. Data is shared via the server's session variables.
                    </p>
                    <p>
                        Please register your data by clicking the button.
                    </p>
                </div>
                <div class="p-cta-block">
                    <a href="step-1.php" class="p-button--positive">Register</a>
                    <p>
                        <small>
                            Design System: <a href="https://vanillaframework.io/docs" target="_blank">Vanilla Framework</a>
                        </small>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="p-image-container--3-2 is-cover">
                    <img class="p-image-container__image" src="https://www.auf.edu.ph/home/images/ittc.jpg" alt="ITTC">
                </div>
            </div>
        </div>
    </section>
</body>
</html>
