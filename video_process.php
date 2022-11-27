<?php

// $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
// $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
// var_dump( __DIR__."/" . $_FILES["file"]["name"]);
// die;

if ((($_FILES["file"]["type"] == "video/mp4")))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

      move_uploaded_file($_FILES["file"]["tmp_name"],
      __DIR__."/" . $_FILES["file"]["name"]);
      echo "Stored in: ".  __DIR__."/" . $_FILES["file"]["name"];
      }
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
              <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
          <title>Editor</title>
      </head>
      
      <body style="background-color: aquamarine;">
          <marquee>
              <div id="heading">
                  <h1>
                      Video Editor
                  </h1>
              </div>
          </marquee>
          <div style ="margin: auto; text-align: center;">
            <button type="button" onclick="view_detail(\''.$_FILES["file"]["name"].'\')">View '.$_FILES["file"]["name"].' detail</button>
          </div>
      </body>
      <script>
      function view_detail(c)
      {
        
        $.ajax({
            method:"GET",
            url:"video_process1.php",
            data:{info:c},
            success:function(data){
               console.log(data);
            }
         })
      }
      </script>
      </html>';
      echo $html;
  }
else
  {
  echo "Invalid file";
  }
?>