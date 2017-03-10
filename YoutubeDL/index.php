<?php
date_default_timezone_set('Africa/Johannesburg');
if(isset($_POST['submit']))
    {
    $url = $_POST['url'];
    $type = $_POST['type'];
	$number = $_POST['number'];
    $today = date("j F Y g:i a");
	header("location:download.php?type=$type&number=$number&url=$url");
    }
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/download.png">
    <title>Youtube Downloader</title> 
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/table_dash.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			  <li><a href='downloads.php'>Downloads</a></li>
          </ul>
          <form class="navbar-form navbar-right">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
      </div>



          <div class="table-responsive">
            <table class="table table-striped">
            <h1>Download Music and Videos</h1></br>
            <form action='' method='post'>

				<label>Paste Video URL Here</label><br><input type='text' name='url' value='' size='75'><br><br>
				<label>Download Video</label><input type='radio' name='type' value='video' style='margin-left: 5px; margin-right: 15px'>
				<label>Download Audio</label><input type='radio' name='type' value='audio' style='margin-left: 5px; margin-right: 15px'>
				<label>Download Playlist</label><input type='radio' name='number' value='playlist' style='margin-left: 5px; margin-right: 15px'>
				<label>Download Single</label><input type='radio' name='number' value='single' style='margin-left: 5px; margin-right: 5px'><br><br>
				<input type='submit' name='submit' value='Download'>
            </form>


              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
