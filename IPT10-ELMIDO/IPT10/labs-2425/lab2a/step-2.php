<?php
require "helpers/helper-functions.php";
session_start();

$fullname = $_POST['fullname'];
$birthdate = $_POST['birthdate'];
$contact_number = $_POST['contact_number'];
$sex = $_POST['sex'];

if (empty($fullname) || empty($birthdate) || empty($contact_number) || empty($sex)) {
    header("Location: step-1.php");
    exit();
}

$_SESSION['fullname'] = $fullname;
$_SESSION['birthdate'] = $birthdate;
$_SESSION['contact_number'] = $contact_number;
$_SESSION['sex'] = $sex;
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
                    <h1>Registration (Step 2/3)</h1>
                </div>
                <div class="p-section--shallow">
                    <form action="step-3.php" method="POST">
                        <fieldset>
                            <label for="program">Program</label>
                            <input type="text" id="program" name="program" placeholder="Computer Science" required>

                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" placeholder="123 Main St" required>

                            <input type="submit" value="Next">
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="p-image-container--3-2 is-cover">
                    <img class="p-image-container__image" src="/mnt/data/image.png" alt="ITTC">
                </div>
            </div>
        </div>
    </section>
</body>
</html>
