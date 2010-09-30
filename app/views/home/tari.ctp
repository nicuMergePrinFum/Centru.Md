<?php echo $title_for_layout ?>
<br><br>
<div style="float:left; width:15em;">
<?php
	$cur_country = 0;
	foreach($c AS $name=>$v) :
	// The number of voting sections in the specific country
	if (strpos($name,"_total")):
		continue;
	endif;
	// We need two columns for the countries
	if ($cur_country++ == 15):
?>
	</div>
	<div style="float:left; width:15em;">
<?php endif; ?>
<?php echo $html->link($name, array('controller'=>'home','action' => 'tara', $name) ) ?><br>
<?php endforeach; ?>
</div>