<?php
header('X-XSS-Protection:0');
include_once "functions.php";

$fruits = ["mango", "lemon", "apple", "banana", "Peach"];
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

                        <p>
                            <?php
                            if (isset($_POST['fruits']) && $_POST['fruits'] != '') {
                                printf("You have selected: %s", filter_input($_POST, 'fruits'));
                            }

                            ?>

                        </p>

                    </div>

                    <form method="POST">
                        <label for="fruits">Select Some Fruits</label>
                        <select name="fruits" id="fruits">
                            <option value="" disabled selected>Select Some Fruits</option>
                            <?php displayOptions($fruits); ?>
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
    </body>
</body>

</html>