<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="sv">
<head>
   <meta http-equiv="content-language" content="sv">
   <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
   <title>invalidoz.com - .:: Picture of the Day ::.</title>
   <meta http-equiv="Content-Script-Type" content="text/javascript">
   <meta http-equiv="content-style-type" content="text/css">
   <meta name="keywords" content="invalidoz, invalidoz.com, Potd, Picture of the day, Dagens bild">
    <meta name="description" content="..:: Dagens Bild ::..">
    <meta name="author" content="DJ_ROV">
    <meta name="copyright" content="invalidoz.com">
    <meta http-equiv="imagetoolbar" content="no">
	<link rel="stylesheet" href="css/stilmall.css" type="text/css">
    <link rel="shortcut icon" href="http://invalidoz.com/favicon.ico">
    <link rel="stylesheet" href="css/relatedpoststyle.css" type="text/css">

</head>
<body>

<div><a id="sidtop" title="Ankare - Sidans Top"></a></div>

<?php include 'header.php'; ?>

</div> <!-- / sidhuvud -->

<div id="kolumncontainer">
<a id="start" href="#start" title="Ankare - Sidans innehåll"></a> <!-- href behövs för IE-ankar-bug -->

<div id="main">
<div id="maincontent">
<h2 class="cleartopmargin">
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
