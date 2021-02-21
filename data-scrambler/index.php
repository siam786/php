<?php
include_once "functions.php";
$task = 'encode';
if ( isset( $_GET['task'] ) && $_GET['task'] != '' ) {
	$task = $_GET['task'];
}


$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if ( 'key' == $task ) {
	$key_original = str_split( $key );
	shuffle( $key_original );
	$key = join( '', $key_original );
}else if(isset($_POST['key']) && $_POST['key']!=''){
    $key = $_POST['key'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Scramber</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Data Scrambler</h2>
                <p>use this application to scramble your data</p>
                <p>
                    <a href="functions.php?task=encode">Encode</a>|
                    <a href="functions.php?task=decode">Decode</a>|
                    <a href="functions.php?task=key">Generate Key</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column culumn-60 culumn-offset-20">
                <form method="post" action="index.php">
                    <label for="key">Key</label>
                    <input type="text" name="key" id="key" <?php displayKey($key); ?>>
                    <label for="data">Data</label>
                    <textarea name="" id="data" cols="30" rows="10"></textarea>
                    <label for="result">Result</label>
                    <textarea name="" id="result" cols="30" rows="10"></textarea>
                    <button type="submit">Do It For Me</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>