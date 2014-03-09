<!DOCTYPE html>
<html class='no-js' lang='<?php echo $lang?>'>
<head>
	<meta charset="UTF-8" />
	<title><?php echo get_title($title)?></title>
	<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?php echo $favicon?>'/><?php endif; ?>
	
	<?php
	#Include google fonts
	$gfont_string = "";
	if ( isset($gfonts) ) {
		for ($i = 0; $i < count($gfonts); $i++ ) {
			$gfont_string .= $gfonts[$i].'|';
		}
		if ($gfont_string != "") { ?>
		<link href='http://fonts.googleapis.com/css?family=<?php echo $gfont_string ?>' rel='stylesheet' type='text/css'>
		<?php
		}
	}
	?>
	
	<?php 
	# Include stylesheets
	foreach($stylesheets as $val): ?>
	<link rel='stylesheet' type='text/css' href='<?php echo $val?>'/>
	<?php endforeach; ?>
	<?php 
	# Include javascripts labelled "top"
	if(isset($javascript_include)): foreach($javascript_include as $val): ?>
		<?php if ($val[1] == 'top') { ?>
			<script src='<?php echo $val[0]?>'></script>
		<?php } ?>
	<?php endforeach; endif; ?>
</head>
<body <?php if (!empty($kodex['slug'])) { echo 'class="'.$kodex['slug'].'"';}?>>
  <div id='wrapper'>
	<?php if (!empty($header)) {?>
    <div id='header'><?php echo $header?></div>
	<?php } ?>
	
	<?php if (!empty($navigation)) {?>
    <div id='nav'><?php echo $navigation?></div>
	<?php } ?>

    <div id='main'><?php echo $main?></div>
	
	<?php if (!empty($footer)) {?>
    <div id='footer'><?php echo $footer?></div>
	<?php } ?>
  </div>

<?php
	# Include javscripts labelled "bottom"
	if(isset($javascript_include)): foreach($javascript_include as $val): ?>
	<?php if ($val[1] == 'bottom') { ?>
		<script src='<?php echo $val[0]?>'></script>
	<?php } ?>
<?php endforeach; endif; ?>

<?php if(isset($google_analytics)): ?>
<script>
  var _gaq=[['_setAccount','<?php echo $google_analytics?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>
<?php
$path = "";
$file = 'hello.php';
?>


</body>
</html>
