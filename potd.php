<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The fact and the truth about the clan INVALIDOZ">
    <meta name="author" content="L�kis and Grottis">
    <link rel="icon" href="../../favicon.ico">
        <title>I N V A L I D o z - ...::BOMBENHAGEL::...</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
	
		<link rel="stylesheet" href="css/sidebar-left.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">
	<aside class="sidebar-left">

		<a class="company-logo" href="#">Logo</a>

		<div class="sidebar-links">
			<a class="link-blue" href="#"><i class="fa fa-picture-o"></i>I</a>
			<a class="link-red" href="#"><i class="fa fa-heart-o"></i>N</a>
			<a class="link-yellow selected" href="#"><i class="fa fa-keyboard-o"></i>V</a>
			<a class="link-green" href="#"><i class="fa fa-map-marker"></i>A</a>
			<a class="link-blue" href="#"><i class="fa fa-picture-o"></i>L</a>
			<a class="link-red" href="#"><i class="fa fa-heart-o"></i>I</a>
			<a class="link-yellow" href="#"><i class="fa fa-keyboard-o"></i>D</a>
			<a class="link-green" href="#"><i class="fa fa-map-marker"></i>O</a>
			<a class="link-green" href="#"><i class="fa fa-map-marker"></i>Z</a>
		</div>

	</aside>
      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">..:: INVALIDoz ::..</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="./">Hem</a></li>
                <li><a href="features.php">Tjänster</a></li>
                <li><a href="contact.php">Kontakt</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">..:: Dagens Bild ::..</h1>
			<?php
function getimgs($dir) {
  $imgs = array();
  $filetypes = array("gif", "jpg", "jpeg", "png");
  if (is_dir($dir)) {
     if ($dh = opendir($dir)) {
       while (($file = readdir($dh)) !== false) {
         if (filetype($dir . "/" . $file) != "dir" && ($pos = strrpos($file, ".")) !== FALSE) {
           $extension = strtolower(substr($file, $pos + 1));
           if (in_array($extension, $filetypes)) {
             $imgs[] = $dir . "/" . $file;
           }
         }
       }
       closedir($dh);
    }
  }
  return $imgs;
}
<<<<<<< HEAD
$image = ""; // vilken bild ska visas nu?
if (!file_exists("POTD.txt")) {
  list($image) = getimgs("POTD_images/"); // tar första bilden

  $handle = fopen("POTD.txt", "w");
  fwrite($handle, date("d") . "\r\n" . $image);
  fclose($handle);
} else {
  list($day, $fimage) = file("POTD.txt");
  $day = rtrim($day);
  if ($day == date("d")) { //om dagen inte har ändrats, ha kvar samma bild som förut
    $image = $fimage;
  }
  else { // ändra bara bild om dagen i filen inte är samma.
    // om det inte är samma, ta en ny bild och skriv till filen.
    // är bilden i potd.txt giltig? isf ta nästa bild i mappen.
    $valid_images = getimgs("POTD_images/");
    if (($pos = array_search($fimage, $valid_images)) !== FALSE) {
      // jorå, finns med i listan
      if ($pos >= count($valid_images) - 1)
        $image = $valid_images[0];
      else
        $image = $valid_images[$pos + 1];
    }
    else
      $image = $valid_images(mt_rand(0, count($valid_images) - 1));
    $handle = fopen("POTD.txt", "w");
    fwrite($handle, date("d") . "\r\n" . $image);
    fclose($handle);
  }
}
echo "<img src=\"$image\" alt=\"$image\" width=\"450px\">";
?>

</h2>



<hr>

<p class="center"><a href="#sidtop" title="Till toppen av denna sida">Till toppen</a></p>


<div class="center">

</div>

</div> <!-- / maincontent -->
</div> <!-- / main -->

<?php include 'sidebox.php'; ?>

<?php include 'footer.php'; ?>

</body>
</html>
=======

	$image = ""; // vilken bild ska visas nu?
	if (!file_exists("POTD.txt")) 
	{
		list($image) = getimgs("POTD_images"); // tar första bilden
		$handle = fopen("POTD.txt", "w");
		fwrite($handle, date("d") . "\r\n" . $image);
		fclose($handle);
	} 
	else 
	{
		list($day, $fimage) = file("POTD.txt");
		$day = rtrim($day);
		if ($day == date("d")) 
		{ //om dagen inte har ändrats, ha kvar samma bild som förut
			$image = $fimage;
		}
		else 
		{ // Ändra bara bild om dagen i filen inte är samma.
				// om det inte är samma, ta en ny bild och skriv till filen.
				// är bilden i potd.txt giltig? isf ta nästa bild i mappen.
			$valid_images = getimgs("POTD_images");
			
			if (($pos = array_search($fimage, $valid_images)) !== FALSE) 
			{
				// jorå, finns med i listan
				if ($pos >= count($valid_images) - 1)
				$image = $valid_images[0];
				else
				$image = $valid_images[$pos + 1];
			}	
			else
				$image = $valid_images(mt_rand(0, count($valid_images) - 1));
		$handle = fopen("POTD.txt", "w");
		
		fwrite($handle, date("d") . "\r\n" . $image);
		fclose($handle);
		}
	}
	echo "<img src=\"$image\" alt=\"$image\">";
?>
			
			
            
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		$(function () {
			var links = $('.sidebar-links > a');
			links.on('click', function () {
				links.removeClass('selected');
				$(this).addClass('selected');
			})
		});
	</script>
  </body>
</html>
>>>>>>> bb9c83fd3821ca3ab6abf28d10d099d7fda0d87d
