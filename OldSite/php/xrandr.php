<html>
<head>
  <title>XRandR Generator</title>
  <link rel="stylesheet" href="xrstyle.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
  <style>
  input[type=submit]{
  background-color: #ff3e00;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
  </style>
</head>

<body bgcolor="#0f0f0f" text="#fff">
  <font face='Ubuntu'>
  <center>
    <img src="xorg.png" width="64px">
  <h1>XRandR Command Generator</h1>
<form>
<h2>Step 1: Enter connected display port:
  Open the terminal and run the xrandr command.</h2>
<img src = "step1.png">
<br><h2>
Now pick the display that is marked as "connected."
<input type="text" name="disp" /></h2><br><br>
<h2>Step 2: Enter the current resolution (widthxheight, e.g. 1366x768):
<input type="text" name="curres" /></h2><br><br>
<h2>Step 3: Enter the target resolution (widthxheight, e.g. 1366x768):
<input type="text" name="tres" /></h2>
<input  type="submit" name="submit" value="Generate!">
</form>
</center>
</font>
 </body>

<?php
$dpl=$_GET['disp'];
$cres=$_GET['curres'];
$tgt=$_GET['tres'];
$cwd = floatval(strtok($cres, 'x'));
$twd = floatval(strtok($tgt, 'x'));
$rscale = number_format(($twd/$cwd), 2);

echo "<center><h3>xrandr --output $dpl --panning $tgt --scale $rscale</h3></center>";
?>
