<?php 
header('X-XSS-Protection:0');
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
                        <h1>Form Submission</h1>
                        <p>
                            <?php
                            $fname ='';
                            $name = '';
                            
                            ?>
                            <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) { 
                             //$fname = htmlspecialchars(  $_REQUEST['fname']); }?>
                            $fname = filter_input(INPUT_POST,'fname', FILTER_SANITIZE_URL);}

                            ?>

                            <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) { 
                               // $lname = htmlspecialchars( $_REQUEST['lname']);} ?>
                            $lname = filter_input(INPUT_POST,'lname', FILTER_SANITIZE_URL);}

                            ?>
                        </p>

                        <p>
                            <strong>First Name:</strong> <?php echo $fname; ?> <br>
                            <strong>Last Name:</strong> <?php echo $lname; ?>

                        </p>
                    </div>

                    <form method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
    </body>
</body>

</html>