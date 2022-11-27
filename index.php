<?php
$html='';

$html.='<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="ffmpegui.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <title>Editor</title>
</head>

<body style="background-color: aquamarine;">
    <marquee>
        <div id="heading">
            <h1>
                Editor
            </h1>
        </div>
    </marquee>
    <div style ="margin: auto; text-align: center;">
        <h1>
            <button type="button" class="btn btn-primary "><a href ="video.php">Click for Video editing</a></button>
        </h1>
        <!-- <hr> -->
        <h1>
            <button type="button" class="btn btn-primary">Click for image editing</button>
        </h1>
        <!-- <hr> -->
        <h1>
            <button type="button" class="btn btn-primary">Click for pdf editing</button>
        </h1>
    </div>
</body>

</html>';
echo $html;
?>