<?php function auto_copyright($year = 'auto')
{?>
   <?php if (intval($year) == 'auto') {$year = date('Y');}?>
   <?php if (intval($year) == date('Y')) {echo intval($year);}?>
   <?php if (intval($year) < date('Y')) {echo intval($year) . ' - ' . date('Y');}?>
   <?php if (intval($year) > date('Y')) {echo date('Y');}?>
<?php }?>

&copy; <?php auto_copyright(); // 2011?>
<br>
&copy;<?php auto_copyright("2010"); // 2010 - 2017 ?>