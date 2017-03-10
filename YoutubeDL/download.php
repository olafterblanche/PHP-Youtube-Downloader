<?php
date_default_timezone_set('Africa/Johannesburg');

    $url = $_GET['url'];
    $type = $_GET['type'];
    $number = $_GET['number'];
    $today = date("j F Y g:i a");
    if($type == 'audio')
		{
			$format = '--extract-audio --audio-format mp3';
			$ext = '';
			$selected = 'Audio Files';
		}
	elseif($type == 'video')
		{
			$format = '';
			$ext = '--recode-video mp4';
			$selected = 'Video Files';
		}
	if($number == 'single')
		{
			$list = '--no-playlist';

		}
	elseif($number == 'playlist')
		{
			$list = '--yes-playlist';
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
    <link href="table_dash.css" rel="stylesheet">
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


        <h2 class="sub-header">&emsp;</h2>
          <div class="table-responsive">
            <table class="table table-striped">
            <h1><?php echo $selected?></h1></br>
<?php
       			for ($i = 0; $i < 10; $i++) 
				{
            		echo str_repeat(' ', 1024 * 64); // this is for the buffer achieve the minimum size in order to flush data
            		if ($i == 1)
                	echo '<center><img id="loading" src="images/LoadingPlain.gif"></center>';
				}
?>
            <form action='' method='post'>
<?php 
				shell_exec("sudo youtube-dl -o './%(title)s.%(ext)s' $format $list $ext $url");


				if($type == 'video')
				{
					$files = glob("*.mp4");
					echo '<ul>'.implode('', array_map('sprintf', array_fill(0, count($files), '<li><a target="_BLANK" href="%s">%s</a></li>'), $files, $files)).'</ul>';
				}
				elseif($type == 'audio')
				{
					$files = glob("*.mp3");
					echo '<ul>'.implode('', array_map('sprintf', array_fill(0, count($files), '<li><a target="_BLANK" href="%s">%s</a></li>'), $files, $files)).'</ul>';
				}

?>

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
	<script type="text/javascript">
            function preloader() {
                document.getElementById("loading").style.display = "none";
                document.getElementById("content").style.display = "block";
            }//preloader
            window.onload = preloader;
    </script>
  </body>
</html>
