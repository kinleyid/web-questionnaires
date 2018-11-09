<?php
$Data = $_SERVER['QUERY STRING'];

$dataFile = fopen("Data/".$_POST['pID'].$_POST['questionnaire'].uniqid().".txt", "w") or die("Unable to open file!");

foreach ($_POST as $key => $value) {
    fwrite($dataFile, $key.': '.$value);
    fwrite($dataFile, "\n");
}

fclose($dataFile);

echo "<script>window.location.href = 'home.html" . $pID . "'</script>";

?>