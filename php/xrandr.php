<body>
  <center>
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
<input type="text" name="tres" /></h2><br><br>
<input  type="submit" name="submit" value="Generate!">
</form>
</center>
 </body>

<?php
$dpl=$_GET['disp'];
$cres=$_GET['curres'];
$tgt=$_GET['tres'];
$cwd = floatval(strtok($cres, 'x'));
$twd = floatval(strtok($tgt, 'x'));
$rscale = number_format(($twd/$cwd), 2);

echo "xrandr --output $dpl --panning $tgt --scale $rscale";
?>
