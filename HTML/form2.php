<?php
header('X-XSS-Protection:0');
include_once "functions.php";
$allowedFiles = array(
<<<<<<< HEAD
  'image/png',
  'image/png',
  'image/jpeg'
);
if ($_FILES['photo']) {
  if (in_array($_FILES['photo']['type'], $allowedFiles) !== false && $_FILES['photo']['size'] < 1 * 1024 * 1024)
    move_uploaded_file($_FILES['photo']['tmp_name'], "files/" . $_FILES['photo']['name']);
=======
    'image/png',
    'image/png',
    'image/jpeg'
);
if ($_FILES['photo']) {
    $totalFiles = count($_FILES['photo']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {

        if (in_array($_FILES['photo']['type'][$i], $allowedFiles) !== false && $_FILES['photo']['size'][$i] < 1 * 1024 * 1024) {
            move_uploaded_file($_FILES['photo']['tmp_name'][$i], "files/" . $_FILES['photo']['name'][$i]);
        }
    }
>>>>>>> 8e2212314abdf3ddd4f23e18bd5d6f86418c9dbd
}

$fruits = ["mango", "lemon", "apple", "banana", "Peach", "orange", "nutt"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>

    <body>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <div class="container">
                        <h1>Select Submission</h1>
<<<<<<< HEAD

                        <p>
                            <?php
              $sfruits = '';
              $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
              if (count($sfruits) > 0) {
                echo "You have selected: " . join(", ", $sfruits);
              }

              // print_r($_POST);
              // print_r($_FILES);

              ?>
=======

                        <p>
                            <?php

                            $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
                            if (count($sfruits) > 0) {
                                echo "You have selected: " . join(", ", $sfruits);
                            }

                            // print_r($_POST);
                            //print_r($_FILES);

                            ?>
>>>>>>> 8e2212314abdf3ddd4f23e18bd5d6f86418c9dbd

                        </p>

                    </div>

                    <form method="POST" enctype="multipart/form-data">
                        <label for="fruits">Select Some Fruits</label>
                        <select style="height:200px" name="fruits[]" id="fruits" multiple>
                            <option value="" disabled selected>Select Some Fruits</option>
                            <?php displayOptions($fruits, $sfruits); ?>
                        </select>
                        <label for="photo">Photo</label>
                        <input type="file" name="photo[]" id="photo"> <br>
<<<<<<< HEAD
=======
                        <input type="file" name="photo[]" id="photo"> <br>
                        <input type="file" name="photo[]" id="photo"> <br>
>>>>>>> 8e2212314abdf3ddd4f23e18bd5d6f86418c9dbd
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
    </body>
</body>

</html>