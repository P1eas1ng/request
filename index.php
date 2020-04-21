<?php 
if(isset($_GET['echo'])) {
echo '<title>'.$_GET['echo'].'</title>';
echo $_GET['echo'];
}
if(isset($_GET['download'])) {
$file = $_GET['download'];
$remoteURL = $file;
header("Content-type: application/x-file-to-save"); 
header("Content-Disposition: attachment; filename=".basename($remoteURL));
ob_end_clean();
readfile($remoteURL);
exit;
}
if(isset($_GET['save'])) {
  $txt = $_GET['save'];
  $myfile = fopen("file.txt", "w");
  fwrite($myfile, $txt);
  fclose($myfile);
  $remoteURL = 'https://request-kama.herokuapp.com/file.txt';
  header("Content-type: application/x-file-to-save"); 
  header("Content-Disposition: attachment; filename=".basename($remoteURL));
  ob_end_clean();
  readfile($remoteURL);
  exit;
}
?>
