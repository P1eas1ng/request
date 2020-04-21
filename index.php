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
?>
